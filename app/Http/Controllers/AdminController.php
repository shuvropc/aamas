<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Product;
use App\Detail;
use App\Feature_product;
use App\Slider;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use File;


class AdminController extends Controller
{
    function getRegistration(){
        return view('admin.addAdmin');
    }

    function postRegistration(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');


        $this
            ->validate($request,[
                'name'       =>'required',
                'email'      =>'required|email|unique:admins,email',
                'password'   =>'required|min:5|max:15',
                'cnpassword' =>'required|min:5|max:15|same:password'
            ],
                [
                    'name.required'         => 'Please provide name',
                    'email.required'        => 'You must Provide an email address',
                    'email.email'           => 'You must Provide an email address',
                    'email.unique'          => 'This email already exist ',
                    'password.required'     => 'Please provide your Password',
                    'cnpassword.required'   => 'Please provide your Password again',
                    'cnpassword.same'       => 'Password and confirm password does not match',
                ]);

        $admin=new Admin();

        $admin->name        =$name;
        $admin->email       =$email;
        $admin->password    =Hash::make($password);
        if($admin->save()){
            return redirect()->route('admin.login');
        }else{
            return 'There is a problem to add';
        }


    }

    public function postUpdate(Request $request){
        $admin=Admin::find($request->aid);
        if($admin){
            $admin->name=$request->aname;
            $admin->email=$request->aemail;
            $admin->phone=$request->acontact;
            $admin->permanent_address=$request->apermanent;
            $admin->present_address=$request->apresent;

            if($admin->save()){
                return $admin;
            }

        }

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

        $admin=Admin::where('email', $email)->first();

        if($admin){
           // if(Hash::check($password,  $admin->password)){
            if($password ==  $admin->password){
                $admin->password=null;
                session(['admin'=>$admin]);
                return redirect()->route('admin.index');
            }else{
                return view('admin.login',["errorMessage"=>"Email or Password doesn't match"]);
            }
        }else{
            return view('admin.login',["errorMessage"=>"Email or Password doesn't match"]);
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
                ->paginate(5);

        }

        return view('admin/allProduct', ['products'=>$products]);
    }
    public function showFeatureProduct(){
        $product= DB::table('products')
            ->select('products.*')
            ->join('feature_products', 'feature_products.product_id', '=' , 'products.id')
            ->get();
        return view('admin.feature_product')
            ->with('products', $product);
    }

    public function deleteFeatured(Request $request){

        $featured=Feature_product::where('product_id','=',$request->fid)->first();

        $featured->delete();


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

    function search(Request $request){

        $product = DB::table('products')
            ->leftJoin('feature_products', 'products.id', '=', 'feature_products.product_id')
            ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
            ->select('products.*', 'feature_products.product_id', 'vendors.vendor_name', 'vendors.id as vendorId')
            ->where('product_name', 'like', '%' . $request->value . '%')->get();

        return $product;
    }

//    function setNumberInAPage(Request $request){
//
//
//        $products = $users = DB::table('products')
//            ->leftJoin('feature_products', 'products.id', '=', 'feature_products.product_id')
//            ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
//            ->select('products.*', 'feature_products.product_id', 'vendors.vendor_name', 'vendors.id as vendorId')
//            ->limit($request->number)
//            ->get();
//
//        return $products;
//    }

    function sliders(){
        return view('admin.sliders')->with('sliders',Slider::all());
    }

    function getAddSlider(){
            return view('admin.addSlider');
    }

    function postAddSlider(Request $request){
        $slider= new Slider();

        $slider->title=$request->input('title');
        $slider->description=$request->input('description');
        $slider->link=$request->input('link');


        //File Upload Code Start
        $file = $request->file('image');
        $file_name = str_random(30). '.' . $file->getClientOriginalExtension();
        $file->move(public_path('/uploads/aamas/slider'), $file_name);
        //File Upload Code End


        $slider->image='/uploads/aamas/slider/'.$file_name;

        $slider->save();

        return redirect()->route( 'admin.sliders');

    }

    function deleteSlider($id){

        $slider=Slider::find($id);

        if(File::exists($slider->image)) {
            File::delete($slider->image);
        }

        $slider->delete();

        return redirect()->route( 'admin.sliders');
    }


    public function productDetails(Request $request, $id){
        $product= Product::find($id);
        $details=Detail::where('product_id', '=', $id)->get();
        return view('admin.product_details',['product'=>$product] )->with('details', $details);
    }

    public function vendorDetails($id){
        $vendor=Vendor::find($id);
        //return $product;
        return view('admin.vendor_details')->with('vendor',$vendor);
    }
    function profile(Request $request){
        $admin=Admin::find($request->session()->get('admin.id'));
        //return $admin;

        return view('admin.profile')->with('admin',$admin);
    }

    public function disableList(){
        $vendor=Vendor::where('status','=','0')->get();
        return view('admin.disableList')
            ->with('vendors',$vendor);
    }

    public function updatePhoto(Request $request){

        $admin=Admin::find($request->aid);
        if($admin) {

            $file = $request->aphoto;
            //return $file;
            $file_name = str_random(30) . sha1(time()) . '.' . $file->getClientOriginalExtension();
           // return $file_name;
            $file->move(public_path('/uploads/admin'), $file_name);
            $admin->image = 'uploads/admin/' . $file;
            if ($admin->save()) {
                return $admin;
            }
        }
    }
    function logout(){
        session()->forget('admin');
        return redirect()->route('admin.login');
    }


}



