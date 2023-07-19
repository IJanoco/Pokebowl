<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type_Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeproducts = Type_Product::all();
        return view('viewsadmin.typeProducts.index', ['typeproducts' => $typeproducts]);
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
        $input = $request->all();
        
        Type_Product::create($input);
        return redirect('typeproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Type_Product $type_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_Product $type_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $typeproducts = Type_Product::find($id);
        $input = $request->all();
        $typeproducts->update($input);
        return redirect('typeproduct'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_Product  $type_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeproducts = Type_Product::find($id);
        $typeproducts->delete();
        return redirect('typeproduct');
    }
}
