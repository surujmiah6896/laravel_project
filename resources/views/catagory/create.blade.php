@extends('layouts.dashboard_master');

@section('dashboard_bar')
Add Category
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Category</h4>
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


                    <form action="{{route('catagory.store')}}" method="POST">

                        <div class="form-group">
                               <label> Category Name</label>
                               <br>
                               <input type="text" class=" @error('catagory_name') is-invalid @enderror form-control" name="catagory_name" placeholder="Enter Catagory Name">
                               @error('catagory_name')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
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
</div>

@endsection


