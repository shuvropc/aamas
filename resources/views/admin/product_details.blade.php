@extends('layouts.admin-layout')


@section('title', 'Admin Dashboard')


@section('content')


    <div class="container-fluid">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">product detail</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>product detail</span></li>
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
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="item-big">
                                            <!-- START carousel-->
                                            <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-captions-1" data-slide-to="2"></li>
                                                    <li data-target="#carousel-example-captions-1" data-slide-to="3"></li>
                                                </ol>
                                                <div role="listbox" class="carousel-inner ">
                                                    <div class="item active"> <img class="" src="{{asset($product->image2)}}" > </div>
                                                    <div class="item" > <img  src="{{asset($product->image1)}}" > </div>
                                                    <div class="item"> <img  src="{{asset($product->image3)}}" > </div>
                                                    <div class="item"> <img src="{{asset($product->image4)}}" > </div>
                                                </div>
                                            </div>
                                            <!-- END carousel-->
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="product-detail-wrap">
                                            <div class="product-rating inline-block mb-10">
                                                <a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a>
                                            </div>
                                            <div class="average-review inline-block mb-10">&nbsp;(<span class="review-count">5</span> customer review)</div>
                                            <h3 class="mb-20 weight-500">{{$product->product_name}}</h3>
                                            <h5 class="mb-20 weight-500"><a href="{{route('admin.vendor.details',['id'=>$product->vendor_id])}}">Vendor ID: {{$product->vendor_id}}</a></h5>
                                            <div class="product-price head-font mb-30 ">Selling price : {{" "."$".$product->selling_price}}</div>
                                            <h2 style="padding-left: 10px; color: #990000;">Discount: {{$product->discount}}%</h2>
                                            <p class="mb-50">{{$product->product_description}}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div  class="tab-struct custom-tab-1 product-desc-tab">
                                    <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
                                        <li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="descri_tab" href="#descri_tab_detail"><span>Aditional information</span></a></li>
                                        {{--<li role="presentation" class="next"><a  data-toggle="tab" id="adi_info_tab" role="tab" href="#adi_info_tab_detail" aria-expanded="false"><span>Aditional information</span></a></li>--}}
                                        <li role="presentation" class=""><a  data-toggle="tab" id="review_tab" role="tab" href="#review_tab_detail" aria-expanded="false"><span>Review<span class="inline-block">(<span class="review-count">0</span>)</span></span></a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent_7">
                                        <div  id="descri_tab_detail" class="tab-pane fade active in pt-0" role="tabpanel">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table  mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="border-none">SIZE</td>
                                                            <td class="border-none">@foreach($details as $detail)
                                                                    {{$detail->size}},

                                                                @endforeach</td>
                                                        </tr>
                                                        <tr>
                                                            <td>COLOR</td>
                                                            <td>@foreach($details as $detail)
                                                                    {{$detail->color}},

                                                                @endforeach</td>
                                                        </tr>
                                                        <tr>
                                                            <td>AVAILABLE</td>
                                                            <td>@foreach($details as $detail)
                                                                    {{$detail->available_quantity}},

                                                                @endforeach</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div  id="adi_info_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">--}}

                                        {{--</div>--}}
                                        <div  id="review_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">
                                            <p class="muted review-tag pt-15">No reviews yet.</p>
                                            <div class="row mt-40">
                                                <div class="col-sm-6">
                                                    <div class="form-wrap">
                                                        <form>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10" for="review">Your rating</label>
                                                                <div class='product-rating starrr' id='star1'></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10" for="review">Your review</label>
                                                                <textarea class="form-control" id="review" placeholder="add review"></textarea>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="exampleInputuname_2">User Name</label>
                                                                        <input type="text" class="form-control" id="exampleInputuname_2" placeholder="Username"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail_2" placeholder="Enter email">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group mb-0">
                                                                <button type="submit" class="btn btn-success  mr-10">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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