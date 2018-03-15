@extends('layouts.userheader')

@section('styles')
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
    </script>
@stop

@section('pagecontent')


        <div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
            <main class="mdl-layout__content">
                <div class="oxy-section">
                    <div class="oxy-section__content">
                        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-top-40 ">
                            <div class="mdl-cell mdl-cell--12-col">
                                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp oxy-full-width oxy-data-table oxy-data-table--center oxy-data-table--middle">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th> </th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img width="60" height="60" src="assets/images/products/product-25-b-small-notinclude.jpg" alt="image"> </a>
                                            </td>
                                            <td>
                                                <a href="#">Ra Ra Top</a>
                                            </td>
                                            <td> $15.00 </td>
                                            <td>
                                                <div class="oxy-quantity">
                                                    <input type="button" value="-">
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <input type="number" step="1" min="0" name="cart" value="2" title="Qty" class="mdl-textfield__input" id="q1">
                                                        <label class="mdl-textfield__label" for="q1"></label>
                                                    </div>
                                                    <input type="button" value="+"> </div>
                                            </td>
                                            <td>
                                                <strong>$30.00</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img width="60" height="60" src="assets/images/products/product-22-b-small-notinclude.jpg" alt="image"> </a>
                                            </td>
                                            <td>
                                                <a href="#">Hawai pants</a>
                                            </td>
                                            <td> $20.00 </td>
                                            <td>
                                                <div class="oxy-quantity">
                                                    <input type="button" value="-">
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="mdl-textfield__input" id="q2">
                                                        <label class="mdl-textfield__label" for="q2"></label>
                                                    </div>
                                                    <input type="button" value="+"> </div>
                                            </td>
                                            <td>
                                                <strong>$20.00</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img width="60" height="60" src="assets/images/products/product-20-b-small-notinclude.jpg" alt="image"> </a>
                                            </td>
                                            <td>
                                                <a href="#">Winter Blouse</a>
                                            </td>
                                            <td> $90.00 </td>
                                            <td>
                                                <div class="oxy-quantity">
                                                    <input type="button" value="-">
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <input type="number" step="1" min="0" name="cart" value="2" title="Qty" class="mdl-textfield__input" id="q3">
                                                        <label class="mdl-textfield__label" for="q3"></label>
                                                    </div>
                                                    <input type="button" value="+"> </div>
                                            </td>
                                            <td>
                                                <strong>$180.00</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="Remove this item" class="mdl-button mdl-js-button mdl-button--accent mdl-button--icon">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img width="60" height="60" src="assets/images/products/product-10-a-small-notinclude.jpg" alt="image"> </a>
                                            </td>
                                            <td>
                                                <a href="#">Summer Hat</a>
                                            </td>
                                            <td> $20.00 </td>
                                            <td>
                                                <div class="oxy-quantity">
                                                    <input type="button" value="-">
                                                    <div class="mdl-textfield mdl-js-textfield">
                                                        <input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="mdl-textfield__input" id="q4">
                                                        <label class="mdl-textfield__label" for="q4"></label>
                                                    </div>
                                                    <input type="button" value="+"> </div>
                                            </td>
                                            <td>
                                                <strong>$20.00</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-bottom-20">
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--full-width">
                                    <input class="mdl-textfield__input" type="text" id="coupon" />
                                    <label class="mdl-textfield__label" for="coupon">Coupon Code</label>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-full-width"> Apply Coupon </button>
                            </div>
                            <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle"> </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                                <!-- Accent-colored raised button with ripple -->
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent oxy-full-width"> Update Cart </button>
                            </div>
                            <div class="mdl-cell mdl-cell--2-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                                <!-- Accent-colored raised button with ripple -->
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary oxy-full-width"> Checkout </button>
                            </div>
                        </div>
                        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-bottom-40">
                            <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle"> </div>
                            <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-cell--middle">
                                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp oxy-full-width oxy-data-table oxy-data-table--center oxy-data-table--middle">
                                    <thead>
                                        <tr>
                                            <th colspan=2> Cart Totals </th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td class="mdl-data-table__cell--non-numeric">Cart Subtotal</td>
                                                <td>$1.125</td>
                                            </tr>
                                            <tr>
                                                <td class="mdl-data-table__cell--non-numeric">Shipping & Handling </td>
                                                <td>$65</td>
                                            </tr>
                                            <tr>
                                                <td class="mdl-data-table__cell--non-numeric">
                                                    <strong>Total</strong>
                                                </td>
                                                <td>
                                                    <strong>$1.190</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

@stop