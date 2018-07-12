<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function checkout(){
        return view('checkout');
    }

    function confirmCheckout(Request $request){
        foreach(Cart::content() as $row){

            $order= new Order();
            $order->quantity = $row->qty;
            $order->total_price = ($row->qty) * ($row->price);
            $order->discount = 0;
            $order->payment_amount = 0;
            $order->payment_type = 0;
            $order->shipping_address = "Dhaka";
            $order->product_id = $row->id;
            $order->user_id = $request->session()->get('user.id');

            $order->save();

            Cart::destroy();

        }
    }
}
