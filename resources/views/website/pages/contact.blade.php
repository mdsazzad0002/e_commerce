@extends('website.master')
@section('title', 'Contact Us')
@section('content')


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">Contact Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <h3>Email Address</h3>
                        <p>{{$data->contact_email}} <br>
                           {{$data->support_email}} </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <h3>Phone Number</h3>
                        <p>{{$data->contact_phone}} <br>
                            {{$data->support_phone}}</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-4 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <i class="icon-speedometer"></i>
                        </div>
                        <h3>Opening Hours</h3>
                        <p>{{$data->office_hour}} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="ltn_google-map-area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="google-map">
                        {!!$data->google_map_api_link!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GOOGLE MAP AREA END -->

@endsection
