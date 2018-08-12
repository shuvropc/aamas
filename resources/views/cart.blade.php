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

                                <th class="cart-qty item">Quantity</th>
                                <th class="cart-sub-total item">Unit Cost</th>
                                <th class="cart-total last-item">Grandtotal</th>
                            </tr>
                            </thead><!-- /thead -->
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="shopping-cart-btn">
							<span class="">
								<a href="/" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								{{--<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>--}}
							</span>
                                    </div><!-- /.shopping-cart-btn -->
                                </td>
                            </tr>
                            </tfoot>
                            <tbody>

                                @foreach($carts as $cart)
                            <tr>
                                <td class="romove-item"><a href="/product/removeFromCart/{{$cart->rowId}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                <td class="cart-image">
                                    <a class="entry-thumbnail" href="/product/details/{{$cart->id}}">
                                        <img src="{{$cart->options['image']}}" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <h4 class="cart-product-description"><a href="/product/details/{{$cart->id}}">{{$cart->name}}</a></h4>
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>{{$cart->options['color']}}</span></span>
                                    </div>
                                    <div class="cart-product-info">
                                        <span class="product-color">SIZE:<span>{{$cart->options['size']}}</span></span>
                                    </div>
                                </td>

                                <td class="cart-product-quantity">
                                    <input id="p{{$cart->id}}" max="10" min="1" onchange="update(this.id, '{{$cart->id}}', '{{$cart->option['size']}}', '{{$cart->options['color']}}', '{{$cart->rowId}}')"  type="number" value="{{$cart->qty}}">

                                    </div>
                                </td>
                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">${{$cart->price}}</span></td>
                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">${{$cart->price * $cart->qty}}</span></td>
                            </tr>
                            @endforeach

                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->


                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md">${{$cart_total}}</span>
                                </div>
                            </th>
                        </tr>
                        </thead><!-- /thead -->
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <a href="/confirmcheckout" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
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


    <script>

        function update(id, pid, size, color, rowId){

            $.ajax({
                url: "/product/checkproductquantity",
                type: 'post',
                data: {
                    'id': pid,
                    'size': size,
                    'color': color
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result){
                    qty = result[0]['available_quantity'];

                if($('#'+id).val() > qty){
                    alert('Max Quantity Reached');
                    $('#'+id).val(qty);
                }else{
                    $.ajax({
                        url: "/product/updatecart",
                        type: 'post',
                        data: {
                            'rowId': rowId,
                            'qty': $('#'+id).val()
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (result) {
                            document.location.reload(true);
                        }
                    });
                }
            },
                error: function (request, status, error) {
                console.log(request.responseText);
                console.log(request.status);
                console.log(request.error);
            }
            });
        }
    </script>

@endsection