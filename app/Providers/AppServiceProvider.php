<?php

namespace App\Providers;

use Gloudemans\Shoppingcart\Facades\Cart;
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
        //
        Schema\Builder::defaultStringLength(191);

        view()->composer('layouts.user-layout-with-sidebar', function($view)
        {
            $view->with('cart_count', Cart::count())->with('cart_total', Cart::subtotal())->with('carts', Cart::content());
        });

        view()->composer('layouts.user-layout-without-sidebar', function($view)
        {
            $view->with('cart_count', Cart::count())->with('cart_total', Cart::subtotal())->with('carts', Cart::content());
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
