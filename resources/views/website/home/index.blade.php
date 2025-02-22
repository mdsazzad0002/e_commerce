@extends('website.master')
@section('title', 'Flower')
@section('content')




<style>
    .sbc_card_home p {
        text-align: center;
    }

    .fvrt_hvr_actv a:hover,
    .fvrt_hvr_actv a:active {
        color: #460066 !important;
        font-weight: 500;
    }

    .banner_right_block {
        padding: 160px 120px;
        background-color: #FBEBFF;
        border-radius: 10px;
    }

    .ltn__blog-img a img{
        border-radius: 10px;
    }
    
     
    .active-category {
    font-weight: bold; 
    color: purple !important;
    }



</style>


<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{asset('/')}}website/assets/#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="{{asset('/')}}website/assets/index.html">Home Style - 01</a></li>
                        <li><a href="{{asset('/')}}website/assets/index-2.html">Home Style - 02</a></li>
                        <li><a href="{{asset('/')}}website/assets/index-3.html">Home Style - 03</a></li>
                        <li><a href="{{asset('/')}}website/assets/index-4.html">Home Style - 04</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('/')}}website/assets/about.html">About Us</a></li>
                <li><a href="{{asset('/')}}website/assets/#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="{{asset('/')}}website/assets/shop.html">Shop</a></li>
                        <li><a href="{{asset('/')}}website/assets/shop-grid.html">Shop Grid</a></li>
                        <li><a href="{{asset('/')}}website/assets/shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="{{asset('/')}}website/assets/shop-right-sidebar.html">Shop right sidebar</a></li>
                        <li><a href="{{asset('/')}}website/assets/product-details.html">Shop details </a></li>
                        <li><a href="{{asset('/')}}website/assets/cart.html">Cart</a></li>
                        <li><a href="{{asset('/')}}website/assets/wishlist.html">Wishlist</a></li>
                        <li><a href="{{asset('/')}}website/assets/checkout.html">Checkout</a></li>
                        <li><a href="{{asset('/')}}website/assets/order-tracking.html">Order Tracking</a></li>
                        <li><a href="{{asset('/')}}website/assets/account.html">My Account</a></li>
                        <li><a href="{{asset('/')}}website/assets/login.html">Sign in</a></li>
                        <li><a href="{{asset('/')}}website/assets/register.html">Register</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('/')}}website/assets/#">News</a>
                    <ul class="sub-menu">
                        <li><a href="{{asset('/')}}website/assets/blog.html">News</a></li>
                        <li><a href="{{asset('/')}}website/assets/blog-grid.html">News Grid</a></li>
                        <li><a href="{{asset('/')}}website/assets/blog-left-sidebar.html">News Left sidebar</a></li>
                        <li><a href="{{asset('/')}}website/assets/blog-right-sidebar.html">News Right sidebar</a></li>
                        <li><a href="{{asset('/')}}website/assets/blog-details.html">News details</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('/')}}website/assets/#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{asset('/')}}website/assets/about.html">About Us</a></li>
                        <li><a href="{{asset('/')}}website/assets/portfolio.html">Portfolio</a></li>
                        <li><a href="{{asset('/')}}website/assets/portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="{{asset('/')}}website/assets/portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="{{asset('/')}}website/assets/faq.html">FAQ</a></li>
                        <li><a href="{{asset('/')}}website/assets/locations.html">Google Map Locations</a></li>
                        <li><a href="{{asset('/')}}website/assets/404.html">404</a></li>
                        <li><a href="{{asset('/')}}website/assets/contact.html">Contact</a></li>
                        <li><a href="{{asset('/')}}website/assets/coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('/')}}website/assets/contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="{{asset('/')}}website/assets/account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="icon-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="{{asset('/')}}website/assets/wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="icon-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="{{asset('/')}}website/assets/cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="icon-handbag"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="{{asset('/')}}website/assets/#" title="Facebook"><i class="icon-social-facebook"></i></a>
                </li>
                <li><a href="{{asset('/')}}website/assets/#" title="Twitter"><i class="icon-social-twitter"></i></a>
                </li>
                <li><a href="{{asset('/')}}website/assets/#" title="Pinterest"><i class="icon-social-pinterest"></i></a>
                </li>
                <li><a href="{{asset('/')}}website/assets/#" title="Instagram"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>










