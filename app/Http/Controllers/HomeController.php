<?php

namespace App\Http\Controllers;

use App\Feature_product;
use App\Product;
use App\Slider;
use App\Order;
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

        $bestSelling = Order::with('products')
            ->select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->orderBy('product_id', 'DESC')
            ->get();

    // return $bestSelling;

        return view('index', ['newProducts' => $newProducts])
            ->with('feature_products',$featureProduct)
            ->with('sliders',Slider::all())
            ->with('bestSelling', $bestSelling);
    }

    function searchProduct(Request $request){

        $product = Product::Where('product_name', 'like', '%' . $request->val . '%')->get();

        return $product;
    }

    public function searchCategory(Request $request){
        $products='';
        if($request->category=='All'){
            $products = Product::orderBy('id', 'desc')->limit(4)->get();
        }
       else {

           $products = DB::select("
                               SELECT products.*, categories.category_name
                                FROM   `products`
                                INNER JOIN `categories`
                                ON products.category_id = categories.id
                                WHERE  categories.category_name = '$request->category'
                                ORDER BY products.id desc 
                            ");
       }
        return $products;
    }


}
