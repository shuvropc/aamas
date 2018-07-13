@extends('layouts.user-layout-without-sidebar')

@section('title', 'Product Details')

@section('styles')
    <style>
        /* styles unrelated to zoom */
        * { border:0; margin:0; padding:0; }
        p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

        /* these styles are for the demo, but are not required for the plugin */
        .zoom {
            display:inline-block;
            position: relative;
        }

        /* magnifying glass icon */
        .zoom:after {
            content:'';
            display:block;
            width:33px;
            height:33px;
            position:absolute;
            top:0;
            right:0;
            background:url(icon.png);
        }

        .zoom img {
            display: block;
        }

        .zoom img::selection { background-color: transparent; }

        #ex2 img:hover { cursor: url(grab.cur), default; }
        #ex2 img:active { cursor: url(grabbed.cur), default; }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        .quantity-size-container {
            font-family: 'Open Sans', helvetica, arial, sans-serif;
            /*max-width: 305px;*/
            font-size: 25px;
            /*margin: 3rem auto 0;*/
            line-height: 1.6;
            color: #444;
        }

        .quantity-size-container fieldset {
            border: none;
            padding: 15px;
            margin: 0;
            text-align: center;
        }

        .quantity-size-container h1 {
            margin: 0;
            line-height: 1.2;
        }

        .quantity-size-container p {
            margin: 0 0 1.6rem;
            padding-bottom: 0.2rem;
            border-bottom: 1px solid #ddd;
        }

        .quantity-size-container .radio-inline__input {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
        }

        .quantity-size-container .radio-inline__label {
            display: inline-block;
            padding: 0.5rem 1rem;
            margin-right: 18px;
            border-radius: 3px;
            transition: all .2s;
        }

        .quantity-size-container .radio-inline__input:checked + .radio-inline__label {
            background: #B54A4A;
            color: #fff;
            text-shadow: 0 0 1px rgba(0,0,0,.7);
        }

        .quantity-size-container .radio-inline__input:focus + .radio-inline__label {
            outline-color: #4D90FE;
            outline-offset: -2px;
            outline-style: auto;
            outline-width: 5px;
        }

    </style>
@endsection


@section('content')



