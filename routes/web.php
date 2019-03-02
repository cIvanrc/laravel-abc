<?php

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
use Illuminate\Http\Request;
use App\Product;

Route::get('products', function(){
   $products = Product::all();
    
   return view("products.index", compact('products'));
})->name('products.index');

Route::get('products/create', function(){
   return view("products.create");
})->name('products.create');

Route::post('products', function(Request $request){
   $product = new Product;
   $product->description = $request->input('description');
   $product->price = $request->input('price');
   $product->save();

   return redirect()->route('products.index')->with('info', 'Producto guardado con exitu');
})->name('products.store');
