@extends('layouts.user-layout-without-sidebar')


@section('title', 'Deliveries')


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
        @foreach($deliveries as $delivery)
            <tr>
                <td>{{$delivery->id}}</td>
                <td>{{$delivery->quantity}}</td>
                <td>{{$delivery->total_price}}</td>
                <td>{{$delivery->payment_amount}}</td>
                <td>{{$delivery->payment_type}}</td>
                <td>{{$delivery->shipping_address}}</td>
                <td> <a href="/product/details/{{$delivery->product_id}}">View</a> </td>
            </tr>
        @endforeach

    </table>



@endsection