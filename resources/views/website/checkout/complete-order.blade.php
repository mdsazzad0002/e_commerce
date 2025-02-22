@extends('website.master')

@section('title', '')



@section('content')

    <!-- BREADCRUMB AREA START -->
    {{-- <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Complete your order</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Complete your order</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- BREADCRUMB AREA END -->

{{--    <section class="mt-50 mb-50">--}}
    <section class="py-5 bg-secondary-light">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card card-body">
                            <div class="text-success text-center">
                                <h1 class="text-success">Congratulations! Your order was successfully placed.<br>
                                Hopefully you will get very soon</h1>
                                @if (session('message'))
                                    
                                    <h1>{{ session('message') }}</h1>
                                    <p>Your Tracking ID: <strong>{{ session('tracking_id') }}</strong></p>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>

    </section>

@endsection
