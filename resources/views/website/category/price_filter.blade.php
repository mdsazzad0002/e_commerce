@foreach ($products as $product)
<div class="col-lg-4 col-md-4 col-sm-6 col-6">
    <div class="ltn__product-item" style="border: 1px solid #D6D6D6; border-radius:20px;">
        <div class="product-img">
            <a href="{{route('product-detail', $product->id)}}"><img src="{{asset('/').$product->image}}" alt="#"></a>
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