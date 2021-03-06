<?php

namespace App\Http\Controllers;
use App\Product;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::all();
        //$products = DB::table('products')->get();
        //return $products;
        //dd($products);
        return view('products.index')->with([
            'products'=>Product::all(),
        ]);
    }

    public function create()
    {
        return view('products.create');
        
    }

    public function store()
    {
       dd('Estamos en store');
    }
    public function show($product)
    {
        //$product = DB::table('products')->where('id', $product)->first();
        //$product = DB::table('products')->find($product);
        //$product = Product::find($product);
        $product = Product::findOrFail($product);
        //return ($product);
        //dd($product);
        return view('products.show')->with([
            'product' => $product,
        ]);
       
    }

    public function edit($product)
    {
        return "Showing the form to edit products with id {$product}";
    }

    public function update()
    {
       //
    }
    public function destroy($product)
    {
       //
    }
    
}
