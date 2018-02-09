<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }
 
    public function show(Product $product)
    {
        return $product;
    }
 
    public function store(Request $request)
    {
        
        $product = Product::create($request->all());
 
        return response()->json($product, 201);
    }
 
    public function update(Request $request, $id)
    {

    	$product = Product::findOrFail($id);

        $product->update($request->all());
 
        return response()->json($product, 200);
    }
 
    public function delete(Product $id)
    {
        $product = Product::findOrFail($id);
        
        $product->delete();
 
        return response()->json(null, 204);
    }
}
