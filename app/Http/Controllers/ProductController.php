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
        $products = Product::latest()->paginate(3);
        return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * show the form for creating a new resource
     */

    public function create() {
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
        //validate
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
        // create a new product in the database
        Product::create($request->all());

        // redirect and send a friendly message
        return redirect()->route('products.index')->with('success', 'Product created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // validate
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $product->update($request->all());

        // return and redirect
        return redirect()->route('products.index')->with('success', 'Product Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product Deleted succesfully');
    }
}
