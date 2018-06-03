<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\Product;
use App\Category;
use App\Detail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;

class VendorController extends Controller
{
    public function index(){
        return view('vendor.index');
    }

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
            $vendor->company_reg_number=0;




            //File Upload Code Start
            $file = $request->file('vendorlogo');
            $file_name = str_random(30).$request->input('email'). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/uploads/vendor/logo'), $file_name);
            //File Upload Code End




            $vendor->logo_image='/public/uploads/vendor/logo/'.$file_name;
            $vendor->product_types=$request->input('producttype');
           
           
            $vendor->save();


            return redirect()->route('vendor.login');
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

                return redirect()->route('vendor.index');

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
           


            $vendor->product_types = $request->input('producttype');


            $vendor->save();
        }else{
            return "id not found";
        }


        $vendor->name=$request->input('name');
        $vendor->vendor_name=$request->input('vendorname');
        $vendor->contact_number=$request->input('phonenumber');
        $vendor->website=$request->input('website');
        $vendor->address=$request->input('address');
        $vendor->country=$request->input('country');
        $vendor->zipcode=$request->input('zipcode');
        
       
        $vendor->product_types=$request->input('producttype');
         $vendor->company_reg_number=0;
         $vendor->status = false;
        $vendor->save();
       
      
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



//
//    public function addProduct(){
//
//        $categories = new Category();
//        return view('vendor/AddProduct')->with("categories", $categories->get());
//    }
//
//    public function addNewProduct(Request $request){
//
//
//        $product = new Product();
//        $category = new Category();
//
//        $cat = Category::where('category_name', $request->input("category"))->first();
//        if ($cat === null) {
//            // user doesn't exist
//            //add Category
//            $category->category_name = $request->input("category");
//            $category->sub_category = "";
//            $category->save();
//
//            $product->category_id = $category->id;
//
//        }else {
//            $product->category_id = $cat->id;
//        }
//
//
//
//        //add Product
//        $product->product_name = $request->input("product_name");
//        $product->product_description = $request->input("product_description");
//        $product->buying_price = $request->input("buying_price");
//        $product->selling_price = $request->input("selling_price");
//        $product->discount = $request->input("discount");
//        $product->available = $request->input("radio");
//        $product->vendor_id = "1";
////      $product->vendor_id = $request->session()->get('employee.vendor_id');
//
//
//
//
//        $uploadImageCount=1;
//        foreach($request->file('productImage') as $file)
//        {
//            if($file!=null){
//                if($uploadImageCount==1){
//                    //File Upload Code Start
//                    $file_name = str_random(30).'.' .$file->getClientOriginalExtension();
//                    $file->move(public_path('/uploads/vendor/product'), $file_name);
//                    $product->image1='/public/uploads/vendor/product/'.$file_name;
//                    $uploadImageCount++;
//                    //File Upload Code End
//                }
//                else if($uploadImageCount==2){
//
//                    //File Upload Code Start
//                    $file_name = str_random(30).'.' .$file->getClientOriginalExtension();
//                    $file->move(public_path('/uploads/vendor/product'), $file_name);
//                    $product->image2='/public/uploads/vendor/product/'.$file_name;
//                    $uploadImageCount++;
//                    //File Upload Code End
//                }
//                else if($uploadImageCount==3){
//
//                    //File Upload Code Start
//                    $file_name = str_random(30).'.' .$file->getClientOriginalExtension();
//                    $file->move(public_path('/uploads/vendor/product'), $file_name);
//                    $product->image3='/public/uploads/vendor/product/'.$file_name;
//                    $uploadImageCount++;
//                    //File Upload Code End
//                }
//                else if($uploadImageCount==4){
//
//                    //File Upload Code Start
//                    $file_name = str_random(30).'.' .$file->getClientOriginalExtension();
//                    $file->move(public_path('/uploads/vendor/product'), $file_name);
//                    $product->image4='/public/uploads/vendor/product/'.$file_name;
//                    $uploadImageCount++;
//                    //File Upload Code End
//                }
//            }
//        }
//
//
//
//
//
//        $product->save();
//
//
//
//            //Details Upload Start
//        $color= $request->input('color');
//        $size= $request->input('size');
//        $total_quantity= $request->input('total_quantity');
//
//        for($i=0;$i<count($color);$i++){
//            $detail = new Detail();
//            $detail->product_id=$product->id;
//            $detail->size=$size[$i];
//            $detail->color=$color[$i];
//            $detail->total_quantity=$total_quantity[$i];
//            $detail->available_quantity=$total_quantity[$i];
//            $detail->save();
//        }
//            //Details Upload End
//
//
//
//
//
//
//        return redirect('vendor/addproduct');
//    }




    public function addCategory($name = null ){

        $category = new Category();

        $category->category_name = $name;
        $category->sub_category = "";

        $category->save();
    }

    public function addDetail($size, $color, $quantity){
        $detail = new Detail();

        $detail->product_id = "1";
        $detail->size = $size;
        $detail->color = $color;
        $detail->total_quantity = $quantity;
        $detail->available_quantity = $quantity;

        $detail->save();

    }

    public function orders(){
        return view('vendor/ProductOrders');
    }

    public function logOut(Request $request){
        $request->session()->forget('vendor');
        return "Vendor Logged out ";
    }
}
