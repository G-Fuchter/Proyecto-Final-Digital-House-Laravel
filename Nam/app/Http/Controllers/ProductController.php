<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products/index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->roll !== 'admin') {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }
        
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->roll !== 'admin') {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'imageurl' => 'required',
            'price' => 'required',
        ]);

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->imageurl = $request->input('imageurl');
        $product->price = $request->input('price');
        $product->save();
        
        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products/show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->roll !== 'admin') {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        $product = Product::find($id);
        return view('products/edit')->with('product', $product);
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
        if (auth()->user()->roll !== 'admin') {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'imageurl' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->imageurl = $request->input('imageurl');
        $product->price = $request->input('price');
        $product->save();
        
        return redirect('/products')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->roll !== 'admin') {
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Product Removed');
    }
}
