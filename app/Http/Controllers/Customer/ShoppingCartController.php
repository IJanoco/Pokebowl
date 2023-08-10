<?php

namespace App\Http\Controllers\Customer;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User, Product, Shopping_Cart};

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

}
