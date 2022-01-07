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
                   List SubCategory
                </div>
                <div class="card-body"></div>

                @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif

                <table class="table table-bordered">
                    @if ($subcategorys->count()>0)

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Create By</th>
                            {{-- <th>Category Create Day&Time</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    @endif
                    <tbody>
                        @forelse ($subcategorys as $subcategory)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{App\Models\catagory::withTrashed()->find($subcategory->category_id)->catagory_name}}</td>
                                <td>{{$subcategory->subcategory_name}}</td>
                                <td>{{App\Models\User::find($subcategory->created_by)->name}}</td>
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
                                     <form action="{{route('subcategory.destroy',$subcategory->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-sm btn-danger" href="bg-info">Delete</button>
                                        <a class="btn btn-sm btn-info" href="{{route('subcategory.show',$subcategory->id)}}">Info</a>
                                        <a class="btn btn-sm btn-dark" href="{{route('subcategory.edit',$subcategory->id)}}">Edit</a>
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

