<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shopping_Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\{User, Product};
class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('viewscustomer.shoppingcart', ['cartCollection' => $cartCollection]);
        
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
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                    'image' => $request->img
                )
       
    


            
        ));
        return redirect()->route('shoppingcart')->with('success_msg', 'Item Agregado a su Carrito!');

    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('shoppingcart')->with('success_msg', 'Item is removed!');
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
        \Cart::update($request->id,
        array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
         ));
        return redirect()->route('shoppingcart')->with('success_msg', 'Cart is Updated!');

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
    public function clear(){
        \Cart::clear();
        return redirect()->route('shoppingcart')->with('success_msg', 'Car is cleared!');
    }

}
