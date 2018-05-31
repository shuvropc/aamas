<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function register(){
        return view('vendor.register');
    }

    public function registerVendor(Request $request){

            $vendor = new Vendor();

            $vendor->name=$request->input('name');
            $vendor->vendor_name=$request->input('vendorname');
            $vendor->contact_number=$request->input('phonenumber');
            $vendor->email=$request->input('email');
            $vendor->password=Hash::make($request->input('password'));
            $vendor->website=$request->input('website');
            $vendor->address=$request->input('address');
            $vendor->country=$request->input('country');
            $vendor->zipcode=$request->input('zipcode');
            $vendor->company_reg_number=$request->input('regnumber');




            //File Upload Code Start
            $file = $request->file('vendorlogo');
            $file_name = str_random(30).$request->input('email'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/vendor/logo'), $file_name);
            //File Upload Code End




            $vendor->logo_image='/public/uploads/vendor/logo/'.$file_name;
            $vendor->product_types=$request->input('producttype');
           
           
            $vendor->save();
    }

    public function vendorLogin(){
        return view('vendor.login');
    }

    public function login(Request $request){



        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);


        $email=$request->input('email');
        $password=$request->input('password');


        $vendorDb = Vendor::where([
            ['email', '=', $email]
        ])->first();

        if($vendorDb){
            if(Hash::check($password,  $vendorDb->password)) {
                $vendorDb->password=null;
                session(['vendor' => $vendorDb]);
                return "Email  ".$request->session()->get('vendor.email')."  Logged in";
            }else{
                return view('vendor.login',["errorMessage"=>"Email or Password doesn't match"]);
            }
        }else{
            return view('vendor.login');
        }




    }

    public function edit(Request $request){
        $vendor=Vendor::find($request->session()->get('vendor.id'));
        return view('vendor.edit',['vendor'=>$vendor]);
    }

    public function update(Request $request){

        $this->validate($request,[
            'name'          => 'required',
            'vendorname'    => 'required',
            'phonenumber'   => 'required',
            'website'       => 'required',
            'address'       => 'required',
            'zipcode'       => 'required',
            'regnumber'     => 'required',
            'producttype'   => 'required'

        ]);

        $vendor=Vendor::find($request->session()->get('vendor.id'));

        if($vendor) {
            $vendor->name = $request->input('name');
            $vendor->vendor_name = $request->input('vendorname');
            $vendor->contact_number = $request->input('phonenumber');
            $vendor->website = $request->input('website');
            $vendor->address = $request->input('address');
            $vendor->country = $request->input('country');
            $vendor->zipcode = $request->input('zipcode');
            $vendor->company_reg_number = $request->input('regnumber');


            $vendor->product_types = $request->input('producttype');


            $vendor->save();
        }else{
            return "id not found";
        }

    }

    public function changePassword(){
        return view('vendor.passwordChange');
    }


    public function updatePassword(Request $request){

        $this->validate($request,[
            'oldPassword'   =>'required',
            'NewPassword'   =>'required',
            'conPassword'   =>'required|same:NewPassword'
        ]);



        $vendor=Vendor::find($request->session()->get('vendor.id'));

        if (Hash::check($request->input('oldPassword'),  $vendor->password)) {
            $vendor->password = Hash::make($request->input('NewPassword'));
            $vendor->save();
            return "Password Changed Successfully";
        }else{
            $message = "Old password is not correct";
            return view('vendor.passwordChange', ['message' => $message]);
        }


    }

    public function addProduct(){

        $categories = new Category();


        return view('vendor/AddProduct')->with("categories", $categories->get());
    }

    public function addNewProduct(Request $request){
        $product = new Product();

        $product->product_name = $request->input("product_name");
        $product->product_description = $request->input("product_description");
        $product->buying_price = $request->input("buying_price");
        $product->selling_price = $request->input("selling_price");
        $product->discount = $request->input("discount");
        $product->image1 = $request->input("image");
        $product->available = $request->input("radio");
        $product->category_id = "1";
        $product->vendor_id = "1";
        $product->details_id = "1";

        $product->save();

        return redirect('vendor/addproduct');
    }

    public function addCategory($name = null ){

        $category = new Category();

        $category->category_name = $name;
        $category->sub_category = "";

        $category->save();
    }

    function orders(){
        return view('vendor/ProductOrders');
    }


    public function logOut(Request $request){
        $request->session()->forget('vendor');
        return "Vendor Logged out ";
    }
}
