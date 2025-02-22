

@extends('website.master')
@section('title', 'Product Category Page')

@section('content')

 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">{{$category->name ?? ''}} </h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>{{$category->name ?? ''}} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2 mb-100">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                           <div class="showing-product-number text-right">
                                <span>Showing 9 of 10 results</span>
                            </div> 
                        </li>
                        <li>
                           <div class="short-by text-center">
                                <select class="nice-select" id="sort_by">
                                    <option value="low_to_high">Sort By Price:Low to High</option>
                                    <option value="high_to_low">Sort By Price: High to Low</option>
                                </select>
                                <input type="hidden" class="category" value="{{$category->id}}" name="category_id">
                            </div>

                   

                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="icon-grid"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="icon-menu"></i></a>
                                </div>
                            </div> 
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row search-result">
                                <!-- ltn__product-item -->
                                    
                                @include('website.category.price_filter');
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach ($products as $product)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item">
                                        <div class="product-img">
                                            <a href="{{route('product-detail',$product->id)}}"><img src="{{asset('/').$product->image}}" alt="#"></a>
                                            <div class="product-badge">
                                                
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{route('product-detail',$product->id)}}">{{$product->name}}</a></h2>
                                            <div class="product-price">
                                                <span>{{$product->selling_price}}</span>
                                            </div>
                                            {{-- <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div> --}}
                                            <div class="product-brief">
                                                <p>{{$product->short_description}}</p>
                                            </div>
                                            {{-- <div class="product-hover-action product-hover-action-2">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="icon-magnifier"></i>
                                                        </a>
                                                    </li>
                                                    <li class="add-to-cart">
                                                        <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                                            <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="icon-shuffle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination ltn__pagination-2">
                          {{ $products->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-3  mb-100">
                <aside class="sidebar ltn__shop-sidebar">
                    <!-- Search Widget -->
                 
                    <!-- Price Filter Widget -->
                    
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title">categories</h4>
                        <ul>
                            @foreach ($subcategories as $sub_cate)
                            <li><a href="{{route('product-sub-category',$sub_cate->id)}}">{{$sub_cate->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                  
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="#" alt="#"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(e){
    $('#sort_by').on('change',function(){  //id dorlam

        let sort_by=$('#sort_by').val(); //value collect korlam
        let category=$('.category').val(); //value collect korlam

        // alert(sort_by);
        // alert(category)
        // console.log(sort_by);
        $.ajax({
            url:'{{route('sort.by')}}', //route
            method:'GET',
            data:{sort_by:sort_by,
                category_id:category,
            }, //data pass korlam .. (let variable ta)
            success:function (res){
                $('.search-result').html(res);//search result value load korbe
            }

        })
        });
        });
</script>

@endsection
