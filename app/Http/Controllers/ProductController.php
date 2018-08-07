<?php

namespace App\Http\Controllers;

use App\Feature_product;
use App\Order;
use App\ViewProductWithDetails;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Vendor;
use App\Product;
use App\Category;
use App\Detail;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use File;

class ProductController extends Controller
{

    public function addProductByVendor(Request $request)
    {
        $categories = new Category();
//        $employee = Vendor::find($request->session()->get('vendor.id'));
        return view('vendor.AddProduct')->with("categories", $categories->get());
    }

    public function addNewProductByVendor(Request $request)
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
        $product->vendor_id = $request->session()->get('vendor.id');


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

        return redirect()->route('vendor.index');
    }

    public function deleteDetailsByDetailsId(Request $request){

        Detail::destroy($request->detailsid);

        return "Deleted";
    }

    public function showAllProduct(Request $request){
//        return $request->session()->get('vendor.id');
        $products=Product::where('vendor_id', '=' , $request->session()->get('vendor.id') )->paginate(5);
        return view('vendor.showAllProduct', ['products'=>$products ]);

//        return $products;
    }

    public function changeProductAvability(Request $request){


        $product=Product::find($request->pid);


        if($product->available==0){
            $product->available=1;
        }else if($product->available==1){
            $product->available=0;
        }

        $product->save();

        return "changed";
    }

    public function editProductByVendor(Request $request, $id)
    {
        $categories = new Category();
        $product= Product::find($id);
        $details=Detail::where('product_id', '=', $id )->get();

        //return $details;

        return view('vendor.editProduct',['categories'=>$categories->get()],['product'=>$product])->with('details', $details);
    }

    public function updateProductByVendor(Request $request){


        $product = Product::find($request->input('product_id'));

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


        $product->product_name = $request->input("product_name");
        $product->product_description = $request->input("product_description");
        $product->buying_price = $request->input("buying_price");
        $product->selling_price = $request->input("selling_price");
        $product->discount = $request->input("discount");
        $product->brand = $request->input("brand");
        $product->available = $request->input("radio");
        $product->vendor_id = $request->session()->get('vendor.id');

//        return $request->file('productImage') ;
         $productImage1=$product->image1;
         $productImage2=$product->image2;
         $productImage3=$product->image3;
         $productImage4=$product->image4;


        $file1=$request->file('productImage1');
        $file2=$request->file('productImage2');
        $file3=$request->file('productImage3');
        $file4=$request->file('productImage4');

                if($request->file('productImage1')==null){
                    $product->image1 = $productImage1;
                }else{
                    if(File::exists($productImage1)) {
                        File::delete($productImage1);
                        $file_name = str_random(30) . sha1(time()) . '.' . $file1->getClientOriginalExtension();
                        $file1->move(public_path('/uploads/vendor/product'), $file_name);
                        $product->image1 = 'uploads/vendor/product/' . $file_name;
                    }
                }
                if($request->file('productImage2')==null){
                    $product->image2 = $productImage2;
                } else{
                    if(File::exists($productImage2)) {
                        File::delete($productImage2);
                        $file_name = str_random(30) . sha1(time()) . '.' . $file2->getClientOriginalExtension();
                        $file2->move(public_path('/uploads/vendor/product'), $file_name);
                        $product->image2 = 'uploads/vendor/product/' . $file_name;
                    }
                }
                if($request->file('productImage3')==null){
                    $product->image3 = $productImage3;
                } else{
                    if(File::exists($productImage3)) {
                        File::delete($productImage3);
                        $file_name = str_random(30) . sha1(time()) . '.' . $file3->getClientOriginalExtension();
                        $file3->move(public_path('/uploads/vendor/product'), $file_name);
                        $product->image3 = 'uploads/vendor/product/' . $file_name;
                    }
                }
                if($request->file('productImage4')==null){
                    $product->image4 = $productImage4;
                }else{
                    if(File::exists($productImage4))
                    {
                        File::delete($productImage4);
                        //unlink($image_path);
                        $file_name = str_random(30) . sha1(time()) . '.' . $file4->getClientOriginalExtension();
                        $file4->move(public_path('/uploads/vendor/product'), $file_name);
                        $product->image4 = 'uploads/vendor/product/' . $file_name;
                    }
                }


        $product->save();


//Details Update start

        $color = $request->input('color');
        $size = $request->input('size');
        $total_quantity = $request->input('total_quantity');
        $detail_id= $request->input('detail_id');

        for ($i = 0; $i < count($color); $i++) {

            $detail = Detail::find($detail_id[$i]);
            $detail->size = $size[$i];
            $detail->color = $color[$i];
            $detail->total_quantity = $total_quantity[$i];
            $detail->available_quantity = $total_quantity[$i];
            $detail->save();
        }



        $color = $request->input('newcolor');
        $size = $request->input('newsize');
        $total_quantity = $request->input('newtotal_quantity');






        if(is_array ($color)){



        for ($i = 0; $i < count($color); $i++) {
            $detail = new Detail();
            $detail->product_id = $request->input('product_id');
            $detail->size = $size[$i];
            $detail->color = $color[$i];
            $detail->total_quantity = $total_quantity[$i];
            $detail->available_quantity = $total_quantity[$i];
            $detail->save();
        }

        }

       return "Updated";


    }

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

        Cart::add(['id' => $request->pid,'name' => $request->pname,'qty' => $request->qty, 'price' => $request->pprice,'options' => ['size' => $request->size,'color'=>$request->color, 'image' => $request->image]]);

        return "stored";

    }

    public function removeFromCart($id){
        Cart::remove($id);

        return redirect()->back();
    }

    public function delete(Request $request){


//        $details = Detail::where('product_id', '=', $request->pid)->get();
//
//        foreach ($details as $detail) {
//            $detail->delete();
//        }

//        Feature_product::where('product_id', '=', $request->pid)->delete();


        $product=Product::find($request->pid);


        if(File::exists($product->image1)) {
            File::delete($product->image1);
        }
        if(File::exists($product->image2)) {
            File::delete($product->image2);
        }
        if(File::exists($product->image3)) {
            File::delete($product->image3);
        }
        if(File::exists($product->image4)) {
            File::delete($product->image4);
        }

        $product->delete();


        return "Deleted";
    }

    public function showProductByCategoryId($id){

        $products= Product::where('category_id','=',$id)->paginate(8);
        $category=Category::find($id);

        return view('vendor.showProductByCategory')
            ->with('products',$products)
            ->with('cat_name',$category->category_name);
    }

    public function searchByCategory($type){
        //return $type;

        $products= DB::select("
                               SELECT products.*, categories.category_name
                                FROM   `products`
                                INNER JOIN `categories`
                                ON products.category_id = categories.id
                                WHERE  categories.category_name = '$type' 
                            ");

        //return $products;
       return view('searchByCategory')->with('products',$products);
    }

    public function checkProductQuantity(){

    }

    public function topProducts(Request $request){

        $orders = Order::with('products')
            ->select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->orderBy('product_id', 'DESC')
            ->get();

        return $orders;

    }

    public function topVendors(Request $request){

        $vendors = DB::select("SELECT vendors.vendor_name,COUNT(*) as total FROM orders
                              INNER JOIN products ON products.id=orders.product_id
                              INNER JOIN vendors ON vendors.id=products.vendor_id
                              group by `product_id` order by `product_id` desc LIMIT 5");

        return $vendors;

    }

}
