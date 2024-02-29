<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $product = Product::latest()->paginate(3);
    return view('products.index',compact('product'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'products.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the inpute : 
        $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
        // create a new product : 
        Product::create($request->all());
        // redirect and sucesse message : 
        return redirect()->route('products.index')->with('success','product was added with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return  view('products.edite', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
         //validate the inpute : 
         $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
        // create a new product : 
        $product->update($request->all());
        // redirect and sucesse message : 
        return redirect()->route('products.index')->with('success','product was updated with success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        

    }
}
