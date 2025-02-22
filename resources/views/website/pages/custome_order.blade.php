@extends('website.master')

@section('title','Checkout Form')

@section('content')

{{-- <link rel="stylesheet" href="{{ asset('website/assets/css/nice-select.css') }}"> --}}

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Custome Order</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Custome Ordr</li>
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
            <div class="col-lg-10">
                <div class="ltn__checkout-inner">
                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Place Custome Order </h4>
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif --}}




                        <div class="ltn__checkout-single-content-info">
                            <form action="{{ route('place.order') }}" method="POST">
                                @csrf



                                <div class="row">
                                    <div class="input-group control-group increment flower-selection">

                                        <!-- Flower Dropdown -->
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Select Flower</label>
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <select class="form-control form-control-sm flowerSelect" id="flower">
                                                    <option value="">Select Flower</option>
                                                    @foreach($flower as $key => $f)
                                                    <option value="{{ $f->id }}">{{ $f->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Color Dropdown -->
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">Select Color</label>
                                            <div class="input-ite">

                                                <select class="form-control sujon" name="found_color">
                                                    <option value="">Select Color</option>
                                                </select>

                                            </div>
                                        </div>




                                        <div class="col-md-2">
                                            <label for="qty" class="form-label">Select Qty</label>
                                            <div class="input-item input-item-name">
                                                <input type="number" name="qty" class="form-control qtyInput" onchange="singlePrice(this)" min="1"
                                                    value="1">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="total" class="form-label">Total</label>
                                            <div class="input-item">
                                                <span class="totalPrice">0</span> <!-- Display individual total here -->
                                                <input type="hidden" class="grandTotal" value="0">

                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="name" class="form-label">Add New Flower</label>
                                            <div class="input-group-btn">
                                                <button
                                                    class="theme-btn-1 btn btn-effect-1 d-add-to-cart menu_icon_box btn-increment" onclick="add_clone(this)"
                                                    type="button"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="out_clone">
                                        {{-- when add new --}}
                                    </div>

                                    
                                </div>





                                <div class="row">
                                    <div class="col-6">

                                        <button type="button"
                                            class="theme-btn-1 btn btn-effect-1 d-add-to-cart menu_icon_box"
                                            title="Add to Cart" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="submitForm()">
                                            <span>Grand Total: <span class="grandTotal grand_for_final">0</span>&#2547;</span>
                                        </button>


                                    </div>
                                    {{-- <div class="col-6">
                                        <h4 class="text-center"><b>Reaper Chart</b></h4>
                                        <table id="example3x" class="table table-bordered text-nowrap border-bottom">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0">SL NO</th>
                                                    <th class="border-bottom-0">flower qty</th>
                                                    <th class="border-bottom-0">Reaper Need</th>
                                                    <th class="border-bottom-0">price</th>
                                                    <th class="border-bottom-0">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reaper as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{ $item->flower_qty ?? 'N/A' }}</td>
                                                    <td>{{ $item->reaper ?? 'N/A' }}</td>
                                                    <td class="price">{{ $item->price ?? '0' }}</td>
                                                    <td>
                                                        <span class="btn btn-dark btn-sm add-action">Add</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <button type="button"
                                            class="theme-btn-1 btn btn-effect-1 d-add-to-cart menu_icon_box"
                                            title="Add to Cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span>Reper Total: <span class="reaperTotal">0 </span>&#2547;</span>
                                        </button>
                                    </div> --}}

                                </div>

<div class="row">
    @foreach ($reaper as $repers)
    <div class="col-md-6 rapper_block rapper_block{{ $repers->id }}">
        <div class=" p-2 ">
            flower Quantity: {{ $repers->flower_qty }} <br/>
            Reper Price: {{ $repers->price }}
        </div>
    </div>
    @endforeach
</div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


{{-- <script>
    $(document).ready(function() {
        function updateGrandTotal() {
            let grandTotal = 0;
            $(".price").each(function() {
                let row = $(this).closest("tr");
                if (row.find(".remove-action").length) {
                    grandTotal += parseFloat($(this).text()) || 0;
                }
            });
            $(".grandTotal").text(grandTotal.toFixed(2));
        }
    
        $(document).on("click", ".add-action", function() {
            let row = $(this).closest("tr");
            $(this).replaceWith('<a href="#" class="btn btn-danger btn-sm remove-action">Remove</a>');
            updateGrandTotal();
        });
    
        $(document).on("click", ".remove-action", function() {
            let row = $(this).closest("tr");
            $(this).replaceWith('<a href="#" class="btn btn-dark btn-sm add-action">Add</a>');
            updateGrandTotal();
        });
    });
</script> --}}

{{-- <script>
    $(document).ready(function(){
        $('#flower').change(function(){
            var flowerId = $(this).val();
            $('#color').html('<option value="">Loading...</option>'); // Show loading message
    
            if (flowerId) {
                $.ajax({
                    url: "{{ route('getFlowerColors') }}",
                    type: "GET",
                    data: { flower_id: flowerId },
                    success: function(data) {
                        var options = '<option value="">Select Color</option>';
                        $.each(data, function(index, color){
                            options += `<option value="${color.id}">${color.name}</option>`;
                        });
                        $('#color').html(options);
                    }
                });
            } else {
                $('#color').html('<option value="">Select Color</option>'); // Reset if no flower selected
            }
        });
    });
</script>
--}}


<!-- Your Existing Script (Flower Selection) -->

{{-- <script>
    $(document).ready(function() {
        function calculateTotal() {
            let grandTotal = 0;
        
            $(".flower-selection").each(function() {
                let flower_id = $(this).find(".flowerSelect").val();
                let color_id = $(this).find(".colorSelect").val();
                let qty = parseInt($(this).find(".qtyInput").val()) || 1;
                let priceField = $(this).find(".totalPrice");
        
                if (flower_id && color_id) {
                    $.ajax({
                        url: "{{ route('flower.price') }}",  // Your route for fetching price
                        type: "GET",
                        data: { flower_id: flower_id, color_id: color_id },
                        success: function(response) {
                            let price = response.price;
                            let total = price * qty;
                            
                            priceField.text(total.toFixed(2));

                        //     if (total ===) {
                        //     priceField.text("color not available").css("color", "red");
                        // } else {
                        //     priceField.text(total.toFixed(2)).css("color", "black");
                        // }

                            updateGrandTotal();
                        }
                    });
                }
            });
        }
        
        function updateGrandTotal() {
            let grandTotal = 0;
            $(".totalPrice").each(function() {
                grandTotal += parseFloat($(this).text()) || 0;
            });
            $(".grandTotal").text(grandTotal.toFixed(2));
        }
        
        $(document).on("change", ".flowerSelect, .colorSelect", function() {
            calculateTotal();
        });
        
        $(document).on("input", ".qtyInput", function() {
            calculateTotal();
        });
    
        $(".add-more").click(function() {
            let newRow = $(".flower-selection:first").clone();
            newRow.find("select, input").val("");
            newRow.find(".totalPrice").text("0");
            $(".flower-selection:last").after(newRow);
            calculateTotal();
        });
    
        $(document).on("click", ".remove-action", function() {
            $(this).closest(".flower-selection").remove();
            calculateTotal();
        });
    });
</script> --}}

<!-- My Script (For Add/Remove in Table) -->

{{-- <script>
    $(document).ready(function() {
        function updateGrandTotal() {
            let grandTotal = 0;
            $(".price").each(function() {
                let row = $(this).closest("tr");
                if (row.find(".remove-action").length) {
                    grandTotal += parseFloat($(this).text()) || 0;
                }
            });
            $(".reaperTotal").text(grandTotal);
        }
    
        $(document).on("click", ".add-action", function() {
            let row = $(this).closest("tr");
            $(this).replaceWith('<span  class="btn btn-danger btn-sm remove-action">Remove</span>');
            updateGrandTotal();
        });
    
        $(document).on("click", ".remove-action", function() {
            let row = $(this).closest("tr");
            $(this).replaceWith('<span  class="btn btn-dark btn-sm add-action">Add</span>');
            updateGrandTotal();
        });
    });
</script> --}}




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">

function add_clone(thi) {
    let flower = $(thi).parents(".increment").find("#flower");
    
    let sujon = $(thi).parents(".increment").find(".sujon");
    let price = $(thi).parents(".increment").find(".totalPrice");
    let qtyInput = $(thi).parents(".increment").find(".qtyInput");

let html_clone = `
<div class="clone">
    <div class="control-group input-group flower-selection">
        <!-- Flower Dropdown -->
        <div class="col-md-3">
            <label for="name" class="form-label">Select Flower</label>
            <div class="input-item input-item-name ltn__custom-icon">
                 ${flower.find("option:selected").text()}  <!-- Using .val() to get the value of the flower -->
                <input name="flower[]" type="hidden" value="${flower.val()}">
            </div>
        </div>

        <!-- Color Dropdown -->
        <div class="col-md-3">
            <label for="name" class="form-label">Select Color</label>
            <div class="input-item input-item-name">
                ${sujon.find("option:selected").text()}  <!-- Using .val() to get the value of the color -->
                <input name="sujon[]" type="hidden" value="${sujon.val()}">
            </div>
        </div>

        <!-- Quantity Input -->
        <div class="col-md-2">
            <label for="name" class="form-label">Select Qty</label>
            <div class="input-item input-item-name">
                <input type="hidden" class="form-control hidden qtyInput" name="qty[]" min="1"
                    value="${qtyInput.val()}">
                ${qtyInput.val()}
            </div>
        </div>

        <!-- Total Price -->
        <div class="col-md-2">
            <label for="total" class="form-label">Total</label>
            <div class="input-item">
                <span class="totalPrice grand_for">${price.text()}</span>
            
                <!-- Display individual total here -->
            </div>
        </div>

        <!-- Remove Button -->
        <div class="col-md-2">
            <label for="name" class="form-label">Remove Flower</label>
            <div class="input-group-btn">
                <button class="theme-btn-1 btn btn-effect-1 d-add-to-cart menu_icon_box remove-action" onclick="remove_clone(this)"
                        type="button"><i class="fa fa-trash"></i></button>
            </div>
        </div>
    </div>
</div>
`;



    if(sujon.val() != '' && flower.val() != '') {
        $(".out_clone").append(html_clone);
    }else{
        alert("Please Select Flower And Color");
    }
    // console.log(html_clone);
    
    calculateTotal();
}
    $(document).ready(function () {


    // $(".btn-increment").click(function () {
    //     console.log(this);
    //     var html_clone = $(".clone").html();
    //      var html = $(".clone").html();
    // $(".increment").after(html);
    // });



    // $("body").on("click", ".remove-action", function () {
    // $(this).parents(".control-group").remove();
    // });
    $('.select2').select2();
    });
</script>



<script>
    $(document).ready(function () {
        // Listen for changes in the flower dropdown
        $('#flower').change(function () {
            var flowerId = $(this).val(); // Get the selected flower ID

            // Clear the color dropdown
            $('select.sujon').html('<option value="">Select Color</option>');
            console.log(flowerId);

            // If a flower is selected, fetch its colors
            if (flowerId) {
                $.ajax({
                    url: '/get-colors', // Replace with your backend route
                    type: 'GET',
                    data: {
                        flower_id: flowerId
                    },
                    success: function (response) {
                        // Populate the color dropdown with the fetched colors
                        if (response.colors && response.colors.length > 0) {
                            
                            $.each(response.colors, function (key, color) {
                            
                                // alert(color.name);
                                // $('select[name="found-color"]').append('<option value="' + color.id + '">' + color.name + '</option>');
                                $('select.sujon').append(`<option value="${color.id}">${color.name}</option>`);
                            });
                            
                            
                        }
                        // $('select').niceSelect();
                    },
                    error: function (xhr) {
                        console.error('Error fetching colors:', xhr.responseText);
                    }
                });
            }
        });

        
        // Listen for changes in the color dropdown
        $('select.sujon').change(function () {
            var colorId = $(this).val(); // Get the selected color ID
            var flowerId = $('#flower').val(); // Get the selected flower ID

            // If both flower and color are selected, fetch the price
            if (flowerId && colorId) {
                $.ajax({
                    url: '{{ url('/get/flower/price') }}', // Replace with your backend route
                    type: 'GET',
                    data: {
                        flower_id: flowerId,
                        color_id: colorId
                    },
                    success: function (response) {
                        // Update the price display
                        $('.totalPrice').text(response.price);
                        $('.grandTotal').val(response.price);
                    },
                    error: function (xhr) {
                        console.error('Error fetching price:', xhr.responseText);
                    }
                });
            }
        });
            // Listen for changes in the color dropdown
             
    });


    function remove_clone(thi) {
        $(thi).parents('.flower-selection').remove();
        calculateTotal();
    }

    function singlePrice(thi) {
        var quantity = $(thi).parents('.increment').find('.qtyInput').val(); // Get the selected color ID
        var actualPrice = $(thi).parents('.increment').find('input.grandTotal').val(); // Get the selected color ID

        var totalPrice = quantity * actualPrice;
        $(thi).parents('.increment').find('.totalPrice').text(totalPrice);
        

        
        
    }


    function calculateTotal() {
        let grandTotal = 0;
        console.log(grandTotal);
        $(".totalPrice.grand_for").each(function() {
            grandTotal += parseFloat($(this).text()) || 0;

            
        });
        // console.log(rapperPrice());
        $(".grandTotal.grand_for_final").text(grandTotal.toFixed(2) + rapperPrice());
    }

    function submitForm() {
    // Get flower IDs
    var flower_array = $('.out_clone').find('input[name="flower[]"]').map(function () {
        return this.value;
    }).get();

    // Get color IDs
    var color_array = $('.out_clone').find('input[name="sujon[]"]').map(function () {
        return this.value;
    }).get();

    // Get quantities
    var quantity_array = $('.out_clone').find('input[name="qty[]"]').map(function () {
        return parseFloat(this.value) || 0; // Convert to number
    }).get();

    // Get total prices
    var total_array = $('.out_clone').find('.totalPrice.grand_for').map(function () {
        return parseFloat(this.innerText) || 0; // Convert to number
    }).get();

    // Construct the data array
    var data = [];
    for (var i = 0; i < flower_array.length; i++) {
        data.push({
            'flower_id': flower_array[i],
            'color_id': color_array[i],
            'quantity': quantity_array[i],
            'total': total_array[i]
        });
    }

    // Get CSRF token from meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Create formData object
    var formData = {
        _token: csrfToken,
        grand_total: parseFloat($(".grandTotal.grand_for_final").text()) || 0,
        data: data,
        total_array: total_array,
        quantity_array: quantity_array,
        color_array: color_array,
        flower_array: flower_array,
        reper_price: rapperPrice(),
        

    };

    // Send AJAX request
    $.ajax({
        url: '/store-custom-order', // Ensure the URL is correct
        method: 'POST',
        data: formData,
        success: function(response) {
            // console.log("Success:", response);
            // alert("Order submitted successfully!");
            if(response.status == 'success'){
                alert("Order submitted successfully!");
                setTimeout(function() {
                    location.reload();
                },200)
                
            }
        },
        error: function(xhr) {
            console.error("Error:", xhr.responseText);
        }
    });
}

function rapperPrice() {
    let total_quantity = 0;
    let price = 0;
    let id_current = 0;
    var reaperData = @json($reaper);
    // Get total quantity
    $('.out_clone').find('input[name="qty[]"]').each(function () {
        total_quantity += parseFloat($(this).val()) || 0;
    });

    $('.rapper_block').each(function () {
        $(this).removeClass('active');
    });
    // Loop through the reaper data
    for (let i = 0; i < reaperData.length; i++) {
        if (total_quantity >= reaperData[i].flower_qty) {
            price = reaperData[i].price;
            id_current = reaperData[i].id;
            
        }
    }
    $('.rapper_block' + id_current).addClass('active');
    return price;
}

</script>

<style>
    .rapper_block{
        border: 1px solid #eee;
        margin: 10px 0;
    }
    .rapper_block.active{
        background:#bebebe;
    }
</style>

@endsection