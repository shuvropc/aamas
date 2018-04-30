


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seven Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />


    <link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/header3.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/cart.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>



{{--Javascript--}}

<script type="text/javascript" src="{{asset('js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@section('styles')

@show

</head>

{{--<body class="animated-css home-construction-v3" data-scrolling-animations="false">--}}
<body>

<div class="sp-body">
    <header id="header" class="paralax header" style=" background-color: grey">
        <div class="header-top">
            <div class="container">
                <div class="header-container clearfix">
                    <a href="{{route('homepage')}}" class="logo pull-left"></a>
                    <div class="header-nav navbar navbar-main-slide pull-left">
                        <i class="fa fa-bars mobileMenuNav mobileMenuSwitcher onlyMobile"></i>
                        <nav class="menu-container">
                            <i class="fa fa-times close-menu mobileMenuSwitcher onlyMobile"></i>
                            <ul class="nav navbar-nav navbar-main">
                                <li><a href="{{route('homepage')}}">Home </a></li>
                                <!--<li class="dropdown">-->
                                <!--<a data-toggle="dropdown" class="dropdown-toggle" href="category.html">Shop <i class="fa fa-angle-down customColor"></i></a>-->
                                <!--<ul class="dropdown-menu">-->
                                <!--<li><a href="#">Category Version 1</a></li>-->
                                <!--<li><a href="#">Category Version 2</a></li>-->
                                <!--<li><a href="#">Category Version 2</a></li>-->
                                <!--<li><a href="#">Category Version 2</a></li>-->
                                <!--<li><a href="#">Category Version 2</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <li>
                                    <div class="dropdown">
                                        <a class="cd-dropdown-trigger" href="#0">Shop</a>
                                        <nav class="cd-dropdown">
                                            <h2>Title</h2>
                                            <a href="#0" class="cd-close">Close</a>
                                            <ul class="cd-dropdown-content">
                                                <li class="has-children">
                                                    <a href="http://codyhouse.co/?p=748">Clothing</a>

                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Clothing</a></li>
                                                        <li class="has-children">
                                                            <a href="http://codyhouse.co/?p=748">Accessories</a>

                                                            <ul class="is-hidden">
                                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                                <li class="has-children">
                                                                    <a href="#0">Beanies</a>

                                                                    <ul class="is-hidden">
                                                                        <li class="go-back"><a href="#0">Accessories</a></li>
                                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Benies</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Caps &amp; Hats</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Gifts</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Scarves &amp; Snoods</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="has-children">
                                                                    <a href="#0">Caps &amp; Hats</a>

                                                                    <ul class="is-hidden">
                                                                        <li class="go-back"><a href="#0">Accessories</a></li>
                                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Caps &amp; Hats</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Beanies</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Caps</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Hats</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                                            </ul>
                                                        </li>

                                                        <li class="has-children">
                                                            <a href="http://codyhouse.co/?p=748">Bottoms</a>

                                                            <ul class="is-hidden">
                                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Bottoms</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Casual Trousers</a></li>
                                                                <li class="has-children">
                                                                    <a href="#0">Jeans</a>

                                                                    <ul class="is-hidden">
                                                                        <li class="go-back"><a href="#0">Bottoms</a></li>
                                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">All Jeans</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Ripped</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Skinny</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Slim</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Straight</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#0">Leggings</a></li>
                                                                <li><a href="#0">Shorts</a></li>
                                                            </ul>
                                                        </li>

                                                        <li class="has-children">
                                                            <a href="http://codyhouse.co/?p=748">Jackets</a>

                                                            <ul class="is-hidden">
                                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Jackets</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Blazers</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Bomber jackets</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Denim Jackets</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Duffle Coats</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Leather Jackets</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Parkas</a></li>
                                                            </ul>
                                                        </li>

                                                        <li class="has-children">
                                                            <a href="http://codyhouse.co/?p=748">Tops</a>

                                                            <ul class="is-hidden">
                                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Tops</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Cardigans</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Coats</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Polo Shirts</a></li>
                                                                <li><a href="http://codyhouse.co/?p=748">Shirts</a></li>
                                                                <li class="has-children">
                                                                    <a href="#0">T-Shirts</a>

                                                                    <ul class="is-hidden">
                                                                        <li class="go-back"><a href="#0">Tops</a></li>
                                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">All T-shirts</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Plain</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Print</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Striped</a></li>
                                                                        <li><a href="http://codyhouse.co/?p=748">Long sleeved</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="http://codyhouse.co/?p=748">Vests</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul> <!-- .cd-secondary-dropdown -->
                                                </li> <!-- .has-children -->

                                                <li class="has-children">
                                                    <a href="http://codyhouse.co/?p=748">Gallery</a>

                                                    <ul class="cd-dropdown-gallery is-hidden">
                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Gallery</a></li>
                                                        <li>
                                                            <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                                <img src="img/img.png" alt="Product Image">
                                                                <h3>Product #1</h3>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                                <img src="img/img.png" alt="Product Image">
                                                                <h3>Product #2</h3>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                                <img src="img/img.png" alt="Product Image">
                                                                <h3>Product #3</h3>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                                <img src="img/img.png" alt="Product Image">
                                                                <h3>Product #4</h3>
                                                            </a>
                                                        </li>
                                                    </ul> <!-- .cd-dropdown-gallery -->
                                                </li> <!-- .has-children -->

                                                <li class="has-children">
                                                    <a href="http://codyhouse.co/?p=748">Services</a>
                                                    <ul class="cd-dropdown-icons is-hidden">
                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                        <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                                        <li>
                                                            <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #1</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #2</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #3</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #4</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #5</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #6</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #7</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #8</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #9</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #10</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #11</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                                <h3>Service #12</h3>
                                                                <p>This is the item description</p>
                                                            </a>
                                                        </li>

                                                    </ul> <!-- .cd-dropdown-icons -->
                                                </li> <!-- .has-children -->

                                                <li class="cd-divider">Divider</li>

                                                <li><a href="http://codyhouse.co/?p=748">Page 1</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Page 2</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Page 3</a></li>
                                            </ul> <!-- .cd-dropdown-content -->
                                        </nav> <!-- .cd-dropdown -->
                                    </div>
                                </li>
                                <li><a target="_blank" href="{{route('men.homepage')}}">MEN </a></li>
                                <li><a target="_blank" href="{{route('women.homepage')}}">WOMEN</a></li>
                                <li><a target="_blank" href="{{route('electronics.homepage')}}">ELECTRONICS</a></li>
                                <li><a href="product-details-2.html">SHOES</a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="blog.html">BLOG <i class="fa fa-angle-down customColor"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog Version 1</a></li>
                                        <li><a href="blog-2.html">Blog Version 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-post.html">Post</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right pull-right">
                        <ul class="header-right-nav">
                            <li><a href="#" class="font-additional color-main text-uppercase hover-focus-color">MY ACCOUNT</a></li>
                            <li><a href="#" data-target=".example-modal-lg" data-toggle="modal" class="font-additional color-main text-uppercase hover-focus-color"><span class="font-icon icon-magnifier" aria-hidden="true"></span></a></li>
                            <li class="header-cart">
                                <a href="{{route('cart')}}" class="font-additional color-main text-uppercase hover-focus-color">
                                    <span class="font-icon icon-bag" aria-hidden="true"></span>
                                    <span class="cart-qty font-main font-weight-semibold color-main customBgColor circle">2</span>
                                </a>
                                <div class="header-cart_product clearfix">
                                    <h3 class="font-additional font-weight-bold">Recently added item(s)</h3>
                                    <ul class="header-cart_product_list">
                                        <li>
                                            <div class="header-cart_product_list_item clearfix">
                                                <a class="item-preview" href="product-details.html"><img src="media/70x70/1.jpg" alt="Product"></a>
                                                <h4><a class="font-additional font-weight-normal hover-focus-color" href="product-details.html">Stylish Wear</a></h4>
                                                <span class="item-cat font-main font-weight-normal"><a class="hover-focus-color" href="#">Men</a></span>
                                                <span class="item-price font-additional font-weight-normal customColor">37.15 USD</span>
                                                <a class="item-del hover-focus-color" href="#"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="header-cart_product_list_item clearfix">
                                                <a class="item-preview" href="product-details.html"><img src="media/70x70/2.jpg" alt="Product"></a>
                                                <h4><a class="font-additional font-weight-normal hover-focus-color" href="product-details.html">Bag</a></h4>
                                                <span class="item-cat font-main font-weight-normal"><a class="hover-focus-color" href="#">Accessories</a></span>
                                                <span class="item-price font-additional font-weight-normal customColor">60.10 USD</span>
                                                <a class="item-del hover-focus-color" href="#"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="cart-total text-right font-additional font-weight-normal">Subtotal <span class="customColor">$97.25</span></div>
                                    <div class="cart-buttons text-right">
                                        <button class="btn btn-white font-additional font-weight-bold hvr-shutter-out-horizontal before-bg">View Cart</button>
                                        <button class="btn btn-white font-additional font-weight-bold hvr-shutter-out-horizontal before-bg">Checkout</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>


@section('pagecontent')

@show

<script type="text/javascript" src="{{asset('js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.placeholder.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/smoothscroll.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/classie.js') }}"></script>


<script type="text/javascript" src="{{asset('plugins/loader/js/classie.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/loader/js/pathLoader.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/loader/js/main.js') }}"></script>


<script type="text/javascript" src="{{asset('js/classie.js') }}"></script>

<script type="text/javascript" src="{{asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/isotope/jquery.isotope.min.js') }}"></script>

<script type="text/javascript" src="{{asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/cssua.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/cart.js') }}"></script>
<script type="text/javascript" src="{{asset('js/cart.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.menu-aim.js') }}"></script>
<script type="text/javascript" src="{{asset('js/main.js') }}"></script>

@section('scripts')

@show

</body>

</html>