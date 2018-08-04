@extends('layouts.vendor-layout')


@section('title', 'Order Details')


@section('content')



    <table class="table table-bordered">
        <tr>
            <td>Order Id</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Shipping Address</td>
            <td>View Product</td>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->shipping_address}}</td>
                <td> <a href="/product/details/{{$order->product_id}}">View</a> </td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td style="border: 1px solid black">Total Price:</td>
            <td style="border: 1px solid black">{{$total_price}}</td>
        </tr>
    </table>





@endsection