<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Clothing</a></li>
                <li class='active'>Floral Print Buttoned</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>

            <div class='col-md-12'>
                <div class="detail-block">
                    <div class="row  wow fadeInUp">

                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product">
                                    @if ($product->image1)
                                    <div class="single-product-gallery-item zoom" id="slide1">
                                        <a  data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                                            <img id="image" class="img-responsive" alt=""  src="{{asset($product->image1)}}" data-echo="{{asset($product->image1)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    @endif

                                    @if ($product->image2)
                                    <div class="single-product-gallery-item zoom" id="slide2">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p9.jpg">
                                            <img class="img-responsive" alt="" src="{{asset($product->image2)}}" data-echo="{{asset($product->image2)}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                     @endif

                                     @if ($product->image3)
                                    <div class="single-product-gallery-item zoom" id="slide3">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p10.jpg">
                                            <img class="img-responsive" alt="" src="{{asset($product->image3)}}" data-echo="{{asset($product->image3)}}"  />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                     @endif

                                    @if ($product->image4)
                                    <div class="single-product-gallery-item zoom" id="slide4">
                                        <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p11.jpg">
                                            <img class="img-responsive" alt="" src="{{asset($product->image4)}}" data-echo="{{asset($product->image4)}}"  />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                    @endif


                                </div><!-- /.single-product-slider -->


                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails">

                                        @if ($product->image1)
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                                <img class="img-responsive" width="85" alt="" src="{{asset($product->image1)}}" data-echo="{{asset($product->image1)}}" />
                                            </a>
                                        </div>
                                        @endif

                                        @if ($product->image2)
                                        <div class="item">
                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                                <img class="img-responsive" width="85" alt="" src="{{asset($product->image2)}}" data-echo="{{asset($product->image2)}}"/>
                                            </a>
                                        </div>
                                        @endif

                                        @if ($product->image3)
                                        <div class="item">

                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                                <img class="img-responsive" width="85" alt="" src="{{asset($product->image3)}}" data-echo="{{asset($product->image3)}}" />
                                            </a>
                                        </div>
                                        @endif


                                        @if ($product->image4)
                                        <div class="item">
                                            <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide4">
                                                <img class="img-responsive" width="85" alt="" src="{{asset($product->image4)}}" data-echo="{{asset($product->image4)}}" />
                                            </a>
                                        </div>
                                        @endif


                                    </div><!-- /#owl-single-product-thumbnails -->



                                </div><!-- /.gallery-thumbs -->

                            </div><!-- /.single-product-gallery -->
                        </div><!-- /.gallery-holder -->
                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">
                                <h1 class="name" id="pro_name">{{$product->product_name}}</h1>

                                <div class="rating-reviews m-t-20">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="rating rateit-small"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="reviews">
                                                <a href="#" class="lnk">(13 Reviews)</a>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.rating-reviews -->

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Availability :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">In Stock</span>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                    {{$product->product_description}}
                                </div><!-- /.description-container -->

                                <div class="price-container info-container m-t-20">
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span id="product_price" class="price">{{$product->selling_price}}</span>
                                                <span class="price-strike">900</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="favorite-button m-t-10">
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                    <i class="fa fa-signal"></i>
                                                </a>
                                                <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->



                                <div class="quantity-container info-container">

                                    <div class="row quantity-size-container">


                                        <fieldset>
                                            @foreach($productInfo as $pinfo)
                                                @if($pinfo->size)
                                                    @if ($loop->first)
                                                        <label>Size: </label>
                                                        <input onclick="updateAvailabelQuantity()" id="{{$pinfo->size}}" class="radio-inline__input"
                                                               type="radio" name="size" value="{{$pinfo->size}}"
                                                               checked="checked"/>
                                                        <label class="radio-inline__label" for="{{$pinfo->size}}">
                                                            {{$pinfo->size}}
                                                        </label>
                                                    @else
                                                        <input onclick="updateAvailabelQuantity()" id="{{$pinfo->size}}" class="radio-inline__input"
                                                               type="radio" name="size" value="{{$pinfo->size}}"/>
                                                        <label class="radio-inline__label" for="{{$pinfo->size}}">
                                                            {{$pinfo->size}}
                                                        </label>

                                                    @endif
                                                @endif
                                            @endforeach

                                        </fieldset>


                                        <fieldset>
                                            @foreach($productInfo as $pinfo)
                                                @if($pinfo->color)

                                                    @if ($loop->first)
                                                        <label>Color: </label>
                                                        <input onclick="updateAvailabelQuantity()" id="{{$pinfo->color}}" class="radio-inline__input"
                                                               type="radio" name="color" value="{{$pinfo->color}}"
                                                               checked="checked"/>
                                                        <label class="radio-inline__label" for="{{$pinfo->color}}">
                                                            {{$pinfo->color}}
                                                        </label>

                                                    @else

                                                        <input onclick="updateAvailabelQuantity()" id="{{$pinfo->color}}" class="radio-inline__input"
                                                               type="radio" name="color" value="{{$pinfo->color}}"/>
                                                        <label class="radio-inline__label" for="{{$pinfo->color}}">
                                                            {{$pinfo->color}}
                                                        </label>
                                                    @endif
                                                @endif
                                            @endforeach

                                        </fieldset>

                         <span style="display: none"  id="available_quantity_product">{{$product->available_quantity}}</span>
                         <span style="display: none" id="product_id">{{$product->id}}</span>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                            <span  id="maxAvailable" style="color: red; font-size: 20px; visibility: hidden" class="label">Quantity Available : 5</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    {{--<div class="arrows">--}}
                                                        {{--<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>--}}
                                                        {{--<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>--}}
                                                    {{--</div>--}}
                                                    <input id="qtyToBeAddedInCart" type="number" min="0" value="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">
                                            <button  type="button" onclick="addToCart()" id="addToCartButton"  class="btn btn-primary disabled"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
                                        </div>


                                    </div>
                                </div>






                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>

                <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">

                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text">{{$product->product_description}}</p>
                                    </div>
                                </div><!-- /.tab-pane -->

                                <div id="review" class="tab-pane">
                                    <div class="product-tab">

                                        <div class="product-reviews">
                                            <h4 class="title">Customer Reviews</h4>

                                            <div class="reviews">
                                                <div class="review">
                                                    <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                                    <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                                </div>

                                            </div><!-- /.reviews -->
                                        </div><!-- /.product-reviews -->



                                        <div class="product-add-review">
                                            <h4 class="title">Write your own review</h4>
                                            <div class="review-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="cell-label">&nbsp;</th>
                                                            <th>1 star</th>
                                                            <th>2 stars</th>
                                                            <th>3 stars</th>
                                                            <th>4 stars</th>
                                                            <th>5 stars</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="cell-label">Quality</td>
                                                            <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cell-label">Price</td>
                                                            <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cell-label">Value</td>
                                                            <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                            <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table><!-- /.table .table-bordered -->
                                                </div><!-- /.table-responsive -->
                                            </div><!-- /.review-table -->

                                            <div class="review-form">
                                                <div class="form-container">
                                                    <form role="form" class="cnt-form">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                    <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                </div><!-- /.form-group -->
                                                                <div class="form-group">
                                                                    <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                    <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                </div><!-- /.form-group -->
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                    <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                        </div><!-- /.row -->

                                                        <div class="action text-right">
                                                            <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                        </div><!-- /.action -->

                                                    </form><!-- /.cnt-form -->
                                                </div><!-- /.form-container -->
                                            </div><!-- /.review-form -->

                                        </div><!-- /.product-add-review -->

                                    </div><!-- /.product-tab -->
                                </div><!-- /.tab-pane -->

                                <div id="tags" class="tab-pane">
                                    <div class="product-tag">

                                        <h4 class="title">Product Tags</h4>
                                        <form role="form" class="form-inline form-cnt">
                                            <div class="form-container">

                                                <div class="form-group">
                                                    <label for="exampleInputTag">Add Your Tags: </label>
                                                    <input type="email" id="exampleInputTag" class="form-control txt">


                                                </div>

                                                <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                            </div><!-- /.form-container -->
                                        </form><!-- /.form-cnt -->

                                        <form role="form" class="form-inline form-cnt">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                            </div>
                                        </form><!-- /.form-cnt -->

                                    </div><!-- /.product-tab -->
                                </div><!-- /.tab-pane -->

                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">upsell products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                        @foreach($upSellProducts as $upSellProduct)
                            <div class="item item-carousel">


                                <div class="products">

                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="{{route('product.details', ['id' => $upSellProduct->id])}}"><img  src="{{asset($upSellProduct->image1)}}"
                                                                           alt=""></a>
                                            </div><!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="detail.html">{{$upSellProduct->product_name}}</a>
                                            </h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>


                                            <div class="product-price">
				                                     <span class="price">{{$upSellProduct->selling_price}}</span>
                                                   <span class="price-before-discount">$ 800</span>
                                            </div>

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to
                                                            cart
                                                        </button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="lnk">
                                                        <a class="add-to-cart" href="detail.html" title="Compare">
                                                            <i class="fa fa-signal"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->
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


@section('scripts')
    <script src="{{ URL::asset('assets/js/jquery.zoom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/product-details.js') }}"></script>
    <script src="{{ URL::asset('assets/js/cart.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#slide1').zoom();
            $('#slide2').zoom();
            $('#slide3').zoom();
            $('#slide4').zoom();
        });
    </script>
@endsection