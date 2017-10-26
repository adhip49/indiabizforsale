<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{

    //To list all the products from table
    public static function product_listing(){

        $products = Products::all();
        return view('ajax.index')->with('products',$products);

    }

    //To find the details of a products
    public static function find_product($product_id){

        $product = Products::find($product_id);
        return response()->json($product);

    }

    //To create a product
    public static function create_product(Request $request){

        $product = Products::create($request->input());
        return response()->json($product);

    }

    //To update the details of a product already created
    public static function update_product(Request $request,$product_id){

        $product = Products::find($product_id);
        $product->name = $request->name;
        $product->details = $request->details;
        $product->save();
        return response()->json($product);

    }

    //To delete the product created
    public static function delete_product(Request $request,$product_id){

        $product = Products::destroy($product_id);
        return response()->json($product);

    }


}
