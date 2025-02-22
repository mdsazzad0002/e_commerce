<style>
    .pink_bg_gradient {
        background: linear-gradient(90deg, #F3BFFF, #FCEEFF);
        min-width: 196px;
        padding: 8px 10px;
        border-radius: 3px;
    }

    .nav_check_delivery {
        font-size: 14px;
        line-height: 16px;
        color: #2F2F2F;
    }

    .header-search-2 button:hover {
        color: #460066 !important;
    }

    .search-head-input::placeholder {
        color: #ABABAB !important;
    }

    .icon-magnifier {
        color: #ABABAB !important;
    }

    .header-search-2 input {
        margin-bottom: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding-left: 20px;
        padding-right: 50px;
        height: 33px;
    }

    .header-search-2 button {
        position: absolute;
        right: 0;
        background-color: transparent;
        height: 37px;
        top: 0;
        padding: 0 15px;
        font-size: 18px;
    }

    .header-search-2 {
        min-width: 400px;
        padding: 0px !important;
    }

    .mini-cart-icon-2>a .mini-cart-icon sup {
        font-size: 12px;
        font-weight: 600;
        height: 20px;
        width: 20px;
        line-height: 20px;
        background-color: #DC41FF;
        color: var(--white);
        text-align: center;
        border-radius: 100%;
        right: 8px;
        top: -8px;
        display: inline-block;
    }

    .mini-cart-icon-2>a .mini-cart-icon {
        margin-right: 0px;
        gap: 10px;
    }

    .menu_icon_box {
        display: flex;
        flex-direction: column;
        align-content: center;
        align-items: center;
        justify-content: flex-start;
        gap: 0;
    }

    .menu_icon_box p {
        line-height: 20px;
        font-size: 12px;
        font-weight: normal;
    }

    .header-bottom-area {
        border-top: 1px solid #D6D6D6;
        border-bottom: 1px solid #D6D6D6;
    }

    .ltn__main-menu>ul>li>a {
        font-size: 14px;
        padding: 10px 10px;
        display: inline-block;
        white-space: nowrap;
        font-weight: 400;
        font-family: var(--ltn__heading-font);
        text-transform: capitalize;
        color: #2F2F2F;
    }
</style>

<header class="ltn__header-area ltn__header-3 section-bg-6">
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-12">
                    <div class="site-logo">
                        <a href="{{route('home')}}"><img src="{{asset('/') . $setting->logo_jpg}}" alt="Logo"></a>
                    </div>
                </div>

                <div class="col header-contact-serarch-column d-none d-xl-block">
                    <div class="header-contact-search align-items-center gap-4">
                        <!-- header-feature-item -->

                       <a href="{{route('free.delivery.product')}}">
                        <div class="col-2 d-flex align-items-center justify-content-between pink_bg_gradient">
                            <h4 class="mb-0 nav_check_delivery">Check Free Delivery</h4>
                            <img src="{{asset('/')}}website/assets/img/nav-bike.svg" alt="Icon" width="20.7"
                                height="17" />
                        </div>
                       </a>


                        <!-- <div class="header-feature-item">
                          <div class="header-feature-icon">
                              <i class="icon-phone"></i>
                          </div>
                          <div class="header-feature-info">
                              <h6>hi</h6>
                              <p><a href="{{asset('/')}}website/assets/tel:0123456789">+0123-456-789</a></p>
                          </div>
                      </div> -->


                        <!-- header-search-2 -->
                        <div class="header-search-2">
                            <form id="searchForm" method="GET" action="/search-results">
                                <input class="search-head-input" type="text" name="query" id="searchInput"
                                    placeholder="Search your Desire product..."
                                    style="border: 1px solid #D6D6D6;color:#444444;border-radius:3px;line-height:16px;" 
                                    autocomplete="off" />
                                <button type="submit">
                                    <span><i class="icon-magnifier"></i></span>
                                </button>
                            </form>
                        
                            <!-- Search Suggestions Card -->
                            <div class="card mt-2" id="suggestionCard" style="display: none; position: absolute; width: 30%; z-index: 1000;">
                                <div class="card-body p-2">
                                    <div id="suggestions"></div>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                    
                    </div>
                </div>
                <div class="col">
                    <!-- header-options -->
                    <div class="ltn__header-options">
                        <ul>
                            <li class="d-none">
                                <!-- ltn__currency-menu -->
                                <div class="ltn__drop-menu ltn__currency-menu">
                                    <ul>
                                        <li><a href="{{asset('/')}}website/assets/#" class="dropdown-toggle"><span
                                                    class="active-currency">USD</span></a>
                                            <ul>
                                                <li><a href="{{asset('/')}}website/assets/login.html">USD - US
                                                        Dollar</a></li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">CAD - Canada
                                                        Dollar</a></li>
                                                <li><a href="{{asset('/')}}website/assets/register.html">EUR - Euro</a>
                                                </li>
                                                <li><a href="{{asset('/')}}website/assets/account.html">GBP - British
                                                        Pound</a></li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">INR - Indian
                                                        Rupee</a></li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">BDT -
                                                        Bangladesh Taka</a></li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">JPY - Japan
                                                        Yen</a></li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">AUD -
                                                        Australian Dollar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="d-none">
                                <!-- header-search-1 -->
                                <div class="header-search-wrap">
                                    <div class="header-search-1">
                                        <div class="search-icon">
                                            <i class="icon-magnifier  for-search-show"></i>
                                            <i class="icon-magnifier-remove  for-search-close"></i>
                                        </div>
                                    </div>
                                    <div class="header-search-1-form">
                                        <form id="#" method="get" action="#">
                                            <input type="text" name="search" value="" placeholder="Search here..." />
                                            <button type="submit">
                                                <span><i class="icon-magnifier"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none">
                                <!-- user-menu -->
                                <div class="ltn__drop-menu user-menu">
                                    <ul>
                                        <li>
                                            <a href="{{asset('/')}}website/assets/#"><i class="icon-user"></i></a>
                                            <ul>
                                                <li><a href="{{asset('/')}}website/assets/login.html">Sign in</a></li>
                                                <li><a href="{{asset('/')}}website/assets/register.html">Register</a>
                                                </li>
                                                <li><a href="{{asset('/')}}website/assets/account.html">My Account</a>
                                                </li>
                                                <li><a href="{{asset('/')}}website/assets/wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- mini-cart 2 -->

                                <!-- mini-cart 2 -->


                                <div class="mini-cart-icon mini-cart-icon-2">
                                    
                                        <span class="mini-cart-icon">
                                            <span class="menu_icon_box">
                                                <i class="icon-map" style="margin: 0 15px;"></i>
                                                <p style="margin:0px">Same day delivery</p>
                                            </span>
                                            <span class="menu_icon_box">
                                                <i class="icon-present" style="margin: 0 5px;"></i>
                                                <p style="margin:0px">Track Order</p>
                                            </span>

                                           
                                                <span class="menu_icon_box">

                                                    @if($user = session()->get('customer_id'))
                                                    <i class="icon-user" style="margin: 0 5px;"></i>
                                                   <a href="{{route('customer.dashboard')}}"> {{ Session::get('customer_name')?? '' }}</a>
                                                    @else
                                                    <a href="{{route('login-register')}}">
                                                    <i class="icon-user" style="margin: 0 5px;"></i>
                                                    <p style="margin:0px">Login/SignUp</p>
                                                    </a>
                                                    @endif
                                                    
                                                </span>
                                            
                                           

                                            <a href="{{route('new.cart.page')}}" >


                                                <span class="menu_icon_box">
                                                    <div style="height:21px;">
                                                        <i class="icon-basket" style="margin: 0 5px;"></i>
                                                        <sup class="cart-count" style="background: rebeccapurple;padding:10px;border-radius:30%;color:white">
                                                            
                                                            @php
                                                            $userId = session()->get('customer_id') ?? session()->get('guest_user_id');
                                                            $cartCount = \App\Models\AddtoCart::where('user_id', $userId)->count();
                                                          @endphp
                                                        {{ $cartCount }}
                                                        </sup>
                                                    </div>
                                                    <p style="margin:0px">Cart</p>
                                                </span>
    
                                            </a>
                                           

                                            <span class="menu_icon_box">
                                                <i class="icon-user" style="margin: 0 5px;"></i>
                                                <p style="margin:0px">More</p>
                                            </span>




                                        </span>

                                    
                                </div>

                                
                           



                                {{-- <h6><span>Your Cart</span> <span class="ltn__secondary-color">$89.25</span>
                                </h6> --}}




                            </li>



                           



                            <li>
                                <!-- Mobile Menu Button -->
                                <div class="mobile-menu-toggle d-lg-none">
                                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                        <svg viewBox="0 0 800 600">
                                            <path
                                                d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                                id="top"></path>
                                            <path d="M300,320 L540,320" id="middle"></path>
                                            <path
                                                d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                                id="bottom"
                                                transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->

    <!-- header-bottom-area start -->
    <div
        class="header-bottom-area ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col header-menu-column justify-content-center">
                    <div class="sticky-logo">
                        <div class="site-logo">
                            <a href="{{route('home')}}"><img src="{{asset('/') . $setting->logo_jpg}}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="header-menu header-menu-2">
                        <nav>
                            <div class="ltn__main-menu">

                                <ul>
                                    @foreach ($categories as $cate)
                                    <li class="menu-icon"><a href="{{ route('product-category',$cate->id)}}"
                                            style="color:#000">{{$cate->name}}</a>


                                        <ul>

                                            @foreach($cate->subcategories as $subcategory)
                                            <li><a href="{{route('product-sub-category',$subcategory->id)}}"
                                                    style="color:#000">{{$subcategory->name}}</a></li>
                                            @endforeach

                                        </ul>

                                    </li>
                                    @endforeach
                                    {{-- <li class="menu-icon"><a href="{{asset('/')}}website/assets/#">Pages</a>
                                        <ul class="mega-menu">
                                            <li><a href="{{asset('/')}}website/assets/#">Inner Pages</a>
                                                <ul>
                                                    <li><a href="{{asset('/')}}website/assets/about.html">About Us</a>
                                                    </li>
                                                    <li><a
                                                            href="{{asset('/')}}website/assets/portfolio.html">Portfolio</a>
                                                    </li>
                                                    <li><a href="{{asset('/')}}website/assets/portfolio-2.html">Portfolio
                                                            - 02</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/portfolio-details.html">Portfolio
                                                            Details</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{asset('/')}}website/assets/#">Inner Pages</a>
                                                <ul>
                                                    <li><a href="{{asset('/')}}website/assets/locations.html">Google Map
                                                            Locations</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/404.html">404</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/contact.html">Contact</a>
                                                    </li>
                                                    <li><a href="{{asset('/')}}website/assets/coming-soon.html">Coming
                                                            Soon</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{asset('/')}}website/assets/#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="{{asset('/')}}website/assets/shop.html">Shop</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/shop-grid.html">Shop
                                                            Grid</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/shop-left-sidebar.html">Shop
                                                            Left sidebar</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/shop-right-sidebar.html">Shop
                                                            right sidebar</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/product-details.html">Shop
                                                            details </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{asset('/')}}website/assets/#">Blog Pages</a>
                                                <ul>
                                                    <li><a href="{{asset('/')}}website/assets/blog.html">News</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/blog-grid.html">News
                                                            Grid</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/blog-left-sidebar.html">News
                                                            Left sidebar</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/blog-right-sidebar.html">News
                                                            Right sidebar</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/blog-details.html">News
                                                            details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-icon"><a href="{{asset('/')}}website/assets/#">Shop</a>
                                        <ul>
                                            <li><a href="{{asset('/')}}website/assets/shop.html">Shop</a></li>
                                            <li><a href="{{asset('/')}}website/assets/shop-grid.html">Shop Grid</a></li>
                                            <li><a href="{{asset('/')}}website/assets/shop-left-sidebar.html">Shop Left
                                                    sidebar</a></li>
                                            <li><a href="{{asset('/')}}website/assets/shop-right-sidebar.html">Shop
                                                    right sidebar</a></li>
                                            <li><a href="{{asset('/')}}website/assets/product-details.html">Shop details
                                                </a></li>
                                            <li><a href="{{asset('/')}}website/assets/#">Other Pages <span
                                                        class="float-right">>></span></a>
                                                <ul>
                                                    <li><a href="{{asset('/')}}website/assets/cart.html">Cart</a></li>
                                                    <li><a
                                                            href="{{asset('/')}}website/assets/wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li><a
                                                            href="{{asset('/')}}website/assets/checkout.html">Checkout</a>
                                                    </li>
                                                    <li><a href="{{asset('/')}}website/assets/order-tracking.html">Order
                                                            Tracking</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/account.html">My
                                                            Account</a></li>
                                                    <li><a href="{{asset('/')}}website/assets/login.html">Sign in</a>
                                                    </li>
                                                    <li><a
                                                            href="{{asset('/')}}website/assets/register.html">Register</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="{{asset('/')}}website/assets/#">Portfolio</a>
                                        <ul>
                                            <li><a href="{{asset('/')}}website/assets/portfolio.html">Portfolio</a></li>
                                            <li><a href="{{asset('/')}}website/assets/portfolio-2.html">Portfolio -
                                                    02</a></li>
                                            <li><a href="{{asset('/')}}website/assets/portfolio-details.html">Portfolio
                                                    Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon"><a href="{{asset('/')}}website/assets/#">News</a>
                                        <ul>
                                            <li><a href="{{asset('/')}}website/assets/blog.html">News</a></li>
                                            <li><a href="{{asset('/')}}website/assets/blog-grid.html">News Grid</a></li>
                                            <li><a href="{{asset('/')}}website/assets/blog-left-sidebar.html">News Left
                                                    sidebar</a></li>
                                            <li><a href="{{asset('/')}}website/assets/blog-right-sidebar.html">News
                                                    Right sidebar</a></li>
                                            <li><a href="{{asset('/')}}website/assets/blog-details.html">News
                                                    details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{asset('/')}}website/assets/contact.html">Contact</a></li> --}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom-area end -->
