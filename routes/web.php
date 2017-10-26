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


//To list all the products in the table

Route::get('productajaxCRUD', 'ProductsController@product_listing');


// To select one product using its product id

Route::get('productajaxCRUD/{product_id?}', 'ProductsController@find_product');


// To create a new product by posting all the data we got from the form

Route::post('productajaxCRUD', 'ProductsController@create_product');


//To update the details of already created product

Route::put('productajaxCRUD/{product_id?}', 'ProductsController@update_product');


//To delete the products which are already added

Route::delete('productajaxCRUD/{product_id?}', 'ProductsController@delete_product');

