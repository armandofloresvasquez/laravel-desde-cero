<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ' This is the list of products from ProductController';
    }

    public function create()
    {
        return ' This is the form to create a products from ProductController';
    }

    public function store()
    {
       //
    }
    public function show($product)
    {
       return "Showing product whit id {$product}";
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