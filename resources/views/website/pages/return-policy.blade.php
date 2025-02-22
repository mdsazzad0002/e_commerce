@extends('website.master')
@section('title', 'Return Policy')
@section('content')

 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Return  Policy</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Return  Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->


    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-10 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="about-us-info-wrap">
                        {{-- <h2 class="mb-30 font-weight-6">Radian - Powerful  for Shop</h2> --}}
                       <p>{!!$data->description!!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
    
@endsection
