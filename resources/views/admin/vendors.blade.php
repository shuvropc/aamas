@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')


@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Vendor List</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>product-orders</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display responsive product-overview mb-30" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Vendor ID</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Product Type</th>
                                                <th>Total Products</th>
                                                <th>Registration Date</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($vendors as $vendor)

                                            <tr>
                                                <td class="txt-dark">{{$vendor->id}}</td>
                                                <td class="txt-dark">{{$vendor->name}}</td>
                                                <td>
                                                    <img src="{{asset($vendor->logo_image)}}" alt="iMac" width="80">
                                                </td>
                                                <td>{{$vendor->product_types}}</td>
                                                <td>20</td>

                                                <td>10-10-2016</td>

                                                <td>
                                                    {{--<span class="label label-default font-weight-100"></span>--}}
                                                    <div class="toggle">
                                                        <span class="mid">
                                                            <label class="switch">
                                                                @if($vendor->status==1)
                                                                    <input type="checkbox" checked id="feature" onclick="changeStatus({{$vendor->id}})">
                                                                @else
                                                                    <input type="checkbox" id="feature" onclick="changeStatus({{$vendor->id}})">

                                                                @endif
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </td>


                                            </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Philbert. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
@endsection


@section('scripts')
    <script src="{{ URL::asset('assets/js/vendor-list.js') }}"></script>
@endsection