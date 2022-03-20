@extends('layouts.frontend_master')
@section('content')


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sub_total = 0;
                                    @endphp
                                @forelse ($carts as $cart)
                                {{-- {{$cart}} --}}
                                      <tr>

                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px"
                                                    src="{{asset('uploads/product_photo')}}/{{$cart->relationToproduct->product_thumbnail_photo}}" alt="" /></a>
                                        </td>
                                        <td class="product-name">
                                            <p> <a href="#">{{$cart->relationToproduct->product_name}}</a></p>
                                            <p>Color {{$cart->relationTocolor->color_name}}</p>
                                            <p>Size: {{$cart->relationTosize->size_name}}</p>
                                        </td>
                                        <td class="product-price-cart"><span class="amount">{{$cart->relationToproduct->discounted_price}}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="{{$cart->cart_amount}}" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$ {{$cart->cart_amount * $cart->relationToproduct->discounted_price}}</td>
                                            @php
                                                $sub_total += $cart->cart_amount * $cart->relationToproduct->discounted_price;
                                            @endphp
                                        <td class="product-remove">
                                            <a href="{{route('frontend.pruduct_details',$cart->relationToproduct->slug)}}"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('delete.cart',$cart->id)}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <span>No Product</span>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="{{route('fronted_home')}}">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        @php
                                          $user = auth()->user()->id;
                                        @endphp
                                        <button>Update Shopping Cart</button>
                                        <a href="{{route('delete.all.cart',auth()->user()->id)}}">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Country
                                            </label>
                                            <select class="email s-email s-wid" id="country_dropdown">
                                                <option>-Select One Country-</option>
                                                @foreach ($shippings as $shipping)
                                                <option value="{{$shipping->country_id}}">{{$shipping->relationTocountry->name}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * City / State
                                            </label>
                                            <select class="email s-email s-wid" id="city_dropdown" disabled>
                                                {{-- <option>-Select Country-</option> --}}
                                                {{-- @foreach ($shippings as $shipping) --}}
                                                {{-- <option value="">Albania</option> --}}
                                                {{-- @endforeach --}}

                                            </select>
                                        </div>
                                        {{-- <div class="tax-select mb-25px">
                                            <label>
                                                * Zip/Postal Code
                                            </label>
                                            <input type="text" />
                                        </div> --}}
                                        {{-- <button class="cart-btn-2" type="submit">Get A Quote</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>

                                        <input id="coupon_name" type="text" required="" name="coupon_name" />
                                        <div class="alert alert-danger d-none" id="coupon_error"></div>
                                        <button class="d-none cart-btn-2" id="apply_coupon" type="button">Apply Coupon</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span id="sub_total">{{$sub_total}}</span></h5>
                                <h5>Shipping Charge (+)<span id="shipping_charge">0</span></h5>
                                <h5>Discount Type <span id="discount_type"></span></h5>
                                <h5>Discount Amount (-)<span id="discount_amount">0</span></h5>
                                {{-- <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                    </ul>
                                </div> --}}
                                <h4 class="grand-totall-title">Grand Total <span id="grand_total">
                                    {{$sub_total}}
                                </span></h4>
                                <a class="d-none" id="check_out" href="{{route('check.out')}}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
@endsection

@push('fontendfooterjs')
<script>
    $(document).ready(function(){
        $('#country_dropdown').change(function(){
            var country_id = $(this).val();
            $('#shipping_charge').html(0);
            $('#check_out').addClass('d-none');
            // alert(country_id);

            //ajax start
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //coustom ajax
            $.ajax({
                type: "POST",
                url: "{{route('get.city.list')}}",
                data: {
                    country_id:country_id,
                },

                success: function(data){
                    // alert(data);
                    $('#city_dropdown').attr('disabled',false);
                    // $('#city_dropdown').removeClass('class_name');
                    $('#city_dropdown').html(data);
                }
            });
        });
        $('#city_dropdown').change(function(){
            var shipping_charge = $(this).val();
            $('#shipping_charge').html(shipping_charge);
            $('#check_out').removeClass('d-none');
            var sub_total = $('#sub_total').html();
            var discount_amount = $('#discount_amount').html();
            var grand_total = parseInt(sub_total)+parseInt(shipping_charge)-parseInt(discount_amount);
            // alert(grand_total);
            $('#grand_total').html(grand_total);
            //get select option value with option class
            var country_id = $('#country_dropdown :selected').val();
            var city_name = $(this).children("option:selected").html();


            //ajax start
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //coustom ajax
            $.ajax({
                type: "POST",
                url: "{{route('set.country.city')}}",
                data: {
                    country_id:country_id,city_name:city_name
                },

                success: function(data){
                    // alert(data);

                }
            });

        });
        //-------coupon work----------
        $('#coupon_name').keyup(function(){
            $('#apply_coupon').removeClass('d-none');
        });

        $('#apply_coupon').click(function(){
            var coupon_name = $('#coupon_name').val();
             var sub_total = "{{$sub_total}}";

             //ajax start
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //coustom ajax
            $.ajax({
                type: "POST",
                url: "{{route('check.coupon')}}",
                data: {
                    coupon_name:coupon_name,
                    sub_total:sub_total,
                },
                success: function(data){
                    if(data.error){
                        $('#coupon_error').removeClass('d-none');
                        $('#coupon_error').html(data.error);
                        // alert('error ace');
                    }else{
                        var shipping_charge = $('#shipping_charge').html();
                         $('#apply_coupon').addClass('d-none');
                         $('#discount_type').html(data.coupon_type);
                         $('#discount_amount').html(data.coupon_amount);
                         $('#grand_total').html(data.grand_total+parseInt(shipping_charge));

                    };

                }
            });
        });
    });
</script>
@endpush
