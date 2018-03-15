@extends('layouts.userheader')

@section('styles')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Project</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" title="main">
    <script type="text/javascript">
        // For demo purposes only. Remove this script if you don't need the customizer
        if (sessionStorage.skin) {
            var defaultSkin = document.querySelector('link[title="main"]');
            defaultSkin.setAttribute('href', sessionStorage.skin);
        }
    </script>
@stop


@section('pagecontent')
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">

    <div class="mdl-layout__drawer">
        <a class="mdl-layout-title" href="index.html">
            <img src="assets/images/logo-dark.png" alt="FAB!" /> </a>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Homepages</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index.html">Homepage</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-banners.html">Banners</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-fixed-drawer.html">Side Menu</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-fixed-header.html">Fixed Header</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-scrolling-header.html">Scrolling Header</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-fixed-drawer-header.html">Fixed Header &amp; Menu</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="index-fixed-tabs.html">Fixed Tabs</a>
            </nav>
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Shop</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="shop.html">Shop No Sidebar</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="shop-left.html">Shop Left</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="shop-right.html">Shop Right</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="single-product.html">Single Product</a>
            </nav>
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Blog</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="posts.html">Blog No Sidebar</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="posts-left.html">Blog Left</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="posts-right.html">Blog Right</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="post.html">Single Post</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="post-left.html">Single Post Left</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="post-right.html">Single Post Right</a>
            </nav>
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Style</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="typography.html">Typography</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="grid.html">Grid</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="icons.html">Icons</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="elements.html">Elements</a>
            </nav>
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Contact Pages</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="contact.html">Contact Page</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="contact-2.html">Contact Page 2</a>
            </nav>
            <a class="mdl-navigation__link mdl-navigation__link--submenu" href="#">Page Templates</a>
            <nav class="mdl-navigation mdl-navigation__submenu">
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="page-card.html">Page With Card</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="page-left-sidebar.html">Left Sidebar Page</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="page-right-sidebar.html">Right Sidebar Page</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="page-fullwidth.html">Full Width Page</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="page-fullwidth-wide.html">Full Width Page wide</a>
                <a class="mdl-navigation__link mdl-navigation__submenu__link" href="404.html">404 page</a>
            </nav>
            <span class="mdl-navigation__link-divider"></span>
            <a class="mdl-navigation__link" href="customizer.html">
                <i class="material-icons mdl-navigation__icon">build</i> Customizer </a>
            <a class="mdl-navigation__link" href="cart.html">
                <i class="material-icons mdl-navigation__icon">shopping_basket</i> Cart </a>
            <a class="mdl-navigation__link" href="checkout.html">
                <i class="material-icons mdl-navigation__icon">credit_card</i> Checkout </a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="rev_slider_wrapper fullwidthbanner-container">
                    <div id="homepage-slider" class="rev_slider" data-version="5.0">
                        <ul>
                            <!-- SLIDE 1-->
                            <li data-title="Slide 1" data-index="slide-1" data-thumb="assets/images/sliders/homepage/slide-1-320x200.jpg">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/sliders/homepage/slide-1-full.jpg" alt="Slide 1" data-bgposition="center top" data-kenburns="on" data-duration="7000" data-scalestart="100" data-scaleend="110" data-offsetstart="-50 100" data-offsetend="100 -150" data-bgfit="105" data-bgfitend="100" data-bgpositionend="center bottom">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin oxy-color-light" data-x="left" data-hoffset="500" data-y="top" data-voffset="250" data-transform_in="o:0;e:Power4.easeIn;" data-transform_idle="o:1;s:1000;" data-transform_out="o:0;s:500;e:Power4.easeOut;" data-start="1000"> THIS IS FAB! </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme" data-x="left" data-y="top" data-hoffset="500" data-voffset="335" data-start="1500" data-transform_in="o:0;e:Power1.easeIn;" data-transform_idle="o:1;s:500;" data-transform_out="o:0;s:500;e:Power4.easeOut;" style="height: 1px; width: 200px;background: #fff;"> </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light oxy-color-light" data-x="left" data-y="top" data-hoffset="500" data-voffset="360" data-start="2000" data-transform_in="o:0;e:Power4.easeIn;" data-transform_idle="o:1;s:600;" data-transform_out="o:0;s:600;e:Power1.easeOut;">
                                    <p style="font-size: 21px; line-height: 1.5"> All the latest trends and labels are available.
                                        <br> Get ready for Autumn with our latest range of stylish clothing.
                                        <br>
                                        <strong>Free Delivery</strong> on all items over $50
                                        <br> </p>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--colored" data-x="left" data-y="top" data-hoffset="500" data-voffset="480" data-start="3000" data-transform_in="o:0;y:100;" data-transform_idle="x:0;o:1;s:600;" data-transform_out="o:0;s:800;e:Power1.easeOut;">
                                    <a href="#" style="color: #fff;">Shop Womens</a>
                                </div>
                            </li>
                            <!-- SLIDE 2-->
                            <li data-title="Slide 2" data-index="slide-2" data-thumb="assets/images/sliders/homepage/slide-2-320x200.jpg">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/sliders/homepage/slide-2-full.jpg" alt="slide2" data-bgposition="left top" data-kenburns="on" data-duration="7000" data-scalestart="100" data-scaleend="115" data-offsetstart="250 100" data-offsetend="-150 -50" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="left bottom">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin oxy-color-light" data-x="left" data-y="top" data-hoffset="720" data-voffset="250" data-start="1000" data-transform_in="o:0;" data-transform_idle="o:1;s:1000;" data-transform_out="o:0;s:600;"> SUMMER SALES </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme" data-x="left" data-y="top" data-hoffset="720" data-voffset="335" data-start="1000" data-transform_in="o:0;" data-transform_idle="o:1;s:800;" data-transform_out="o:0;s:600;" style="height: 1px; width: 100px;background: #fff;"> </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light oxy-color-light" data-x="left" data-y="top" data-voffset="360" data-hoffset="720" data-start="2000" data-transform_in="o:0;" data-transform_idle="o:1;s:800;" data-transform_out="o:0;s:600;">
                                    <p style="font-size: 21px; line-height: 1.5"> Stand out styles from all
                                        <br> your favourite brands.
                                        <br> Share your look with #FAB
                                        <br> </p>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--accent" data-x="left" data-y="top" data-hoffset="720" data-voffset="480" data-start="3000" data-transform_in="o:0;y:100;" data-transform_idle="x:0;o:1;s:600;" data-transform_out="o:0;s:600;">
                                    <a href="#" style="color: #fff;">Show now</a>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li data-title="Slide 3" data-index="slide-3" data-thumb="assets/images/sliders/homepage/slide-3-320x200.jpg">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/sliders/homepage/slide-3-full.jpg" alt="Slide 3" data-bgposition="left center" data-kenburns="on" data-duration="7000" data-scalestart="100" data-scaleend="115" data-offsetstart="-150 -200" data-offsetend="350 -450" data-ease="Linear.easeNone" data-bgfit="110" data-bgfitend="100" data-bgpositionend="left center">
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme mdl-typography--display-3 mdl-typography--font-thin" data-x="left" data-y="top" data-hoffset="550" data-voffset="250" data-start="1000" data-transform_in="o:0;" data-transform_idle="o:1;s:1000;" data-transform_out="o:0;s:600;"> CRAZY SALE! </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme" data-x="left" data-y="top" data-hoffset="550" data-voffset="335" data-start="1500" data-transform_in="o:0;" data-transform_idle="o:1;s:800;" data-transform_out="o:0;s:600;" style="height: 1px; width: 200px;background: #000;"> </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme mdl-typography--title mdl-typography--font-light" data-x="left" data-y="top" data-hoffset="550" data-voffset="360" data-start="2000" data-transform_in="o:0;" data-transform_idle="o:1;s:800;" data-transform_out="o:0;s:600;">
                                    <p style="font-size: 21px; line-height: 1.5"> Shop from over 850 of the best brands
                                        <br> including our own label.
                                        <br> Plus, get your daily fix of the freshest style,
                                        <br> celebrity and music news. </p>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme tp-caption-mdl-button mdl-button mdl-button--raised mdl-button--colored" data-x="left" data-y="top" data-hoffset="550" data-voffset="515" data-start="3000" data-transform_in="o:0;y:100;" data-transform_idle="x:0;o:1;s:600;" data-transform_out="o:0;s:600;">
                                    <a href="#" style="color: #fff;">Shop Womens</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-10 ">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <a href="#">
                            <img src="assets/images/banners/banner-01-medium-notinclude.jpg" class="oxy-image-responsive" alt="Banner 1" /> </a>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <a href="#">
                            <img src="assets/images/banners/banner-02-medium-notinclude.jpg" class="oxy-image-responsive" alt="Banner 2" /> </a>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone oxy-animation mdl-cell--hide-tablet" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <a href="#">
                            <img src="assets/images/banners/banner-03-medium-notinclude.jpg" class="oxy-image-responsive" alt="Banner 3" /> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Latest Products </h2>
                        <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-b-medium-small-notinclude.jpg" /> </a>
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
                                    <del>
                                        <span>£32</span>
                                    </del>
                                    <ins>
                                        <span>£18</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-24-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-24-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-6-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-6-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-29-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-29-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-30-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-30-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-tablet mdl-cell--4-col-phone  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-26-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-26-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-spacing">
                    <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="oxy-background-parallax">
                            <img src="assets/images/backgrounds/bg33-notinclude.jpg" alt="section background"> </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"></div>
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--middle oxy-color-light mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                            <h2 class="oxy-bigtext oxy-margin-top-100">
                                <span class="mdl-typography--text-uppercase mdl-typography--font-thin oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">Winter Sales</span>
                                <span class="mdl-typography--text-uppercase mdl-typography--font-medium oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Buy 2 get 1 free</span>
                            </h2>
                            <a class="mdl-button mdl-js-button  mdl-js-ripple-effect mdl-button--colored mdl-button--raised oxy-margin-bottom-100 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" href="shop.html">VIEW ALL PRODUCTS</a>
                        </div>
                        <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>
                    </div>
                    <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="oxy-background-parallax">
                            <img src="assets/images/backgrounds/bg31-notinclude.jpg" alt="section background"> </div>
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"></div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--middle oxy-color-light mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                            <h3 class="oxy-margin-top-150 mdl-typography--text-uppercase mdl-typography--font-thin oxy-color-light oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">New Collection</h3>
                            <p class="oxy-margin-bottom-150 oxy-color-light oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit asperiores, reprehenderit id! Molestias voluptas aspernatur illum dolores saepe, possimus quas expedita vero, voluptatibus cupiditate quasi sed eligendi, facilis minus eius. </p>
                        </div>
                        <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet mdl-cell--4-col-phone"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section oxy-margin-bottom-40">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Hot Products </h2>
                        <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-1-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-1-b-medium-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">White Jacket</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Jackets</a>
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
                                        <span>£186</span>
                                    </del>
                                    <ins>
                                        <span>£98</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-b-medium-notinclude.jpg" /> </a>
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
                                    <del>
                                        <span>£32</span>
                                    </del>
                                    <ins>
                                        <span>£18</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-b-medium-notinclude.jpg" /> </a>
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
                                    <del>
                                        <span>£22</span>
                                    </del>
                                    <ins>
                                        <span>£14</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-9-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-9-b-medium-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Swimwear</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Accesories</a>,
                                                <a href="shop.html" rel="tag">Women</a>
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
                                        <span>£74</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-29-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-29-b-medium-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Top Fancy</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Tops</a>
                                            </span>
                                    <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 3.00 out of 5">
                                                <span style="width:60%">
                                                    <strong class="oxy-rating__stars">3.00</strong> out of 5 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-card__actions oxy-card-product-actions">
                                <strong class="mdl-typography--headline oxy-product-price">
                                    <del>
                                        <span>£32</span>
                                    </del>
                                    <ins>
                                        <span>£18</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-11-a-medium-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-11-b-medium-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Amazing Hat</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Womens</a>,
                                                <a href="shop.html" rel="tag">Accessories</a>
                                            </span>
                                    <div class="oxy-rating oxy-card-product__rating oxy-card-product__rating--animated" title="Rated 3.00 out of 5">
                                                <span style="width:60%">
                                                    <strong class="oxy-rating__stars">3.00</strong> out of 5 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-card__actions oxy-card-product-actions">
                                <strong class="mdl-typography--headline oxy-product-price">
                                    <del>
                                        <span>£42</span>
                                    </del>
                                    <ins>
                                        <span>£24</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
                <img src="assets/images/backgrounds/bg9-notinclude.jpg" alt="section background"> </div>
            <div class="oxy-section__overlay"></div>
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-80 oxy-margin-bottom-20"> Never Miss An Offer</h2>
                    </div>
                </div>
                <form action="#" class="oxy-margin-bottom-80 oxy-color-light">
                    <div class="mdl-grid mdl-grid--no-fullwidth">
                        <div class="mdl-cell mdl-cell--3-col">
                            <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
                                <label class="mdl-textfield__label" for="signup-name">Your name</label>
                                <input class="mdl-textfield__input" type="text" id="signup-name" /> </div>
                        </div>
                        <div class="mdl-cell mdl-cell--3-col">
                            <div class="mdl-textfield mdl-js-textfield textfield-demo mdl-textfield--floating-label">
                                <label class="mdl-textfield__label" for="signup-email">Your email</label>
                                <input class="mdl-textfield__input" type="text" id="signup-email" /> </div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--middle">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-margin-bottom-10"> Sign Up </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> Featured Product </h2>
                        <div class="oxy-divider oxy-divider--center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <img class="oxy-image-responsive" src="assets/images/banners/banner-08-notinclude.png" alt="Featured Product" /> </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <h2 class="mdl-typography--headline  mdl-typography--font-light"> Lady In Red Night Shoes </h2>
                        <p class="mdl-typography--title  mdl-typography--font-light oxy-opacity-50 oxy-typography-line-height-normal oxy-margin-bottom-20"> Material Design Lite lets you add a Material Design look and feel to your websites. It doesn’t rely on any JavaScript frameworks and aims to optimize for cross-device use, gracefully degrade in older browsers, and offer an experience that is immediately accessible</p>
                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-spacing">
                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <div class="google-map" id="map" style="height:450px"></div>
                    </div>
                    <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone oxy-animation oxy-color-accent" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <div class="mdl-cell mdl-cell--12-col">
                            <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> Store Locator </h2>
                            <div class="oxy-divider oxy-divider--center">
                                <div class="oxy-divider__border"></div>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet  oxy-animation mdl-typography--text-center" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <h4 class="mdl-typography--title">Fab Shop</h4>
                            <p>Birmingham Bullring</p>
                            <p>MSU 8-9,Levels 7 &amp; 9</p>
                            <p>Birmingham B5 4BG</p>
                            <p>(44) 121 616 2169</p>
                        </div>
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--4-col-tablet oxy-animation mdl-typography--text-center" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <h4 class="mdl-typography--title">Hours</h4>
                            <p>Mon 9:30AM-8:00PM</p>
                            <p>Tue 9:30AM-8:00PM</p>
                            <p>Wed 9:30AM-8:00PM</p>
                            <p>Thu 9:30AM-8:00PM</p>
                            <p>Fri 9:30AM-8:00PM</p>
                        </div>
                        <div class="mdl-cell mdl-cell--1-col mdl-cell--8-col-tablet"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20 oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> Featured Products </h2>
                        <div class="oxy-divider oxy-divider--center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-b-medium-small-notinclude.jpg" /> </a>
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
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-1-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-1-b-medium-small-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">White Jacket</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Clothes</a>
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
                                        <span>£156</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-6-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-6-b-medium-small-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Black Top</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Tops</a>
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
                                        <span>£54</span>
                                    </del>
                                    <ins>
                                        <span>£26</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-7-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-7-b-medium-small-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Dress</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
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
                                        <span>£84</span>
                                    </del>
                                    <ins>
                                        <span>£72</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-14-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-14-b-medium-small-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">White Bag</a>
                                    </h3>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Women</a>,
                                                <a href="shop.html" rel="tag">Bags</a>
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
                                        <span>£79</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
                        <!-- new card -->
                        <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                            <div class="mdl-card__media oxy-card-product__media">
                                <a href="single-product.html">
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-19-a-medium-small-notinclude.jpg" />
                                    <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-19-b-medium-small-notinclude.jpg" /> </a>
                                <div class="mdl-card__title oxy-card-product__title">
                                    <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                        <a href="single-product.html" class="mdl-typography--font-light">Fashion Hat</a>
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
                                        <span>£85</span>
                                    </del>
                                    <ins>
                                        <span>£49</span>
                                    </ins>
                                </strong>
                                <button class="oxy-button-add-product oxy-js-button-add-product mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons">add_shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section oxy-color-primary oxy-margin-top-40">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 oxy-margin-bottom-40">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <i class="material-icons mdl-36 oxy-opacity-70">flight</i>
                        <h4 class="mdl-typography--title mdl-typography--font-regular">Fast Delivery</h4>
                        <p class="mdl-typography--font-light">Material Design Lite lets you add a Material Design look and feel to your websites. It doesn’t rely on any JavaScript frameworks and aims to optimize for cross-device use, gracefully degrade in older browsers, and offer an experience that is immediately accessible.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                        <i class="material-icons mdl-36 oxy-opacity-70">shopping_cart</i>
                        <h4 class="mdl-typography--title mdl-typography--font-regular">Secure Checkout</h4>
                        <p class="mdl-typography--font-light">Surfaces and edges of the material provide visual cues that are grounded in reality. The use of familiar tactile attributes helps users quickly understand affordances. Yet the flexibility of the material creates new affordances that supercede those in the physical world, without breaking the rules.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--text-center oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <i class="material-icons mdl-36 oxy-opacity-70">loyalty</i>
                        <h4 class="mdl-typography--title mdl-typography--font-regular">Free Returns</h4>
                        <p class="mdl-typography--font-light"> These elements do far more than please the eye. They create hierarchy, meaning, and focus. Deliberate color choices, edge-to-edge imagery, large-scale typography, and intentional white space create a bold and graphic interface that immerse the user in the experience.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section oxy-margin-bottom-40">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Reviews </h2>
                        <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-4-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> Motion respects and reinforces the user as the prime mover. Primary user actions are inflection points that initiate motion, transforming the whole design. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Ann Nickolson</a>
                                    <span> Senior, Amazon.com </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s" style="background-color:#ab46bc;">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-5-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> Surfaces and edges of the material provide visual cues that are grounded in reality.The use of familiar tactile attributes helps users quickly understand affordances. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Jack Samuel</a>
                                    <span> CEO, Amazon.com </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s" style="background-color:#7e57c2;">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-6-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> Motion is meaningful and appropriate, serving to focus attention and maintain continuity. Feedback is subtle yet clear. Transitions are efﬁcient yet coherent. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Christofer Doe</a>
                                    <span> Senior, Amazon.comfat </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="background-color:#e65100;">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-3-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> The foundational elements of print-based design—typography, grids, space, scale, color, and use of imagery—guide visual treatments. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Kate Jettings</a>
                                    <span> CEO, Amazon.com </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s" style="background-color:#fcc02c;">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-1-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> Yet the flexibility of the material creates new affordances that supercede those in the physical world, without breaking the rules of physics. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Jack Samuel</a>
                                    <span> CEO, Amazon.com </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-testimonial oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s" style="background-color:#c0ca33;">
                            <div class="mdl-card__media oxy-card-testimonial__media">
                                <div class="oxy-card-testimonial__avatar">
                                    <img src="assets/images/avatars/avatar-2-notinclude.jpg" alt="avatar" /> </div>
                                <div class="oxy-card-testimonial__text"> The fundamentals of light, surface, and movement are key to conveying how objects move, interact, and exist in space and in relation to each other. </div>
                                <div class="mdl-card__title oxy-card-testimonial__title">
                                    <a href="post.html">Christofer Doe</a>
                                    <span> Senior, Amazon.com </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oxy-section">
            <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
                <img src="assets/images/backgrounds/bg8-notinclude.jpg" alt="section background"> </div>
            <div class="oxy-section__overlay"></div>
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-80 oxy-margin-bottom-20 mdl-typography--text-center"> Get 10% off on your first order </h2>
                    </div>
                </div>
                <form action="#" class="oxy-margin-bottom-80 oxy-color-light mdl-typography--text-center">
                    <div class="mdl-grid mdl-grid--no-fullwidth">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--middle mdl-typography--text-center">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <label class="mdl-textfield__label" for="discount-email">Your email</label>
                                <input class="mdl-textfield__input" type="text" id="discount-email" /> </div>
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-margin-bottom-10 oxy-margin-left-30 oxy-margin-right-30"> Get a discount </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="oxy-section oxy-margin-bottom-40">
            <div class="oxy-section__content">
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--12-col  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                        <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Latest News </h2>
                        <div class="oxy-divider oxy-divider--center  oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="oxy-divider__border"></div>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid mdl-grid--no-fullwidth">
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-post oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="mdl-card__media oxy-card-post__media">
                                <img alt="some post" class="oxy-card-post__image" src="assets/images/posts/post1-medium-notinclude.jpg" />
                                <div class="mdl-card__title mdl-card__post-title oxy-card-post__title">
                                    <h2 class="mdl-card__title-text oxy-card-post__title-text">
                                        <a href="post.html">New Summer Collection</a>
                                    </h2>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-post__info">
                                                <a href="posts.html">Morris Onions</a> August 15, 2015 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-post oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                            <div class="mdl-card__media oxy-card-post__media">
                                <img alt="some post" class="oxy-card-post__image" src="assets/images/posts/post2-medium-notinclude.jpg" />
                                <div class="mdl-card__title mdl-card__post-title oxy-card-post__title">
                                    <h2 class="mdl-card__title-text oxy-card-post__title-text">
                                        <a href="post.html">Vintage Look is back</a>
                                    </h2>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-post__info">
                                                <a href="posts.html">Morris Onions</a> August 25, 2015 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-mobile">
                        <div class="mdl-card mdl-shadow--2dp oxy-card-post oxy-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                            <div class="mdl-card__media oxy-card-post__media">
                                <img alt="some post" class="oxy-card-post__image" src="assets/images/posts/post3-medium-notinclude.jpg" />
                                <div class="mdl-card__title mdl-card__post-title oxy-card-post__title">
                                    <h2 class="mdl-card__title-text oxy-card-post__title-text">
                                        <a href="post.html">Yellow, the new black</a>
                                    </h2>
                                    <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-post__info">
                                                <a href="posts.html">Mike Smith</a> September 14, 2015 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mdl-mega-footer oxy-color-primary">
            <div class="mdl-mega-footer--middle-section">
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">About Fab</h1>
                    <div class="mdl-mega-footer__widget">
                        <p> Material Design Lite lets you add a Material Design look and feel to your websites. It doesn’t rely on any JavaScript frameworks and aims to optimize for cross-device use. </p>
                        <p> An emphasis on user actions makes core functionality immediately apparent and provides waypoints for the user. </p>
                    </div>
                    <div class="mdl-mega-footer__widget">
                        <i class="fa fa-cc-mastercard"></i> &nbsp;
                        <i class="fa fa-cc-visa"></i> &nbsp;
                        <i class="fa fa-cc-amex"></i> &nbsp;
                        <i class="fa fa-cc-diners-club"></i> &nbsp;
                        <i class="fa fa-cc-paypal"></i> &nbsp;
                        <i class="fa fa-cc-jcb"></i>
                    </div>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Open Hours</h1>
                    <ul class="mdl-mega-footer--link-list mdl-mega-footer--link-list--bordered">
                        <li>Monday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 10:00 - 20:00</span>
                        </li>
                        <li>Tuesday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 12:00 - 21:00</span>
                        </li>
                        <li>Wednesday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 10:00 - 20:00</span>
                        </li>
                        <li>Thursday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 09:00 - 20:00</span>
                        </li>
                        <li>Friday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 08:00 - 18:00</span>
                        </li>
                        <li>Saturday
                            <span class="oxy-inline-block oxy-float-right oxy-margin-right-40"> 12:00 - 20:00</span>
                        </li>
                    </ul>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Latest Products</h1>
                    <div class="mdl-mega-footer__widget">
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-1-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-2-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-3-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-4-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-5-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-6-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-7-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-8-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-9-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-13-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-11-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                        <a href="single-product.html">
                            <img width="60" class="oxy-margin-bottom-10 oxy-margin-right-10" src="assets/images/products/product-12-b-small-notinclude.jpg" alt="product thumbnail"> </a>
                    </div>
                </div>
                <div class="mdl-mega-footer--drop-down-section">
                    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                    <h1 class="mdl-mega-footer--heading">Our Store</h1>
                    <div class="mdl-mega-footer__widget">
                        <p> Contact us any time, we would love to hear from you. </p>
                        <p> Birmingham Bulring
                            <br> MSU 8-9, Levels 7&amp;9
                            <br> Birmingham B5 4BG
                            <br/> (44) 121 616 2169
                            <br> </p>
                        <p>
                            <a href="#">fab.com</a>
                            <br> info@fab.com </p>
                        <p>
                            <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="fa fa-flickr"></i>
                            </a>
                            <a href="#" class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mdl-mega-footer--bottom-section">
                <div class="mdl-logo">Fab</div>
                <ul class="mdl-mega-footer--link-list">
                    <li>
                        <a href="page-card.html">Conditions</a>
                    </li>
                    <li>
                        <a href="page-card.html">Help</a>
                    </li>
                    <li>
                        <a href="page-card.html">Privacy</a>
                    </li>
                    <li>
                        <a href="page-card.html">Terms</a>
                    </li>
                </ul>
            </div>
        </footer>
    </main>
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
                    <a href="cart.html" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent oxy-full-width"> View Cart </a>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <a href="checkout.html" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary oxy-full-width"> Checkout </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="side-cart-obfuscator" class="mdl-layout__obfuscator"></div>
@stop


@section('scripts')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --><script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <script src="assets/js/theme.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>window.map = {
            map_type: 'ROADMAP',
            map_zoom: 15,
            map_style: 'blackwhite',
            map_scrollable: 'on',
            marker: 'show',
            label: ['London Royal'],
            address: '',
            latlng : ['51.511084, -0.133202'],
            center_latlng: '',
            markerURL: 'assets/images/marker.png',
            auto_center: true
        };
    </script>
    <script src="../js/smoothscroll.min.js"></script>
    @stop


