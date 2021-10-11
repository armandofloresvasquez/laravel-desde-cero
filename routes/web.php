<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('products', function () {
    return 'This is the list of Products';
})->name('products.index');

Route::get('products/create', function () {
    return 'This is the form to create a Products';
})->name('products.create');

Route::post('products', function () {
    //return 'This is the list of Products';
})->name('products.store');

Route::get('products/{products}', function ($product) {
    return "Showing products with id {$product}";
})->name('products.show');

Route::get('products/{products}/edit', function ($product) {
    return "Showing the form to edit products with id {$product}";
})->name('products.edit');

Route::match(['put','patch'],'products/{products}', function ($product) {
    //
})->name('products.update');

Route::delete('products/{products}', function ($product) {
    //
})->name('products.destroy');



