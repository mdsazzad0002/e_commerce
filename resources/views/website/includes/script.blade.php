

<!-- Vendor JS-->
{{-- <script src="{{asset('/')}}website/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{asset('/')}}website/assets/js/vendor/jquery-3.6.0.min.js"></script> --}}
{{-- <script src="{{asset('/')}}website/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script> --}}
{{-- <script src="{{asset('/')}}website/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/slick.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/wow.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery-ui.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/magnific-popup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/select2.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/waypoints.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/counterup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.countdown.min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/images-loaded.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/isotope.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/scrollup.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.vticker-min.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins/jquery.elevatezoom.js"></script>
<script src="{{asset('/')}}website/assets/summernote/summernote-bs4.min.js"></script> --}}

<!-- Template  JS -->
{{-- <script src="{{asset('/')}}website/assets/js/maind134.js?v=3.4"></script>
<script src="{{asset('/')}}website/assets/js/shopd134.js?v=3.4"></script> --}}

     {{-- current radian script --}}
 <!-- All JS Plugins -->
 <script src="{{asset('/')}}website/assets/js/plugins.js"></script>
 <!-- Main JS -->
 <script src="{{asset('/')}}website/assets/js/main.js"></script>


 <!-- jQuery (Toastr requires jQuery) -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- Toster js  -->
{{-- <script src="{{ asset('/') }}website/assets/js/plugins/toastr.min.js"></script> --}}

<!-- sweet alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.delete-item', function(event) {
        event.preventDefault();  
        
        var deleteUrl = $(this).attr('href');  
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
               
            }
        });
    });
    function confirmDeletion() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form if the user confirms
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>

@if (session('message'))
<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        };
        toastr.success("{{ session('message') }}");
    });
</script>
@endif

@if (session('error'))
<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        };
        toastr.error("{{ session('error') }}");
    });
</script>
@endif


@if (session('warning'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        };
        toastr.info("{{ session('warning') }}");
    </script>
@endif


{{--      Product datails                  --}}
{{--      vendor Product   category subcategory    --}}
<script>
    function setSubCategory(id) {
        // alert(categoryId)
        $.ajax({   // "$" means  jQuery object
            type: "GET",
            url: "{{ route('get-sub-category-by-category') }}",
            // data: {cateId: id},
            data: {id: id},
            dataType: "JSON",
            success: function (response) {
                // alert(response);
                //2nd
                // console.log(response);
                //3rd
                var option = '';
                option += ' <option value="" disabled selected> -- Select Sub Category --</option>';
                $.each(response, function (key,value) {
                    option += '<option value="'+value.id+'">' + value.name + '</option>';
                });

                // console.log(option);
                $('#subCategoryId').empty();
                $('#subCategoryId').append(option);

            }
        })
    }

</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        $('.select2-selection').css({'width': '580px'});
    });
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

<script>
    $('.searchText').keyup(function () {
        var searchText = $(this).val();
       
        $.ajax({
            type: "GET",
            url: "{{ route('get-product-by-search-text') }}",
            data: {search_text: searchText},
            dataType: "JSON",
            success: function (response) {
                var div = " ";
                div += '<section class="section-padding">';
                    div += '<div class="container wow fadeIn animated">';
                        div += '<h3 class="section-title mb-20"><span>Search</span> Result</h3>';
                        div += '<div class="carausel-6-columns-cover position-relative">';
                            div += '<div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>';
                            div += '<div class="carausel-6-columns carausel-arrow-center row">';
                                $.each(response, function (key, value) {
                                div += '<div class="product-cart-wrap small hover-up col-md-4">';
                                    div += '<div class="product-img-action-wrap">';
                                        div += '<div class="product-img product-img-zoom">';
                                            div += '<a href="https://demo1.dengrweb.com/product-detail/'+value.id+'">';
                                                div += '<img class="default-img" src="'+value.image+'"  height="250" alt=""/>';
                                                div += '<img class="hover-img" src="'+value.image+'" height="250" alt=""/>';
                                            div += '</a>';
                                        div += '</div>';
                                    div += '</div>';
                                    div += '<div class="product-content-wrap">';
                                        div += '<h2><a href="https://demo1.dengrweb.com/product-detail/'+value.id+'"> '+value.name+' </a></h2>';
                                        div += '<div class="rating-result" title="90%">';
                                            div += '<span></span>';
                                        div += '</div>';
                                        div += '<div class="product-price">';
                                            div += '<span> TK. '+value.selling_price+'</span>';
                                            div += '<span class="old-price"> TK. '+value.regular_price+'</span>';
                                        div += '</div>';
                                    div += '</div>';
                                div += '</div>';
                                });
                            div += '</div>';
                        div += '</div>';
                    div += '</div>';
                div += "</section>";

                $('#mainContainer').empty();
                $('#mainContainer').append(div);
            }
        });
    });
</script>
