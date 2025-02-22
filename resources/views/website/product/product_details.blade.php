@extends('website.master')
@section('title', 'Flower')
@section('content')



<style>
    .offers_dropdown_css {
        display: flex;
        justify-content: space-between;
    }

    .offers_dropdown_css span {
        font-size: 12px;
    }

    .offers_dropdown_css span:first-child {
        font-weight: 500;
    }

    .offers_dropdown_css span:last-child {
        font-weight: 300;
        text-decoration: underline;
    }

    #testCollapse {
        position: absolute;
        width: 100%;
        max-width: 350px;
        z-index: 1050;
        background: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-check {
        padding: 7px 10px;
        border-radius: 3px;
        background-color: #f2f2f2;
        border: 1px solid #d8d8d8;
    }

    .form-check-input {
        margin-top: 7px;
        margin-right: 10px;
    }

    .form-check-input:focus {
        outline: none;
        box-shadow: none;
    }

    .form-check-label {
        font-size: 12px;
        color: #565656;
    }

    .form-check-input[type=radio] {
        margin-left: 0px;
    }

    .dropdown-toggle-flavour {
        padding: 7px 15px;
        background: #f2f2f2;
        border-radius: 3px;
        border: 1px solid #dfdfdf;
        outline: none;
        box-shadow: none;
        color: #565656;
    }

    .dropdown-toggle-flavour::after {
        display: inline-block;
        margin-left: 10px;
        margin-top: 10px;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent;
    }

    .nice-select:after {
        border-bottom: 2px solid #999;
        border-right: 2px solid #999;
        content: '';
        display: block;
        margin-right: 10px;
        height: 7px;
        width: 7px;
        pointer-events: none;
        position: absolute;
        right: 12px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        -ms-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out;
        width: 7px;
    }

    .nice-select {
        display: flex !important;
        justify-content: space-between;
        align-items: center;
        -webkit-tap-highlight-color: transparent;
        background-color: #fff;
        border-radius: 5px;
        border: solid 1px #e0e0e0;
        box-sizing: border-box;
        clear: both;
        cursor: pointer;
        display: block;
        float: left;
        font-family: inherit;
        font-size: 14px;
        font-weight: 400;
        /* height: 44px; */
        line-height: 40px;
        outline: 0;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto;
    }

    span.current {
        margin-right: 10px;
    }
</style>






