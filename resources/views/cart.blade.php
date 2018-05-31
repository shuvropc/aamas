@extends('layouts.user-layout-without-sidebar')


@section('title', 'Shopping Cart')


@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div>

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="cart-romove item">Remove</th>
                                <th class="cart-description item">Image</th>
                                <th class="cart-product-name item">Product Name</th>
                                <th class="cart-edit item">Edit</th>
                                <th class="cart-qty item">Quantity</th>
                                <th class="cart-sub-total item">Subtotal</th>
                                <th class="cart-total last-item">Grandtotal</th>
                            </tr>
                            </thead><!-- /thead -->
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="shopping-cart-btn">
							<span class="">
								<a href="#" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
							</span>
                                    </div><!-- /.shopping-cart-btn -->
                                </td>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                <td class="cart-image">
                                    <a class="entry-thumbnail" href="detail.html">
                                        <img src="assets/images/products/p1.jpg" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="rating rateit-small rateit"><button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button><div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="reviews">
                                                (06 Reviews)
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Blue</span></span>
                                    </div>
                                </td>
                                <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                                <td class="cart-product-quantity">
                                    <div class="quant-input">
                                        <div class="arrows">
                                            <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                            <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                        </div>
                                        <input type="text" value="1">
                                    </div>
                                </td>
                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                            </tr>
                            <tr>
                                <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                <td class="cart-image">
                                    <a class="entry-thumbnail" href="detail.html">
                                        <img src="assets/images/products/p2.jpg" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <h4 class="cart-product-description"><a href="detail.html">Floral Print Buttoned</a></h4>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="rating rateit-small rateit"><button id="rateit-reset-3" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-3" style="display: none;"></button><div id="rateit-range-3" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-3" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="reviews">
                                                (06 Reviews)
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Pink</span></span>
                                    </div>
                                </td>
                                <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                                <td class="cart-product-quantity">
                                    <div class="cart-quantity">
                                        <div class="quant-input">
                                            <div class="arrows">
                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                            </div>
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                            </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Estimate shipping and tax</span>
                                <p>Enter your destination to get shipping and tax.</p>
                            </th>
                        </tr>
                        </thead><!-- /thead -->
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="info-title control-label">Country <span>*</span></label>
                                    <select class="form-control unicase-form-control selectpicker" style="display: none;">
                                        <option>--Select options--</option>
                                        <option>India</option>
                                        <option>SriLanka</option>
                                        <option>united kingdom</option>
                                        <option>saudi arabia</option>
                                        <option>united arab emirates</option>
                                    </select><div class="btn-group bootstrap-select form-control unicase-form-control"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="--Select options--"><span class="filter-option pull-left">--Select options--</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="--Select options--"><span class="text">--Select options--</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="India"><span class="text">India</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="SriLanka"><span class="text">SriLanka</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="united kingdom"><span class="text">united kingdom</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="saudi arabia"><span class="text">saudi arabia</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="united arab emirates"><span class="text">united arab emirates</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li></ul></div></div>
                                </div>
                                <div class="form-group">
                                    <label class="info-title control-label">State/Province <span>*</span></label>
                                    <select class="form-control unicase-form-control selectpicker" style="display: none;">
                                        <option>--Select options--</option>
                                        <option>TamilNadu</option>
                                        <option>Kerala</option>
                                        <option>Andhra Pradesh</option>
                                        <option>Karnataka</option>
                                        <option>Madhya Pradesh</option>
                                    </select><div class="btn-group bootstrap-select form-control unicase-form-control"><button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" title="--Select options--"><span class="filter-option pull-left">--Select options--</span>&nbsp;<span class="caret"></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner selectpicker" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-normalized-text="--Select options--"><span class="text">--Select options--</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-normalized-text="TamilNadu"><span class="text">TamilNadu</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-normalized-text="Kerala"><span class="text">Kerala</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-normalized-text="Andhra Pradesh"><span class="text">Andhra Pradesh</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-normalized-text="Karnataka"><span class="text">Karnataka</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-normalized-text="Madhya Pradesh"><span class="text">Madhya Pradesh</span><span class="glyphicon glyphicon-ok icon-ok check-mark"></span></a></li></ul></div></div>
                                </div>
                                <div class="form-group">
                                    <label class="info-title control-label">Zip/Postal Code</label>
                                    <input type="text" class="form-control unicase-form-control text-input" placeholder="">
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Discount Code</span>
                                <p>Enter your coupon code if you have one..</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                                </div>
                                <div class="clearfix pull-right">
                                    <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                </div>
                            </td>
                        </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="cart-sub-total">
                                    Subtotal<span class="inner-left-md">$600.00</span>
                                </div>
                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md">$600.00</span>
                                </div>
                            </th>
                        </tr>
                        </thead><!-- /thead -->
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <button type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                    <span class="">Checkout with multiples address!</span>
                                </div>
                            </td>
                        </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
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