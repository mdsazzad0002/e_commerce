<!-- Utilize Cart Menu Start -->

@php
    $subtotal = 0;
@endphp

@foreach ($cartItems as $item)

    @php
    $itemTotal = $item->qty * $item->price;
    $subtotal += $itemTotal;
    @endphp

    <div class="mini-cart-item clearfix">
        <div class="mini-cart-img">
            <a href="#"><img src="{{ asset($item->product->image) }}" alt="Image"></a>
            <span class="mini-cart-item-delete" data-id="{{ $item->id }}">
                <i class="icon-trash"></i>
            </span>
        </div>
        <div class="mini-cart-info">
            <h6><a href="#">{{ $item->product->name }}</a></h6>
            <span class="mini-cart-quantity">{{ $item->qty }} x ${{ $item->price }}</span>
        </div>
    </div>
@endforeach

           
       

<!-- Utilize Cart Menu End -->