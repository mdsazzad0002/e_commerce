@extends('admin.master')
@section('title','Setting Shipping Policy')
@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Shipping Fee Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Shipping Fee Module</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Shipping Policy</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">
    <div class="col-xl-12 mx-auto">

        <div class="card mt-5">
            <div class="card-body">
                <p class="text-success text-center">{{session('message')}}</p>
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Shipping Fee Add</h6>
                    <hr />

                    {{-- <form action="{{ route('shipping-policy-form.store') }}" method="post"
                        enctype="multipart/form-data">--}}
                        <form action="{{ route('shipping-fee.update',$data->id) }}" method="post"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="row mb-4">
                                <label for="" class="col-md-3 form-label">Inside Dhaka</label>
                                <div class="col-md-9">
                                    <input type="text" name="inside_dhaka" value="{{ $data->inside_dhaka }}" class="form-control"
                                         />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-3 form-label">OutInside Dhaka</label>
                                <div class="col-md-9">
                                    <input type="text" name="outside_dhaka" value="{{ $data->outside_dhaka }}" class="form-control"
                                        />
                                
                                </div>
                            </div>

                           

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success m-1">Update Shipping Fee</button>
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection