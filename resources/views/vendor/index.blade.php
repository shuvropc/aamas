@extends('layouts.vendor-layout')


@section('title', 'Shopping Cart')


@section('content')

    <div class="page-wrapper">
        <div class="container-fluid pt-25">

            <!-- Row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Top Selling Products</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="col-sm-6 pa-0">
                                    <canvas id="top-product" height="164"></canvas>
                                </div>

                                <div id="product-name" class="col-sm-6">

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Buy & Sell</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="col-sm-6 pa-0">
                                    <canvas id="top-vendor" height="164"></canvas>
                                </div>
                                <div id="vendor-name" class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: Red">Low Stock</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Product Name</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Available Quantity</th>
                        </tr>
                        @foreach($low_stock_products as $product)
                            <tr>
                                <td><a href="/product/details/{{$product->product_id}}">{{$product->product_name}}</a></td>
                                <td>{{$product->color}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->available_quantity}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: Red">Out Of Stock</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Product Name</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Available Quantity</th>
                        </tr>
                        @foreach($out_of_stock_products as $product)
                            <tr>
                                <td><a href="/product/details/{{$product->product_id}}">{{$product->product_name}}</a></td>
                                <td>{{$product->color}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->available_quantity}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


            <script language="JavaScript" type="text/javascript" src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>
            <script type="application/javascript">

                $(document).ready(function() {
                    $.ajax({url: "/vendor/topproducts/{{Session::get('vendor.id')}}", success: function(result){
                        if( $('#top-product').length > 0 ){
                            var ctx7 = document.getElementById("top-product").getContext("2d");
                            var product_name = [];
                            var product_count = [];

                            for(i=0; i<result.length; i++){
                                product_count.push(result[i]['total']);
                                product_name.push(result[i]['product_name']);
                                $('#product-name').append('<label>'+result[i]['product_name']+' : '+result[i]['total']+'</label>')
                            }

                            var data7 = {
                                labels: product_name,
                                datasets: [
                                    {
                                        data: product_count,
                                        backgroundColor: [
                                            "rgba(240,197,65,.6)",
                                            "rgba(46,205,153,.6)",
                                            "rgba(78,157,230,.6)",
                                            "rgba(237,111,86,.6)",
                                            "rgba(241,161,199,.6)"
                                        ],
                                        hoverBackgroundColor: [
                                            "rgba(240,197,65,.6)",
                                            "rgba(46,205,153,.6)",
                                            "rgba(78,157,230,.6)",
                                            "rgba(237,111,86,.6)",
                                            "rgba(241,161,199,.6)"
                                        ]
                                    }]
                            };

                            var doughnutChart = new Chart(ctx7, {
                                type: 'doughnut',
                                data: data7,
                                options: {
                                    animation: {
                                        duration:	3000
                                    },
                                    elements: {
                                        arc: {
                                            borderWidth: 0
                                        }
                                    },
                                    responsive: true,
                                    maintainAspectRatio:false,
                                    percentageInnerCutout: 50,
                                    legend: {
                                        display:false
                                    },
                                    tooltips: {
                                        backgroundColor:'rgba(33,33,33,1)',
                                        cornerRadius:0,
                                        footerFontFamily:"'Poppins'"
                                    },
                                    cutoutPercentage: 70,
                                    segmentShowStroke: false
                                }
                            });
                        }
                    }});

                    $.ajax({url: "/vendor/buysell/{{Session::get('vendor.id')}}", success: function(result){
                        if( $('#top-vendor').length > 0 ){
                            var ctx7 = document.getElementById("top-vendor").getContext("2d");
                            var buysell = ['10', '20'];
                            var sell = [];

                            for(i=0; i<result.length; i++){
                               // buysell.push(result[i]['TotalBuy']);
                                //buysell.push(result[i]['TotalSell']);

                                $('#vendor-name').append('<label>Total Buy: '+result[i]['TotalBuy']+'<br> Total Sell: '+result[i]['TotalSell']+'</label>')
                            }

                            var data7 = {
                                labels: ['Buy', 'Sell'],
                                datasets: [
                                    {
                                        data: buysell,
                                        backgroundColor: [
                                            "rgba(240,197,65,.6)",
                                            "rgba(46,205,153,.6)",
                                            "rgba(78,157,230,.6)",
                                            "rgba(237,111,86,.6)",
                                            "rgba(241,161,199,.6)"
                                        ],
                                        hoverBackgroundColor: [
                                            "rgba(240,197,65,.6)",
                                            "rgba(46,205,153,.6)",
                                            "rgba(78,157,230,.6)",
                                            "rgba(237,111,86,.6)",
                                            "rgba(241,161,199,.6)"
                                        ]
                                    }]
                            };

                            new Chart(ctx7, {
                                type: 'doughnut',
                                data: data7,
                                options: {
                                    animation: {
                                        duration:	3000
                                    },
                                    elements: {
                                        arc: {
                                            borderWidth: 0
                                        }
                                    },
                                    responsive: true,
                                    maintainAspectRatio:false,
                                    percentageInnerCutout: 50,
                                    legend: {
                                        display:false
                                    },
                                    tooltips: {
                                        backgroundColor:'rgba(33,33,33,1)',
                                        cornerRadius:0,
                                        footerFontFamily:"'Poppins'"
                                    },
                                    cutoutPercentage: 70,
                                    segmentShowStroke: false
                                }
                            });
                        }
                    }});

                });

            </script>

@endsection