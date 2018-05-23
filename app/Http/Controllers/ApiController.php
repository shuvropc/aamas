<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Vendor;


class ApiController extends Controller
{
    //



    public function index(){
        return response()->json(['connection' => 'OK', 'code' => '200']);
    }

    public function getAllProducts(){


        $product = new Product();
        return response()->json($product->products() ,200, array(), JSON_PRETTY_PRINT);
    }

    public function getProduct($id){
        $product = new Product();
        return response()->json($product->product($id) ,200, array(), JSON_PRETTY_PRINT);
    }


}
