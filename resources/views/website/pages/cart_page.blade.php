@extends('website.master')
@section('title', 'cart')
@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Cart</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOPING CART AREA START -->
    <div class="liton__shoping-cart-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table">
                                <!-- <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <tbody>
                                    @foreach ($products as $p)
                                    
                                    <tr>
                                        <td class="cart-product-remove"><a href="{{route('cart.page.item.delete',$p->id)}}">X</a></td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="{{asset('/').$p->product->image}}" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">{{$p->product->name}}</a></h4>
                                        </td>
                                        <td class="cart-product-price">{{$p->product->selling_price}}&#2547;</td>

                                        <td>
                                            <a class="custom-dec decrement" data-id="{{ $p->id }}">-</a>
                                            <input type="number" class="qty-input" value="{{ $p->qty }}" data-id="{{ $p->id }}" readonly style="width: 60px; text-align: center;">
                                            <a class="custom-inc increment" data-id="{{ $p->id }}">+</a>
                                        </td>
                                        

                                        <td class="cart-product-subtotal" id="itemtotal-{{ $p->id }}">
                                            {{$p->qty * $p->product->selling_price}}&#2547;
                                        </td>
                                        
                                    </tr>
                                    @endforeach

                                    <style>
                                        .custom-inc{
                                          background-color: purple;
                                          padding: 5px;
                                          cursor: pointer;
                                        }
                                        .custom-dec{
                                          background-color: red;
                                          padding: 5px;
                                          cursor: pointer;
                                        }
                                    </style>


                    

                                    {{-- <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">OE Replica Wheels</a></h4>
                                        </td>
                                        <td class="cart-product-price">$85.00</td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">$170.00</td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">Wheel Bearing Retainer</a></h4>
                                        </td>
                                        <td class="cart-product-price">$75.00</td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">$150.00</td>
                                    </tr> --}}
                                    {{-- <tr class="cart-coupon-row">
                                        <td colspan="6">
                                            <div class="cart-coupon">
                                                <input type="text" name="cart-coupon" placeholder="Coupon code">
                                                <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn theme-btn-2 btn-effect-2-- disabled">Update Cart</button>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>{{ $products->sum(fn($p) => $p->qty * $p->product->selling_price) }}&#2547;</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Shipping and Handing</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$00.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>$633.00</strong></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="btn-wrapper text-right">
                                <a href="{{route('checkout')}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                         $(document).ready(function () {
                                  $(".increment, .decrement").click(function () {
                                  let cartId = $(this).data("id");
                                 let inputField = $(this).siblings(".qty-input");
                                let newQuantity = parseInt(inputField.val());

                                if ($(this).hasClass("increment")) {
                                    newQuantity += 1;
                                } else if ($(this).hasClass("decrement") && newQuantity > 1) {
                                    newQuantity -= 1;
                                }

                                updateCart(cartId, newQuantity, inputField);
                              });

                              function updateCart(cartId, quantity, inputField) {
                                $.ajax({
                                    url: "{{ route('cart.update-product') }}",
                                    type: "POST",
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        cart_id: cartId,
                                        quantity: quantity,
                                    },
                                    success: function (response) {
                                        if (response.success) {
                                            inputField.val(response.quantity);
                                            $("#itemtotal-" + cartId).text(response.itemtotal);
                                            
                                        }
                                    }
                                });
                             }
                            
                           });


                          

                </script>

@endsection
