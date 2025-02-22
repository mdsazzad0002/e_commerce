@extends('website.master')

@section('title','Checkout Form')

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Checkout</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-100">

       

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__checkout-inner">
                        {{-- <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                            <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to login</a></h5>
                            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn_coupon-code-form ltn__form-box">
                                    <p>Please login your accont.</p>
                                    <form action="#" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                        <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                        <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                            <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle="collapse">Click here to enter your code</a></h5>
                            <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn__coupon-code-form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <form action="#" >
                                        <input type="text" name="coupon-code" placeholder="Coupon code">
                                        <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>

                           
                           
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                             </div>
                            @endif
            
                        @if(Session::has('message'))
                            <div class="alert alert-className">
                                {{session('message')}}
                            </div>
                          @endif
    
                        
                            <div class="ltn__checkout-single-content-info">
                                <form action="{{ route('place.order') }}" method="POST">
                                    @csrf
                                    <h6>Personal Information</h6>
                                    @php
                                        $userId = session()->get('customer_id') ?? session()->get('guest_user_id');
                                         $user = \App\Models\Customer::where('id', $userId)->first();
                                     @endphp
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" value="{{$user->name ?? ''}}" name="name" placeholder="First name" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" value="{{$user->email ?? ''}}" name="email" placeholder="email address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" value="{{$user->mobile ?? ''}}" name="phone" placeholder="phone number" required>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                            </div>
                                        </div> --}}
                                    </div>
                                   
                                    {{-- <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p> --}}
                                    <h6>Address </h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="address" placeholder="Address" required></textarea>
                                    </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Cart Totals</h4>
                        <table class="table">
                            <tbody>

                                @foreach ($Items as $index=>$item)
                                <tr>
                                    {{-- <td><img src="" alt="">{{$item->product->image}}</td> --}}
                                    <td>{{$item->product->name}} <strong>× {{$item->qty}}</strong></td>
                                    <td>{{$item->product->selling_price}}&#2547;</td>
                                </tr>

                                <input type="hidden" name="items[{{ $index }}][name]" value="{{ $item->product->name }}">
                                <input type="hidden" name="items[{{ $index }}][qty]" value="{{ $item->qty }}">
                                <input type="hidden" name="items[{{ $index }}][product_id]" value="{{ $item->product->id }}">
                                <input type="hidden" name="items[{{ $index }}][price]" value="{{ $item->price }}">
                                <input type="hidden" name="items[{{ $index }}][pound]" value="{{ $item->pound }}">
                                <input type="hidden" name="items[{{ $index }}][flavor]" value="{{ $item->flavor }}">
                                <input type="hidden" name="items[{{ $index }}][img]" value="{{ $item->product->image }}">

                                @endforeach

                                    {{-- <td>Shipping and Handing</td>
                                    <td>52</td> --}}
                                </tr>
                                {{-- <tr>
                                    <td>Vat</td>
                                    <td>$00.00</td>
                                </tr> --}}
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>{{$total_price}}&#2547;</strong></td>
                                    <input type="hidden" name="total" value="{{$total_price}}">
                                </tr>
                            </tbody>
                        </table>
                    </div>

                              

                    {{-- payment --}}

                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <label for="">
                                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="ssl"> Online Payment
                                </label>
                               
                                {{-- <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                    Check payments
                                </h5>
                                <div id="faq-item-2-1" class="collapse" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div> --}}

                            </div>
                            <!-- card -->
                            <div class="card">
                                <label for="">
                                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="cash"> Cash On Delivery
                                </label>
                                

                                {{-- <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true"> 
                                    Cash on delivery 
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div> --}}
                            </div>                          
                            <!-- card -->
                            {{-- <div class="card">
                                <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false" >
                                    PayPal <img src="img/icons/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                    </div>

                    

                </div>

            </form>

            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->



@endsection
