@extends('layouts.dashboard_master');

@section('dashboard_bar')
Add Featured Photos
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Product - {{$product->product_name}}</h4>
                </div>
                <div class="card-body">

                        {{-- @error('catagory_name')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                        @enderror --}}

                    @if (session('product_featured_photos'))
                    <div class=" alert alert-success">
                        {{session('product_featured_photos')}}
                    </div>
                    @endif


                    @if (session('file_format_error'))
                    <div class=" alert alert-danger">
                        {{session('file_format_error')}}
                    </div>
                    @endif

                    @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif

                    <form action="{{route('add.featuredphotos.post',$product_id)}}" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <!--left colume-->
                            <div class="col-6">
                                 <div class="form-group">
                                    <label>Product Thumbnail Photo</label>
                                     <input type="file"  name="product_featured_photos[]" multiple class="@error('product_featured_photos') is-invalid @enderror form-control">

                                     @error('product_featured_photos')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>

                            </div>

                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-rounded">Create</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Product - {{$product->product_name}}</h4>
                </div>
                <div class="card-body">
                    <table class="table bordered">
                        <thead >
                            <tr>
                                <th>No</th>
                                <th>Featured Photo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_featured_photos as $product_featured_photo)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td><img src="{{asset('uploads/product_featured_photos')}}/{{$product_featured_photo->product_featured_photo_name}}" width="100" alt="No Photos"></td>
                                    <td><a class="btn btn-sm btn-danger" href="{{route('delete.featuredphotos',$product_featured_photo->id)}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


