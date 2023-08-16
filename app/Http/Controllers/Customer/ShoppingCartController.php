<?php

namespace App\Http\Controllers\Customer;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User, Product, Shopping_Cart, Orders, Product_Orders, Company};
use Barryvdh\DomPDF\Facade as PDF;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $cart = $user->shoppingCarts->load('product');
        return view('viewscustomer.shoppingcart', ['cart' => $cart]);
        
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_id = $request->input('id_product');
        $product_qty = $request->input('product_qty');

        $prod_check = Product::where('id', $product_id)->first();
        if($prod_check)
        {
            if(Shopping_Cart::where('id_product', $product_id)->where('id_customer', Auth::id())->exists())
            {
                return response()->json(['flash_message'=> 'Check!']);
            }
            else
            {
                $cartItem = new Shopping_Cart();
                $cartItem->quantity = $product_qty;
                $cartItem->id_customer = Auth::id();
                $cartItem->id_product = $product_id;
                $cartItem->save();
                return response()->json(['flash_message'=> 'AddedCart!']);

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deleteProduct(Request $request)
    {
        $id_product = $request->input('id_product');
       
        
        if (Shopping_Cart::where('id_product', $id_product)->where('id_customer', Auth::id())->exists()) 
        {
            // Elimina el producto específico del carrito
            $cartItem = Shopping_Cart::where('id_product', $id_product)->where('id_customer', Auth::id())->first();
            $cartItem -> delete();
             // Obtener al usuario autenticado
            $user = Auth::user();
            // Calcular el nuevo total
            $Total = $user->shoppingCarts->sum(function($carts) {
                return $carts->product->price * $carts->quantity;
            });

            // Formatear el nuevo total
            $newTotal = number_format($Total, 2);

            return response()->json(['flash_message' => 'DeleteProduct!', 'newTotal' => $newTotal]);
        }
            
    }

    public function updateSubtotal(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('value');
        // Obtener el producto por su ID
        $product = Product::find($productId);
        if ($product) {
            $subtotal = $product->price * $quantity;
        }
        $cart = Shopping_Cart::where('id_customer', Auth::user()->id)->where('id_product',$productId)->first();
        $cart->update(['quantity'=> $quantity]);
        $cartItems = Shopping_Cart::where('id_customer', Auth::user()->id)->get();
        $newTotal = 0;
        foreach ($cartItems as $cartItem) {
             $price = $cartItem->product->price;
                $newTotal += $cartItem->quantity * $price;
        }
        // Devolver el nuevo total como respuesta JSON
        return response()->json([
            'total' => $newTotal,
            'subtotal' => $subtotal
        ]);
    }

    

    

    public function createOrder(Request $request){
        // Obtener datos del formulario
        $deliveryType = $request->input('delivery_type');
        $prodQ = $request->input('prodQ');
        
        // Obtener el carrito del usuario autenticado
        $user = Auth::user();
        $cart = $user->shoppingCarts;
        
        if ($cart->count() > 0) {
            $order = new Orders();
            $order->delivery_type = $deliveryType;
            $order->id_customer = $user->id;
            $order->status_pay = 'pendiente';
            $order->save();
    
            foreach ($prodQ as $productQty) {
                $productOrder = new Product_Orders();
                $productOrder->id_product = $productQty['product_id'];
                $productOrder->id_order = $order->id;
                $productOrder->quantity = $productQty['input_qty'];
                $productOrder->save();
            }
        } else {
            return response()->json(['status' => 'Denied!']);
        }
    
        // Limpiar el carrito después de crear el pedido
        $user->shoppingCarts()->delete();
        
        $reportUrl = route("reports.invoiceOrder", ['id_order' => $order->id]);
    
        return response()->json(['status' => 'Created!', 'id_order' => $order->id, 'report_url' => $reportUrl]);
    }
    

    public function ReportInvoice()
    {   
        $invoice = Orders::with(['product','user'])
                        ->where('id_customer', Auth::id())
                        ->latest()
                        ->first();
        $company = Company::first();
        //$user = User::all();
        $pdf = \PDF::loadView('reports.invoiceOrder', compact('invoice','company'));
        
        //$pdf->setPaper(array(0,0,580.00,800.00),'landscape');

        $pdf_name = 'Reporte.pdf';
         return $pdf->stream($pdf_name);
        //return $pdf->download($pdf_name);
       //return view ('reports.induccion');
    }

   
}