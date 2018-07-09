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

}
