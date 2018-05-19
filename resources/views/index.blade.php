@extends('layouts.userheader')

@section('pagecontent')



    <div class="sp-body">


        <header id="header" class="paralax header-index" style="background-image: url('media/paralax/1.jpg');">

            <div class="container header-content">
                <span class="header-subtitle font-third font-weight-light color-main wow zoomIn" data-wow-delay="0.5s">get upto %70 off</span>
                <h1 class="half-title clearfix">
                    <span class="half-title_left font-additional font-weight-normal color-main wow fadeInLeftBig" data-wow-delay="0.5s">FASHION<br>WITH</span>
                    <span class="half-title_right font-additional font-weight-bold color-main wow fadeInRightBig" data-wow-delay="0.5s">STYLE</span>
                </h1>
                <div class="text-center">
                    <div class="starSeparator wow zoomIn" data-wow-delay="0.5s">
                        <span aria-hidden="true" class="icon-star"></span>
                    </div>
                </div>
                <div class="header-buttons">
                    <a href="product-details.html" class="btn button-border font-additional font-weight-bold hvr-rectangle-out hover-focus-bg hover-focus-border before-bg wow fadeInLeft" data-wow-delay="0.5s">SHOP NOW</a>
                    <a href="category.html" class="btn button-border font-additional font-weight-bold hvr-rectangle-out hover-focus-bg hover-focus-border before-bg wow fadeInRight" data-wow-delay="0.5s">VIEW ALL</a>
                </div>
            </div>
            <div class="header-overlay"></div>
        </header>

        <section id="categories">
            <div class="container clearfix">
                <ul class="category-images">
                    <li class="grid right-space two-width">
                        <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="media/categories/5.jpg" alt="Category">
                            <figcaption>
                                <div class="category-images_content">
                                    <h2 class="font-third font-weight-light text-uppercase color-main">elegant style sunglasses</h2>
                                    <p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">VIEW ALL COLLECTION</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInRight" data-wow-delay="0.3s">
                            <img src="media/categories/4.jpg" alt="Category">
                            <figcaption>
                                <div class="category-images_content">
                                    <h2 class="font-third font-weight-light text-uppercase color-main">MEN SHOES</h2>
                                    <p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">SALE 50%</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="media/categories/1.jpg" alt="Category">
                            <figcaption>
                                <div class="category-images_content">
                                    <h2 class="font-third font-weight-light text-uppercase color-main">FOR WOMEN</h2>
                                    <p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">SPRING COLLECTION</p>
                                </div>
                                <a href="{{route('women.homepage')}}">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid left-space right-space">
                        <figure class="effect-bubba wow fadeInUp" data-wow-delay="0.3s">
                            <img src="media/categories/2.jpg" alt="Category">
                            <figcaption>
                                <div class="category-images_content">
                                    <h2 class="font-third font-weight-light text-uppercase color-main">FOOT WEAR</h2>
                                    <p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">LATEST ARRIVALS</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid">
                        <figure class="effect-bubba wow fadeInRight" data-wow-delay="0.3s">
                            <img src="media/categories/3.jpg" alt="Category">
                            <figcaption>
                                <div class="category-images_content">
                                    <h2 class="font-third font-weight-light text-uppercase color-main">FOR MEN</h2>
                                    <p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">TRENDS 2015</p>
                                </div>
                                <a href="{{route('men.homepage')}}">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <section id="slider" class="slider-container slider-top-pagination">

            <!--<div class="container">-->
            <!--<h2 class="title font-additional font-weight-bold text-uppercase wow zoomIn" data-wow-delay="0.3s">FRESH ARRIVALS</h2>-->
            <!--<span class="subTitle font-additional font-weight-normal text-uppercase wow zoomIn" data-wow-delay="0.3s">SED FELIS PRAESENT DONEC BLAND</span>-->
            <!--<div class="starSeparatorBox clearfix">-->
            <!--<div class="starSeparator wow zoomIn" data-wow-delay="0.3s">-->
            <!--<span aria-hidden="true" class="icon-star"></span>-->
            <!--</div>-->
            <!--<div id="owl-product-slider" class="enable-owl-carousel owl-product-slider owl-top-pagination owl-carousel owl-theme wow fadeInUp" data-wow-delay="0.7s" data-navigation="true" data-pagination="false" data-single-item="false" data-auto-play="false" data-transition-style="false" data-main-text-animation="false" data-min600="2" data-min800="3" data-min1200="4">-->
            <!--<div class="item">-->
            <!--<div class="product-item hvr-underline-from-center">-->
            <!--<div class="product-item_body product-border">-->
            <!--<img alt="Product" src="media/270x320/1.jpg" class="product-item_image">-->
            <!--<a href="product-details.html" class="product-item_link">-->
            <!--<span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>-->
            <!--</a>-->
            <!--<ul class="product-item_info transition">-->
            <!--<li>-->
            <!--<a>-->
            <!--<button class=" cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button&#45;&#45;icon mdl-js-button mdl-js-ripple-effect">-->
            <!--<i class="material-icons">add_shopping_cart</i>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>-->
            <!--</button>-->
            <!--</a>-->
            <!--</li>-->

            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-eye"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-heart"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<a class="product-item_footer" href="product-details.html">-->
            <!--<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN CAP</div>-->
            <!--<div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--<div class="product-item hvr-underline-from-center">-->
            <!--<div class="product-item_body product-border">-->
            <!--<img alt="Product" src="media/270x320/2.jpg" class="product-item_image">-->
            <!--<a href="product-details.html" class="product-item_link">-->
            <!--<span class="product-item_new color-main font-additional text-uppercase circle">new</span>-->
            <!--</a>-->
            <!--<ul class="product-item_info transition">-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-bag"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-eye"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-heart"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<a class="product-item_footer" href="product-details.html">-->
            <!--<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">BLACK DRESS</div>-->
            <!--<div class="product-item_price font-additional font-weight-normal customColor">$560.00</div>-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--<div class="product-item hvr-underline-from-center">-->
            <!--<div class="product-item_body product-border">-->
            <!--<img alt="Product" src="media/270x320/3.jpg" class="product-item_image">-->
            <!--<a href="product-details.html" class="product-item_link">-->
            <!--<span class="product-item_outofstock color-main font-additional circle">OUT OF STOCK</span>-->
            <!--</a>-->
            <!--<ul class="product-item_info transition">-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-bag"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-eye"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-heart"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<a class="product-item_footer" href="product-details.html">-->
            <!--<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>-->
            <!--<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--<div class="product-item hvr-underline-from-center">-->
            <!--<div class="product-item_body product-border">-->
            <!--<img alt="Product" src="media/270x320/4.jpg" class="product-item_image">-->
            <!--<a href="product-details.html" class="product-item_link">-->
            <!--<span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>-->
            <!--</a>-->
            <!--<ul class="product-item_info transition">-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-bag"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-eye"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-heart"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<a class="product-item_footer" href="product-details.html">-->
            <!--<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>-->
            <!--<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--<div class="product-item hvr-underline-from-center">-->
            <!--<div class="product-item_body product-border">-->
            <!--<img alt="Product" src="media/270x320/2.jpg" class="product-item_image">-->
            <!--<a href="product-details.html" class="product-item_link">-->
            <!--<span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>-->
            <!--</a>-->
            <!--<ul class="product-item_info transition">-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-bag"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-eye"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">-->
            <!--<span aria-hidden="true" class="icon-heart"></span>-->
            <!--<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>-->
            <!--</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<a class="product-item_footer" href="product-details.html">-->
            <!--<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>-->
            <!--<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>-->
            <!--</a>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->




            <div class="mdl-grid mdl-grid--no-fullwidth">
                <div class="mdl-cell mdl-cell--12-col  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="animation-delay: 0.1s;">
                    <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Latest Products </h2>
                    <div class="oxy-divider oxy-divider--center  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.2s" style="animation-delay: 0.2s;">
                        <div class="oxy-divider__border"></div>
                    </div>
                </div>
            </div>



            <div class="mdl-grid mdl-grid--no-fullwidth">
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40 oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="animation-delay: 0.1s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-10-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-10-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">White Hat</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Hats</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style="width:80%">
                                                    <strong class="oxy-rating__stars">4.00</strong> out of 5 </span>
                                </div>
                            </div>
                            <div class="oxy-card-product__badge oxy-product-badge"> Sale </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <del>
                                    <span>£42</span>
                                </del>
                                <ins>
                                    <span>£16</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.2s" style="animation-delay: 0.2s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-2-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-2-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Bright Blue Sleeveless Dress</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Dresses</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 3.00 out of 5">
                                                <span style="width:60%">
                                                    <strong class="oxy-rating__stars">3.00</strong> out of 5 </span>
                                </div>
                            </div>
                            <div class="oxy-card-product__badge oxy-product-badge"> Sale </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">

                                <ins>
                                    <span>£18</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.3s" style="animation-delay: 0.3s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-3-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-3-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Two-Tone Tailored Jacket</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Jacket</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style="width:80%">
                                                    <strong class="oxy-rating__stars">4.00</strong> out of 5 </span>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <ins>
                                    <span>£14</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.4s" style="animation-delay: 0.4s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-24-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-24-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Printed One-Piece Swimsuit</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Swimsuits</a>,
                                                <a href="shop.html" rel="tag">Womens</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 5.00 out of 5">
                                                <span style="width:100%">
                                                    <strong class="oxy-rating__stars">5.00</strong> out of 5 </span>
                                </div>
                            </div>
                            <div class="oxy-card-product__badge oxy-product-badge"> Sale </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <del>
                                    <span>£29</span>
                                </del>
                                <ins>
                                    <span>£19</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="animation-delay: 0.1s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-6-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-6-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Black Top</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Top</a>,
                                                <a href="shop.html" rel="tag">Clothes</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style="width:80%">
                                                    <strong class="oxy-rating__stars">4.00</strong> out of 5 </span>
                                </div>
                            </div>
                            <div class="oxy-card-product__badge oxy-product-badge"> Sale </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <del>
                                    <span>£127</span>
                                </del>
                                <ins>
                                    <span>£54</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.2s" style="animation-delay: 0.2s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-29-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-29-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Sun Glasses</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Accesories</a>,
                                                <a href="shop.html" rel="tag">Sun Glasses</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 3.00 out of 5">
                                                <span style="width:60%">
                                                    <strong class="oxy-rating__stars">3.00</strong> out of 5 </span>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <ins>
                                    <span>£58</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.3s" style="animation-delay: 0.3s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-30-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-30-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Yellow Dress</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Dress</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 4.00 out of 5">
                                                <span style="width:80%">
                                                    <strong class="oxy-rating__stars">4.00</strong> out of 5 </span>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <ins>
                                    <span>£45</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation animated fadeIn" data-os-animation="fadeIn" data-os-animation-delay="0.4s" style="animation-delay: 0.4s;">
                    <!-- new card -->
                    <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                        <div class="mdl-card__media oxy-card-product__media">
                            <a href="single-product.html">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-26-a-medium-small-notinclude.jpg">
                                <img alt="some product" class="oxy-card-product__image" src="media/women/product-26-b-medium-small-notinclude.jpg"> </a>
                            <div class="mdl-card__title oxy-card-product__title">
                                <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                    <a href="single-product.html" class="mdl-typography--font-light">Legging</a>
                                </h3>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Clothes</a>,
                                                <a href="shop.html" rel="tag">Womens</a>
                                            </span>
                                <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 5.00 out of 5">
                                                <span style="width:100%">
                                                    <strong class="oxy-rating__stars">5.00</strong> out of 5 </span>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions oxy-card-product-actions">
                            <strong class="mdl-typography--headline oxy-product-price">
                                <ins>
                                    <span>£19</span>
                                </ins>
                            </strong>
                            <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
                                <i class="material-icons">add_shopping_cart</i>
                                <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                        </div>
                    </div>
                </div>
            </div>













        </section>
        <section id="banner">
            <div class="container banner-container wow fadeInUp" data-wow-delay="0.3s">
                <div class="banner-item grid">
                    <figure class="effect-bubba">
                        <img src="media/banner/1.jpg" alt="Banner">
                        <figcaption>
                            <h2 class="font-third font-weight-light text-uppercase color-main">free shipping on all</h2>
                            <div class="font-additional font-weight-bold text-uppercase customColor">orders over $75</div>
                            <p class="font-third font-weight-light text-uppercase color-main line-text line-text_white">get fastest deliverY in 2 days</p>
                            <a href="#">View more</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section id="collection">
            <div class="container relative">
                <div class="isotopeBox noTitle">
                    <div class="starSeparatorBox clearfix">
                        <ul id="filter" class="product-filter clearfix">
                            <li>
                                <a href="#" class="current btn font-additional font-weight-normal text-uppercase hover-focus-bg" data-filter=".newproducts">NEW PRODUCTS</a>
                            </li>
                            <li>
                                <a href="#" class="btn font-additional font-weight-normal text-uppercase hover-focus-bg" data-filter=".bestsellers">BEST SELLERS</a>
                            </li>
                            <li>
                                <a href="#" class="btn font-additional font-weight-normal text-uppercase hover-focus-bg" data-filter=".specials">SPECIALS</a>
                            </li>
                        </ul>
                        <div class="isotope-frame wow fadeInUp" data-wow-delay="0.3s">
                            <div class="isotope-filter">
                                <div class="isotope-item newproducts specials">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/5.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN CAP</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  newproducts bestsellers">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/6.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_new color-main font-additional text-uppercase circle">new</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">BLACK DRESS</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$560.00</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  newproducts specials">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/7.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html"></a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  newproducts bestsellers">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/8.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>
                                                <span class="product-item_outofstock color-main font-additional circle">OUT OF STOCK</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  bestsellers">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/1.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN CAP</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  specials">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/2.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_new color-main font-additional text-uppercase circle">new</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">BLACK DRESS</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$560.00</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item  bestsellers">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/3.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html"></a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="isotope-item specials">
                                    <div class="product-item hvr-underline-from-center">
                                        <div class="product-item_body">
                                            <img class="product-item_image" src="media/270x360/4.jpg" alt="Product">
                                            <a class="product-item_link" href="product-details.html">
                                                <span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>
                                                <span class="product-item_outofstock color-main font-additional circle">OUT OF STOCK</span>
                                            </a>
                                            <ul class="product-item_info transition">
                                                <li>
                                                    <a>
                                                        <button class="cart-icon oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                            <i class="material-icons">add_shopping_cart</i>
                                                            <div style="margin-bottom: 10px" class="add-to-cart-pos product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-eye" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-heart" aria-hidden="true"></span>
                                                        <div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="product-details.html" class="product-item_footer">
                                            <div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
                                            <div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="comments">
            <div class="container comments-box">
                <h3 class="title-small font-additional font-weight-bold wow zoomIn" data-wow-delay="0.3s">WHAT OUR CUSTOMERS SAY</h3>
                <div class="comments-slider">
                    <div class="starSeparator wow zoomIn" data-wow-delay="0.3s">
                        <span class="icon-star" aria-hidden="true"></span>
                    </div>
                    <ul class="bxslider" data-mode="vertical" data-slide-margin="50" data-min-slides="1" data-move-slides="1" data-pager="false" data-pager-custom="null" data-controls="true">
                        <li>
                            <div class="comment-slide-item">
                                <div class="comment-slide-item_text font-main text-center">Vtae sodales aliq um morbi no sem lacus port mollis. Nunc condime ntum metus eud molest ie.Sed consectetuer. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</div>
                                <div class="comment-slide-item_author">
                                    <i class="fa fa-quote-left customColor"></i>
                                    <span class="comment-slide-item_author_name font-additional">Smith John</span>
                                    <span class="comment-slide-item_author_desc font-additional">One Of The Happy Customer</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment-slide-item">
                                <div class="comment-slide-item_text font-main text-center">Vtae sodales aliq um morbi no sem lacus port mollis. Nunc condime ntum metus eud molest ie.Sed consectetuer. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</div>
                                <div class="comment-slide-item_author">
                                    <i class="fa fa-quote-left customColor"></i>
                                    <span class="comment-slide-item_author_name font-additional">Smith John</span>
                                    <span class="comment-slide-item_author_desc font-additional">One Of The Happy Customer</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment-slide-item">
                                <div class="comment-slide-item_text font-main text-center">Vtae sodales aliq um morbi no sem lacus port mollis. Nunc condime ntum metus eud molest ie.Sed consectetuer. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</div>
                                <div class="comment-slide-item_author">
                                    <i class="fa fa-quote-left customColor"></i>
                                    <span class="comment-slide-item_author_name font-additional">Smith John</span>
                                    <span class="comment-slide-item_author_desc font-additional">One Of The Happy Customer</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comment-slide-item">
                                <div class="comment-slide-item_text font-main text-center">Vtae sodales aliq um morbi no sem lacus port mollis. Nunc condime ntum metus eud molest ie.Sed consectetuer. Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</div>
                                <div class="comment-slide-item_author">
                                    <i class="fa fa-quote-left customColor"></i>
                                    <span class="comment-slide-item_author_name font-additional">Smith John</span>
                                    <span class="comment-slide-item_author_desc font-additional">One Of The Happy Customer</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="freeShpping" class="borderTopSeparator">
            <div class="container freeshpping-container">
                <div class="row">
                    <div class="freeshpping col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                        <div class="freeshpping-item font-additional wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="icon-globe-alt customColor" aria-hidden="true"></span>
                            FREE SHIPPING<br> WORLDWIDE
                        </div>
                    </div>
                    <div class="freeshpping col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                        <div class="freeshpping-item font-additional wow fadeInUp" data-wow-delay="0.3s">
                            <span class="icon-support customColor" aria-hidden="true"></span>
                            24/7 CUSTOMER<br> SUPPORT
                        </div>
                    </div>
                    <div class="freeshpping col-lg-4 col-md-4 col-sm-4 col-xs-12 clearfix">
                        <div class="freeshpping-item font-additional wow fadeInRight" data-wow-delay="0.3s">
                            <span class="icon-handbag customColor" aria-hidden="true"></span>
                            RETURNS AND<br> EXCHANGES
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="subscribe" class="subscribe-row background-container">
            <div class="container">
                <div class="subscribe-container clearfix wow fadeInUp" data-wow-delay="0.3s">
                    <div class="subscribe-desc font-additional font-weight-bold">SIGN UP FOR OUR MONTHLY NEWSLETTER</div>
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form action="//templines.us9.list-manage.com/subscribe/post?u=fe9a9cfcf8d73763bcc53f206&amp;id=319cafcc43" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group subscribe-field">
                                    <input type="email" value="" name="EMAIL" class="required email font-main color-third" id="mce-EMAIL">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_fe9a9cfcf8d73763bcc53f206_319cafcc43" tabindex="-1" value="">
                                </div>
                                <div class="subscribe-button">
                                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary font-additional hvr-wobble-bottom"> SUBSCRIBE </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <a class="goToTop font-additional color-main text-uppercase" href="#" id="scrollTop">
                <i class="fa fa-angle-up"></i>
                <span>Top</span>
            </a>
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
        </footer>
    </div>

    <div aria-hidden="false" role="dialog" tabindex="-1" class="modal fade example-modal-lg search-wrapper in">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <p class="clearfix"><button data-dismiss="modal" class="close" type="button"><span class="icon_close color-main" aria-hidden="true"></span></button></p>
                <form role="form" class="form-inline form-search">
                    <div class="form-group">
                        <label for="textsearch" class="sr-only">Enter text search</label>
                        <input type="text" placeholder="Enter text search" id="textsearch" class="form-control input-lg font-main font-weight-normal color-main">
                    </div>
                    <button class="btn btn-white font-additional font-weight-normal color-main text-uppercase hover-focus-bg" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-button--colored oxy-button-fab oxy-js-button-shopping-cart mdl-badge oxy-button-fab__badge" data-badge="0">
        <i class="material-icons">shopping_cart</i>
    </button>
    <div class="mdl-layout__drawer mdl-layout__drawer--right oxy-product-cart">
        <span class="mdl-layout-title">Cart</span>
        <div class="oxy-layout__divider"></div>
        <div class="oxy-product-cart__body">
            <ul class="oxy-list">
                <li class="oxy-list__item">
                    <a href="single-product.html" class="oxy-list__icon">
                        <img src="assets/images/products/product-1-b-extra-small-notinclude.jpg" alt="product thumbnail"> </a>
                    <div class="oxy-list__item-text">
                        <a href="single-product.html" class="oxy-list__title"> White Top </a>
                        <span class="oxy-list__subtitle"> £16.55 </span>
                    </div>
                    <div class="oxy-list__item-secondary-action">
                        <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </li>
                <li class="oxy-list__item">
                    <a href="single-product.html" class="oxy-list__icon">
                        <img src="assets/images/products/product-2-b-extra-small-notinclude.jpg" alt="product thumbnail"> </a>
                    <div class="oxy-list__item-text">
                        <a href="single-product.html" class="oxy-list__title"> Summer Dress </a>
                        <span class="oxy-list__subtitle"> £49.99 </span>
                    </div>
                    <div class="oxy-list__item-secondary-action">
                        <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </li>
                <li class="oxy-list__item">
                    <a href="single-product.html" class="oxy-list__icon">
                        <img src="assets/images/products/product-28-b-extra-small-notinclude.jpg" alt="product thumbnail"> </a>
                    <div class="oxy-list__item-text">
                        <a href="single-product.html" class="oxy-list__title"> Yellow office dress </a>
                        <span class="oxy-list__subtitle">
                                <del>£39.99</del>
                                <ins>£29.99</ins>
                            </span>
                    </div>
                    <div class="oxy-list__item-secondary-action">
                        <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </li>
                <li class="oxy-list__item">
                    <a href="single-product.html" class="oxy-list__icon">
                        <img src="assets/images/products/product-23-b-extra-small-notinclude.jpg" alt="product thumbnail"> </a>
                    <div class="oxy-list__item-text">
                        <a href="single-product.html" class="oxy-list__title"> Black to black </a>
                        <span class="oxy-list__subtitle"> £36.99 </span>
                    </div>
                    <div class="oxy-list__item-secondary-action">
                        <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </li>
                <li class="oxy-list__item">
                    <a href="single-product.html" class="oxy-list__icon">
                        <img src="assets/images/products/product-22-a-extra-small-notinclude.jpg" alt="product thumbnail"> </a>
                    <div class="oxy-list__item-text">
                        <a href="single-product.html" class="oxy-list__title"> Summer Outfit </a>
                        <span class="oxy-list__subtitle"> £49.99 </span>
                    </div>
                    <div class="oxy-list__item-secondary-action">
                        <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                            <i class="material-icons">close</i>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="oxy-product-cart__actions">
                <div class="oxy-layout__divider"></div>
                <h3 class="oxy-product-cart__total"> Subtotal: $112.46 </h3>
                <div class="oxy-layout__divider"></div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                        <a href="cart.blade.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent oxy-full-width"> View Cart </a>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                        <a href="checkout.blade.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary oxy-full-width"> Checkout </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="side-cart-obfuscator" class="mdl-layout__obfuscator"></div>

@stop