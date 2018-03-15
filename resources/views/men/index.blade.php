@extends('layouts.userheader')

@section('styles')
    <meta name="description" content="Orise-ecommerce">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Page Title -->
    <title>Orise Store - Ecommerce Html Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png" />

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/header3.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/men-style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/media.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/elegant-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider-set.css')}}"/>

@stop




@section('pagecontent')

<div class="loader">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
    <p>orise</p>
</div>

<!-- Loader End -->

<!-- Back To Top Begin -->

<div id="back-top">
    <a href="#" class="scroll">
        <i class="arrow_carrot-up"></i>
    </a>
</div>

<!-- Back To Top End -->

<!-- Site Wrapper Begin -->

<div id="page" class="wrapper">

    <!-- Header Begin -->


    <!-- Header End -->

    <!-- Main-slider begin -->

    <div id="hero">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide" data-background="img/40.jpg" data-thumbnail="img/40.jpg">
                    <div class="slider-caption fx-caption-2 text-center">
                        <h1 class="sl-big-heading-3 padding-bottom-15">Amazing shop theme!</h1>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutatio-nem consuetudium lectorum.</p>
                        <a href="#" class="sl-button-white margin-top-30">View Collection</a>
                    </div>
                </li>

                <li class="slide" data-background="img/41.jpg" data-thumbnail="img/41.jpg">
                    <div class="slider-caption fx-caption-2 text-center">
                        <h1 class="sl-big-heading-3 padding-bottom-15">Life style that you need, Yo.</h1>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutatio-nem consuetudium lectorum.</p>
                        <a href="#" class="sl-button-white margin-top-30">View Collection</a>
                    </div>
                </li>

                <li class="slide" data-background="img/23.jpg" data-thumbnail="img/23.jpg">
                    <div class="slider-caption fx-caption-2 text-left">
                        <h1 class="sl-big-heading-3">Creative theme Awesome.</h1>
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutatio-nem consuetudium lectorum.</p>
                        <a href="#" class="sl-button-white margin-top-30">View Collection</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Main-slider -->

    <!-- Banner Begin -->

    <div class="Banner-adds padding-top-30 text-center">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="p-image">
                    <img src="img/19.jpg" alt="" />
                    <div class="hover_overlay">
                        <div class="banner-content">
                            <div class="content">
                                <h5>Styles fashion for men’s</h5>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                <a href="#" class="sl-button-white margin-top-30">View Collection</a>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /banner-content -->
                    </div>
                    <!-- /hover-overlay -->
                </div>
                <!-- /p-image -->
            </div>
            <!-- /column -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="banner-add-2">
                    <div class="offer-add">
                        <div class="banner-content">
                            <img src="img/text.png" alt="" />
                            <h4>orise-store exclusives<br> up to 70%<br> extra 10% ends july 31th</h4>
                            <p class="banner-p">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore facilisi.</p>
                        </div>
                        <!-- /banner-content -->
                    </div>
                    <!-- /offer-add -->
                </div>
                <!-- /banner-add-2 -->

                <div class="p-image margin-top-30">
                    <img src="img/21.jpg" alt="" />
                    <div class="hover_overlay">
                        <div class="banner-content">
                            <div class="content">
                                <a href="#" class="sl-button-white">View Collection</a>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /banner-content -->
                    </div>
                    <!-- /hover-overlay -->
                </div>
                <!-- /p-image -->
            </div>
            <!-- /column -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="p-image">
                    <img src="img/20.jpg" alt="" />
                    <div class="hover_overlay">
                        <div class="banner-content">
                            <div class="content">
                                <a href="#" class="sl-button-white">View Collection</a>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /banner-content -->
                    </div>
                    <!-- /hover-overlay -->
                </div>
                <!-- /p-image -->

                <div class="p-image margin-top-30">
                    <img src="img/22.jpg" alt="" />
                    <div class="hover_overlay">
                        <div class="banner-content">
                            <div class="content">
                                <a href="#" class="sl-button-white">View Collection</a>
                            </div>
                            <!-- /content-->
                        </div>
                        <!-- /banner-content -->
                    </div>
                    <!-- /hover-overlay -->
                </div>
                <!-- /p-image -->
            </div>
            <!-- /column -->
        </div>
        <!-- /row -->
    </div>

    <!-- Banner End -->

    <!-- Our Products Begin -->

    <div class="our-products">
        <div class="container text-center padding-top-100">
            <h2 class="double-line"><span>Our Products</span></h2>
            <p class="sub-tittle">Eodem modo typi, qui nunc nobis videntur parum clari</p>
            <div class="p-filter margin-top-40">
                <ul class="filters text-center">
                    <li><a href="javascript:;" data-filter=".woman" class="filter">woman's</a>
                    </li>
                    <li><a href="javascript:;" data-filter=".men" class="filter">men's</a>
                    </li>
                    <li><a href="javascript:;" data-filter=".accessories" class="filter">accessories</a>
                    </li>
                </ul>
                <!-- /filters -->
            </div>
            <!-- /p-filter -->

            <div class="row padding-top-50">
                <div class="p-filter">
                    <div class="col-md-3 col-sm-6 mix men padding-bottom-60">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/2.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix men padding-bottom-60">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/7.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix woman padding-bottom-60">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/3.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix men padding-bottom-60">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/9.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix woman">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/20.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix accessories">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/19.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix accessories">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/21.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->

                    <div class="col-md-3 col-sm-6 mix men">
                        <div class="featured-item">
                            <div class="product-image">
                                <img src="img/products/11.jpg" alt="">
                                <div class="product_overlay">
                                    <div class="product-cart">
                                        <a href="#">
                                            <p>+ Add to card</p>
                                        </a>
                                        <div class="product-icons">
                                            <ul>
                                                <li><a href="#" title="favourite"><i class="icon_heart_alt"></i></a>
                                                </li>
                                                <li class="icon-bg-color"><a href="#" title="compare"><i class="fa fa-sliders"></i></a>
                                                </li>
                                                <li><a href="product-quick-view.html" class="product-quick-view" title="quickview"><i class="arrow_condense"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /product-icons -->
                                    </div>
                                    <!-- /product-cart -->
                                </div>
                                <!-- /product_overlay -->
                            </div>
                            <!-- /product-image -->
                            <div class="product-short-detail padding-top-20">
                                <div class="product-rate">
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt"></i>
                                    <i class="icon_star_alt not-rated"></i>
                                </div>
                                <!-- /product-rate -->
                                <div class="product-title">
                                    <p><a href="#">Black Cotton Leggings</a>
                                    </p>
                                </div>
                                <!-- /product-title -->
                                <div class="product-price">
                                    <p><i class="fa fa-gbp"></i>160.00</p>
                                </div>
                                <!-- /product-price -->
                            </div>
                            <!-- /product-short-detail -->
                        </div>
                        <!-- /featured-item -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /p-filter -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <!-- Our Products End -->

    <!-- Gallery Begin -->

    <div class="gallery">
        <div class="text-center padding-top-100">
            <h2 class="double-line"><span>Our Gallery</span></h2>
            <p class="sub-tittle">Eodem modo typi, qui nunc nobis videntur parum clari</p>
            <div class="row padding-top-50">
                <div class="col-md-2 col-sm-2">
                    <div class="p-image">
                        <img src="img/33.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->
                </div>
                <!-- /column -->

                <div class="col-md-2 col-sm-2">
                    <div class="p-image">
                        <img src="img/38.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->

                    <div class="p-image margin-top-30">
                        <img src="img/34.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->
                </div>
                <!-- /column -->

                <div class="col-md-4 col-sm-4">
                    <div class="p-image">
                        <img src="img/37.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <h5>Styles fashion for men’s</h5>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    <a href="#" class="sl-button-white margin-top-30">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->
                </div>
                <!-- /column -->

                <div class="col-md-2 col-sm-2">
                    <div class="p-image">
                        <img src="img/39.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->
                </div>
                <!-- /column -->

                <div class="col-md-2 col-sm-2">
                    <div class="p-image">
                        <img src="img/36.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->

                    <div class="p-image margin-top-30">
                        <img src="img/35.jpg" alt="" />
                        <div class="hover_overlay">
                            <div class="banner-content">
                                <div class="content">
                                    <a href="#" class="sl-button-white">Shop now</a>
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /banner-content -->
                        </div>
                        <!-- /hover-overlay -->
                    </div>
                    <!-- /p-image -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
    </div>

    <!-- Gallery End -->


    <!-- Testimonials Begin -->

    <div class="testimonials">
        <div class="overlay-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <i class="icon_quotations_alt2"></i>
                        <ul class="testimonial-slider">
                            <li>
                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                                <div class="client-info">
                                    <h6>Michel Smith</h6>
                                    <small>Web Developer</small>
                                </div>
                            </li>
                            <li>
                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                                <div class="client-info">
                                    <h6>Michel Smith</h6>
                                    <small>Web Developer</small>
                                </div>
                            </li>
                            <li>
                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                                <div class="client-info">
                                    <h6>Michel Smith</h6>
                                    <small>Web Developer</small>
                                </div>
                            </li>
                        </ul>
                        <!-- /bxslider -->
                    </div>
                    <!-- /column -->

                    <div class="clients col-md-12">
                        <div class="item"><img src="img/client1.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client2.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client3.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client4.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client5.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client1.png" alt="" />
                        </div>
                        <!-- /item -->
                        <div class="item"><img src="img/client2.png" alt="" />
                        </div>
                        <!-- /item -->
                    </div>
                    <!-- /clients -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /overlay -->
    </div>

    <!-- Testimonial End -->

    <!-- Footer Begin -->

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInLeft" data-wow-delay="0.3s">
                    <a href="index.html" class="footer-top_logo"></a>
                    <div class="footer-top_container clearfix">
                        <span class="font-main font-weight-normal color-additional">Proin est Pellentesque risus magna vulput vitae sodales uam morbi non sem lacus por mollis. Nunc condime ntum metus eud Ino lestie. Sed consectetuer. Lorem ipsum dolor amet ectetur adipisicing elit sed doincl.</span>
                        <ul class="footer-social-list">
                            <li><a href="#"><span class="social_facebook" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="social_twitter" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="social_googleplus" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="social_pinterest" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="social_youtube" aria-hidden="true"></span></a></li>
                            <li><a href="#"><span class="social_instagram" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">QUICK LINKS</h4>
                    <div class="footer-top_container clearfix">
                        <ul class="footer-nav">
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> My Account</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Order History</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> My Wishlist</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Order Tracking</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Shipping Information</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Gift Vouchers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">INFORMATION</h4>
                    <div class="footer-top_container clearfix">
                        <ul class="footer-nav">
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> About us</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Delivery Information</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Terms & Conditions</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Privacy Policy</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Contact us</a></li>
                            <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-angle-right customColor"></i> Return Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="footer-top_title color-main font-additional font-weight-bold text-uppercase">GET IN TOUCH</h4>
                    <div class="footer-top_container clearfix">
                        <ul class="footer-contact">
                            <li class="font-main font-weight-normal color-additional">
                                <span class="icon_pin" aria-hidden="true"></span>
                                23 Zevra Hall, Luton Street <br>New York 226688
                            </li>
                            <li class="font-main font-weight-normal color-additional oneLine">
                                <span class="icon_phone" aria-hidden="true"></span>
                                +10 (987) 6541 023
                            </li>
                            <li class="font-main font-weight-normal color-additional oneLine">
                                <span class="icon_mail" aria-hidden="true"></span>
                                info@templines.com
                            </li>
                            <li class="font-main font-weight-normal color-additional">
                                <span class="icon_clock" aria-hidden="true"></span>
                                Mon to Sat : 9:25 AM - 7:30 PM <br>Sun : 11:30 PM - 4:30 PM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                    <span class="footer_copyright color-additional font-main font-weight-light wow fadeInLeft" data-wow-delay="0.3s">Created With <span class="icon_heart customColor" aria-hidden="true"></span> by <span class="font-main font-weight-semibold">Templines</span> &copy; 2015 All rights reserved.</span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                    <ul class="footer-payments pull-right wow fadeInRight" data-wow-delay="0.3s">
                        <li><img src="media/payments/1.jpg" alt="Payments"></li>
                        <li><img src="media/payments/2.jpg" alt="Payments"></li>
                        <li><img src="media/payments/3.jpg" alt="Payments"></li>
                        <li><img src="media/payments/4.jpg" alt="Payments"></li>
                        <li><img src="media/payments/5.jpg" alt="Payments"></li>
                        <li><img src="media/payments/6.jpg" alt="Payments"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Popup Newsletter Begin -->

    <div class="modal popup-newsletter fade" id="newsletterModal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i>close</button>
        <div id="newsletter-popup" class="block">
            <div class="block_content">
                <form method="post" target="_blank" class="subscription-form">
                    <div class="popup-title">
                        <h2>Get Our Email Letter</h2>
                    </div>
                    <!-- /popup-title -->
                    <div class="popup-text">Subscribe to the Orise mailing list to receive updates on new arrivals, special offers and other discount information.</div>
                    <!-- /popup-text -->
                    <input class="inputletter" id="newsletter-input-popup" type="text" name="email" value="" placeholder="Enter your mail..." required>

                    <button type="submit" class="btn-form">Subscribe!</button>
                    <!-- /btn-form -->
                </form>
                <!-- /form -->
            </div>
            <!-- /block_content -->
            <div class="newsletter-popup-bottom">
                <input id="checker" type="checkbox">
                <label for="checker">Don't show this popup again</label>
            </div>
            <!-- /newsletter-popup-bottom -->
        </div>
        <!-- /newsletter-popup -->
    </div>

    <!-- Popup Newsletter End -->

</div>

    @stop




@section('scripts')
    <script type="text/javascript" src="{{asset('js/lib/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/lib/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/lib/moderniz.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/flexslider-init.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/vendors/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/smoothscroll.min.js') }}"></script>

    {{--<script type="text/javascript">--}}
        {{--$(window).on('load', function() {--}}
            {{--$('#newsletterModal').modal('show');--}}
            {{--$(".p-filter").mixItUp();--}}
        {{--});--}}
    {{--</script>--}}
    @stop





