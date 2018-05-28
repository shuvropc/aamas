<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

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
            $vendor->password=$request->input('password');
            $vendor->website=$request->input('website');
            $vendor->website=$request->input('website');
            $vendor->address=$request->input('address');
            $vendor->country=$request->input('country');
            $vendor->zipcode=$request->input('zipcode');



            //File Upload Code Start
            $file = $request->file('vendorlogo');
            $file_name = str_random(30).$request->input('email'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/vendor/logo'), $file_name);
            //File Upload Code End



            $vendor->logo_image='/public/uploads/vendor/logo/'.$file_name;
            $vendor->product_types=$request->input('producttype');
            $vendor->discount=0;
            $vendor->company_reg_number=0;
            $vendor->save();
    }

    public function vendorLogin(){
        return view('vendor.login');
    }

    public function login(Request $request){


       //$vendorDb = Vendor::where('email', '=', $email)->where('password', '=', $password)->first();


        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);

        //return route('vendor.login');
        $email=$request->input('email');
        $password=$request->input('password');
        $vendorDb = Vendor::where([
            ['email', '=', $email],
            ['password', '=', $password]
            ])->first();
        if($vendorDb){
            session(['vendor' => $vendorDb]);
            return "Logged in";

        }else{
            return view('vendor.login');
        }



    }

    function add_product(){
        return view('vendor/AddProduct');
    }

    function orders(){
        return view('vendor/ProductOrders');
    }


    public function logOut(){
        session()->flush();
        return "Logged out ";
    }
}
