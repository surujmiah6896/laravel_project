@extends('layouts.dashboard_master')
@section('dashboard_bar')
Calegory List
@endsection
@section('content')

    <div class="row ">
        <div class="col-12">
            <div class="card ">
                <div class="card-header text-white bg-primary">
                   List Category
                   <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-trash fa-2x"></i></button>
                   <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter">
                           <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                               <div class="modal-content">
                                    <div class="modal-header">
                                     <h5 class="modal-title">Deleted Category</h5>
                                       <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                          </div>
                                         <div class="modal-body text-black">
                                         <table class="table table-bordered table-inverse ">
                                             <thead>
                                                 <tr>
                                                     <th>SL No.</th>
                                                     <th>Category Name</th>
                                                     <th>Category Photo</th>
                                                     <th>Action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($deleted_categorys as $deleted_category )
                                                 <tr>
                                                     <td>{{$loop->index+1}}</td>

                                                     <td>{{$deleted_category->catagory_name}}</td>
                                                     <td>
                                                         <img src="{{asset('uploads/category_photo')}}/{{$deleted_category->catagory_photo}}" width="100" alt="">
                                                     </td>
                                                     <td>
                                                         <div class="btn-group mb-2">
                                                             <a class="btn btn-sm btn-success " href="{{route('category.restore',$deleted_category->id)}}">Restore</i></a>
                                                             <a class="btn btn-sm btn-danger " href="{{route('category.forcedelete',$deleted_category->id)}}">parmanent Delete</i></a>

                                                         </div>
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
                <div class="card-body"></div>

                @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif
                @if (session('restore_massege'))
                    <div class="alert alert-success">
                        {{session('restore_massege')}}
                    </div>
                @endif
                @if (session('parmanent_delete_massege'))
                    <div class="alert alert-danger">
                        {{session('parmanent_delete_massege')}}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Category Photo</th>
                            {{-- <th>Category Create Day&Time</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catagories as $catagory)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$catagory->catagory_name}}</td>

                                <td>
                                     <img src="{{asset('uploads/category_photo')}}/{{$catagory->catagory_photo}}" width="100" alt="no photo">
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
                                    <form action="{{route('catagory.destroy',$catagory->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-sm btn-danger" href="bg-info">Delete</button>
                                        <a class="btn btn-sm btn-info" href="{{route('catagory.show',$catagory->id)}}">Info</a>
                                        <a class="btn btn-sm btn-dark" href="{{route('catagory.edit',$catagory->id)}}">Edit</a>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
            <a href="{{route('catagory.create')}}" class="btn btn-primary text-white">Back</a>
        </div>
    </div>

@endsection
