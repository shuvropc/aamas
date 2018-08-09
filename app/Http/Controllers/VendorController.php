<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Order;
use App\Vendor;
use App\Product;
use App\Category;
use App\Detail;

use App\ViewProductWithDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            if($vendor->save()){
                return redirect()->route('vendor.index');
            }else{
                return "there is a problem to update";
            }

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
            if($vendor->save())
            {
                return redirect()->route('vendor.index');
            } else{
                return "there is a problem to update password";
            }
        }else{
            $message = "Old password is not correct";
            return view('vendor.passwordChange', ['message' => $message]);
        }


    }

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
        $orders = Order::select('order_id', DB::raw('SUM(total_price) as total_price'), 'payment_type', 'shipping_address')
            ->where('delivery', '=', '0')
            ->groupBy('order_id')
            ->get();

        return view('vendor/order', ['orders' => $orders]);
    }

    public function delivered(){
        $orders = Order::select('order_id', DB::raw('SUM(total_price) as total_price'), 'payment_type', 'shipping_address')
            ->where('delivery', '=', '1')
            ->groupBy('order_id')
            ->get();

        return view('vendor/delivered', ['deliveries' => $orders]);
    }

    function orderDetails($id){

        $orders = Order::where('order_id', '=', $id)->get();

        $total_price = Order::where('order_id', '=', $id)->sum('total_price');

        return View('vendor.orderDetails', ['orders' => $orders, 'total_price' => $total_price]);
    }

    function confirmOrder($id){
        Order::where('order_id', '=', $id)->update(['delivery' => '1']);

        return redirect()->back();
    }

    public function logOut(Request $request){
        $request->session()->forget('vendor');
        return redirect()->route('vendor.login');
    }

    public function vendorList(){
        return view('admin.vendors',['vendors'=>Vendor::all()]);
    }

    public function changeVendorstatus(Request $request){

        $vendor = Vendor::find($request->vid);

        if($vendor->status==0){
            $vendor->status=1;
        }
        else if($vendor->status==1){
            $vendor->status=0;
        }

        $vendor->save();

        return "Status Changed";
    }



    public function vendorDetails($id){
        return view('vendor.vendorDetails',['vendor'=>Vendor::find($id)]);
    }


    public function employeeList(Request $request, $type){

        $employees = Employee::where('vendor_id', '=', $request->session()->get('vendor.id'))
            ->where('type', '=', $type)
            ->get();

        return view('vendor.employeeList')->with('employees',$employees)->with('type', $type);
    }



    public function changeEmployeeStatus(Request $request){


        $employee =Employee::find($request->empid);


        if($employee->active==1){
            $employee->active=0;
        }
        else if($employee->active==0){
            $employee->active=1;
        }

        $employee->save();

        return "Status CHanged";
    }


    public function productStatus(Request $request){

            $products = ViewProductWithDetails::where('vendor_id','=',$request->session()
                ->get('vendor.id'))
                ->orderBy('available_quantity', 'ASC')
                ->get();
            return view('vendor.productStatus')->with('products', $products);
    }

    public function search(Request $request){
        $product = Product::Where('vendor_id', '=', $request->session()->get('vendor.id'))
        ->Where('product_name', 'like', '%' . $request->value . '%')->get();
        return $product;
    }

}
