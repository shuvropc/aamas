@extends('layouts.user-layout-without-sidebar')


@section('title', 'Registration')


@section('content')

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">

                    <!-- create a new account -->
                    <div lass="col-md-6 col-sm-6 create-new-account">
                        <h4 align="center" class="checkout-subtitle">Profile</h4>

                     <p align="center">
                        <a href="{{url('user/edit')}}">Edit</a> | <a href="{{url('/')}}">Back</a>
                     </p>
                        <div align="center" style="margin-bottom: 20px" >
                            <img style="width:200px; height:200px; border-radius: 50%; " src="{{asset('dist/img/mh.jpg')}}">
                        </div>
                        <table align="center">
                           <tr>
                             <td>Name:</td>
                              <td>{{$profile->name}}</td>
                           </tr>

                            <tr>
                                <td>Email:</td>
                                <td>{{$profile->email}}</td>
                            </tr>

                            <tr>
                                <td>Phone:</td>
                                <td>{{$profile->contact_number}}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{$profile->address}}</td>
                            </tr>
                            <tr>
                                <td>City: </td>
                                <td>{{$profile->city}}</td>
                            </tr>
                            <tr>
                                <td>Zip code: </td>
                                <td>{{$profile->zipcode}}</td>
                            </tr>
                            <tr>
                                <td>Shipping address:</td>
                                <td>{{$profile->shipping_address}}</td>
                            </tr>


                        </table>


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
