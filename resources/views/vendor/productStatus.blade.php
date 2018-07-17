@extends('layouts.vendor-layout')


@section('title', 'Vendor Dashboard')

@section('content')


    <!-- Main Content -->

    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <h3 id="heading" class="txt-danger">Product : Going Out of Stock</h3>
            </div>

        </div>
        <!-- /Title -->


        <style>

            #heading {
                font-weight: bold;
            }

            #myTable {
                font-size: 20px;
                text-align: center;
            }

            #myTable thead tr th {
                font-size: 20px;
                font-weight: bold;
                text-align: center;
            }
        </style>


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
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity Left</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $product)

                                        <tr>
                                            <td class="txt-dark">{{$product->product_name}}</td>
                                            <td>
                                                <img src="{{asset($product->image1)}}" alt="iMac" width="80">
                                            </td>
                                            <td class="txt-dark">{{$product->size}}</td>
                                            <td class="txt-dark">{{$product->color}}</td>
                                            <td class="text-danger">{{$product->available_quantity}}</td>
                                            <td>
                                                <span class="label label-success font-weight-100">Update</span>
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



@endsection