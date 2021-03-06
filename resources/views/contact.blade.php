@extends('layouts.user-layout-without-sidebar')


@section('title', 'Contact')


@section('content')


    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div>

    <div class="container">
        <div class="contact-page">
            <div class="row">
                <div class="col-md-12 contact-map outer-bottom-vs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.903129616355!2d90.42537451452581!3d23.82204348455418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c648a7768e31%3A0xebb579b6a6bc3c67!2sAmerican+International+University-Bangladesh+(AIUB)!5e0!3m2!1sen!2sbd!4v1527681146614" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-9 contact-form">

                    <div class="col-md-12 contact-title">
                        <h4>Contact Form</h4>
                    </div>
                    <form method="post" class="register-form" role="form">
                        @csrf
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputName">Your Name <span>* </span></label>
                                <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Your Name">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ''}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email Address">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ''}}</span>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                <input type="text" name="title" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title">
                                <span class="text-danger">{{$errors->has('title') ? $errors->first('title'): ''}}</span>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                                <textarea class="form-control unicase-form-control" name="comment" id="exampleInputComments"></textarea>
                                <span class="text-danger">{{$errors->has('comment') ? $errors->first('comment'): ''}}</span>

                            </div>
                        </div>
                        <div class="col-md-12 outer-bottom-small m-t-20">
                            <input type="submit" value="Send Message" style="color:White;" class="btn-upper btn btn-primary checkout-page-button ">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 contact-info">
                    <div class="contact-title">
                        <h4>Information</h4>
                    </div>
                    <div class="clearfix address">
                        <span class="contact-i"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-span">ThemesGround, 789 Main rd, Anytown, CA 12345 USA</span>
                    </div>
                    <div class="clearfix phone-no">
                        <span class="contact-i"><i class="fa fa-mobile"></i></span>
                        <span class="contact-span">+(888) 123-4567<br>+(888) 456-7890</span>
                    </div>
                    <div class="clearfix email">
                        <span class="contact-i"><i class="fa fa-envelope"></i></span>
                        <span class="contact-span"><a href="#">flipmart@themesground.com</a></span>
                    </div>
                </div>			</div><!-- /.contact-page -->
        </div><!-- /.row -->
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
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>

@endsection