<?php

use Illuminate\Http\Request;
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

Route::get('/productajaxCRUD', function () {
    $products = App\Products::all();
    return view('ajax.index')->with('products',$products);
});

Route::get('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Products::find($product_id);
    return response()->json($product);
});
Route::post('productajaxCRUD',function(Request $request){
    $product = App\Products::create($request->input());
    return response()->json($product);
});
Route::put('productajaxCRUD/{product_id?}',function(Request $request,$product_id){
    $product = App\Products::find($product_id);
    $product->name = $request->name;
    $product->details = $request->details;
    $product->save();
    return response()->json($product);
});
Route::delete('productajaxCRUD/{product_id?}',function($product_id){
    $product = App\Products::destroy($product_id);
    return response()->json($product);
});