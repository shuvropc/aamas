<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $newProducts = Product::orderBy('id', 'desc')->limit(4)->get();
        return view('index', ['newProducts' => $newProducts]);
    }

    function searchProduct(Request $request){

        $product = Product::orWhere('product_name', 'like', '%' . $request->val . '%')->get();

        return $product;
    }

}
