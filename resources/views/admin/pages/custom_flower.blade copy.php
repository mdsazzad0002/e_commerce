@extends('admin.master')
@section('title', 'Add User Page')
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
                    <p class="text-center text-success">{{ session('message') }}</p>

                    <form class="form-horizontal" action="{{ route('custom-flower.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <!-- Flower Name -->
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Flower Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Select Color and Price -->
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Select Color</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    @foreach ($color as $item)
                                        <div class="row mb-3 align-items-center">
                                            <!-- Checkbox -->
                                            <div class="col-4">
                                                <input class="form-check-input" type="checkbox" name="colors[]"
                                                    value="{{ $item->id }}" id="flexCheckChecked{{ $item->id }}">
                                                <label class="form-check-label" for="flexCheckChecked{{ $item->id }}">
                                                    {{ $item->name }}
                                                </label>
                                            </div>
                                            <!-- Input Field -->
                                            <div class="col-8">
                                                <label for="price{{ $item->id }}" class="form-label">Price</label>
                                                <input type="text" name="prices[{{ $item->id }}]"
                                                    class="form-control" id="price{{ $item->id }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Submit</button>
                    </form>



                    <table id="example3x" class="table table-bordered text-nowrap border-bottom">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">SL NO</th>
                                {{-- <th class="border-bottom-0">Img</th> --}}
                                <th class="border-bottom-0">Name</th>
                                {{-- <th class="border-bottom-0">Color</th>
                            <th class="border-bottom-0">Price</th> --}}
                                <th class="border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customeflower as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>
                                @if ($item->flower && $item->flower->img)
                                    <img src="{{ asset('/').$item->flower->img }}" alt="" width="100px">
                                @else
                                    No Image
                                @endif
                            </td> --}}
                                    {{-- <td>{{ $item->flower->name ?? 'N/A' }}</td>
                            <td>{{ $item->color->name ?? 'N/A' }}</td> --}}
                                    <td>{{ $item->name ?? 'N/A' }}</td>
                                    <td>

                                        {{-- <a href="{{route('user.edit', $item->id)}}"
                                    class="btn btn-success btn-sm float-start m-1">
                                    <i class="fa fa-edit"></i>
                                </a> --}}


                                        <form action="{{ route('custom-flower.destroy', $item->id) }}" method="post">
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

        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('flower.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="name" class="form-label">Flower Name</label>
                                    <div class="">
                                        <input class="form-control" value="{{ old('name') }}" name="name"
                                            id="name" placeholder="flower name" type="text" />

                                    </div>
                                    <label for="name" class="form-label">Flower Img</label>
                                    <div class="">
                                        <input type="file" class="form-control" name="img">

                                    </div>
                                </div>

                                <button class="btn btn-primary rounded-0 float-end" type="submit">Create</button>
                            </form>

                            <table id="example3x" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL NO</th>
                                        <th class="border-bottom-0">Img</th>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($flower as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('/') . $item->img }}" alt="" width="100px"> </td>
                                            <td>{{ $item->name }}</td>




                                            <td>

                                                {{-- <a href="{{route('user.edit', $item->id)}}"
                                            class="btn btn-success btn-sm float-start m-1">
                                            <i class="fa fa-edit"></i>
                                        </a> --}}


                                                <form action="{{ route('flower.delete', $item->id) }}" method="post">
                                                    @csrf

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
                <div class="col-6">

                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('flower.color.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="name" class=" form-label">Create Color</label>
                                    <div class="">
                                        <input class="form-control" value="{{ old('name') }}" name="name"
                                            id="name" placeholder="flower color" type="text" />

                                    </div>
                                </div>

                                <button class="btn btn-primary rounded-0 float-end" type="submit">Create</button>

                            </form>

                            <table id="example3x" class="table table-bordered text-nowrap border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL NO</th>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($color as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>



                                            <td>
                                                <form action="{{ route('flower.color.delete', $item->id) }}"
                                                    method="post">
                                                    @csrf

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

        </div>
    </div>


@endsection
