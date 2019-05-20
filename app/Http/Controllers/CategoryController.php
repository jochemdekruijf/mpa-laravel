<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use validate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'category_name'=>'required',
            'category_img'=> ''
          ]);

          $category = new Category([
            'category_name' => $request->get('category_name'),
            'category_img'=> $request->get('category_img')

          ]);

          $category->save();
          return redirect('/categories')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    //Category $category
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    //Category $category
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'=>'required',
            'category_img'=> ''
          ]);
           $category = Category::find($id); 
           $category->category_name = $request->get('category_name');
           $category->category_img = $request->get('category_img');

          $category->save();
          return redirect('/categories')->with('success', 'Stock has been added');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    //Category $category,
    public function destroy( $id)
    {
        $category = Category::find($id);
        $category->delete();
   
        return redirect('/categories')->with('success', 'Stock has been deleted Successfully');
    }
}
