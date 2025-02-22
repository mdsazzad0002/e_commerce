@extends('admin.master')
@section('title','Add User Page')
@section('body')


<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">flower Module</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">flower</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add flower</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row">



    <div class="col-6">


        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Add Custom Flower</h3>
            </div>


            <div class="card-body">
                <p class="text-center text-success">{{session('message')}}</p>

                <form class="form-horizontal" action="{{ route('reaper.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    @method('post')

                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Flower qty</label>
                        <div class="col-md-9">
                            <input type="text" name="flower_qty" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Reaper Nedded</label>
                        <div class="col-md-9">
                            <input type="text" name="reaper" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Price</label>
                        <div class="col-md-9">
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>

                    <button class="btn btn-primary rounded-0 float-end" type="submit">Submit</button>
                </form>



                <table id="example3x" class="table table-bordered text-nowrap border-bottom">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">SL NO</th>
                            <th class="border-bottom-0">flower qty</th>
                            <th class="border-bottom-0">Reaper Need</th>
                            <th class="border-bottom-0">price</th>
                            <th class="border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reaper as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            
                            <td>{{ $item->flower_qty ?? 'N/A' }}</td>
                            <td>{{ $item->reaper ?? 'N/A' }}</td>
                            <td>{{ $item->price ?? 'N/A' }}</td>
                            <td>

                                {{-- <a href="{{route('user.edit', $item->id)}}"
                                    class="btn btn-success btn-sm float-start m-1">
                                    <i class="fa fa-edit"></i>
                                </a> --}}


                                <form action="{{ route('reaper.destroy',$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="btn btn-danger btn-sm float-start m-1 delete-item">
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


@endsection