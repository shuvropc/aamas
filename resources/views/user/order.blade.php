@extends('layouts.user-layout-without-sidebar')


@section('title', 'Orders')


@section('content')



        <table class="table table-bordered">
            <tr>
                <td>Order Id</td>
                <td>Quantity</td>
                <td>Total Price</td>
                <td>Payment Amount</td>
                <td>Payment Type</td>
                <td>Shipping Address</td>
                <td>View</td>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->total_price}}</td>
                    <td>{{$order->payment_amount}}</td>
                    <td>{{$order->payment_type}}</td>
                    <td>{{$order->shipping_address}}</td>
                    <td> <a href="/product/details/{{$order->product_id}}">View</a> </td>
                </tr>
            @endforeach

        </table>



@endsection