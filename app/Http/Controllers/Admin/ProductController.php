<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Barryvdh\DomPDF\Facade as PDF;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $products = Product::all();
        return view('viewsadmin.products.index', ['products' => $products]);
        
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
        
        if ($request->hasFile('url_img') && $request->file('url_img')->isValid()) 
        {
            $file = $request->file('url_img');
            $filename = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
            $fileroute = 'assetscustomer/imgmenu/'. $filename;


            $file->move(public_path('assetscustomer/imgmenu/'), $filename);
            $input['url_img'] = $fileroute;
            
        }

        Product::create($input);
        return redirect('product');
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
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('product');
    }

    public function delete($id)
    {
        //
    }

    public function ReporteInduccion()
    {
        //$user = User::all();
        $pdf = \PDF::loadView('reports.induccion');
        
        //$pdf->setPaper(array(0,0,580.00,800.00),'landscape');

        $pdf_name = 'induccion.pdf';
         return $pdf->stream($pdf_name);
        //return $pdf->download($pdf_name);
       //return view ('reports.induccion');
    }
}
