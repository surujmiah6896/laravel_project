@extends('layouts.dashboard_master')
@section('dashboard_bar')
Product List
@endsection
@section('content')
{{-- <div class="container"> --}}
    <div class="row ">
        <div class="col-12">
            <div class="card ">
                <div class="card-header text-white bg-primary">
                   List Product
                </div>
                <div class="card-body" style="overflow-x:auto;">
{{--
                @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif --}}

                <table class="table table-bordered">
                    {{-- @if ($subcategorys->count()>0) --}}

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Regular Price</th>
                            <th>Discounted Price</th>
                            {{-- <th>SKU</th>
                            <th>Slug</th>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Weight</th>
                            <th>Dimensions</th>
                            <th>Materials</th>
                            <th>Others Info</th> --}}
                            <th>Product Photo</th>
                            <th>Created By</th>
                            {{-- <th>Category Create Day&Time</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- @endif --}}
                    <tbody>
                        @forelse ($products as $product)
                        {{-- {{App\Models\SubCategory::find($product->subcategory_id)}} --}}
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->regular_price}}</td>
                                <td>{{$product->discounted_price}}</td>
                                {{-- <td>{{$product->sku}}</td>
                                <td>{{$product->slug}}</td> --}}
                                {{-- <td>{{$product->category_id}}</td> --}}
                                {{-- <td>{{$product->$product->category_id}}</td> --}}
                                {{-- <td>{{App\Models\catagory::withTrashed()->find($product->category_id)->catagory_name}}</td> --}}
                                {{-- <td>{{App\Models\SubCategory::find($product->subcategory_id)->subcategory_name}}</td> --}}
                                {{-- <td>{{$product->subcategory_id}}</td>
                                <td>{{$product->short_description}}</td>
                                <td>{{$product->long_description}}</td>
                                <td>{{$product->weight}}</td>
                                <td>{{$product->dimension}}</td>
                                <td>{{$product->materials}}</td>
                                <td>{{$product->other_info}}</td> --}}
                                <td><img src="{{asset('uploads/product_photo')}}/{{$product->product_thumbnail_photo}}" width="100" alt="No Image"></td>
                                <td>{{App\Models\user::find($product->created_by)->name}}</td>
                                <td class="">
                                    <div class="btn-group">
                                        <a type="button" href="{{route('add.featuredphotos', $product->id)}}" class=" btn-xs btn btn-info">Add Featured Photos </a>
                                        <a type="button" href="{{route('frontend.pruduct_details', $product->slug)}}" target="_blank" class=" btn-xs btn btn-warning">Preview</a>
                                        <a type="button" href="{{route('add.inventory',$product->id)}}" class=" btn-xs btn btn-secondary">Add Inventory</a>
                                        {{-- <a type="button" href="{{route('product.edit', $product->id)}}" class="btn-square btn-xs btn btn-warning">Edit</a> --}}
                                    </div>


                                </td>

                            </tr>
                            @empty
                            <tr class="text-center text-danger">
                                <td colspan="50">No Data</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                </div>


            </div>
            <a href="{{route('catagory.create')}}" class="btn btn-primary text-white">Back</a>
        </div>
    </div>
{{-- </div> --}}
@endsection


