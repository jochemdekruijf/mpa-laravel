<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validate;
use App\Product;

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

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer',
            'product_img' => '',
            'category_id' => 'integer'
          ]);

          $product = new Product([
            'product_name' => $request->get('product_name'),
            'product_price'=> $request->get('product_price'),
            'product_qty'=> $request->get('product_qty'),
            'product_img' => $request->get('product_img'),
            'category_id' => $request->get('category_id')
          ]);

          $product->save();
          return redirect('/products')->with('success', 'Stock has been added');
    
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
        $product = Product::find($id);

        return view('products.edit', compact('product'));
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
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer',
            'product_img' => '',
            'category_id' => ''
          ]);
    
          $product = Product::find($id);
          $product->product_name = $request->get('product_name');
          $product->product_price = $request->get('product_price');
          $product->product_qty = $request->get('product_qty');
          $product->product_img = $request->get('product_img');
          $product->category_id = $request->get('category_id');
          $product->save();
    
          return redirect('/products')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
   
        return redirect('/products')->with('success', 'Stock has been deleted Successfully');
    }
}
