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
            $filename = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $fileroute = 'assetscustomer/imgmenu/'. $filename;


            $file->move(public_path('assetscustomer/imgmenu/'), $filename);
            $input['url_img'] = $fileroute;
            
        }

        Product::create($input);
        return redirect('product')->with('flash_message', 'Added!');
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
    public function edit(Product $item)
    {
        return response()->json($item);
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

        if ($request->hasFile('url_img') && $request->file('url_img')->isValid()) {
            $file = $request->file('url_img');
            $filename = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $fileroute = 'assetscustomer/imgmenu/'. $filename;;
    
            // Delete
            if ($product->url_img != '') {
                $filerouteold = public_path($product->url_img);
                if (file_exists($filerouteold)) {
                    unlink($filerouteold);
                }
            }
            $file->move(public_path('assetscustomer/imgmenu/'), $filename);
            $input['url_img'] = $fileroute;
        } else {
            // Conservar la ruta de la imagen existente si no se carga una nueva imagen
            $input['url_img'] = $product->url_img;
        }

        $product->update($input);
        return redirect('product')->with('flash_message', 'Updated!');
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
        $file = $products->url_img;
        $products->delete();

        if(!empty($file)&& file_exists(public_path($file))){
            unlink(public_path($file));
        }
        return redirect('product')->with('flash_message', 'deleted!');
    }

    public function delete($id)
    {
        //
    }

   
}
