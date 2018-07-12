<?php

namespace App\Http\Controllers;
use App\Product;
use App\Feature_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin/admin');
    }

    function product(){

        $products = DB::select("SELECT products.*,feature_products.product_id FROM `products` 
                LEFT JOIN feature_products ON products.id = feature_products.product_id ");

        return view('admin/product', ['products'=>$products]);
    }

    function addOrRemoveFeaturedProduct(Request $request){


        $product=Feature_product::where('product_id','=',$request->pid)->first();

        if($product){
            $product->delete();
        }else{
            $pro = new Feature_product();
            $pro->product_id=$request->pid;
            $pro->save();
        }
    }


}
