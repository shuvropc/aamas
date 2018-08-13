

@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')
@section('content')
    <div class="page-wrapper">
    <div class="container-fluid">
        <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th>Vendor Name</th>
                <th>Author Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Logo</th>

            </tr>
            </thead>

            <tbody>

            <tr>
                <td>{{$vendor->vendor_name}}</td>
                <td>{{$vendor->name}}</td>
                <td>{{$vendor->email}}</td>
                <td>{{$vendor->contact_number}}</td>
                <td>{{$vendor->country}}</td>
                <td><img src="{{asset('$vendor->logo_image')}}"></td>

            </tr>
            </tbody>

        </table>
        </div>
    </div>
    </div>
@endsection