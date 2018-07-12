<?php

namespace App\Http\Controllers;

use App\ViewProductWithDetails;
use Illuminate\Http\Request;
use App\Vendor;
use App\Product;
use App\Category;
use App\Detail;
use App\Employee;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{

    public function addProduct(Request $request)
    {
        $categories = new Category();
        $employee = Employee::find($request->session()->get('employee.id'));
        return view('vendor.employee.sales.AddProduct', ['employee' => $employee])->with("categories", $categories->get());
    }


    public function addNewProduct(Request $request)
    {


        $product = new Product();
        $category = new Category();

        $cat = Category::where('category_name', $request->input("category"))->first();
        if ($cat === null) {
            // user doesn't exist
            //add Category
            $category->category_name = $request->input("category");
            $category->sub_category = "";
            $category->save();

            $product->category_id = $category->id;

        } else {
            $product->category_id = $cat->id;
        }


        //add Product
        $product->product_name = $request->input("product_name");
        $product->product_description = $request->input("product_description");
        $product->buying_price = $request->input("buying_price");
        $product->selling_price = $request->input("selling_price");
        $product->discount = $request->input("discount");
        $product->brand = $request->input("brand");
        $product->available = $request->input("radio");
        $product->vendor_id = $request->session()->get('employee.vendor_id');


        $uploadImageCount = 1;
        foreach ($request->file('productImage') as $file) {
            if ($file != null) {
                if ($uploadImageCount == 1) {
                    //File Upload Code Start
                    $file_name = str_random(30) . sha1(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/uploads/vendor/product'), $file_name);
                    $product->image1 = 'uploads/vendor/product/' . $file_name;
                    $uploadImageCount++;
                    //File Upload Code End
                } else if ($uploadImageCount == 2) {

                    //File Upload Code Start
                    $file_name = str_random(30) . sha1(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/uploads/vendor/product'), $file_name);
                    $product->image2 = 'uploads/vendor/product/' . $file_name;
                    $uploadImageCount++;
                    //File Upload Code End
                } else if ($uploadImageCount == 3) {

                    //File Upload Code Start
                    $file_name = str_random(30) . sha1(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/uploads/vendor/product'), $file_name);
                    $product->image3 = 'uploads/vendor/product/' . $file_name;
                    $uploadImageCount++;
                    //File Upload Code End
                } else if ($uploadImageCount == 4) {

                    //File Upload Code Start
                    $file_name = str_random(30) . sha1(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/uploads/vendor/product'), $file_name);
                    $product->image4 = 'uploads/vendor/product/' . $file_name;
                    $uploadImageCount++;
                    //File Upload Code End
                }
            }
        }


        $product->save();


        //Details Upload Start
        $color = $request->input('color');
        $size = $request->input('size');
        $total_quantity = $request->input('total_quantity');

        for ($i = 0; $i < count($color); $i++) {
            $detail = new Detail();
            $detail->product_id = $product->id;
            $detail->size = $size[$i];
            $detail->color = $color[$i];
            $detail->total_quantity = $total_quantity[$i];
            $detail->available_quantity = $total_quantity[$i];
            $detail->save();
        }
        //Details Upload End



        $request->session()->flash('message', 'Product Uploaded Successfully');
        $request->session()->flash('alert', 'alert alert-success');
        $request->session()->flash('type', 'Success!');
        $request->session()->flash('button', 'X');

        return redirect()->route('sales.index');
    }


    public function details($id)
    {
        $product = ViewProductWithDetails::find($id);
        $productInfo = ViewProductWithDetails::where('id', '=', $id)->get();
        $upSellProducts = Product::orderBy('id', 'asc')->limit(4)->get();
        return view('product-details', ['product' => $product,
            'upSellProducts' => $upSellProducts,
            'productInfo' => $productInfo
        ]);
    }


    public function quantityByDetails(Request $request)
    {
        $productQuantity = ViewProductWithDetails::select('available_quantity')
            ->where('id', '=', $request->pid)
            ->where('size', '=', $request->size)
            ->where('color', '=', $request->color)
            ->get();
        return $productQuantity;
    }

    public function addToCart(Request $request){
        return $request;
    }


}
