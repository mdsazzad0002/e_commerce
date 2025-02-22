@php
   $setting = App\Models\Setting::latest()->first();
@endphp

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/fiama-preview/fiama/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 11:48:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Radian</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    @include('website.includes.style')
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{asset('/')}}website/assets/https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-3) -->
     @include('website.includes.header')
    <!-- HEADER AREA END -->

       @yield('content')

    <!-- FOOTER AREA START -->
   @include('website.includes.footer')
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="{{asset('/')}}website/assets/img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info shop-details-info pl-0">
                                            <h3>Pink Flower Tree Red</h3>
                                            <div class="product-price-ratting mb-20">
                                                <ul>
                                                    <li>
                                                        <div class="product-price">
                                                            <span>$49.00</span>
                                                            <del>$65.00</del>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="{{asset('/')}}website/assets/#"><i class="icon-star"></i></a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#"><i class="icon-star"></i></a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#"><i class="icon-star"></i></a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#"><i class="icon-star"></i></a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#"><i class="icon-star"></i></a></li>
                                                                <li class="review-total"> <a href="{{asset('/')}}website/assets/#"> ( 95 Reviews )</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal-product-brief">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                                <ul>
                                                    <li>
                                                        <div class="ltn__color-widget clearfix">
                                                            <strong class="d-meta-title">Color</strong>
                                                            <ul>
                                                                <li class="theme"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                                <li class="green-2"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                                <li class="blue-2"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                                <li class="white"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                                <li class="red"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                                <li class="yellow"><a href="{{asset('/')}}website/assets/#"></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__size-widget clearfix mt-25">
                                                            <strong class="d-meta-title">Size</strong>
                                                            <ul>
                                                                <li><a href="{{asset('/')}}website/assets/#">S</a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#">M</a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#">L</a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#">XL</a></li>
                                                                <li><a href="{{asset('/')}}website/assets/#">XXL</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('/')}}website/assets/#" class="theme-btn-1 btn btn-effect-1 d-add-to-cart" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{asset('/')}}website/assets/#" class="btn btn-effect-1 d-add-to-wishlist" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="icon-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__social-media mb-30">
                                                <ul>
                                                    <li class="d-meta-title">Share:</li>
                                                    <li><a href="{{asset('/')}}website/assets/#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                                    <li><a href="{{asset('/')}}website/assets/#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                                    <li><a href="{{asset('/')}}website/assets/#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                                    <li><a href="{{asset('/')}}website/assets/#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1 mb-30 d-none">
                                                <ul>
                                                    <li><strong>SKU:</strong> <span>12345</span></li>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="{{asset('/')}}website/assets/#">Flower</a>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <strong>Tags:</strong> 
                                                        <span>
                                                            <a href="{{asset('/')}}website/assets/#">Love</a>
                                                            <a href="{{asset('/')}}website/assets/#">Flower</a>
                                                            <a href="{{asset('/')}}website/assets/#">Heart</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__safe-checkout d-none">
                                                <h5>Guaranteed Safe Checkout</h5>
                                                <img src="{{asset('/')}}website/assets/img/icons/payment-2.png" alt="Payment Image">
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-add-to-cart-content clearfix">
                                            <div class="modal-product-img">
                                                <img src="{{asset('/')}}website/assets/img/product/1.png" alt="#">
                                            </div>
                                             <div class="modal-product-info">
                                                <h5><a href="{{asset('/')}}website/assets/product-details.html">Heart's Desire</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                                <div class="btn-wrapper">
                                                    <a href="{{asset('/')}}website/assets/cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                    <a href="{{asset('/')}}website/assets/checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                </div>
                                             </div>
                                        </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none--">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use (fiama10) discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{asset('/')}}website/assets/img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="{{asset('/')}}website/assets/img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="{{asset('/')}}website/assets/product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="{{asset('/')}}website/assets/wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{asset('/')}}website/assets/img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

   @include('website.includes.script')
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/fiama-preview/fiama/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 11:48:41 GMT -->
</html>

