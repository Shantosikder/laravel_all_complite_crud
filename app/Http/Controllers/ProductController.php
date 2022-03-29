<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product = Product::all(); //->sortDesc() sorted korar jonno
        return view('Product.index', compact('Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
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
            'name'=> 'required | max:10 | min:5',
            'details'=> 'required',
            'photo'=> 'required | image | mimes:jpeg,png,jpg | max:2048',
        ]);
        $imageName = time().'.'.$request->photo->extension();

        $product = new product;
        $product->name = $request->name;
        $product->detail = $request->details;
        $product->photo = $imageName;
        $product->save();
        $request->photo->move(public_path('images'),$imageName);
        return redirect()->route('products.index')->with('success','Save Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product')); //edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->detail = $request->details;
        $product->update();
        return redirect()->route('products.index')->with('success','Updated Successful');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
    $product->delete();
    return redirect()->route('products.index')->with('success','Deleted Successful');
    }
}
