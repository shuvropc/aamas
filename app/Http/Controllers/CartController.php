<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function cart(){
        return view('cart')->with('carts', Cart::content())->with('count', Cart::count())->with('cart_total', Cart::subtotal());
    }

    function carts(){

        $product_id=array();
        foreach(Cart::content() as $row){
            array_push($product_id,$row->id);
        }

//        return $product_id;

        $products=Product::whereIn('id', ['1','2'])
            ->get();

        return $products;


    }
}
