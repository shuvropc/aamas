<?php

namespace App\Http\Controllers;

use App\Feature_product;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $newProducts = Product::orderBy('id', 'desc')->limit(4)->get();
        $featureProduct=DB::table('products')
            ->select(
                'products.*'
            )
            ->join(
                'feature_products',
                'feature_products.product_id','=','products.id'
            )
            ->limit(4)
            ->get();

        return view('index', ['newProducts' => $newProducts])
            ->with('feature_products',$featureProduct)
            ->with('sliders',Slider::all());
    }

    function searchProduct(Request $request){

        $product = Product::Where('product_name', 'like', '%' . $request->val . '%')->get();

        return $product;
    }

}
