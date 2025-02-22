@extends('admin.master')
@section('title','Setting faq')
@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Faq Us Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Faq Module</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Faq Us</li>
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
                    <h6 class="mb-0 text-uppercase">faq Form</h6>
                    <hr />

                    {{-- <form action="{{ route('about-us-form.store') }}" method="post" enctype="multipart/form-data">
                        --}}
                        <form action="{{ route('faqs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="col-12 mb-3">
                                <label for="name" class="col-md-3 form-label">Question</label>
                                <div class="col-md-12">
                                    <input class="form-control" value="{{ old('name') }}" name="question" id="name"
                                        placeholder="question" type="text" />
                                </div>
                            </div>

                            <div class="col-12">
                                <label>Answer</label>
                                <textarea name="answer" class="form-control" id="summernote" name="description"
                                    required></textarea>
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success m-1">Create Faq</button>
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">All Faq</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <div class="table-responsive">
                    <table id="example3" class="table table-bordered text-nowrap border-bottom">
                        <thead>
                        <tr>
                            <th class="border-bottom-0">SL NO</th>
                            <th class="border-bottom-0">Question</th>
                            <th class="border-bottom-0">Answer</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->question}}</td>
                                <td>{!! Str::limit(strip_tags($d->answer), 50, '...') !!}</td>

                               
{{--                                    <td class="d-flex">--}}
                                <td>
                                   
                                    <form action="{{ route('faqs.destroy',$d->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm float-start m-1 delete-item" >
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection