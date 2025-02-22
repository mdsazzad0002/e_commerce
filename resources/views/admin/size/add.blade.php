@extends('admin.master')
@section('title','Add Brand Page')
@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Pounds/pcs Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pounds/pcs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Pounds/pcs</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Pounds/pcs Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{ route('size.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-4">
                            <label for="name"  class="col-md-3 form-label">Pounds/pcs Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Pounds/pcs Name" type="text"/>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>

                        {{-- <div class="row mb-4">
                            <label for="name"  class="col-md-3 form-label">Pounds/pcs Code</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ old('code') }}" name="code" id="code" placeholder="Pounds/pcs Code" type="text"/>
                                <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                            </div>
                        </div> --}}


                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Pounds/pcs Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" id="description" placeholder="Pounds/pcs Description" ></textarea>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9 pt-3">
                                <label for=""><input type="radio" value="1" checked name="status"><span> Published </span></label>
                                <label for=""><input type="radio" value="0" checked name="status"><span> Unpublished </span></label>
                            </div>
                        </div>

                        <button class="btn btn-primary rounded-0 float-end" type="submit">Create New Pounds/pcs</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
