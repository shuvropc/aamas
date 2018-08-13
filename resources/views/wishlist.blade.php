@extends('layouts.user-layout-without-sidebar')


@section('title', 'Wishlist')


@section('content')


    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>

    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 my-wishlist">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="4" class="heading-title">My Wishlist</th>
                                </tr>
                                </thead>
                                <tbody>


{{--                               @foreach (Cart::instance('wishlist')->content() as $wilist)--}}

                                    <tr>
                                        <td class="col-md-2"><img src="assets/images/products/p1.jpg" alt="imga"></td>
                                        <td class="col-md-7">
                                            <div class="product-name"><a href="#"></a></div>
                                            <div class="rating rateit">
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star rate"></i>
                                                <i class="fa fa-star non-rate"></i>
                                                <span class="review">( 06 Reviews )</span>
                                                <button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button><div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                            <div class="price">
                                                $400.00
                                                <span>$900.00</span>
                                            </div>
                                        </td>
                                        <td class="col-md-2">
                                            <a href="#" class="btn-upper btn btn-primary">Add to cart</a>
                                        </td>
                                        <td class="col-md-1 close-btn">
                                            <a href="#" class=""><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>

                                {{--@endforeach--}}


                                </tbody>
                            </table>
                        </div>
                    </div>			</div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3800px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 190px;"><div class="item m-t-15">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand1.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item m-t-10">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand2.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand3.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand4.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand5.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand6.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand2.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand4.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img src="assets/images/brands/brand1.png" alt="">
                                        </a>
                                    </div></div><div class="owl-item" style="width: 190px;"><div class="item">
                                        <a href="#" class="image">
                                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                        </a>
                                    </div></div></div></div><!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->

                        <!--/.item-->
                        <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div>

@endsection