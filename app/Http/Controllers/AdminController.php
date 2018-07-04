<?php

namespace App\Http\Controllers;
use App\Product;
use App\Feature_product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin/admin');
    }

    function product(){
        $products = Product::all();
        return view('admin/product', ['products'=>$products]);
    }





}
