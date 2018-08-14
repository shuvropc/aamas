<html>

<head>
    <title>Aamas - @yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flipmart premium HTML5 & CSS3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->

    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('assets/css/blue.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-select.min.css') }}">


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.css') }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    @yield('styles')


</head>


<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">

                        @if(!empty(Session::get('user.name')))
                            <li><a href="{{url('user/profile')}}"><i class="icon fa fa-lock"></i>{{Session::get('user.name')}}</a></li>
                            <li><a href="{{url('/logout')}}"><i class="icon fa fa-lock"></i>Logout</a></li>
                        @else
                            <li><a href="{{url('user/login')}}"><i class="icon fa fa-lock"></i>Login</a></li>
                        @endif


                    </ul>
                </div><!-- /.cnt-account -->

                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{route('homepage')}}">

                            <img src="{{asset('assets/images/logo.png')}}" alt="">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">


                                <input id="search_field" onkeyup="search()" class="search-field" placeholder="Search here..." />

                                <a class="search-button" href="#" ></a>

                            </div>
                        </form>

                    </div><!-- /.search-area -->
                    <div  style="width: 50%; ">

                        <ul id="show_product">

                        </ul>

                    </div>
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="/cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">{{$cart_count}}</span></div>
                                <div class="total-price-basket">
                                    {{--<span class="lbl">cart -</span>--}}
                                    <span class="total-price">
						<span class="sign">$</span><span class="value">{{$cart_total}}</span>
					</span>
                                </div>


                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    @foreach($carts as $cart)
                                    <div class="row" style="margin-top: 15px">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="/product/details/{{$cart->id}}"><img src="{{$cart->options['image']}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="/product/details/{{$cart->id}}">{{$cart->name}}</a></h3>
                                            <div class="price">{{$cart->price}} X {{$cart->qty}}</div>
                                        </div>
                                        <div class="col-xs-1 action">

                                            <a href="/product/removeFromCart/{{$cart->rowId}}"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'>${{$cart_total}}</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="/cart" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a>
                                    {{--<a href="/checkout" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>--}}
                                </div><!-- /.cart-total-->


                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="/" data-hover="dropdown" class="dropdown-toggle">Home</a>

                                </li>
                                <li class="dropdown yamm mega-menu">
                                    <a href="{{route('search.category',['type'=>'Clothing'])}}"  id="Clothing"  >Clothing</a>

                                </li>

                                <li class="dropdown mega-menu">
                                    <a href="{{route('search.category',['type'=>'Electronics'])}}"   >Electronics</a>

                                </li>

                                <li class="dropdown hidden-sm">
                                    <a href="/category/search/Watches">Watches</a>
                                </li>

                                <li class="dropdown">
                                    <a href="/category/search/Shoes">Shoes</a>
                                </li>

                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">

                            @foreach($catagories as $catagory)
                                <li class="dropdown">
                                    <a href="/category/search/{{$catagory->category_name}}" class="dropdown-toggle">{{$catagory->category_name}}</a>
                                </li>
                            @endforeach

                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

            </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            @yield('content')

        </div><!-- /.row -->




    </div>
</div>




<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <span><a href="#">flipmart@themesground.com</a></span>
                                </div>
                            </li>

                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                            <li><a href="#" title="About us">Order History</a></li>
                            <li><a href="#" title="faq">FAQ</a></li>
                            <li><a href="#" title="Popular Searches">Specials</a></li>
                            <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a title="Your Account" href="#">About us</a></li>
                            <li><a title="Information" href="#">Customer Service</a></li>
                            <li><a title="Addresses" href="#">Company</a></li>
                            <li><a title="Addresses" href="#">Investor Relations</a></li>
                            <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Company">Company</a></li>
                            <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                            <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                    <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                    <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                    <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                    <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                    <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                    <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                    <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('assets/images/payments/1.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/2.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/3.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/4.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/5.png')}}" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->



<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/echo.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.rateit.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
<script src="{{ URL::asset('assets/js/cart.js') }}"></script>
<script>

    function search() {
        var val = $('#search_field').val();

        if(val !== ''){
            $.ajax({
                url: 'http://localhost:8000/searchproduct',
                type: 'GET',
                data: {val:val},
                success: function(response)
                {
                    console.log(response);
                    var products='';
                    if(response.length>0){
                        for(var i=0; i<response.length; i++){
                            products += "<a href='product/details/"+response[i]['id']+"'><li>"+response[i]['product_name']+"</li></a>";
                        }
                        $('#show_product').html(products);
                    }
                },
                error: function(response){
                    $('#show_product').html(response);
                }
            });
        }else{
            $('#show_product').html("");
        }


    }



</script>



@yield('scripts')



</body>



</html>