<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Philbert I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

    <link rel="stylesheet" href="/assets/css/jquery.fileupload.css">
    <link rel="stylesheet" href="/assets/css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="/assets/css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="/assets/css/jquery.fileupload-ui-noscript.css"></noscript>

    <!-- Custom CSS -->
    <link href="/dist/css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper theme-1-active pimary-color-green">

    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img class="brand-img" src="/dist/img/logo.png" alt="brand"/>
                        <span class="brand-text">Philbert</span>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
            <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                <div class="input-group">
                    <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
							<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
							</span>
                </div>
            </form>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li>
                    <a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
                </li>
                <li class="dropdown app-drp">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps top-nav-icon"></i></a>
                    <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                        <li>
                            <div class="app-nicescroll-bar">
                                <ul class="app-icon-wrap pa-10">
                                    <li>
                                        <a href="weather.html" class="connection-item">
                                            <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                            <span class="block">weather</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html" class="connection-item">
                                            <i class="zmdi zmdi-email-open txt-success"></i>
                                            <span class="block">e-mail</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar.html" class="connection-item">
                                            <i class="zmdi zmdi-calendar-check txt-primary"></i>
                                            <span class="block">calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vector-map.html" class="connection-item">
                                            <i class="zmdi zmdi-map txt-danger"></i>
                                            <span class="block">map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chats.html" class="connection-item">
                                            <i class="zmdi zmdi-comment-outline txt-warning"></i>
                                            <span class="block">chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact-card.html" class="connection-item">
                                            <i class="zmdi zmdi-assignment-account"></i>
                                            <span class="block">contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="app-box-bottom-wrap">
                                <hr class="light-grey-hr ma-0"/>
                                <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown full-width-drp">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
                    <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li class="product-nicescroll-bar row">
                            <ul class="pa-20">
                                <li class="col-md-3 col-xs-6 col-menu-list">
                                    <a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                    <hr class="light-grey-hr ma-0"/>
                                    <ul>
                                        <li>
                                            <a href="index.html">Analytical</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">Demographic</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">Project</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">Hospital</a>
                                        </li>
                                        <li>
                                            <a href="index5.html">HRM</a>
                                        </li>
                                        <li>
                                            <a href="index6.html">Real Estate</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-6 col-menu-list">
                                    <a href="javascript:void(0);">
                                        <div class="pull-left">
                                            <i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span>
                                        </div>
                                        <div class="pull-right"><span class="label label-success">hot</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                    <hr class="light-grey-hr ma-0"/>
                                    <ul>
                                        <li>
                                            <a href="e-commerce.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="product.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="product-detail.html">Product Detail</a>
                                        </li>
                                        <li>
                                            <a href="add-products.html">Add Product</a>
                                        </li>
                                        <li>
                                            <a href="product-orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="product-cart.html">Cart</a>
                                        </li>
                                        <li>
                                            <a href="product-checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-6 col-xs-12 preview-carousel">
                                    <a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">latest products</span></div><div class="clearfix"></div></a>
                                    <hr class="light-grey-hr ma-0"/>
                                    <div class="product-carousel owl-carousel owl-theme text-center">
                                        <a href="#">
                                            <img src="/dist/img/chair.jpg" alt="chair">
                                            <span>Circle chair</span>
                                        </a>
                                        <a href="#">
                                            <img src="/dist/img/chair2.jpg" alt="chair">
                                            <span>square chair</span>
                                        </a>
                                        <a href="#">
                                            <img src="/dist/img/chair3.jpg" alt="chair">
                                            <span>semi circle chair</span>
                                        </a>
                                        <a href="#">
                                            <img src="/dist/img/chair4.jpg" alt="chair">
                                            <span>wooden chair</span>
                                        </a>
                                        <a href="#">
                                            <img src="/dist/img/chair2.jpg" alt="chair">
                                            <span>square chair</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown alert-drp">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                    <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                        <li>
                            <div class="notification-box-head-wrap">
                                <span class="notification-box-head pull-left inline-block">notifications</span>
                                <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                                <div class="clearfix"></div>
                                <hr class="light-grey-hr ma-0"/>
                            </div>
                        </li>
                        <li>
                            <div class="streamline message-nicescroll-bar">
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-green">
                                            <i class="zmdi zmdi-flag"></i>
                                        </div>
                                        <div class="sl-content">
													<span class="inline-block capitalize-font  pull-left truncate head-notifications">
													New subscription created</span>
                                            <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-yellow">
                                            <i class="zmdi zmdi-trending-down"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                            <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-blue">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                            <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="sl-avatar">
                                            <img class="img-responsive" src="/dist/img/avatar.jpg" alt="avatar"/>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="javascript:void(0)">
                                        <div class="icon bg-red">
                                            <i class="zmdi zmdi-storage"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">consectetur, adipisci velit.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notification-box-bottom-wrap">
                                <hr class="light-grey-hr ma-0"/>
                                <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="/dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <li>
                            <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                        </li>
                        <li>
                            <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                        </li>
                        <li class="divider"></li>
                        <li class="sub-menu show-on-hover">
                            <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                            <ul class="dropdown-menu open-left-side">
                                <li>
                                    <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li class="navigation-header">
                <span>Main</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="dashboard_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="index.html">Analytical</a>
                    </li>
                    <li>
                        <a href="index2.html">Demographic</a>
                    </li>
                    <li>
                        <a href="index3.html">Project</a>
                    </li>
                    <li>
                        <a href="index4.html">Hospital</a>
                    </li>
                    <li>
                        <a href="index5.html">HRM</a>
                    </li>
                    <li>
                        <a href="index6.html">Real Estate</a>
                    </li>
                    <li>
                        <a href="profile.html">profile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span></div><div class="pull-right"><span class="label label-success">hot</span></div><div class="clearfix"></div></a>
                <ul id="ecom_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="e-commerce.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                    </li>
                    <li>
                        <a href="product-detail.html">Product Detail</a>
                    </li>
                    <li>
                        <a class="active-page" href="add-products.html">Add Product</a>
                    </li>
                    <li>
                        <a href="product-orders.html">Orders</a>
                    </li>
                    <li>
                        <a href="product-cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="product-checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Apps </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="app_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="chats.html">chats</a>
                    </li>
                    <li>
                        <a href="calendar.html">calendar</a>
                    </li>
                    <li>
                        <a href="weather.html">weather</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="email_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="inbox.html">inbox</a>
                            </li>
                            <li>
                                <a href="inbox-detail.html">detail email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="contact_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="contact-list.html">list</a>
                            </li>
                            <li>
                                <a href="contact-card.html">cards</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="file-manager.html">File Manager</a>
                    </li>
                    <li>
                        <a href="todo-tasklist.html">To Do/Tasklist</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="widgets.html"><div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">widgets</span></div><div class="pull-right"><span class="label label-warning">8</span></div><div class="clearfix"></div></a>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
            <li class="navigation-header">
                <span>component</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="panels-wells.html">Panels & Wells</a>
                    </li>
                    <li>
                        <a href="modals.html">Modals</a>
                    </li>
                    <li>
                        <a href="sweetalert.html">Sweet Alerts</a>
                    </li>
                    <li>
                        <a href="notifications.html">notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="accordion-toggle.html">Accordion / Toggles</a>
                    </li>
                    <li>
                        <a href="tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="progressbars.html">Progress bars</a>
                    </li>
                    <li>
                        <a href="skills-counter.html">Skills & Counters</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="nestable.html">Nestables</a>
                    </li>
                    <li>
                        <a href="dorpdown.html">Dropdowns</a>
                    </li>
                    <li>
                        <a href="bootstrap-treeview.html">Tree View</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="range-slider.html">Range Slider</a>
                    </li>
                    <li>
                        <a href="grid-styles.html">Grid</a>
                    </li>
                    <li>
                        <a href="bootstrap-ui.html">Bootstrap UI</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="form-element.html">Basic Forms</a>
                    </li>
                    <li>
                        <a href="form-layout.html">form Layout</a>
                    </li>
                    <li>
                        <a href="form-advanced.html">Form Advanced</a>
                    </li>
                    <li>
                        <a href="form-mask.html">Form Mask</a>
                    </li>
                    <li>
                        <a href="form-picker.html">Form Picker</a>
                    </li>
                    <li>
                        <a href="form-validation.html">form Validation</a>
                    </li>
                    <li>
                        <a href="form-wizard.html">Form Wizard</a>
                    </li>
                    <li>
                        <a href="form-x-editable.html">X-Editable</a>
                    </li>
                    <li>
                        <a href="cropperjs.html">Cropperjs</a>
                    </li>
                    <li>
                        <a href="form-file-upload.html">File Upload</a>
                    </li>
                    <li>
                        <a href="dropzone.html">Dropzone</a>
                    </li>
                    <li>
                        <a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
                    </li>
                    <li>
                        <a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
                    </li>
                    <li>
                        <a href="summernote-wysihtml5.html">summernote</a>
                    </li>
                    <li>
                        <a href="typeahead-js.html">typeahead</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="flot-chart.html">Flot Chart</a>
                    </li>
                    <li>
                        <a href="morris-chart.html">Morris Chart</a>
                    </li>
                    <li>
                        <a href="chart.js.html">chartjs</a>
                    </li>
                    <li>
                        <a href="chartist.html">chartist</a>
                    </li>
                    <li>
                        <a href="easy-pie-chart.html">Easy Pie Chart</a>
                    </li>
                    <li>
                        <a href="sparkline.html">Sparkline</a>
                    </li>
                    <li>
                        <a href="peity-chart.html">Peity Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="table_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="basic-table.html">Basic Table</a>
                    </li>
                    <li>
                        <a href="bootstrap-table.html">Bootstrap Table</a>
                    </li>
                    <li>
                        <a href="data-table.html">Data Table</a>
                    </li>
                    <li>
                        <a href="export-table.html"><span class="pull-right"><span class="label label-danger">New</span></span>Export Table</a>
                    </li>
                    <li>
                        <a href="responsive-data-table.html"><span class="pull-right"><span class="label label-danger">New</span></span>RSPV DataTable</a>
                    </li>
                    <li>
                        <a href="responsive-table.html">Responsive Table</a>
                    </li>
                    <li>
                        <a href="editable-table.html">Editable Table</a>
                    </li>
                    <li>
                        <a href="foo-table.html">Foo Table</a>
                    </li>
                    <li>
                        <a href="jsgrid-table.html">Jsgrid Table</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="icon_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="fontawesome.html">Fontawesome</a>
                    </li>
                    <li>
                        <a href="themify.html">Themify</a>
                    </li>
                    <li>
                        <a href="linea-icon.html">Linea</a>
                    </li>
                    <li>
                        <a href="simple-line-icons.html">Simple Line</a>
                    </li>
                    <li>
                        <a href="pe-icon-7.html">Pe-icon-7</a>
                    </li>
                    <li>
                        <a href="glyphicons.html">Glyphicons</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="maps_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="vector-map.html">Vector Map</a>
                    </li>
                    <li>
                        <a href="google-map.html">Google Map</a>
                    </li>
                </ul>
            </li>
            <li><hr class="light-grey-hr mb-10"/></li>
            <li class="navigation-header">
                <span>featured</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a class="active" href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="auth_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="signup.html">Register</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Recover Password</a>
                            </li>
                            <li>
                                <a href="reset-password.html">reset Password</a>
                            </li>
                            <li>
                                <a href="locked.html">Lock Screen</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="invoice_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="invoice-archive.html">Invoice Archive</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="error_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="500.html">Error 500</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="timeline.html">Timeline</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="zmdi zmdi-filter-list mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
                    <li>
                        <a href="#">Item level 1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                        <ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
                            <li>
                                <a href="#">Item level 2</a>
                            </li>
                            <li>
                                <a href="#">Item level 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    <div class="fixed-sidebar-right">
        <ul class="right-sidebar">
            <li>
                <div  class="tab-struct custom-tab-1">
                    <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                        <li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
                        <li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
                    </ul>
                    <div class="tab-content" id="right_sidebar_content">
                        <div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                            <div class="chat-cmplt-wrap">
                                <div class="chat-box-wrap">
                                    <div class="add-friend">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">users</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <form role="search" class="chat-search pl-15 pr-15 pb-15">
                                        <div class="input-group">
                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
													</span>
                                        </div>
                                    </form>
                                    <div id="chat_list_scroll">
                                        <div class="nicescroll-bar">
                                            <ul class="chat-list-wrap">
                                                <li class="chat-list">
                                                    <div class="chat-body">
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Clay Masse</span>
                                                                    <span class="time block truncate txt-grey">No one saves us but ourselves.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user1.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Evie Ono</span>
                                                                    <span class="time block truncate txt-grey">Unity is strength</span>
                                                                </div>
                                                                <div class="status offline"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user2.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Madalyn Rascon</span>
                                                                    <span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user3.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Mitsuko Heid</span>
                                                                    <span class="time block truncate txt-grey">I’m thankful.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Ezequiel Merideth</span>
                                                                    <span class="time block truncate txt-grey">Patience is bitter.</span>
                                                                </div>
                                                                <div class="status offline"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user1.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Jonnie Metoyer</span>
                                                                    <span class="time block truncate txt-grey">Genius is eternal patience.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user2.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Angelic Lauver</span>
                                                                    <span class="time block truncate txt-grey">Every burden is a blessing.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user3.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Priscila Shy</span>
                                                                    <span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle"  src="/dist/img/user4.png" alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">Linda Stack</span>
                                                                    <span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-chat-box-wrap">
                                    <div class="recent-chat-wrap">
                                        <div class="panel-heading ma-0">
                                            <div class="goto-back">
                                                <a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
                                                    <i class="zmdi zmdi-chevron-left"></i>
                                                </a>
                                                <span class="inline-block txt-dark">ryan</span>
                                                <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body pa-0">
                                                <div class="chat-content">
                                                    <ul class="nicescroll-bar pt-20">
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"  src="/dist/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Hello Jason, how are you, it's been a long time since we last met?</p>
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:30 PM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self mb-10">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right">  How about you?
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"  src="/dist/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Not too bad.</p>
                                                                    <div class="msg-per-detail  text-right">
                                                                        <span class="msg-time txt-grey">2:35 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                                                    <div class="input-group-btn emojis">
                                                        <div class="dropup">
                                                            <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-btn attachment">
                                                        <div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
                                                            <input type="file" class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                            <div class="message-box-wrap">
                                <div class="msg-search">
                                    <a href="javascript:void(0)" class="inline-block txt-grey">
                                        <i class="zmdi zmdi-more"></i>
                                    </a>
                                    <span class="inline-block txt-dark">messages</span>
                                    <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="set-height-wrap">
                                    <div class="streamline message-box nicescroll-bar">
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
                                                    <span class="inline-block font-11  pull-right message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user1.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
                                                    <span class="inline-block font-11  pull-right message-time">1 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Pogody theme support</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user2.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
                                                    <span class="inline-block font-11  pull-right message-time">31 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Congratulations from design nominees</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user3.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
                                                    <span class="inline-block font-11  pull-right message-time">29 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Themeforest item support message</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user4.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
                                                    <span class="inline-block font-11  pull-right message-time">27 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Help with beavis contact form</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
                                                    <span class="inline-block font-11  pull-right message-time">19 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">Your uploaded theme is been selected</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/dist/img/user1.png" alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
                                                    <span class="inline-block font-11  pull-right message-time">13 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject"> A new rating has been received</span>
                                                    <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  id="todo_tab" class="tab-pane fade" role="tabpanel">
                            <div class="todo-box-wrap">
                                <div class="add-todo">
                                    <a href="javascript:void(0)" class="inline-block txt-grey">
                                        <i class="zmdi zmdi-more"></i>
                                    </a>
                                    <span class="inline-block txt-dark">todo list</span>
                                    <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="set-height-wrap">
                                    <!-- Todo-List -->
                                    <ul class="todo-list nicescroll-bar">
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-default">
                                                <input type="checkbox" id="checkbox01"/>
                                                <label for="checkbox01">Record The First Episode</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-pink">
                                                <input type="checkbox" id="checkbox02"/>
                                                <label for="checkbox02">Prepare The Conference Schedule</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-warning">
                                                <input type="checkbox" id="checkbox03" checked/>
                                                <label for="checkbox03">Decide The Live Discussion Time</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-success">
                                                <input type="checkbox" id="checkbox04" checked/>
                                                <label for="checkbox04">Prepare For The Next Project</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-danger">
                                                <input type="checkbox" id="checkbox05" checked/>
                                                <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                        <li class="todo-item">
                                            <div class="checkbox checkbox-purple">
                                                <input type="checkbox" id="checkbox06" checked/>
                                                <label for="checkbox06">Finish Infinity Project</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr"/>
                                        </li>
                                    </ul>
                                    <!-- /Todo-List -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /Right Sidebar Menu -->



    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">add-products</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>add-products</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Product Name</label>
                                                    <input type="text" id="firstName" name="product_name" class="form-control" placeholder="Rounded Chair">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label mb-10">Product Id</label>--}}
                                                    {{--<input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <!--/span-->
                                        </div>
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Category</label>
                                                    <select name="category" id="category" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{ $category->category_name }}</option>

                                                        @endforeach
                                                    </select>
                                                    <div id="newCategory"></div>
                                                    <button id="addNewCategory" onclick="addCategory()" type="button" class="btn btn-success btn-icon left-icon "> <i class="fa fa-plus"></i> <span>Add New</span></button>

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Status</label>
                                                    <div class="radio-list">
                                                        <div class="radio-inline pl-0">
                                                            <div class="radio radio-info">
                                                                <input type="radio" checked name="radio" id="radio1" value="1">
                                                                <label for="radio1">Published</label>
                                                            </div>
                                                        </div>
                                                        <div class="radio-inline">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="radio" id="radio2" value="0">
                                                                <label for="radio2">Unpublished</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Buing Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i></div>
                                                        <input type="text" name="buying_price" class="form-control" id="exampleInputuname" placeholder="153">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Selling Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i></div>
                                                        <input type="text" name="selling_price" class="form-control" id="exampleInputuname_1" placeholder="36%">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>





                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Discount</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                        <input type="text" name="discount" class="form-control" id="exampleInputuname" placeholder="%">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>






                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Details</h6>
                                        <hr class="light-grey-hr"/>

                                        <table id="details" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Color</th>
                                                <th>Quantity</th>
                                            </tr>
                                            </thead>

                                            <tr></tr>

                                        </table>

                                       <div id="quantity_input">

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Size</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                                <input type="text" name="size" class="form-control" id="size" placeholder="%">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Color</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                                <input type="text" name="color" class="form-control" id="color" placeholder="%">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Quatity</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                                <input type="text" name="total_quantity" class="form-control" id="quantity" placeholder="%">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                        </div>



                                      <button class="bg-primary" id="addnewdetails">Add New Size</button>





                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-12">


                                                {{--<div id="summernote">Hello Summernote</div>--}}

                                                <div class="form-group">
                                                    <textarea name="product_description" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->



                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                {{--<div class="img-upload-wrap">--}}
                                                    {{--<img class="img-responsive" src="/dist/img/chair.jpg" alt="upload_img">--}}
                                                {{--</div>--}}
                                                {{--<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>--}}
                                                    {{--<input type="file" name="image" class="upload">--}}
                                                {{--</div>--}}

                                                <!-- The file upload form used as target for the file upload widget -->

                                                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                                        <div class="row fileupload-buttonbar">
                                                            <div class="row-lg-7">
                                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                                                                <button type="submit" class="btn btn-primary start">
                                                                    <i class="glyphicon glyphicon-upload"></i>
                                                                    <span>Start upload</span>
                                                                </button>
                                                                <button type="reset" class="btn btn-warning cancel">
                                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                                    <span>Cancel upload</span>
                                                                </button>
                                                                <button type="button" class="btn btn-danger delete">
                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                                <input type="checkbox" class="toggle">
                                                                <!-- The global file processing state -->
                                                                <span class="fileupload-process"></span>
                                                            </div>
                                                            <!-- The global progress state -->
                                                            <div class="row-lg-5 fileupload-progress fade">
                                                                <!-- The global progress bar -->
                                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                                                </div>
                                                                <!-- The extended global progress state -->
                                                                <div class="progress-extended">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <!-- The table listing the files available for upload/download -->
                                                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                                        <div class="slides"></div>
                                                        <h3 class="title"></h3>
                                                        <a class="prev">‹</a>
                                                        <a class="next">›</a>
                                                        <a class="close">×</a>
                                                        <a class="play-pause"></a>
                                                        <ol class="indicator"></ol>
                                                    </div>

                                            </div>
                                        </div>





                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-calendar-note mr-10"></i>general info</h6>
                                        <hr class="light-grey-hr"/>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Brand">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Stellar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Delivery Condition">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Knock Down">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Seat Lock Included">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Yes">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Type">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Office Chair">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Style">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Contemporary & Modern">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Wheels Included">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Yes">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Upholstery Included">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Yes">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
                                            <button type="button" class="btn btn-warning pull-left">Cancel</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Philbert. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="/vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Init JavaScript -->
<script src="/dist/js/init.js"></script>

<script src="/assets/js/addNewProduct.js"></script>







{{--Summer Note--}}
<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
{{--Summer Note--}}









<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

</script>



<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script src="/assets/js/vendor/jquery.ui.widget.js"></script>
<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="/assets/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/assets/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/assets/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/assets/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/assets/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/assets/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/assets/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="/assets/js/jquery.fileupload-ui.js"></script>



</body>
</html>