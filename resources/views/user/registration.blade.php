@extends('layouts.user-layout-without-sidebar')


@section('title', 'Registration')


@section('content')

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">

                    <!-- create a new account -->
                    <div lass="col-md-6 col-sm-6 create-new-account">
                        <h4 class="checkout-subtitle">Create a new account</h4>
                        <p class="text title-tag-line">Create your new account.</p>
                        <form class="register-form outer-top-xs" role="form" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" name="userName" class="form-control unicase-form-control text-input" id="exampleInputEmail1" required >
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail2">Email Address <span>* {{$message or ''}}</span></label>
                                <input type="email" name="userEmail" class="form-control unicase-form-control text-input" id="exampleInputEmail2" required>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>--}}
                                {{--<input type="number" name="userPhone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Password <span>* {{$message or ''}}</span></label>
                                <input type="password" name="userPassword" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                                <input type="password" name="conUserPass" class="form-control unicase-form-control text-input" id="exampleInputEmail1" required >
                            </div>
                            <input type="submit" value="Sign up" class="btn-upper btn btn-primary checkout-page-button">
                        </form>


                    </div>
                    <!-- create a new account -->

                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">

                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->

                        <div class="item">
                            <a href="#" class="image">
                                <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                            </a>
                        </div><!--/.item-->
                    </div><!-- /.owl-carousel #logo-slider -->
                </div><!-- /.logo-slider-inner -->

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection
