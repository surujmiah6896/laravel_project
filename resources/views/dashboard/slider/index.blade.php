@extends('layouts.dashboard_master')
@section('dashboard_bar')
Calegory List
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-12">
            <div class="card ">
                <div class="card-header text-white bg-primary">
                   List Slider
                </div>
                <div class="card-body"></div>

                @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif

                <table class="table table-bordered">
                    @if ($sliders ->count()>0)

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Slider Caption</th>
                            <th>Sale OFF Price</th>
                            <th>Create By</th>
                            <th>Slider Photo</th>
                            {{-- <th>Category Create Day&Time</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    @endif
                    <tbody>
                        @forelse ($sliders as $slider)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$slider->slider_caption}}</td>
                                <td>{{$slider->sale_off_price}}</td>
                                <td>{{App\Models\User::find($slider->created_by)->name}}</td>
                                <td>
                                    <img src="{{asset('uploads/slider_photo')}}/{{$slider->slider_photo}}" width="50" alt="">
                                </td>
                                {{-- <td>
                                    {{$catagory->created_at->format('m/d/Y h:i:s A ')}}
                                    @if ($catagory->created_at->diffinseconds()<60)
                                    <div class="badge bg-dark text-white">Just Now</div>
                                    @else
                                    <div class="badge bg-dark text-white">{{$catagory->created_at->diffforhumans()}}</div>

                                    @endif
                                </td> --}}
                                <td>
                                    {{-- <button type="submit"> class="btn btn-sm btn-dark" href="bg-info">Edit</button> --}}
                                    <form action="{{route('slider.destroy',$slider->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-sm btn-danger" href="bg-info">Delete</button>
                                        <a class="btn btn-sm btn-info" href="{{route('slider.show',$slider->id)}}">Info</a>
                                        <a class="btn btn-sm btn-dark" href="{{route('slider.edit',$slider->id)}}">Edit</a>
                                    </form>

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
            <a href="{{route('catagory.create')}}" class="btn btn-primary text-white">Back</a>
        </div>
    </div>
</div>
@endsection

