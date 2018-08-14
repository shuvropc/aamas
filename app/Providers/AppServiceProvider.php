<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $product = new Product();

        Schema\Builder::defaultStringLength(191);

        view()->composer('layouts.user-layout-with-sidebar', function($view)
        {
            $view->with('cart_count', Cart::count())
                ->with('cart_total', Cart::subtotal())
                ->with('carts', Cart::content())
                ->with('catagories', Category::select('category_name')->get());
        });

        view()->composer('layouts.user-layout-without-sidebar', function($view)
        {
            $view->with('cart_count', Cart::count())
                ->with('cart_total', Cart::subtotal())
                ->with('carts', Cart::content())
                ->with('catagories', Category::select('category_name')->get());
        });




        view()->composer('layouts.vendor-layout', function($view)
        {
//            $sql = "SELECT * FROM categories WHERE categories.id in (SELECT products.category_id from products WHERE vendor_id={$request->session()->get('vendor.id')})";
            $sql = "SELECT * FROM categories WHERE categories.id in (SELECT products.category_id from products WHERE vendor_id=1)";
            $cat=DB::select($sql);

            $view->with('categories',  $cat);
        });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
