@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')

@section('content')

    <!-- Main Content -->


<div class="page-wrapper" style="min-height: 406px;">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <h5 class="txt-dark">product orders</h5>
            </div>

            <div id="myTable_filter" class=" col-lg-5 col-md-5 col-sm-5 dataTables_filter all-search">
                <form>
                    @csrf

                    <input class="product-search" id="search" name="search-by-name" onkeyup="searchByAnything()" placeholder="Search" aria-controls="myTable" type="search" >

                </form>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-4 col-sm-3 col-md-4">
                <ol class="breadcrumb">
                 <!--   <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#"><span>e-commerce</span></a></li>
                    <li class="active"><span>product-orders</span></li> -->
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
                                        {{--<form>--}}
                                            {{--@csrf--}}
                                        {{--<div class="dataTables_length number-entries" id="myTable_length">--}}
                                            {{--<label>Show--}}
                                                {{--<select name="myTable_length" onchange="setNumber()" id="number"  aria-controls="myTable" class="" >--}}
                                                    {{--<option value="2" >2</option>--}}
                                                    {{--<option value="4" >4</option>--}}
                                                    {{--<option value="6" selected>6</option>--}}
                                                    {{--<option value="10" >10</option>--}}
                                                {{--</select> entries--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                        {{--</form>--}}

                                        <table class="table display responsive product-overview mb-30 dataTable no-footer" id="myTable" role="grid" aria-describedby="myTable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 123px;" aria-label="Order ID: activate to sort column ascending">Product ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 124px;" aria-label="Photo: activate to sort column ascending">Photo</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 179px;" aria-label="Product: activate to sort column ascending">Price</th>
                                               <!-- <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 91px;" aria-label="Quantity: activate to sort column ascending">Vendor Name</th>-->
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 114px;" aria-label="Date: activate to sort column ascending">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Featured</th>
                                                {{--<th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" style="width: 84px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>--}}
                                            </thead>
                                            <tbody id="show_products">

                                        @foreach($products as $product)
                                            <tr role="row" class="odd" id="product">
                                                <td class="txt-dark sorting_1">
                                                    <a href="{{route('admin.product.details',['id'=>$product->id])}}">{{$product->product_name}}</a>
                                                </td>
                                                <td class="txt-dark">{{$product->id}}</td>
                                                <td>
                                                    <a href="{{route('admin.product.details',['id'=>$product->id])}}">
                                                        <img src="{{asset($product->image1)}}" width="80">
                                                    </a>
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
                                                {{--<td>--}}
                                                    {{--<a href="javascript:void(0)" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit">--}}
                                                        {{--<i class="zmdi zmdi-edit txt-warning"></i>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete">--}}
                                                        {{--<i class="zmdi zmdi-delete txt-danger"></i>--}}
                                                    {{--</a>--}}
                                                {{--</td>--}}
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
                                                        var value= $('#search').val();

                                                        $.ajax({
                                                            type:'GET',
                                                            url:"http://127.0.0.1:8000/admin/search",
                                                            data:{
                                                                value:value
                                                            },
                                                            success: function(result){
                                                                console.log(result);

                                                                var products='';

                                                                result.forEach(function(product) {

                                                                    products += "<tr role=\"row\" class=\"odd\" id=\"product\">\n" +

                                                                    "                                                <td class=\"txt-dark sorting_1\">" +
                                                                    "                                                <a href=\""+"/sales/product/details/"+product.id+"\">"+product.product_name+"</a>" +
                                                                        "                                            </td>\n" +
                                                                    "                                                <td class=\"txt-dark\">"+product.id+"</td>\n" +
                                                                    "                                                <td>\n" +
                                                                    "                                                   <a href=\""+"/sales/product/details/"+product.id+"\">\n"+
                                                                    "                                                    <img src=\""+"/"+product.image1+"\" width=\"80\">\n" +
                                                                        "</a>\n"+
                                                                    "                                                </td>\n" +
                                                                    "                                                <td>"+product.selling_price+"</td>\n" +
                                                                    "                                                <td>"+product.vendor_name+"</td>\n" +
                                                                    "                                                <td>"+product.created_at+"</td>\n" +
                                                                    "                                                <td>\n" +
                                                                    "                                                    {{--<span class=\"label label-default font-weight-100\"></span>--}}\n" +
                                                                    "                                                    <div class=\"toggle\">\n" +
                                                                    "                                                        <span class=\"mid\">\n" +
                                                                    "                                                            <label class=\"switch\">\n" ;

                                                                    if(product.product_id){
                                                                        products +="<input type=\"checkbox\" checked id=\"feature\" onclick=\"addOrRemoveFeatured("+product.id+")\">\n" ;

                                                                    }else {
                                                                        products +="<input type=\"checkbox\" id=\"feature\" onclick=\"addOrRemoveFeatured("+product.id+")\">\n";
                                                                    }
                                                                    {{--"                                                                @if($product->product_id)\n" +--}}
                                                                    {{--"                                                                    <input type=\"checkbox\" checked id=\"feature\" onclick=\"addOrRemoveFeatured({{$product->id}})\">\n" +--}}
                                                                    {{--"                                                                @else\n" +--}}
                                                                    {{--"                                                                    <input type=\"checkbox\" id=\"feature\" onclick=\"addOrRemoveFeatured({{$product->id}})\">\n" +--}}
                                                                    {{--"\n" +--}}
                                                                    {{--"                                                                @endif\n" +--}}
                                                                     products += "                                                                <span class=\"slider round\"></span>\n" +
                                                                    "                                                            </label>\n" +
                                                                    "                                                        </span>\n" +
                                                                    "                                                    </div>\n" +
                                                                    "                                                </td>\n" ;
                                                                    // "                                                <td>\n" +
                                                                    // "                                                    <a href=\"javascript:void(0)\" class=\"text-inverse pr-10\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Edit\">\n" +
                                                                    // "                                                        <i class=\"zmdi zmdi-edit txt-warning\"></i>\n" +
                                                                    // "                                                    </a>\n" +
                                                                    // "                                                    <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\">\n" +
                                                                    // "                                                        <i class=\"zmdi zmdi-delete txt-danger\"></i>\n" +
                                                                    // "                                                    </a>\n" +
                                                                    // "                                                </td>"


                                                                });

                                                                $("#show_products").html(products);


                                                            }
                                                        });
                                                    }
                                                    {{--function setNumber() {--}}
                                                        {{--var number=$('#number').val();--}}
                                                        {{--//alert(number);--}}
                                                        {{--$.ajax({--}}
                                                            {{--type: 'GET',--}}
                                                            {{--url:"http://127.0.0.1:8000/admin/setNumber",--}}

                                                            {{--data:{--}}
                                                                {{--number:number--}}
                                                            {{--},--}}
                                                            {{--success: function(result){--}}


                                                                {{--var products='';--}}

                                                                {{--result.forEach(function(product) {--}}

                                                                    {{--products += "<tr role=\"row\" class=\"odd\" id=\"product\">\n" +--}}
                                                                        {{--"                                                <td class=\"txt-dark sorting_1\">"+product.product_name+"</td>\n" +--}}
                                                                        {{--"                                                <td class=\"txt-dark\">"+product.id+"</td>\n" +--}}
                                                                        {{--"                                                <td>\n" +--}}
                                                                        {{--"                                                    <img src=\""+"http://127.0.0.1:8000/"+product.image1+"\" width=\"80\">\n" +--}}
                                                                        {{--"                                                </td>\n" +--}}
                                                                        {{--"                                                <td>"+product.selling_price+"</td>\n" +--}}
                                                                        {{--"                                                <td>"+product.vendor_name+"</td>\n" +--}}
                                                                        {{--"                                                <td>"+product.created_at+"</td>\n" +--}}
                                                                        {{--"                                                <td>\n" +--}}
                                                                        {{--"                                                    <span class=\"label label-default font-weight-100\"></span>\n" +--}}
                                                                        {{--"                                                    <div class=\"toggle\">\n" +--}}
                                                                        {{--"                                                        <span class=\"mid\">\n" +--}}
                                                                        {{--"                                                            <label class=\"switch\">\n" ;--}}

                                                                    {{--if(product.product_id){--}}
                                                                        {{--products +="<input type=\"checkbox\" checked id=\"feature\" onclick=\"addOrRemoveFeatured("+product.id+")\">\n" ;--}}

                                                                    {{--}else {--}}
                                                                        {{--products +="<input type=\"checkbox\" id=\"feature\" onclick=\"addOrRemoveFeatured("+product.id+")\">\n";--}}
                                                                    {{--}--}}
                                                                    {{--"                                                                @if($product->product_id)\n" +--}}
                                                                            {{--"                                                                    <input type=\"checkbox\" checked id=\"feature\" onclick=\"addOrRemoveFeatured({{$product->id}})\">\n" +--}}
                                                                            {{--"                                                                @else\n" +--}}
                                                                            {{--"                                                                    <input type=\"checkbox\" id=\"feature\" onclick=\"addOrRemoveFeatured({{$product->id}})\">\n" +--}}
                                                                            {{--"\n" +--}}
                                                                            {{--"                                                                @endif\n" +--}}
                                                                        {{--products += "                                                                <span class=\"slider round\"></span>\n" +--}}
                                                                        {{--"                                                            </label>\n" +--}}
                                                                        {{--"                                                        </span>\n" +--}}
                                                                        {{--"                                                    </div>\n" +--}}
                                                                        {{--"                                                </td>\n" ;--}}
                                                                    {{--// "                                                <td>\n" +--}}
                                                                    {{--// "                                                    <a href=\"javascript:void(0)\" class=\"text-inverse pr-10\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Edit\">\n" +--}}
                                                                    {{--// "                                                        <i class=\"zmdi zmdi-edit txt-warning\"></i>\n" +--}}
                                                                    {{--// "                                                    </a>\n" +--}}
                                                                    {{--// "                                                    <a href=\"javascript:void(0)\" class=\"text-inverse\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Delete\">\n" +--}}
                                                                    {{--// "                                                        <i class=\"zmdi zmdi-delete txt-danger\"></i>\n" +--}}
                                                                    {{--// "                                                    </a>\n" +--}}
                                                                    {{--// "                                                </td>"--}}


                                                                {{--});--}}



                                                                {{--$("#show_products").html(products);--}}





                                                            {{--}--}}
                                                        {{--});--}}
                                                    {{--}--}}

//

                                                </script>

                                            </tbody>
                                        </table>
                                        {{--<div style="margin: 0 auto ;font-size: 20px">--}}
                                            {{$products->render()}}
                                        {{--</div>--}}

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