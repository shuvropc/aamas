<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function checkout(){
        return view('checkout');
    }

    function confirmCheckout(Request $request){
        foreach(Cart::content() as $row){

            $detail =  Detail::where([
                    ['product_id', $row->id],
                    ['size', $row->options['size']],
                    ['color', $row->options['color']]
                ])->get();

            foreach ($detail as $item){
                $qty = ($item->available_quantity) - ($row->qty);

                $product_details = Detail::find($item->id);
                $product_details->available_quantity = $qty;

                $product_details->save();
            }

            $order= new Order();
            $order->quantity = $row->qty;
            $order->total_price = ($row->qty) * ($row->price);
            $order->discount = 0;
            $order->payment_amount = 0;
            $order->payment_type = 0;
            $order->shipping_address = "Dhaka Attack";
            $order->product_id = $row->id;
            $order->user_id = $request->session()->get('user.id');

            $order->save();

            Cart::destroy();

        }
    }
}
