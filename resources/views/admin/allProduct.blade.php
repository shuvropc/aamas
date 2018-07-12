@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')

@section('content')

    <!-- Main Content -->


<div class="page-wrapper" style="min-height: 406px;">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">product orders</h5>
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
                                    <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length number-entries" id="myTable_length">
                                            <label>Show
                                                <select name="myTable_length" aria-controls="myTable" class="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries
                                            </label>
                                        </div>
                                        <div id="myTable_filter" class="dataTables_filter all-search">
                                           <form method="POST">
                                               @csrf
                                            <label>
                                                <input class="" name="search-by-name" placeholder="Search" aria-controls="myTable" type="search" >
                                            </label>
                                           </form>
                                        </div>
                                        <table class="table display responsive product-overview mb-30 dataTable no-footer" id="myTable" role="grid" aria-describedby="myTable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 123px;" aria-label="Order ID: activate to sort column ascending">Product ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 124px;" aria-label="Photo: activate to sort column ascending">Photo</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 91px;" aria-label="Quantity: activate to sort column ascending">Vendor Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 114px;" aria-label="Date: activate to sort column ascending">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Featured</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 84px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                            </thead>
                                            <tbody>

                                        @foreach($products as $product)
                                            <tr role="row" class="odd">
                                                <td class="txt-dark sorting_1">{{$product->product_name}}</td>
                                                <td class="txt-dark">{{$product->id}}</td>
                                                <td>
                                                    <img src="{{asset($product->image1)}}" width="80">
                                                </td>
                                                <td>{{$product->selling_price}}</td>
                                                <td>{{$product->vendor_name}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>
                                                    {{--<span class="label label-default font-weight-100"></span>--}}
                                                    <div class="toggle">
                                                        <span class="mid">
                                                            <label class="switch">
                                                                @if($product->product_id)
                                                                    <input type="checkbox" checked id="feature" onclick="addOrRemoveFeatured({{$product->id}})">
                                                                @else
                                                                    <input type="checkbox" id="feature" onclick="addOrRemoveFeatured({{$product->id}})">

                                                                @endif
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="zmdi zmdi-edit txt-warning"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="zmdi zmdi-delete txt-danger"></i>
                                                    </a>
                                                </td>
                                        @endforeach

                                                <script>

                                                    function addOrRemoveFeatured(pid) {

                                                        $.ajax({
                                                            type: 'POST',
                                                            url: "http://127.0.0.1:8000/admin/addOrRemoveFeaturedProduct",
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            },
                                                            data : {
                                                                pid : pid
                                                            },
                                                            success: function(result){
                                                                console.log(result);
                                                            }
                                                        });
                                                    }

                                                    function searchByAnything() {
                                                        var value= $('#searchByAnything').val();

                                                        $.ajax({
                                                            type:'GET',
                                                            url:"http://127.0.0.1:8000/admin/searchByAnything",
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            },
                                                            data:{
                                                                value:value
                                                            },
                                                            success: function(result){
                                                                var listOfProduct="";

                                                                for(var i=0; i<result.length;i++){
                                                                    listOfProduct+="  </li> "+result[i].product_name+" <li>";
                                                                }

                                                                $("#product").html(listOfProduct);

                                                            }
                                                        });
                                                    }

                                                </script>

                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                            <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                                <a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Previous</a>
                                                <span>
                                                    <a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a>
                                                </span>
                                                <a class="paginate_button next disabled" aria-controls="myTable" data-dt-idx="2" tabindex="0" id="myTable_next">Next</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>

    </div>




    <!-- /Main Content -->

@endsection