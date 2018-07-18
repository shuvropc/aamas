@extends('layouts.vendor-layout')


@section('title', 'Vendor Dashboard')

@section('content')

    <!-- Main Content -->


    <div class="container-fluid" style="min-height: 406px;">
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
                                                {{--<label>Show--}}
                                                    {{--<select name="myTable_length" id="number" aria-controls="myTable" class="" >--}}
                                                        {{--<option value="2" onclick="setNumber()">2</option>--}}
                                                        {{--<option value="4" onclick="setNumber()">4</option>--}}
                                                        {{--<option value="6" onclick="setNumber()">6</option>--}}
                                                        {{--<option value="10" onclick="setNumber()">10</option>--}}
                                                    {{--</select> entries--}}
                                                {{--</label>--}}
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
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Buying Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Selling Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Discount</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Brand</th>

                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 114px;" aria-label="Date: activate to sort column ascending">Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 84px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                                </thead>
                                                <tbody>

                                                @foreach($products as $product)
                                                    <tr role="row" class="odd" id="product">
                                                        <td class="txt-dark sorting_1">{{$product->product_name}}</td>
                                                        <td class="txt-dark">{{$product->id}}</td>
                                                        <td>
                                                            <img src="{{asset($product->image1)}}" width="80">
                                                        </td>
                                                        <td>{{$product->buying_price}}</td>
                                                        <td>{{$product->selling_price}}</td>
                                                        <td>{{$product->discount}}</td>
                                                        <td>{{$product->brand}}</td>

                                                        <td>{{$product->created_at}}</td>
                                                        <td>
                                                            {{--<span class="label label-default font-weight-100"></span>--}}
                                                            <div class="toggle">
                                                        <span class="mid">
                                                            <label class="switch">
                                                                @if($product->available==1)
                                                                    <input type="checkbox" checked id="feature" onclick="changeProductAvability({{$product->id}})">
                                                                @else
                                                                    <input type="checkbox" id="feature" onclick="changeProductAvability({{$product->id}})">

                                                                @endif
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="{{route('vendor.product.edit',['id'=>$product->id])}}" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit">
                                                                <i class="zmdi zmdi-edit txt-warning"></i>
                                                            </a>
                                                            <a href="#myModal" class="trigger-btn" data-toggle="modal" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete">
                                                                <i class="zmdi zmdi-delete txt-danger"></i>
                                                            </a>
                                                        </td>
                                                        @endforeach


                                                        <div id="myModal" class="modal fade">
                                                            <div class="modal-dialog modal-confirm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">

                                                                        <h4 class="modal-title">Are you sure?</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                                        <button type="button" class="btn btn-danger" onclick="confirmDelete()" >Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script>

                                                            function changeProductAvability(pid) {

                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "http://127.0.0.1:8000/product/changeProductAvability",
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

                                                                        $("#product").html(result);

                                                                    }
                                                                });
                                                            }
                                                            function setNumber() {
                                                                var number=$('#number').val();
                                                                //alert(number);
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url:"http://127.0.0.1:8000/admin/setNumberInAPage",
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    },
                                                                    data:{
                                                                        number:number
                                                                    },
                                                                    success: function(result){

                                                                        console.log(result);
                                                                        var listOfProduct="";
                                                                        for(var i=0; i<result.length; i++){
                                                                            listOfProduct += "  <tr> "+result[i].product_name +" </tr>";
                                                                            $("#product").html(listOfProduct);
                                                                        }
                                                                        console.log(listOfProduct);

                                                                    }
                                                                });
                                                            }

                                                            //

                                                        </script>

                                                </tbody>
                                            </table>
                                            <div style="margin: 0 auto ;font-size: 20px">
                                            {{$products->render()}}
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