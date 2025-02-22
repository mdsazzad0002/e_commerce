@extends('website.master')

@section('title','Customer Wishlists ')

@section('content')


<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Wishlist</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area mb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table">
                            <!-- <thead>
                                    <th class="cart-product-remove">X</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Title</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->

                            <tbody>
                                @foreach ($wishlists as $item)
                                <tr>
                                    <td class="cart-product-remove">
                                        <form action="{{ route('wishlist.destroy', $item->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                style="border: none; background: none; color: red; cursor: pointer;">
                                                X
                                            </button>
                                        </form>
                                    </td>

                                    <td class="cart-product-image">
                                        <a href="product-details.html"><img
                                                src="{{ asset('/') . $item->product->image }}" alt="#"
                                                width="200px"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="product-details.html">{{ $item->product->name }}</a></h4>
                                    </td>
                                    <td class="cart-product-price">{{ $item->product->selling_price }}</td>
                                    <td class="cart-product-stock">In Stock</td>

                                    <!-- Add to Cart Button with Individual Hidden Form -->
                                    <td class="cart-product-add-cart">
                                        <form action="{{ route('wish.cart.add') }}" method="POST"
                                            id="cartForm_{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="item" value="{{ $item->id }}">
                                            <input type="hidden" name="qty" value="1">
                                            <a href="#" class="submit-button-1 addToCartForm"
                                                data-form-id="cartForm_{{ $item->id }}" title="Add to Cart">Add to
                                                Cart</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    // Trigger form submission when any "Add to Cart" button is clicked
    $(".addToCartForm").click(function (e) {
        e.preventDefault(); // Prevent the default link behavior
        
        var formId = $(this).data('form-id'); // Get the form ID
        var formData = new FormData($("#" + formId)[0]); // Create FormData object for the form

        $.ajax({
            url: $("#" + formId).attr("action"), // Get the form action (URL)
            type: 'POST',
            data: formData,
            processData: false, // Don't process the data
            contentType: false, // Set content type to false to send form data as multipart/form-data
            success: function(response) {
                toastr.success(response.message); // Show success message
                $('.cart-count').text(response.count); // Update cart count
                window.location.href = '/new-cart-page'; 
            },
            error: function(xhr, status, error) {
                toastr.error('Error adding to cart!'); // Show error message
            }
        });
    });
});
</script>

@endsection