</header>


{{-- <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">

            <div class="mini-cart-items">

            </div>


        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$0.00</span></h5>  
            </div>
            <div class="btn-wrapper">
                <a href="{{route('new.cart.page')}}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="{{route('checkout')}}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
           
        </div>

    </div>
</div> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
$("#searchInput").on("keyup", function() {
    let query = $(this).val();
    if (query.length > 1) {
        $.ajax({
            url: "/search-suggestions",
            type: "GET",
            data: { query: query },
            success: function(data) {
                let suggestions = "";
                if (data.length > 0) {
                    $.each(data, function(index, product) {
                        suggestions += `
                            <div class="suggest-item p-2 border-bottom" data-title="${product.name}" style="cursor: pointer;">
                                <strong> 
                                    <img src="${product.image}" alt="${product.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px; margin-right: 10px;"/> 
                                    ${product.name} ----------- ${product.selling_price}&#2547;
                                </strong><br>
                            </div>`;
                    });
                } else {
                    suggestions = `<div class="p-2">No results found</div>`;
                }
                $("#suggestions").html(suggestions);
                $("#suggestionCard").show();
            }
        });
    } else {
        $("#suggestionCard").hide();
    }
});

// Handle click on suggestion
$(document).on("click", ".suggest-item", function() {
    let selectedQuery = $(this).data("title");
    window.location.href = "/search-results?query=" + encodeURIComponent(selectedQuery);
});

// Hide suggestion card when clicking outside
$(document).click(function(e) {
    if (!$(e.target).closest("#searchInput, #suggestionCard").length) {
        $("#suggestionCard").hide();
    }
});
});

