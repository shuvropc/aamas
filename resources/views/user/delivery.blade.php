@extends('layouts.user-layout-without-sidebar')


@section('title', 'Deliveries')


@section('content')



    <table class="table table-bordered">
        <tr>
            <td>Order Id</td>
            <td>Total Price</td>
            <td>Payment Type</td>
            <td>Shipping Address</td>
            <td>View Order</td>
        </tr>
        @foreach($deliveries as $delivery)
            <tr>
                <td>{{$delivery->order_id}}</td>
                <td>{{$delivery->total_price}}</td>
                <td>{{$delivery->payment_type}}</td>
                <td>{{$delivery->shipping_address}}</td>
                <td> <a href="/user/orderdetails/{{$delivery->order_id}}">View</a> </td>
            </tr>
        @endforeach

    </table>



@endsection