@extends('layouts.dashboard_master');

@section('dashboard_bar')
Add Slider
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Slider</h4>
                </div>
                <div class="card-body">


                        {{-- @error('catagory_name')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                        @enderror --}}

                    @if (session('create_massege'))
                    <div class=" alert alert-success">
                        {{session('create_massege')}}
                    </div>
                    @endif


                    <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                               <label> Slider Caption</label>
                               <br>
                               <input type="text" class=" @error('slider_caption') is-invalid @enderror form-control" name="slider_caption" placeholder="Enter Slider Caption">
                               @error('slider_caption')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>
                                <div class="form-group">
                               <label> Sale Price OFF</label>
                               <br>
                               <input type="number" class=" @error('sale_off_price') is-invalid @enderror form-control" name="sale_off_price" placeholder="Enter Sale off Price">
                               @error('sale_off_price')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>
                                 <div class="form-group">
                                    <label>Slider Photo</label>
                                     <input type="file"  name="slider_photo" class="form-control">

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
    </div>

@endsection