<!-- SLIDER AREA START (slider-6) -->


<div class="container" style="padding:35px 0px;">
    <div class="row">
        <div class="col">
            <img src="{{asset('/')}}website/assets/img/hero-banner-104.jpg" alt="">
        </div>
    </div>
</div>


<!-- <div class="ltn__slider-area ltn__slider-3 ltn__slider-6 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
        

        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---"
            data-bs-bg="{{asset('/')}}website/assets/img/slider/1.jpg">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h1 class="slide-title animated ">Fresh Flower</h1>
                                            <h6 class="slide-sub-title ltn__body-color slide-title-line animated">
                                                Natural & Beautiful Flower Here</h6>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{asset('/')}}website/assets/service.html"
                                                    class="theme-btn-1 btn btn-round">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---"
            data-bs-bg="{{asset('/')}}website/assets/img/slider/3.jpg">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h1 class="slide-title animated ">Fresh Flower</h1>
                                            <h6 class="slide-sub-title ltn__body-color slide-title-line animated">
                                                Natural & Beautiful Flower Here</h6>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{asset('/')}}website/assets/service.html"
                                                    class="theme-btn-1 btn btn-round">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div> -->



<!-- SLIDER AREA END -->








<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mt-100 mt--65">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12">
                <div
                    class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6 position-relative">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{asset('/')}}website/assets/img/icons/svg/8-trolley.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            <p>On all orders over $49.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{asset('/')}}website/assets/img/icons/svg/9-money.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>15 days returns</h4>
                            <p>Moneyback guarantee</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{asset('/')}}website/assets/img/icons/svg/10-credit-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Secure checkout</h4>
                            <p>Protected by Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{asset('/')}}website/assets/img/icons/svg/11-gift-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Offer & gift here</h4>
                            <p>On all orders over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area  mt-65">
    <div class="container" style="padding-left:20px;">
        <div class="row justify-content-center">
            @foreach ($categories as $cat)
                <div class="col-lg-2 col-md-3" style="padding-left: 0 !important;">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{asset('/')}}website/assets/shop.html"><img src="{{$cat->image}}" alt="Banner Image"
                                    style="border-radius:10px;width:100%;height:188px;object-fit:cover;"></a>
                            <p class="text-center" style="font-size:18px;margin-top:12px;">{{$cat->name}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/2.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/3.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/3.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</div>
<!-- BANNER AREA END -->


<div class=".mtc-responsive mt-lg-4 mt-sm-0">
    <div class="container">
        <div class="row">
            <div class="col text-center mt-lg-5 mt-0">
                <h2 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Shop By Occasions & Relations</h2>
                <p style="color:#000000;font-size:16px;">Surprise Your Loved Ones</p>
            </div>
        </div>
        <div class="row mt-xl-2 mt-sm-0">
            <div class="col sbc_card_home">
                <div>
                    <img src="{{asset('/')}}website/assets/img/Birthday-gifts-img.png" alt="">
                </div>
                <div>
                    <p>Birthday Gifts</p>
                </div>
            </div>
            <div class="col sbc_card_home">
                <div>
                    <img src="{{asset('/')}}website/assets/img/Anniversary-gifts.png" alt="">
                </div>
                <div>
                    <p>Anniversary Gifts</p>
                </div>
            </div>
            <div class="col sbc_card_home">
                <div>
                    <img src="{{asset('/')}}website/assets/img/Gifts-for-him.png" alt="">
                </div>
                <div>
                    <p>Gifts for Him</p>
                </div>
            </div>
            <div class="col sbc_card_home">
                <div>
                    <img src="{{asset('/')}}website/assets/img/Gifts-for-her.png" alt="">
                </div>
                <div>
                    <p>Gifts for Her</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- PRODUCT AREA START -->
<div class="ltn__product-area ltn__product-gutter  pt-65 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Favorite Occasion</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-center">
                    <ul class="d-flex justify-content-center gap-4 list-unstyled">
                        @foreach ($cates as $cat)
                        <li class="mt-0 fvrt_hvr_actv">
                            <a href="#" class="category-link" data-id="{{$cat->id}}">{{$cat->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

      
            <div class="row justify-content-center" id="product-container">
                @include('website.partials.filter_product_list', ['products' => $products])
                            {{--
                        <!-- ltn__product-item -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="ltn__product-item text-center">
                                <div class="product-img">
                                    <a href="{{asset('/')}}website/assets/product-details.html"><img
                                            src="{{asset('/')}}website/assets/img/product/2.png" alt="#"></a>
                                    <div class="product-badge">
                                        <ul>
                                            <li class="badge-1">Hot</li>
                                        </ul>
                                    </div>
                                    <div class="product-hover-action product-hover-action-2">
                                        <ul>
                                            <li>
                                                <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view_modal">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </li>
                                            <li class="add-to-cart">
                                                <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                                    data-bs-target="#add_to_cart_modal">
                                                    <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                                    <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#quick_view_modal">
                                                    <i class="icon-shuffle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">Premium
                                            Joyful</a></h2>
                                    <div class="product-price">
                                        <span>$18.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
            </div>
            
           

           

        
    </div>
</div>


<!-- PRODUCT SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <div class="">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/Rectangle114.png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ltn__banner-item">
                    <div class="">
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center text-center banner_right_block"
                            <h3 class="text-black" style="font-size:40px;font-weight:bold;color:#2F2F2F;">Send The Best
                            Gift</h3>
                            <span class="" style="color:#222222;font-size:16px;font-weight:400;">Bring Joy to life on
                                Special Moment</span>
                            <a href="{{asset('/')}}website/assets/shop.html" class="btn"
                                style="background-color:#460066;color:white;padding:10px 25px; border-radius:5px;font-weight:600;font-size:16px;margin-top:20px;">Get
                                It Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- BANNER AREA END -->



<!-- PRODUCT SLIDER AREA START -->
{{-- <div class="ltn__product-slider-area ltn__product-gutter  pt-60 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">top products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="{{asset('/')}}website/assets/product-details.html"><img
                                src="{{asset('/')}}website/assets/img/product/1.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">10%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                        data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">Pink
                                Flower Tree</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="{{asset('/')}}website/assets/product-details.html"><img
                                src="{{asset('/')}}website/assets/img/product/2.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                        data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">Premium
                                Joyful</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="{{asset('/')}}website/assets/product-details.html"><img
                                src="{{asset('/')}}website/assets/img/product/3.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">12%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                        data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">The White
                                Rose</a></h2>
                        <div class="product-price">
                            <span>$16.00</span>
                            <del>$19.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="{{asset('/')}}website/assets/product-details.html"><img
                                src="{{asset('/')}}website/assets/img/product/4.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                        data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">Red Rose
                                Bouquet</a></h2>
                        <div class="product-price">
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="{{asset('/')}}website/assets/product-details.html"><img
                                src="{{asset('/')}}website/assets/img/product/5.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="{{asset('/')}}website/assets/#" title="Add to Cart" data-bs-toggle="modal"
                                        data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/')}}website/assets/#" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="{{asset('/')}}website/assets/product-details.html">Heart's
                                Desire</a></h2>
                        <div class="product-price">
                            <span>$15.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- PRODUCT SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/11.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

{{-- delicous start --}}
<div class="container mb-4">
    <div class="row">
        <div class="col-6">
            <div class="card border-1" style="border-radius:20px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{asset('/')}}website/assets/img/banner/12 (1).png" class="card-img" alt="Image">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:27px; color:#2F2F2F;font-weight:bold;">Delicious
                                Cakes</h4>
                            <span class="card-text d-block">Birthday Cakes</span>
                            <span class="card-text d-block">Designer Cakes</span>
                            <span class="card-text d-block">Anniversary Cakes</span>
                            <span class="card-text d-block">Chocolate Cakes</span>
                            <span class="card-text d-block">Photo Cakes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card border-1" style="border-radius:20px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{asset('/')}}website/assets/img/banner/12 (1).png" class="card-img" alt="Image">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:27px; color:#2F2F2F;font-weight:bold;">Delicious
                                Cakes</h4>
                            <span class="card-text d-block">Birthday Cakes</span>
                            <span class="card-text d-block">Designer Cakes</span>
                            <span class="card-text d-block">Anniversary Cakes</span>
                            <span class="card-text d-block">Chocolate Cakes</span>
                            <span class="card-text d-block">Photo Cakes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col-6">
            <div class="card border-1" style="border-radius:20px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{asset('/')}}website/assets/img/banner/12 (1).png" class="card-img" alt="Image">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:27px; color:#2F2F2F;font-weight:bold;">Delicious
                                Cakes</h4>
                            <span class="card-text d-block">Birthday Cakes</span>
                            <span class="card-text d-block">Designer Cakes</span>
                            <span class="card-text d-block">Anniversary Cakes</span>
                            <span class="card-text d-block">Chocolate Cakes</span>
                            <span class="card-text d-block">Photo Cakes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card border-1" style="border-radius:20px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{asset('/')}}website/assets/img/banner/12 (1).png" class="card-img" alt="Image">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:27px; color:#2F2F2F;font-weight:bold;">Delicious
                                Cakes</h4>
                            <span class="card-text d-block">Birthday Cakes</span>
                            <span class="card-text d-block">Designer Cakes</span>
                            <span class="card-text d-block">Anniversary Cakes</span>
                            <span class="card-text d-block">Chocolate Cakes</span>
                            <span class="card-text d-block">Photo Cakes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- delicous end --}}


<!-- Gift START -->
<div class="ltn__banner-area  mt-90">
    <div class="container">
        <div class="pt-4 pb-4">
            <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Gift For Everyone</h1>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (1).png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (1).jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (2).png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (3).png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (4).png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="{{asset('/')}}website/assets/shop.html"><img
                                src="{{asset('/')}}website/assets/img/banner/13 (4).png" alt="Banner Image"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Gift AREA END -->


<!-- BRAND LOGO AREA START -->

<div class="ltn__blog-area  pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="mb-4">
                        <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Brand</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1">
            <!-- Blog Item -->
            @foreach ($brands as $brand)
            


                <div class="col-lg-12" style="width:274px !improtant">
                    <div class="ltn__blog-item">
                        <div class="ltn__blog-img">
                            <a href=""><img src="{{asset($brand->image)}}" alt="#" style="width: 200px; height: 150px;"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            {{-- <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author d-none">
                                        <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                    </li>
                                    <li>
                                        <span> Nov 18, 2020</span>
                                    </li>
                                    <li class="ltn__blog-comment">
                                        <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <h3 class="" style="font-size:18px;color:#424242;"><a
                                    href="{{asset('/')}}website/assets/blog-details.html">{{$brand->name}} </a></h3>
                        </div>
                    </div>
                </div>

                
            
           
            @endforeach
            
           
            <!--  -->
        </div>
    </div>
</div>
{{-- <div class="container pt-70 pb-35">
    <div class="mb-3">
        <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Brands We Work With</h1>
    </div>
    <div class="ltn__brand-logo-area  ltn__brand-logo-1">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/3.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/4.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/1.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{asset('/')}}website/assets/img/brand-logo/2.png" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- BRAND LOGO AREA END -->

{{-- customer test monial start --}}
<div class="container pt-70">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="text-center">
            <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Customer Testimonial</h1>
        </div>
        <a href="" class="btn"
            style="background-color:#460066;color:white;padding:10px 25px; border-radius:5px;font-weight:600;font-size:16px;">Get
            It Now</a>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"This is an amazing product! Highly recommend to
                    everyone. Great service and
                    quality!"</p>
                <h6 class="font-weight-bold">- John Doe</h6>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"Absolutely love it! The experience was smooth, and
                    the product exceeded my
                    expectations."</p>
                <h6 class="font-weight-bold">- Sarah Smith</h6>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"Great value for money! The customer support team was
                    very helpful throughout the
                    process."</p>
                <h6 class="font-weight-bold">- Michael Lee</h6>
            </div>
        </div>
    </div>
</div>
{{-- customer test monial end --}}

{{-- send gift start --}}

<div class="container mt-5 mb-5"> <!-- Added more top and bottom spacing -->
    <div class="row">
        <div class="col-12">
            <h4>Send Flowers, Cakes, Gifts & Plants Online Across India</h4>
            <p class="mb-4">
                At Radianbd, we take pride in delivering the highest quality flowers, cakes, plants, and gifts to your
                loved ones.
                Our diverse range ensures there's something perfect for every occasion. From romantic roses to
                delightful chocolate cakes
                and vibrant indoor plants, we have it all. As India's most trusted gifting brand, we guarantee fresh and
                beautiful flowers,
                delicious cakes, vibrant plants, and unique gifts that bring joy and smiles. Enjoy the convenience of
                doorstep delivery
                with our safe and secure packaging, ensuring your order arrives in pristine condition. Let’s explore our
                collection a little better:
            </p>
            <div class="d-flex justify-content-center"> <!-- Flexbox for centering -->
                <a href="#" class="" style="color:#460066; text-decoration:underline;" data-bs-toggle="collapse" data-bs-target="#faq-item">Explore More</a>
            </div>


           
                {{-- <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item" aria-expanded="false">
                    test
                </h6> --}}
                <div id="faq-item" class="collapse" data-bs-parent="#accordion_2">
                    <div class="card-body d-flex justify-content-center">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, similique velit! Quaerat, vitae 
                            molestiae? Libero similique maiores molestias maxime atque!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, similique velit! Quaerat, vitae molestiae? Libero 
                            similique maiores molestias maxime atque!</p>
                    </div>
                </div>
            


        </div>
    </div>
</div>


{{-- send gift end --}}


<!-- BLOG AREA START (blog-3) -->

<div class="ltn__blog-area  pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="mb-4">
                        <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Related Blog</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="{{asset('/')}}website/assets/blog-details.html"><img
                                src="{{asset('/')}}website/assets/img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="" style="font-size:18px;color:#424242;"><a
                                href="{{asset('/')}}website/assets/blog-details.html">How to Choose the Best Flower Shop Delivery Service Near You </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="{{asset('/')}}website/assets/blog-details.html"><img
                                src="{{asset('/')}}website/assets/img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="" style="font-size:18px;color:#424242;"><a
                                href="{{asset('/')}}website/assets/blog-details.html">How to Choose the Best Flower Shop Delivery Service Near You </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="{{asset('/')}}website/assets/blog-details.html"><img
                                src="{{asset('/')}}website/assets/img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="" style="font-size:18px;color:#424242;"><a
                                href="{{asset('/')}}website/assets/blog-details.html">How to Choose the Best Flower Shop Delivery Service Near You </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="{{asset('/')}}website/assets/blog-details.html"><img
                                src="{{asset('/')}}website/assets/img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="" style="font-size:18px;color:#424242;"><a
                                href="{{asset('/')}}website/assets/blog-details.html">How to Choose the Best Flower Shop Delivery Service Near You </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="{{asset('/')}}website/assets/blog-details.html"><img
                                src="{{asset('/')}}website/assets/img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="{{asset('/')}}website/assets/#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="{{asset('/')}}website/assets/#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="" style="font-size:18px;color:#424242;"><a
                                href="{{asset('/')}}website/assets/blog-details.html">How to Choose the Best Flower Shop Delivery Service Near You </a></h3>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>

<!-- BLOG AREA END -->




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
    $(".fvrt_hvr_actv a").click(function (e) {
        e.preventDefault();
        let categoryId = $(this).data("id"); // Get category ID
        // console.log(categoryId);

        $.ajax({
            url: "{{ route('filter.products') }}", // AJAX Route
            type: "GET",
            data: { category_id: categoryId },
            success: function (response) {
                $("#product-container").html(response); // Update product section
            },
        });
    });
});

$(document).on("click", ".category-link", function (e) {
    e.preventDefault(); // Prevent default link behavior

    $(".category-link").removeClass("active-category"); // Remove active from all
    $(this).addClass("active-category"); // Add active to clicked one
});

</script>


@endsection