<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li style="margin-top: 0px";><a href="index.html">Home</a></li>
                            <li style="margin-top: 0px;">Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner">
                    <div class="row">
                        <div class="col-md-6" id="sticky_image_top">
                            <div class="ltn__shop-details-img-gallery ltn__shop-details-img-gallery-2">
                                <div class="ltn__shop-details-small-img slick-arrow-2">

                                    @foreach ($images as $g_img)
                                    {{-- @php
                                    dd($g_img)
                                    @endphp --}}

                                    <div class="single-small-img">
                                        <img src="{{ asset($g_img->image) }}" alt="Image">
                                    </div>
                                    @endforeach

                                    {{-- <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/2.png" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/3.png" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/4.png" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/5.png" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/6.png" alt="Image">
                                    </div>
                                    <div class="single-small-img">
                                        <img src="{{asset('/')}}website/assets/img/product/7.png" alt="Image">
                                    </div> --}}

                                </div>
                                <div class="ltn__shop-details-large-img">
                                    @foreach ($images as $g_img)


                                    <div class="single-large-img">
                                        <a href="img/product/1.png" data-rel="lightcase:myCollection">
                                            <img src="{{ asset($g_img->image) }}" alt="Image">
                                        </a>
                                    </div>
                                    @endforeach
                                    {{-- <div class="single-large-img">
                                        <a href="img/product/2.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/2.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="img/product/3.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/3.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="img/product/4.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/4.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="img/product/5.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/5.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="img/product/6.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/6.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="single-large-img">
                                        <a href="img/product/7.png" data-rel="lightcase:myCollection">
                                            <img src="{{asset('/')}}website/assets/img/product/7.png" alt="Image">
                                        </a>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="d-inline-block"
                                style="background-color:#FBEBFF;padding:5px 10px;border-radius:3px;margin-bottom:12px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{asset('/')}}website/assets/img/delivery.svg" alt="">
                                    <span
                                        style="font-size:10px;font-weight:600;color:#DC41FF;line-height:14px;padding-top:2px;">30-Min
                                        Delivery</span>
                                </div>
                            </span>
                            <div class="modal-product-info shop-details-info pl-0">
                                <h3 class="mb-2">{{$product->name}}</h3>
                                <div class="d-flex gap-2">
                                    <span class="d-inline-block"
                                        style="background-color:#460066;padding:5px 10px;border-radius:3px;">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{asset('/')}}website/assets/img/star_ratting.svg" alt="">
                                            <span
                                                style="font-size:10px;font-weight:600;color:#ffffff;line-height:14px;padding-top:2px;">4.9
                                            </span>
                                        </div>
                                    </span>
                                    <span style="color:#875D9A;font-size:14px;font-weight:600;">
                                        (127 Reviews)
                                    </span>
                                </div>

                                <form action="{{route('add.cart')}}" method="POST" enctype="multipart/form-data"
                                    id="cartForm">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="price" value="{{$product->selling_price}}">


                                    <div class="product-price-ratting mb-20">
                                        <ul>
                                            <li>
                                                <div class="product-price">
                                                    <span>{{$product->selling_price}}&#2547;</span>
                                                    <del>{{$product->regular_price}} &#2547;</del>
                                                </div>
                                            </li>

                                        </ul>
                                        <button class="btn mt-3 offers_dropdown_css" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#testCollapse"
                                            style="background: linear-gradient(270deg, #77468D, #460066); border: none;text-align:left; color: #000; padding: 10px 20px; border-radius: 5px; outline: none; box-shadow: none; width: 100%; max-width: 350px;color:#ffffff;">

                                            <span>
                                                Offers & Coupons
                                            </span>
                                            <span>
                                                View All
                                            </span>
                                        </button>
                                        <div class="collapse mt-1" id="testCollapse">
                                            <div class="card card-body">

                                                @foreach ($units as $offer)
                                                <li>{{$offer->name}}</li>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>




                                    @php
                                    $showCake = false;
                                    $showFlower = false;
                                    @endphp

                                    @foreach ($pounds as $pound)
                                    @if (Str::contains($pound->name, 'Pounds'))
                                    @php $showCake = true; @endphp
                                    @elseif (Str::contains($pound->name, 'pcs'))
                                    @php $showFlower = true; @endphp
                                    @endif
                                    @endforeach




                                    @if ($showCake)
                                    <div>
                                        <span style="font-size:12px;font-weight:500;color:#565656;">Cake</span>
                                    </div>
                                    @endif

                                    @if ($showFlower)
                                    <div>
                                        <span style="font-size:12px;font-weight:500;color:#565656;">Flower</span>
                                    </div>
                                    @endif



                                    <div class="d-flex gap-4">
                                        @foreach ($pounds as $pound)
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="pound"
                                                value="{{ $pound->name }}" id="option{{ $pound->id }}">
                                            <label class="form-check-label"
                                                for="option{{$pound->id}}">{{$pound->name}}</label>
                                        </div>
                                        {{-- <input type="hidden" value="{{$pound->name}}"> --}}
                                        @endforeach
                                        {{-- <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="option" id="option2">
                                            <label class="form-check-label" for="option2">4 Pounds</label>
                                        </div>
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="option" id="option3">
                                            <label class="form-check-label" for="option3">6 Pounds</label>
                                        </div> --}}



                                    </div>

                                    {{-- <span id="pound-error" class="text-danger"></span>
                                    <!-- Error message will show here --> --}}

                                    @if ($flavor->filter()->isNotEmpty())
                                    <div>
                                        <span style="font-size:12px;font-weight:500;color:#565656;">Select
                                            Flavours</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"></label>
                                        <select class="form-control" name="flavor" id="exampleFormControlSelect1"
                                            required>
                                            <option value="" disabled selected>Select flavor</option>

                                            @foreach ($flavor as $f)
                                            <option value="{{$f->name}}">{{$f->name}}</option>
                                            @endforeach

                                        </select>
                                        <!-- Hidden input to store selected flavor name -->
                                        {{-- <input type="hidden" name="flavor" value="{{ $selectedFlavorName ?? '' }}"
                                            id="selectedFlavorName"> --}}


                                    </div>

                                    @endif


                                    {{--
                                    <script>
                                        $(document).on("change", "#exampleFormControlSelect1", function () {
                                        let selectedFlavorName = $(this).find("option:selected").text(); // Get selected flavor name
                                        $("#selectedFlavorName").val(selectedFlavorName); // Update hidden input

                                        // console.log(selectedFlavorName); // Correct way to log the selected name
                                    });
                                    </script> --}}

                                    <div style="width:100%;max-width:350px;flex-direction:column;" class="mt-3 d-flex">
                                        <label style="text-align:left !important;" for="exampleFormControlTextarea1"
                                            style="text-align:left;font-size:12px;font-weight:500;color:#565656;">Text
                                            in
                                            the cake</label>
                                        <textarea placeholder="Happy Birthday To Me..." name="des" class="form-control"
                                            id="exampleFormControlTextarea1" rows="5"
                                            style="margin-bottom:10px;"></textarea>
                                    </div>
                                    <div class="custom-file">
                                        <span
                                            style="text-align:left;display:block;font-size:12px;font-weight:500;color:#565656;">Upload
                                            Photo</span>
                                        <input type="file" name="img" class="custom-file-input" id="inputGroupFile01"
                                            style="font-size:12px;color:#565656;">
                                    </div>

                                    {{-- <div class="mt-1">
                                        <span style="font-size:12px;font-weight:500;color:#565656;">Upgrade This
                                            Product</span>
                                    </div>
                                    <div class="d-flex gap-4">
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="flower" id="flower1">
                                            <label class="form-check-label" for="flower1">20 Flowers</label>
                                        </div>
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="flower" id="flower2">
                                            <label class="form-check-label" for="flower2">30 Flowers</label>
                                        </div>
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="flower" id="flower3">
                                            <label class="form-check-label" for="flower3">40 Flowers</label>
                                        </div>
                                    </div> --}}

                                    <div class="mt-1">
                                        <span style="font-size:12px;font-weight:500;color:#565656;">Select
                                            Location</span>
                                    </div>
                                    <div class="d-flex gap-4">
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" name="location"
                                                value="{{$fee->inside_dhaka}}" id="location1">
                                            <label class="form-check-label" for="location1">Inside Dhaka</label>
                                        </div>
                                        <div class="form-check custom-radio">
                                            <input class="form-check-input" type="radio" value="{{$fee->outside_dhaka}}"
                                                name="location" disabled id="location2">
                                            <label class="form-check-label" for="location2">Outside Of Dhaka</label>
                                        </div>
                                    </div>

                                    <span class="d-inline-block mt-4" style="padding:5px 0px;">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{asset('/')}}website/assets/img/delivery.svg" alt="">
                                            <span
                                                style="font-size:10px;font-weight:600;color:#565656;line-height:14px;padding-top:2px;">Get
                                                today! Order within <span style="color:#DC41FF;">9hr 54min 46sec</span>
                                            </span>
                                        </div>
                                    </span>
                                    <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                        <ul class="d-flex align-items-left flex-column flex-md-row">
                                            <li style="margin-top:0px;">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1" name="qty" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li style="margin-top:0px;">

                                                <button type="button"
                                                    class="theme-btn-1 btn btn-effect-1 d-add-to-cart menu_icon_box"
                                                    title="Add to Cart" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <span>ADD TO CART</span>
                                                </button>
                                            </li>

                                </form>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="exampleModalLabel">Add More Fun To
                                                    Celebration</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">




                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        @foreach ($categories as $key => $cate)
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link {{ $key == 0 ? 'active' : '' }} btn-dark"
                                                                id="pills-{{ $cate->id }}-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-{{ $cate->id }}" type="button"
                                                                role="tab" aria-controls="pills-{{ $cate->id }}"
                                                                aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                                                {{ $cate->name }}
                                                            </button>
                                                        </li>
                                                        @endforeach
                                                    </ul>

                                                    <div class="tab-content" id="pills-tabContent">
                                                        @foreach ($categories as $key => $cate)
                                                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                                            id="pills-{{ $cate->id }}" role="tabpanel"
                                                            aria-labelledby="pills-{{ $cate->id }}-tab">

                                                            <div class="row">
                                                                @foreach ($cate->products as $product)

                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                    <div class="ltn__product-item"
                                                                        style="border: 1px solid #D6D6D6; border-radius:20px;">
                                                                        <div class="product-imgs">
                                                                            <a
                                                                                href="{{route('product-detail', $product->id)}}">
                                                                                <img src="{{asset('/').$product->image}}"
                                                                                    alt="#">
                                                                            </a>
                                                                            <div class="product-badge">

                                                                            </div>
                                                                            <div
                                                                                class="product-hover-action product-hover-action-2">

                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info p-3">
                                                                            <span class="d-inline-block"
                                                                                style="background-color:#FBEBFF;padding:5px 10px;border-radius:3px;">
                                                                                <div
                                                                                    class="d-flex gap-2 align-items-center">
                                                                                    <img src="{{asset('/')}}website/assets/img/delivery.svg"
                                                                                        alt="">
                                                                                    <span
                                                                                        style="font-size:10px;font-weight:600;color:#DC41FF;line-height:14px;padding-top:2px;">30-Min
                                                                                        Delivery</span>
                                                                                </div>
                                                                            </span>
                                                                            <h2 class="product-title"
                                                                                style="margin-top:8px;">
                                                                                <a href="{{route('product-detail', $product->id)}}"
                                                                                    style="font-size:14px;color:#565656;text-transform:capitalize;font-weight:600;">{{$product->name}}</a>
                                                                            </h2>




                                                                            <div class="product-price">
                                                                                <span
                                                                                    style="font-size:16px;font-weight:600px;color:#2F2F2F;">{{$product->selling_price}}</span>
                                                                                <del
                                                                                    style="font-size:16px;">{{$product->regular_price}}</del>
                                                                            </div>
                                                                            <div class="d-flex gap-2">
                                                                                <span class="d-inline-block"
                                                                                    style="background-color:#460066;padding:5px 10px;border-radius:3px;">
                                                                                    <div
                                                                                        class="d-flex gap-2 align-items-center">
                                                                                        <img src="{{asset('/')}}website/assets/img/star_ratting.svg"
                                                                                            alt="">
                                                                                        <span
                                                                                            style="font-size:10px;font-weight:600;color:#ffffff;line-height:14px;padding-top:2px;">4.9
                                                                                        </span>
                                                                                    </div>
                                                                                </span>
                                                                                <span
                                                                                    style="color:#875D9A;font-size:14px;font-weight:600;">
                                                                                    (127 Reviews)
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="butn d-flex justify-content-end">
                                                                                <button
                                                                                    class="add-to-cart-btn btn-dark mt-4"
                                                                                    data-id="{{ $product->id }}">Add</button>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @endforeach
                                                            </div>

                                                        </div>
                                                        @endforeach
                                                    </div>



                                                    <!-- ltn__product-item -->
                                                    {{-- @foreach ($category_products as $product)
                                                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <div class="ltn__product-item"
                                                            style="border: 1px solid #D6D6D6; border-radius:20px;">
                                                            <div class="product-imgs">
                                                                <a href="{{route('product-detail', $product->id)}}">
                                                                    <img src="{{asset('/').$product->image}}" alt="#">
                                                                </a>
                                                                <div class="product-badge">

                                                                </div>
                                                                <div
                                                                    class="product-hover-action product-hover-action-2">

                                                                </div>
                                                            </div>
                                                            <div class="product-info p-3">
                                                                <span class="d-inline-block"
                                                                    style="background-color:#FBEBFF;padding:5px 10px;border-radius:3px;">
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <img src="{{asset('/')}}website/assets/img/delivery.svg"
                                                                            alt="">
                                                                        <span
                                                                            style="font-size:10px;font-weight:600;color:#DC41FF;line-height:14px;padding-top:2px;">30-Min
                                                                            Delivery</span>
                                                                    </div>
                                                                </span>
                                                                <h2 class="product-title" style="margin-top:8px;">
                                                                    <a href="{{route('product-detail', $product->id)}}"
                                                                        style="font-size:14px;color:#565656;text-transform:capitalize;font-weight:600;">{{$product->name}}</a>
                                                                </h2>




                                                                <div class="product-price">
                                                                    <span
                                                                        style="font-size:16px;font-weight:600px;color:#2F2F2F;">{{$product->selling_price}}</span>
                                                                    <del
                                                                        style="font-size:16px;">{{$product->regular_price}}</del>
                                                                </div>
                                                                <div class="d-flex gap-2">
                                                                    <span class="d-inline-block"
                                                                        style="background-color:#460066;padding:5px 10px;border-radius:3px;">
                                                                        <div class="d-flex gap-2 align-items-center">
                                                                            <img src="{{asset('/')}}website/assets/img/star_ratting.svg"
                                                                                alt="">
                                                                            <span
                                                                                style="font-size:10px;font-weight:600;color:#ffffff;line-height:14px;padding-top:2px;">4.9
                                                                            </span>
                                                                        </div>
                                                                    </span>
                                                                    <span
                                                                        style="color:#875D9A;font-size:14px;font-weight:600;">
                                                                        (127 Reviews)
                                                                    </span>
                                                                </div>
                                                                <div class="butn d-flex justify-content-end">
                                                                    <button class="add-to-cart-btn btn-dark mt-4"
                                                                        data-id="{{ $product->id }}">Add</button>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach --}}

                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button id="save-cart-btn" class="btn btn-dark">Continue</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .modal-dialog {
                                        max-height: 100%;
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    .modal-content {
                                        height: 100%;
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    .modal-body {
                                        flex-grow: 1;
                                        overflow-y: auto;
                                        /* Enables scrolling for the modal body */
                                    }

                                    .modal-footer {
                                        position: sticky;
                                        bottom: 0;
                                        background-color: #fff;
                                        border-top: 1px solid #e5e5e5;
                                        text-align: center;
                                    }
                                </style>


                                {{-- bootstrap cdn --}}
                                {{--
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                                    rel="stylesheet"
                                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                                    crossorigin="anonymous">
                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                                    crossorigin="anonymous"></script> --}}


                                <script>
                                    $(document).ready(function() {
                                            var selectedProducts = [];  // Array to hold the selected product IDs
                                    
                                            $('.add-to-cart-btn').click(function() {
                                                var productId = $(this).data('id');  // Get the product ID
                                                var button = $(this);  // Get the button itself
                                                
                                                // Change button text to "Added"
                                                button.text('Added').prop('disabled', true);  // Disable the button
                                    
                                                // Add the product ID to the selectedProducts array
                                                if (!selectedProducts.includes(productId)) {
                                                    selectedProducts.push(productId);
                                                }
                                    
                                                // Optionally, display the list of selected products (you can hide this part in production)
                                                console.log(selectedProducts);
                                    
                                               
                                            });
                                    
                                            // Store selected products in the cart when user clicks "Save"
                                            $('#save-cart-btn').click(function() {
                                                $.ajax({
                                                    url: '/add-to-cart',  // The route where you want to store products in the cart
                                                    method: 'POST',
                                                    data: {
                                                        product_ids: selectedProducts,  // Send all selected product IDs
                                                        _token: '{{ csrf_token() }}'  // CSRF token for security
                                                    },
                                                    success: function(response) {
                                                        // Handle success response
                                                        toastr.success(response.message);
                                                        $('.cart-count').text(response.count); // Update cart count
                                                        selectedProducts = [];  // Clear selected products after storing them
                                    
                                                        // Close the modal after saving the cart
                                                        $('#exampleModal').modal('hide');  // Close the modal using Bootstrap's modal method
                                                        // Redirect to the cart page
                                                      window.location.href = '/new-cart-page'; 
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Handle any errors
                                                        console.log(error);
                                                    }
                                                });
                                            });
                                        });
                                </script>



                                <li style="margin-top:0px;">
                                    <a href="#" class="btn btn-effect-1 d-add-to-wishlist" title="wish list"
                                        data-url="{{ route('wishlist.ad') }}">
                                        <i class="icon-heart"></i>
                                    </a>
                                </li>

                                <script>
                                    $(document).ready(function () {
                                        $(".d-add-to-wishlist").click(function (e) {
                                             e.preventDefault();

                                            let wishlistUrl = $(this).data("url"); // Get the wishlist route
                                             $("#cartForm").attr("action", wishlistUrl); // Change form action
                                             $("#cartForm").submit(); // Submit the form
                                           });
                                        });
                                </script>

                                <li style="margin-top:0px;">
                                    <a href="{{route('cstome.order')}}" style="background-color:#DC41FF;"
                                        class="theme-btn-1 btn btn-effect-1 d-add-to-cart" title="custome order">
                                        <span>Make Custom Order</span>
                                    </a>
                                </li>

                            </ul>
                            </div>


                            <div class="modal-product-brief mt-3">
                                <p>{{$product->short_description}}</p>
                            </div>

                            {{-- <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                <ul>
                                    <li>



                                    </li>


                                    <div class="row d-flex align-items-start">
                                        <div class="row">
                                            @foreach($sizes as $key => $size)
                                            <div class="col-md-3 col-lg-3">
                                                <div class="card p-2 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="size"
                                                            id="size{{ $size->id }}" value="{{ $size->id }}" {{ $key==0
                                                            ? 'checked' : '' }}>
                                                        <label class="form-check-label small" for="size{{ $size->id }}">
                                                            {{ $size->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>


                                    <br>

                                    @if($flavor->isNotEmpty())
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="flavorSelect">Select Flavor</label><br>
                                                <select class="custom-select" id="flavorSelect"
                                                    aria-label="Default select example">
                                                    @foreach ($flavor as $f)
                                                    <option value="{{ $f->id ?? null }}">{{ $f->name ?? null }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif



                            </div> --}}

                            </ul>
                        </div>


                        {{-- <div class="ltn__social-media mb-30">
                            <ul>
                                <li class="d-meta-title">Share:</li>
                                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>

                            </ul>
                        </div>
                        <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                            <ul>
                                <li><strong>SKU:</strong> <span>12345</span></li>
                                <li>
                                    <strong>Categories:</strong>
                                    <span>
                                        <a href="#">Flower</a>
                                    </span>
                                </li>
                                <li>
                                    <strong>Tags:</strong>
                                    <span>
                                        <a href="#">Love</a>
                                        <a href="#">Flower</a>
                                        <a href="#">Heart</a>
                                    </span>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="ltn__safe-checkout d-none">
                            <h5>Guaranteed Safe Checkout</h5>
                            <img src="{{asset('/')}}website/assets/img/icons/payment-2.png" alt="Payment Image">
                        </div>

                    </div>
                </div>
                <div id="sticky_image_bottom"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- testimonial area -->

{{-- <div class="container pt-md-70">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="text-center">
            <h1 style="color:#2F2F2F;font-size:27px;margin-bottom:8px;">Customer Testimonial</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-12 mt-small">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"This is an amazing product! Highly
                    recommend to
                    everyone. Great service and
                    quality!"</p>
                <h6 class="font-weight-bold">- John Doe</h6>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-small">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"Absolutely love it! The experience
                    was smooth, and
                    the product exceeded my
                    expectations."</p>
                <h6 class="font-weight-bold">- Sarah Smith</h6>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-small">
            <div class="card border-1 p-4" style="border-radius:10px;background-color:#FCFCFC;">
                <p class="" style="color:#565656;font-size:14px;font-weight:400;">"Great value for money! The customer
                    support team was
                    very helpful throughout the
                    process."</p>
                <h6 class="font-weight-bold">- Michael Lee</h6>
            </div>
        </div>
    </div>
</div> --}}

<!-- testimonial area end -->


<!-- SHOP DETAILS TAB AREA START -->
<div class="ltn__shop-details-tab-area pb-60 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-details-tab-inner">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                            {{-- <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a> --}}
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_3" class="">Comments</a> -->
                            {{-- <a data-bs-toggle="tab" href="#liton_tab_details_1_4" class="">Shipping</a> --}}
                            <!-- <a data-bs-toggle="tab" href="#liton_tab_details_1_5" class="">Size Chart</a> -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner text-center">
                                <p>{!!$product->long_description!!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_2">
                            <div class="ltn__shop-details-tab-content-inner">
                                <div class="customer-reviews-head text-center">
                                    <h4 class="title-2">Customer Reviews</h4>
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            {{-- <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- comment-area -->
                                        <div class="ltn__comment-area mb-30">
                                            <div class="ltn__comment-inner">
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('/')}}website/assets/img/testimonial/1.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star-half-alt"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                    elit. Ullam, voluptas!
                                                                <p>
                                                                    <span class="ltn__comment-reply-btn">September 3,
                                                                        2020</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('/')}}website/assets/img/testimonial/3.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star-half-alt"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Doloribus, omnis fugit corporis iste magnam
                                                                    ratione.</p>
                                                                <span class="ltn__comment-reply-btn">September 2,
                                                                    2020</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('/')}}website/assets/img/testimonial/2.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <div class="product-ratting">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star-half-alt"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i class="far fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Doloribus, omnis fugit corporis iste magnam
                                                                    ratione.</p>
                                                                <span class="ltn__comment-reply-btn">September 2,
                                                                    2020</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <!-- comment-reply -->
                                        <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                            <form action="#">
                                                <h4 class="title-2">Add a Review</h4>
                                                <div class="mb-30">
                                                    <div class="add-a-review">
                                                        <h6>Your Ratings:</h6>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea placeholder="Type your comments...."></textarea>
                                                </div>
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" placeholder="Type your name....">
                                                </div>
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" placeholder="Type your email....">
                                                </div>
                                                <div class="input-item input-item-website ltn__custom-icon">
                                                    <input type="text" name="website"
                                                        placeholder="Type your website....">
                                                </div>
                                                <label class="mb-0"><input type="checkbox" name="agree"> Save my name,
                                                    email, and website in this browser for the next time I
                                                    comment.</label>
                                                <div class="btn-wrapper">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                                        type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_3">
                            <div class="ltn__shop-details-tab-content-inner">
                                <!-- comment-area -->
                                <div class="ltn__comment-area mb-30">
                                    <h4 class="title-2">Comments (5)</h4>
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="{{asset('/')}}website/assets/img/testimonial/1.jpg"
                                                            alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i
                                                                class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="{{asset('/')}}website/assets/img/testimonial/3.jpg"
                                                            alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i
                                                                class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('/')}}website/assets/img/testimonial/4.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Doloribus, omnis fugit corporis iste magnam
                                                                    ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i
                                                                        class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ltn__comment-item clearfix">
                                                            <div class="ltn__commenter-img">
                                                                <img src="{{asset('/')}}website/assets/img/testimonial/1.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="ltn__commenter-comment">
                                                                <h6><a href="#">Adam Smit</a></h6>
                                                                <span class="comment-date">20th May 2020</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Doloribus, omnis fugit corporis iste magnam
                                                                    ratione.</p>
                                                                <a href="#" class="ltn__comment-reply-btn"><i
                                                                        class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="{{asset('/')}}website/assets/img/testimonial/2.jpg"
                                                            alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <span class="comment-date">20th May 2020</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <a href="#" class="ltn__comment-reply-btn"><i
                                                                class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- comment-reply -->
                                <div class="ltn__comment-reply-area ltn__form-box mb-60">
                                    <form action="#">
                                        <h4 class="title-2">Leave a Reply</h4>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea placeholder="Type your comments...."></textarea>
                                        </div>
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" placeholder="Type your email....">
                                        </div>
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <input type="text" name="website" placeholder="Type your website....">
                                        </div>
                                        <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email,
                                            and website in this browser for the next time I comment.</label>
                                        <div class="btn-wrapper">
                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit"><i
                                                    class="far fa-comments"></i> Post Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_4">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Shipping policy for our store</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptates rerum neque
                                    ea libero numquam officiis ipsum, consectetur ducimus dicta in earum repellat sunt
                                    ab odit laboriosam cupiditate ipsam, doloremque.</p>
                                <ul>
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    <li>odio dignissim qui blandit praesent</li>
                                    <li>luptatum zzril delenit augue duis dolore</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, quia vel eligendi
                                    ipsam. Ea, quasi quam ducimus recusandae unde ipsa nam rem a minus tenetur quae sint
                                    voluptatem voluptate inventore.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_5">
                            <div class="ltn__shop-details-tab-content-inner">

                                <div class="table-1 mb-20">
                                    <table class="">
                                        <tbody>
                                            <tr>
                                                <th>SIZE</th>
                                                <th>XS</th>
                                                <th>S</th>
                                                <th>S/M</th>
                                                <th>M</th>
                                                <th>M/L</th>
                                                <th>L</th>
                                                <th>XL</th>
                                            </tr>
                                            <tr data-bs-region="uk">
                                                <th>UK</th>
                                                <td>4</td>
                                                <td>6 - 8</td>
                                                <td>6 - 10</td>
                                                <td>10 - 12</td>
                                                <td>12 - 16</td>
                                                <td>14 - 16</td>
                                                <td>18</td>
                                            </tr>
                                            <tr data-bs-region="eur">
                                                <th>
                                                    <span class="mobile-show">EUR</span><span
                                                        class="mobile-none">EUROPE</span>
                                                </th>
                                                <td>32</td>
                                                <td>34 - 36</td>
                                                <td>34 - 38</td>
                                                <td>38 - 40</td>
                                                <td>40 - 44</td>
                                                <td>42 - 44</td>
                                                <td>46</td>
                                            </tr>
                                            <tr data-bs-region="usa">
                                                <th>
                                                    <span>USA/</span><span class="mobile-none">CANADA</span><span
                                                        class="mobile-show"> CA</span>
                                                </th>
                                                <td>0</td>
                                                <td>2 - 4</td>
                                                <td>2 - 6</td>
                                                <td>6 - 8</td>
                                                <td>8 - 12</td>
                                                <td>10 - 12</td>
                                                <td>14</td>
                                            </tr>
                                            <tr data-bs-region="aus">
                                                <th>AUS / NZ</th>
                                                <td>4</td>
                                                <td>6 - 8</td>
                                                <td>6 - 10</td>
                                                <td>10 - 12</td>
                                                <td>12 - 16</td>
                                                <td>14 - 16</td>
                                                <td>18</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS TAB AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area pb-40 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">Related products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach ($category_products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item" style="border: 1px solid #D6D6D6; border-radius:20px;">
                    <div class="product-img">
                        <a href="{{route('product-detail', $product->id)}}"><img src="{{asset('/').$product->image}}"
                                alt="#"></a>
                        <div class="product-badge">
                            {{-- <ul>
                                <li class="badge-2">10%</li>
                            </ul> --}}
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            {{-- <ul>
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
                            </ul> --}}
                        </div>
                    </div>
                    <div class="product-info p-3">
                        <span class="d-inline-block"
                            style="background-color:#FBEBFF;padding:5px 10px;border-radius:3px;">
                            <div class="d-flex gap-2 align-items-center">
                                <img src="{{asset('/')}}website/assets/img/delivery.svg" alt="">
                                <span
                                    style="font-size:10px;font-weight:600;color:#DC41FF;line-height:14px;padding-top:2px;">30-Min
                                    Delivery</span>
                            </div>
                        </span>
                        <h2 class="product-title" style="margin-top:8px;">
                            <a href="{{route('product-detail', $product->id)}}"
                                style="font-size:14px;color:#565656;text-transform:capitalize;font-weight:600;">{{$product->name}}</a>
                        </h2>
                        <div class="product-price">
                            <span
                                style="font-size:16px;font-weight:600px;color:#2F2F2F;">{{$product->selling_price}}</span>
                            <del style="font-size:16px;">{{$product->regular_price}}</del>
                        </div>
                        <div class="d-flex gap-2">
                            <span class="d-inline-block"
                                style="background-color:#460066;padding:5px 10px;border-radius:3px;">
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="{{asset('/')}}website/assets/img/star_ratting.svg" alt="">
                                    <span
                                        style="font-size:10px;font-weight:600;color:#ffffff;line-height:14px;padding-top:2px;">4.9
                                    </span>
                                </div>
                            </span>
                            <span style="color:#875D9A;font-size:14px;font-weight:600;">
                                (127 Reviews)
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->




<script>
    $(document).ready(function() {
        $('#location2').change(function() {
            if ($(this).is(':checked')) {
                alert('Outside Dhaka is not available!');
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Load cart count when the page loads
      
    
        // Handle Add to Cart button click
        $(document).on("click", "#addToCartForm", function (e) {
            e.preventDefault(); // Prevent default action
    
            let form = $(this).closest("form"); // Find the closest form
            let formData = new FormData(form[0]); // Get form data
            // $('#pound-error').text(''); // Clear error message
    
            $.ajax({
                url: form.attr("action"), // Get form action URL
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                // loadCartCount(); // Update cart count
                if (response.message) {
                    
                    toastr.success(response.message);
                    $('.cart-count').text(response.count); //
            
                     // Reset select fields to default
                   form.find("select").prop("selectedIndex", 0);
                } else {
                    console.log("No success message found in response.");
                }
            },
            error: function (xhr, status, error) {
                console.error("Add to cart error:", xhr.responseText);
            }
            });
        });
    
        
    });
</script>


@endsection