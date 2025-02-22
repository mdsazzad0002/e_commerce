@extends('website.master')
@section('title', 'Return Policy')
@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner text-center">
                        <h1 class="ltn__page-title">FAQ</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
    <div class="ltn__faq-area mb-80">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">
                            @foreach($faqs as $key => $faq)
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-{{ $key }}" aria-expanded="false">
                                    {{ $faq->question }}
                                </h6>
                                <div id="faq-item-{{ $key }}" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- FAQ AREA START -->
    
@endsection
