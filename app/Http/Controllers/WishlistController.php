<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist(){


//        $product_id=array();
//
//        foreach(Cart::instance('wishlist')->content() as $row){
//            array_push($product_id,$row->id);
//        }
//
//        $products=Product::whereIn('id',$product_id)->get();



        return view('wishlist');

    }

    public function add(Request $request){

        Cart::instance('wishlist')->add(['id' => $request->pid, 'name' => $request->pname, 'qty' => 1, 'price' => $request->pprice]);

        return "Added To Wishlist";
    }

    public function remove(){
        Cart::remove();
    }

}