</script>



<script>
    $(document).ready(function () {
        function loadCartItems() {
            $.ajax({
                url: "{{ route('cart.items.new') }}",
                type: "GET",
                success: function (response) {
                    if (response.success) {
                        // console.log("Cart HTML:", response.html); // Log the rendered HTML
                        $('.mini-cart-items').html(response.html); // Replace cart items
                        $('.mini-cart-sub-total span').text('$' + response.subtotal); // Update subtotal
                    } else {
                        console.log('Failed to load cart items.');
                    }
                },
                error: function (xhr) {
                    console.log('Error fetching cart items:', xhr.responseText);
                }
            });
        }

        // Load cart items on page load
        loadCartItems();

       // Reload cart items after adding an item
       $(document).on("click", ".theme-btn-1", function () {
           setTimeout(loadCartItems, 100); 
       });

        // Handle item deletion
        $(document).on("click", ".mini-cart-item-delete", function () {
            let itemId = $(this).data("id");
            //   console.log(itemId);
            $.ajax({
                url: "{{ route('cart.remove') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: itemId
                },
                success: function (response) {
                    if (response.success) {
                        loadCartItems();
                        $('.cart-count').text(response.count); // Update cart count
                    } else {
                        console.log('Failed to delete item.');
                    }
                },
                error: function (xhr) {
                    console.log('Error deleting item:', xhr.responseText);
                }
            });
        });

     });
</script>

