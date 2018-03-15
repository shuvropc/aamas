<!doctype html>
<html lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Design Project</title>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.min.css" title="main"> <script type="text/javascript">
            // For demo purposes only. Remove this script if you don't need the customizer
            if (sessionStorage.skin) {
                var defaultSkin = document.querySelector('link[title="main"]');
                defaultSkin.setAttribute('href', sessionStorage.skin);
            }
        </script> </head>

    <body>
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--waterfall oxy-layout__header oxy-layout__header--transparent">
                <!-- Top row, always visible -->
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <a class="mdl-layout-title" href="index.html">
                        <img src="assets/images/logo.png" alt="FAB!"> </a>
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp" /> </div>
                    </div>
                </div>
                <!-- Bottom row, not visible on scroll -->
                <div class="mdl-layout__header-row">
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="shop.html">SHOP</a>
                        <a class="mdl-navigation__link" href="posts.html">NEWS!</a>
                        <a class="mdl-navigation__link" href="customizer.html">CUSTOMIZE</a>
                        <a class="mdl-navigation__link" href="cart.html">CART</a>
                        <a class="mdl-navigation__link" href="checkout.blade.php">CHECKOUT</a>
                    </nav>
                </div>
            </header>
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
                    <a class="mdl-navigation__link" href="checkout.blade.php">
                        <i class="material-icons mdl-navigation__icon">credit_card</i> Checkout </a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="oxy-section">
                    <div class="oxy-section__background oxy-background-parallax">
                        <img src="assets/images/backgrounds/bg26-notinclude.jpg" alt="section background"> </div>
                    <div class="oxy-section__overlay oxy-section__overlay--gradient-from-top-30"></div>
                    <div class="oxy-section__content">
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <h1 class="oxy-color-light mdl-typography--display-1 mdl-typography--font-thin oxy-margin-top-100 oxy-margin-bottom-100 ">Checkout</h1>
                        </div>
                    </div>
                </div>
                <div class="oxy-section">
                    <div class="oxy-section__content">
                        <form action="#">
                            <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 ">
                                <div class="mdl-grid mdl-cell mdl-cell--7-col mdl-cell--6-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40">
                                    <h2 class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-typography--headline  mdl-typography--font-light oxy-margin-bottom-0 oxy-margin-top-20"> Billing Details </h2>
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex="-1">
                                            <select name="orderby" class="mdl-selectfield__select">
                                                <option value="" selected="selected">Select Country</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AL">Albania</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AO">Angola</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AT">Austria</option>
                                                <option value="AU">Australia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AX">Åland</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BI">Burundi</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire</option>
                                                <option value="BR">Brazil</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BZ">Belize</option>
                                                <option value="CA">Canada</option>
                                                <option value="CC">Cocos [Keeling] Islands</option>
                                                <option value="CD">Democratic Republic of the Congo</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="CG">Republic of the Congo</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CL">Chile</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CN">China</option>
                                                <option value="CO">Colombia</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="CW">Curacao</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czechia</option>
                                                <option value="DE">Germany</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EE">Estonia</option>
                                                <option value="EG">Egypt</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="ES">Spain</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FI">Finland</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FR">France</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GE">Georgia</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="GR">Greece</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GU">Guam</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HR">Croatia</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HU">Hungary</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IN">India</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IR">Iran</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IT">Italy</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JO">Jordan</option>
                                                <option value="JP">Japan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KM">Comoros</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="KP">North Korea</option>
                                                <option value="KR">South Korea</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LY">Libya</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MD">Moldova</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MF">Saint Martin</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="ML">Mali</option>
                                                <option value="MM">Myanmar [Burma]</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MO">Macao</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MT">Malta</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="MV">Maldives</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MX">Mexico</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NE">Niger</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NO">Norway</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NU">Niue</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="OM">Oman</option>
                                                <option value="PA">Panama</option>
                                                <option value="PE">Peru</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PL">Poland</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="PN">Pitcairn Islands</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="PS">Palestine</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PW">Palau</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RS">Serbia</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SE">Sweden</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SO">Somalia</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="SX">Sint Maarten</option>
                                                <option value="SY">Syria</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TD">Chad</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="TG">Togo</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TL">East Timor</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UM">U.S. Minor Outlying Islands</option>
                                                <option value="US">United States</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VA">Vatican City</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="VI">U.S. Virgin Islands</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="WS">Samoa</option>
                                                <option value="XK">Kosovo</option>
                                                <option value="YE">Yemen</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabw</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="name">First Name</label>
                                            <input class="mdl-textfield__input" type="text" id="name" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="lastname">Last Name</label>
                                            <input class="mdl-textfield__input" type="text" id="lastname" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="company">Company Name</label>
                                            <input class="mdl-textfield__input" type="text" id="company" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield mdl-textfield--full-width">
                                            <textarea class="mdl-textfield__input" type="text" rows="5" id="address"></textarea>
                                            <label class="mdl-textfield__label" for="address">Your Address</label>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="town">Town</label>
                                            <input class="mdl-textfield__input" type="text" id="town" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="postcode">Postcode</label>
                                            <input class="mdl-textfield__input" type="text" id="postcode" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="email">Email</label>
                                            <input class="mdl-textfield__input" type="text" id="email" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="phone">Phone</label>
                                            <input class="mdl-textfield__input" type="text" id="phone" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="create-account-check">
                                            <input type="checkbox" id="create-account-check" class="mdl-checkbox__input" />
                                            <span class="mdl-checkbox__label">Create Account</span>
                                        </label>
                                    </div>
                                    <div id="create-account-details" class="mdl-cell mdl-cell--12-col">
                                        <p class="mdl-typography--body-2">Create an account by entering a password below. If you are a returning customer please login at the top of the page.</p>
                                        <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                            <label class="mdl-textfield__label" for="email">Account Password</label>
                                            <input class="mdl-textfield__input" type="password" id="password" /> </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="shipping-address-check">
                                            <input type="checkbox" id="shipping-address-check" class="mdl-checkbox__input" />
                                            <span class="mdl-checkbox__label">Different shipping Address</span>
                                        </label>
                                    </div>
                                    <div id="shipping-address-details" class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-selectfield mdl-selectfield--full-width mdl-js-selectfield" tabindex="-1">
                                                <select name="orderby" class="mdl-selectfield__select">
                                                    <option value="" selected="selected">Select Country</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AX">Åland</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BQ">Bonaire</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CC">Cocos [Keeling] Islands</option>
                                                    <option value="CD">Democratic Republic of the Congo</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="CG">Republic of the Congo</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="CI">Ivory Coast</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CN">China</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="CW">Curacao</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czechia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FR">France</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IN">India</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MF">Saint Martin</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MK">Macedonia</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MM">Myanmar [Burma]</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="PN">Pitcairn Islands</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="PS">Palestine</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ST">São Tomé and Príncipe</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="SX">Sint Maarten</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TL">East Timor</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UM">U.S. Minor Outlying Islands</option>
                                                    <option value="US">United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VA">Vatican City</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VG">British Virgin Islands</option>
                                                    <option value="VI">U.S. Virgin Islands</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="XK">Kosovo</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabw</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="name">First Name</label>
                                                <input class="mdl-textfield__input" type="text" id="name" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="lastname">Last Name</label>
                                                <input class="mdl-textfield__input" type="text" id="lastname" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="company">Company Name</label>
                                                <input class="mdl-textfield__input" type="text" id="company" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield mdl-textfield--full-width">
                                                <textarea class="mdl-textfield__input" type="text" rows="5" id="address"></textarea>
                                                <label class="mdl-textfield__label" for="address">Your Address</label>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="town">Town</label>
                                                <input class="mdl-textfield__input" type="text" id="town" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="postcode">Postcode</label>
                                                <input class="mdl-textfield__input" type="text" id="postcode" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="email">Email</label>
                                                <input class="mdl-textfield__input" type="text" id="email" /> </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell-4-col-phone">
                                            <div class="mdl-textfield mdl-textfield--full-width mdl-textfield--floating-label mdl-js-textfield">
                                                <label class="mdl-textfield__label" for="phone">Phone</label>
                                                <input class="mdl-textfield__input" type="text" id="phone" /> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdl-grid mdl-cell mdl-cell--1-col"></div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                    <div class="mdl-card mdl-card mdl-shadow--2dp oxy-card-order oxy-margin-bottom-40">
                                        <div class="mdl-card__title">
                                            <h2 class="mdl-card__title-text">Your Order</h2>
                                        </div>
                                        <div class="oxy-card-order__summary oxy-data-table">
                                            <table class="mdl-data-table mdl-js-data-table oxy-full-width oxy-card-order__summary-table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>White Top
                                                            <strong>x 2</strong>
                                                        </td>
                                                        <td>$12.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Red Green Dress
                                                            <strong>x 1</strong>
                                                        </td>
                                                        <td>$17.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Red striped top
                                                            <strong>x 2</strong>
                                                        </td>
                                                        <td>$77.99</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blue suede
                                                            <strong>x 2</strong>
                                                        </td>
                                                        <td>$52.88</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Funky hat
                                                            <strong>x 1</strong>
                                                        </td>
                                                        <td>$88.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td>$218.87</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>Free</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>$218.87</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="mdl-card__supporting-text">
                                                <h2 class="mdl-typography--title mdl-typography--font-light">Payment methods</h2>
                                                <p>
                                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="bank-transfer">
                                                        <input type="radio" id="bank-transfer" class="mdl-radio__button" name="options" value="bank-transfer" checked />
                                                        <span class="mdl-radio__label">Bank Transfer</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="credit-card">
                                                        <input type="radio" id="credit-card" class="mdl-radio__button" name="options" value="credit-card" />
                                                        <span class="mdl-radio__label">Credit Card</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pay-pal">
                                                        <input type="radio" id="pay-pal" class="mdl-radio__button" name="options" value="pay-pal" />
                                                        <span class="mdl-radio__label">PayPal</span>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mdl-card__actions mdl-card--border mdl-typography--text-right">
                                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"> Place Order </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="oxy-section">
                    <div class="oxy-section__content">
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col">
                                <h2 class="mdl-typography--display-1 mdl-typography--text-center mdl-typography--font-light oxy-margin-top-40  oxy-margin-bottom-20"> Related Products </h2>
                                <div class="oxy-divider oxy-divider--center">
                                    <div class="oxy-divider__border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone oxy-margin-bottom-40">
                                <!-- new card -->
                                <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                                    <div class="mdl-card__media oxy-card-product__media">
                                        <a href="single-product.html">
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-a-big-notinclude.jpg" />
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-10-b-big-notinclude.jpg" /> </a>
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
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <!-- new card -->
                                <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                                    <div class="mdl-card__media oxy-card-product__media">
                                        <a href="single-product.html">
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-a-big-notinclude.jpg" />
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-2-b-big-notinclude.jpg" /> </a>
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
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <!-- new card -->
                                <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                                    <div class="mdl-card__media oxy-card-product__media">
                                        <a href="single-product.html">
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-a-big-notinclude.jpg" />
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-3-b-big-notinclude.jpg" /> </a>
                                        <div class="mdl-card__title oxy-card-product__title">
                                            <h3 class="mdl-card__title-text oxy-card-product__title-text">
                                                <a href="single-product.html" class="mdl-typography--font-light">Two-Tone Tailored Jacket</a>
                                            </h3>
                                            <span class="mdl-typography--text-uppercase mdl-typography--font-bold oxy-card-product__tags">
                                                <a href="shop.html" rel="tag">Jackets</a>
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
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                <!-- new card -->
                                <div class="mdl-card mdl-shadow--2dp oxy-card-product">
                                    <div class="mdl-card__media oxy-card-product__media">
                                        <a href="single-product.html">
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-24-a-big-notinclude.jpg" />
                                            <img alt="some product" class="oxy-card-product__image" src="assets/images/products/product-24-b-big-notinclude.jpg" /> </a>
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
                        </div>
                    </div>
                </div>
                <div class="oxy-section">
                    <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
                        <img src="assets/images/backgrounds/bg26-notinclude.jpg" alt="section background"> </div>
                    <div class="oxy-section__overlay oxy-section__overlay--color-30"></div>
                    <div class="oxy-section__content">
                        <div class="mdl-grid mdl-grid--no-fullwidth">
                            <div class="mdl-cell mdl-cell--12-col">
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
                            <a href="checkout.blade.php" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary oxy-full-width"> Checkout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="side-cart-obfuscator" class="mdl-layout__obfuscator"></div>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --><script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> <script src="assets/js/theme.min.js"></script> <script>
    (function($) {
        'use strict';

        $(document).ready(function($) {
            $('#create-account-check').change(function() {
                toggleDetail('#create-account-check', '#create-account-details');
            });

            $('#shipping-address-check').change(function() {
                toggleDetail('#shipping-address-check', '#shipping-address-details');
            });

            toggleDetail('#shipping-address-check', '#shipping-address-details');
            toggleDetail('#create-account-check', '#create-account-details');

        });

        function toggleDetail(checkboxId, detailId) {
            $(detailId).slideToggle($(checkboxId).is(':checked'));
        }

    })(jQuery);
</script> </body>

</html>