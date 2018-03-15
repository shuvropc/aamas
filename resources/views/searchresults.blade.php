<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Seven Store</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

		<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('css/header1.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/switcher.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/color1.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/color2.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/color3.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/color4.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/switcher/css/color5.css')}}"/>



		<script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>


		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="animated-css" data-scrolling-animations="false">
		<div class="sp-body">
			<!-- Start Switcher -->
			<div class="switcher-wrapper">	
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#ff8300;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a>							
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#dc2c2c;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Switcher -->
			<header id="header">
				<div class="header-top">
					<div class="container">
					<ul class="pull-left contact-list">
						<li>
							<span class="sli icon-envelope-open" aria-hidden="true"></span>
							<span class="contact-list_label font-main font-weight-normal">Email:</span>
							<a href="#" class="contact-list_value font-main font-weight-normal">info@templines.com</a>
						</li>
						<li>
							<span class="sli icon-call-out" aria-hidden="true"></span>
							<span class="contact-list_label font-main font-weight-normal">Help Line:</span>
							<span class="contact-list_value font-main font-weight-normal">0800 567 345</span>
						</li>						
					</ul>
					<ul class="nav nav-pills nav-top navbar-right">
						<li class="dropdown langs">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">LANG [EN] <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="#">[DE]</a></li>
								<li><a href="#">[ES]</a></li>
								<li><a href="#">[FR]</a></li>
							</ul>
						</li>
						<li class="dropdown currency">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">usd <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="#">eur</a></li>
							</ul>
						</li>
						<li class="dropdown my-account">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">My Account <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="#">My Dashboard</a></li>
								<li><a href="#">Account Information</a></li>
								<li><a href="#">Address Book</a></li>
								<li><a href="#">My Orders</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
				<div class="header-middle">
					<div class="container relative">
						<a href="index.html" class="logo pull-left"></a>
						<div class="header-search">
							<div class="header-search_filter">
								<select class="formDropdown font-additional font-weight-normal" name="filterby" id="filterby">
									<option value="0">Filter By</option>
									<option value="date">Date</option>
									<option value="title">Title</option>
									<option value="cat">Category</option>
								</select>
								<i class="fa fa-angle-down customColor"></i>
							</div>
							<div class="header-search_form">
								<form class="product-search form-inline" action="#" method="POST">
									<div class="form-group">
										<label class="sr-only" for="searchQuery">Product Name ...</label>
										<input type="search" class="product-search_field font-main font-weight-normal" id="searchQuery" placeholder="Product Name ...">
									</div>
									<button type="submit" class="product-search_btn hvr-border-fade">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						</div>
						<div class="header-cart pull-right">
							<div class="header-cart_preview">
								<span class="sli icon-bag customBgColor" aria-hidden="true"></span>
								<span class="header-cart_qty font-additional font-weight-bold text-uppercase">2 ITEM(S)</span>
								<span class="header-cart_amount font-additional font-weight-normal">97.25 USD</span>
								<span class="eli arrow_right customColor" aria-hidden="true"></span>
							</div>
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
						</div>
					</div>
				</div>
				<div class="header-nav navbar navbar-main-slide">
					<div class="container">
						<i class="fa fa-bars mobileMenuNav mobileMenuSwitcher onlyMobile"></i>
						<nav class="menu-container">
							<i class="fa fa-times close-menu mobileMenuSwitcher onlyMobile"></i>
							<ul class="nav navbar-nav navbar-main">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="index-1.html">Home <i class="fa fa-angle-down customColor"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index-1.html">Home Version 1</a></li>
										<li><a href="index-2.html">Home Version 2</a></li>
										<li><a href="index.html">Home Version 3</a></li>
										<li><a href="index-4.html">Home Version 4</a></li>
										<li><a href="index-5.html">Home Version 5</a></li>
									</ul>
								</li>
								<li class="dropdown active">
									<a data-toggle="dropdown" class="dropdown-toggle" href="category.html">Shop <i class="fa fa-angle-down customColor"></i></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="category.html">Category Version 1</a></li>
										<li><a href="category-2.html">Category Version 2</a></li>
									</ul>
								</li>
								<li><a href="product-details.html">MEN </a></li>
								<li><a href="product-details-2.html">WOMEN</a></li>
								<li><a href="doc.html">DOCUMENTATION</a></li>
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
				</div>
			</header>
			<section id="pageTitleBox" class="paralax breadcrumb-container"  style="background-image: url('media/paralax/3.jpg');">
				<div class="overlay"></div>
				<div class="container relative">
					<h1 class="title font-additional font-weight-normal color-main text-uppercase wow zoomIn" data-wow-delay="0.3s">Product category 1</h1>
					<ul class="breadcrumb-list wow zoomIn" data-wow-delay="0.3s">
						<li>
							<a href="index-1.html" class="font-additional font-weight-normal color-main text-uppercase">HOME</a>
							<span>/</span>
						</li>
						<li class="font-additional font-weight-normal color-main text-uppercase">WOMEN</li>
					</ul>
				</div>
			</section>
			<section id="pageContent" class="page-content">
				<div class="container">
					<div class="row">
						<div class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 clearfix">
							<h3 class="sidebar-title font-additional font-weight-bold text-uppercase customColor wow fadeInUp" data-wow-delay="0.3s">categories</h3>
							<ul class="categories-tree wow fadeInUp" data-wow-delay="0.3s">
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">ACCESSORIES</span>
										<span class="pull-right">(8)</span>
									</a>
								</li>
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">FOOTWEAR</span>
										<span class="pull-right">(19)</span>
									</a>
								</li>
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">JEWELLRY</span>
										<span class="pull-right">(9)</span>
									</a>
								</li>
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">MEN</span>
										<span class="pull-right">(7)</span>
									</a>
								</li>
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">NEW</span>
										<span class="pull-right">(5)</span>
									</a>
								</li>
								<li>
									<a href="#" class="font-additional font-weight-normal hover-focus-color color-third text-uppercase">
										<span class="pull-left">WOMEN</span>
										<span class="pull-right">(7)</span>
									</a>
								</li>
							</ul>
							<h3 class="sidebar-title font-additional font-weight-bold text-uppercase customColor wow fadeInUp" data-wow-delay="0.3s">by price</h3>
							<div class="sidebar-slider wow fadeInUp" data-wow-delay="0.3s">
								<div class="slider-range" data-min="50" data-max="450" data-default-min="50" data-default-max="350" data-range="true" data-value-container-id="priceAmount"></div>
								<div class="filter-container">
									<div class="slider-range-value pull-left">
										<label class="font-main font-weight-normal" for="priceAmount">Price:</label>
										<input class="font-main font-weight-normal" type="text" id="priceAmount" readonly>
									</div>
									<a class="btn button-border font-additional font-weight-bold hvr-rectangle-out hover-focus-bg hover-focus-border before-bg pull-right" href="#">Filter</a>
								</div>
							</div>
							<ul class="category-images sidebar-product wow fadeInUp" data-wow-delay="0.3s">
								<li class="grid">
									<figure class="effect-bubba">
										<img src="media/250x300/1.jpg" alt="Category">
										<figcaption>
											<div class="category-images_content">
												<h2 class="font-third font-weight-light text-uppercase color-main">FOR WOMEN</h2>
												<p class="font-additional font-weight-bold text-uppercase color-main line-text line-text_white">FOOT WEAR</p>
											</div>
											<a href="#">View more</a>
										</figcaption>			
									</figure>
								</li>
							</ul>
							<h3 class="sidebar-title font-additional font-weight-bold text-uppercase customColor wow fadeInUp" data-wow-delay="0.3s">featured products</h3>
							<ul class="sidebar-popular-product wow fadeInUp" data-wow-delay="0.3s">
								<li>
									<a class="popular-product-item" href="product-details.html">
										<img src="media/80x75/1.jpg" alt="Product">
										<span class="popular-product-item_title font-additional font-weight-bold text-uppercase">WOMEN ring</span>
										<span class="popular-product-item_price font-additional color-third">$80.00</span>
									</a>
								</li>
								<li>
									<a class="popular-product-item" href="product-details.html">
										<img src="media/80x75/2.jpg" alt="Product">
										<span class="popular-product-item_title font-additional font-weight-bold text-uppercase">MEN shirts</span>
										<span class="popular-product-item_price font-additional color-third">$105.00</span>
									</a>
								</li>
								<li>
									<a class="popular-product-item" href="product-details.html">
										<img src="media/80x75/3.jpg" alt="Product">
										<span class="popular-product-item_title font-additional font-weight-bold text-uppercase">women wear</span>
										<span class="popular-product-item_price font-additional color-third">$350.00</span>
										<span class="product-item_sale color-main font-additional customBgColor circle">-5%</span>
									</a>
								</li>
								<li>
									<a class="popular-product-item" href="product-details.html">
										<img src="media/80x75/4.jpg" alt="Product">
										<span class="popular-product-item_title font-additional font-weight-bold text-uppercase">bags & packs</span>
										<span class="popular-product-item_price font-additional color-third">$240.00</span>
									</a>
								</li>
								<li>
									<a class="popular-product-item" href="product-details.html">
										<img src="media/80x75/5.jpg" alt="Product">
										<span class="popular-product-item_title font-additional font-weight-bold text-uppercase">stylish caps</span>
										<span class="popular-product-item_price font-additional color-third">$14.00</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 clearfix">
							<div class="content-box">
								<div class="category-filter clearfix wow fadeInUp" data-wow-delay="0.3s">
									<div class="select pull-left">
										<select class="select-field font-main color-third" name="sort" id="sort">
											<option value="">Default Sorting</option>
											<option value="trending">Trending items</option>
											<option value="sales">Best sellers</option>
											<option value="rating">Best rated</option>
											<option value="price-asc">Price: low to high</option>
											<option value="price-desc">Price: high to low</option>
										</select>
										<i class="fa fa-angle-down customColor"></i>
									</div>
									<div class="select pull-left">
										<select class="select-field font-main color-third" name="items-qty" id="items-qty">
											<option value="12">Items On Page 12</option>
											<option value="24">Items On Page 24</option>
											<option value="36">Items On Page 36</option>
											<option value="48">Items On Page 48</option>
										</select>
										<i class="fa fa-angle-down customColor"></i>
									</div>
									<a href="category-2.html" class="pull-right grid-type hover-focus-border">
										<span class="icon-list" aria-hidden="true"></span>
									</a>
									<a href="category.html" class="pull-right grid-type active customBgColor color-main">
										<span class="icon-grid" aria-hidden="true"></span>
									</a>
								</div>
								<div class="products-cat clearfix">
									<ul class="products-grid">
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/2.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html">
														<span class="product-item_sale color-main font-additional customBgColor circle">-15%</span>
													</a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN GOWN</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
												</a>
											</div>
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/3.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html"></a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/4.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html">
														<span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>
														<span class="product-item_outofstock color-main font-additional circle">OUT OF STOCK</span>
													</a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">SPRING CLOTH</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
												</a>
											</div>
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body product-border">
													<img alt="Product" src="media/270x320/1.jpg" class="product-item_image">
													<a href="product-details.html" class="product-item_link">
														<span class="product-item_new color-main font-additional text-uppercase circle">new</span>
													</a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-bag"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-eye"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-heart"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
															</a>
														</li>													
													</ul>
												</div>
												<a class="product-item_footer" href="product-details.html">
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN CAP</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
												</a>
											</div>
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body product-border">
													<img alt="Product" src="media/270x320/3.jpg" class="product-item_image">
													<a href="product-details.html" class="product-item_link"></a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-bag"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-eye"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-heart"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
															</a>
														</li>													
													</ul>
												</div>
												<a class="product-item_footer" href="product-details.html">
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">STYLISH WEAR</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$175.00</div>
												</a>
											</div>
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body product-border">
													<img alt="Product" src="media/270x320/4.jpg" class="product-item_image">
													<a href="product-details.html" class="product-item_link"></a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-bag"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-eye"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">QUICK VIEW</div>
															</a>
														</li>
														<li>
															<a href="#">
																<span aria-hidden="true" class="icon-heart"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">Add to Favorites</div>
															</a>
														</li>													
													</ul>
												</div>
												<a class="product-item_footer" href="product-details.html">
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">LEATHER JACKET</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$300.00</div>
												</a>
											</div>
										</li>										
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/9.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html"></a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
													<div class="product-item_title font-additional font-weight-bold text-center text-uppercase">WOMEN JACKET</div>
													<div class="product-item_price font-additional font-weight-normal customColor">$240.00 <span>$265.00</span></div>
												</a>
											</div>
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/1.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html"></a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
										</li>
										<li class="wow fadeInUp" data-wow-delay="0.3s">
											<div class="product-item hvr-underline-from-center">
												<div class="product-item_body">
													<img class="product-item_image" src="media/270x360/10.jpg" alt="Product">
													<a class="product-item_link" href="product-details.html">
														<span class="product-item_sale color-main font-additional customBgColor circle">-20%</span>
													</a>
													<ul class="product-item_info transition">
														<li>
															<a href="#">
																<span class="icon-bag" aria-hidden="true"></span>
																<div class="product-item_tip font-additional font-weight-normal text-uppercase customBgColor color-main transition">ADD TO CART</div>
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
										</li>
										<li class="helper-justify"></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="subscribe" class="subscribe-row customBgColor subscribe-custom-bg">
				<div class="container">
					<div class="subscribe-container clearfix wow fadeInUp" data-wow-delay="0.3s">
						<div class="subscribe-desc font-additional font-weight-bold color-main">SIGN UP FOR OUR MONTHLY NEWSLETTER</div>
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
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
								<span class="footer_copyright color-additional font-main font-weight-light wow fadeInLeft" data-wow-delay="0.3s">Created With <span class="icon_heart customColor" aria-hidden="true"></span> by <span class="font-main font-weight-semibold">Templines</span> &copy; 2015 All rights reserved.</span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
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


		<script type="text/javascript" src="{{asset('js/modernizr.custom.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.placeholder.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/smoothscroll.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/classie.js') }}"></script>


		<script type="text/javascript" src="{{asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('plugins/bxslider/jquery.bxslider.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('plugins/switcher/js/bootstrap-select.js') }}"></script>
		<script type="text/javascript" src="{{asset('plugins/switcher/js/evol.colorpicker.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('plugins/switcher/js/dmss.js') }}"></script>
		<script type="text/javascript" src="{{asset('plugins/isotope/jquery.isotope.min.js') }}"></script>


		{{--<script src="js/modernizr.custom.js"></script>--}}
		{{--<script src="js/jquery.placeholder.min.js"></script>--}}
		{{--<script src="js/smoothscroll.min.js"></script>--}}
		{{--<script src="js/classie.js"></script>--}}
		<!--Owl Carousel-->
		{{--<script src="plugins/owl-carousel/owl.carousel.min.js"></script>--}}
		{{--<!-- bxSlider -->--}}
		{{--<script src="plugins/bxslider/jquery.bxslider.min.js"></script>--}}
		{{--<!--Switcher-->--}}
		{{--<script src="plugins/switcher/js/bootstrap-select.js"></script>--}}
		{{--<script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script>--}}
		{{--<script src="plugins/switcher/js/dmss.js"></script>--}}
		{{--<!-- SCRIPTS -->--}}
		{{--<script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script>--}}

		<script type="text/javascript" src="{{asset('js/wow.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/cssua.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('js/cssua.min.js') }}"></script>
		<!--THEME-->
		{{--<script src="js/wow.min.js"></script>--}}
		{{--<script src="js/cssua.min.js"></script>--}}
		{{--<script src="js/cssua.min.js"></script>--}}
	</body>
</html>