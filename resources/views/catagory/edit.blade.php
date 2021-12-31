@extends('layouts.dashboard_master')

@section('dashboard_bar')
Category Edit
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Edit Category</h4>
                </div>
                <div class="card-body">


                        {{-- @error('catagory_name')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                        @enderror --}}

                    @if (session('update_message'))
                    <div class=" alert alert-success">
                        {{session('update_message')}}
                    </div>
                    @endif


                    <form action="{{route('catagory.update',$catagory->id)}}" method="POST">
                         @csrf
                        @method('PATCH')
                        <div class="form-group">
                               <label> Category Name</label>
                               <br>
                               <input type="text" class=" form-control" name="catagory_name" value="{{$catagory->catagory_name}}">
                               @error('catagory_name')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-rounded">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



