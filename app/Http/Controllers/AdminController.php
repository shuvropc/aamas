<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Product;
use App\Feature_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function getRegistration(){
        return view('admin.addAdmin');
    }

    function postRegistration(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $conPass=$request->input('cnpassword');

        $this
            ->validate($request,[
                'name' =>'required'
            ]);

        $admin=Admin();
    }

    function getLogin(){
        return view('admin.login');
    }
    function postLogin(Request $request){


        $this->validate($request,[
            'email'=>'required|email|',
            'password'=>'required|min:5|max:15'
        ]);

        $email=$request->input('email');
        $password=$request->input('password');

        $admin=Admin::where('email', $email)
            ->where('password', $password)
            ->first();

        if($admin){
            if($admin->password==$password){
                session(['admin'=>$admin]);
                return view('admin.index');
            }else{
                return 'Email or Password is wrong';
            }
        }else{
            return 'Email or Password is wrong';
        }

    }
    function index(){
        return view('admin.index');
    }

    function product(Request $request){


        if ($request->isMethod('post'))
        {
            $product_name=$request->input('search-by-name');

            $products = DB::select("
                                        SELECT products.*,
                                        feature_products.product_id,
                                        vendors.vendor_name,
                                        vendors.id AS vendorId
                                        FROM   `products`
                                        LEFT JOIN feature_products
                                        ON products.id = feature_products.product_id
                                        INNER JOIN vendors
                                        ON products.vendor_id = vendors.id
                                        WHERE  products.product_name LIKE '%{$product_name}%'  
                                    ");


        }else if($request->isMethod('get')){

            $products = DB::table('products')
                ->leftJoin('feature_products', 'products.id', '=', 'feature_products.product_id')
                ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
                ->select('products.*', 'feature_products.product_id', 'vendors.vendor_name', 'vendors.id as vendorId')
                ->paginate(4);

        }

        return view('admin/allProduct', ['products'=>$products]);
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

    function searchByAnything(Request $request){

        $product = Product::where('id','=', $request->value )
            ->orWhere('product_name', 'like', $request->value .'%')
            ->orWhere('brand', 'like', $request->value .'%')->get();
        return $product;
    }

    function setNumberInAPage(Request $request){


        $products = $users = DB::table('products')
            ->leftJoin('feature_products', 'products.id', '=', 'feature_products.product_id')
            ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
            ->select('products.*', 'feature_products.product_id', 'vendors.vendor_name', 'vendors.id as vendorId')
            ->paginate($request->number);

        return $products;
//        return $request->number;
    }


}
