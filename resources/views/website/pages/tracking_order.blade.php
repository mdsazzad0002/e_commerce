@extends('website.master')
@section('title', 'cart')
@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Order Tracking</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Order Tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START -->
    <div class="ltn__login-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="account-login-inner section-bg-1--">
                        <form id="trackOrderForm" class="ltn__form-box contact-form-box">
                            <p class="text-center">To track your order, please enter your Track ID below and press "Track Order".</p>
                            <label>Track ID</label>
                            <input type="text" id="track_id" name="track_id" placeholder="Enter your Track ID">
                            
                            <div class="btn-wrapper mt-0 text-center">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Track Order</button>
                            </div>
                        </form>
    
                        <!-- Order Details Table (Initially Hidden) -->
                        <div id="orderDetails" class="mt-4" style="display: none;">
                            <h4>Order Details</h4>
                            <table class="table">
                                <tr>
                                    <th>Order ID</th>
                                    <td id="orderId"></td>
                                </tr>
                                <tr>
                                    <th>Customer</th>
                                    <td id="customerName"></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td id="orderTotal"></td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td id="shippingTotal"></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td id="deliveryAddress"></td>
                                </tr>
                                <tr>
                                    <th>status</th>
                                    <td id="status"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#trackOrderForm').on('submit', function(e) {
            e.preventDefault(); // Prevent page reload
    
            var trackId = $('#track_id').val();
    
            $.ajax({
                url: '/track-customer-order',
                type: 'POST',
                data: { track_id: trackId, _token: '{{ csrf_token() }}' },
                success: function(response) {
                    if (response.status === 'success') {
                        $('#orderId').text(response.order.track_id);
                        $('#customerName').text(response.order.customer_id);
                        $('#orderTotal').text(response.order.order_total);
                        $('#shippingTotal').text(response.order.shipping_total);
                        $('#deliveryAddress').text(response.order.delivery_address);
                        $('#status').text(response.order.order_status);
    
                        $('#orderDetails').show(); // Show the details table
                    } else {
                        alert(response.message);
                        $('#orderDetails').hide(); // Hide if not found
                    }
                }
            });
        });
    });
    </script>
    

@endsection