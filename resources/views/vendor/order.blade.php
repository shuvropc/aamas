@extends('layouts.vendor-layout')


@section('title', 'Orders')


@section('content')


    <table class="table table-bordered">
        <tr>
            <td>Order Id</td>
            <td>Total Price</td>
            <td>Payment Type</td>
            <td>Shipping Address</td>
            <td>View Order</td>
            <td>Confirm</td>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->order_id}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->payment_type}}</td>
                <td>{{$order->shipping_address}}</td>
                <td> <a href="/vendor/orderdetails/{{$order->order_id}}">View</a> </td>
                <td> <a href="/vendor/confirmorder/{{$order->order_id}}">√</a> </td>
            </tr>
        @endforeach

    </table>

    <script>

    </script>

@endsection