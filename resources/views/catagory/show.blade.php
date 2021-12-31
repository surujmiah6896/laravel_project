@extends('layouts.dashboard_master')

@section('dashboard_bar')
Calegory info
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
         <div class="card">
               <div class="card-header text-white bg-primary">
                <div class="col-md-12">
                    <h4 class="card-title text-white">Team Member</h4>
                </div>
            </div>
            <div class="card-body">
                  {{-- @if (session('delete_success'))
                    <div class=" alert alert-danger">
                        {{session('delete_success')}}
                    </div>
                    @endif --}}
                <table class="table table-bordered">
                    {{-- <thead class="thead-inverse">
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Create Time</th>
                    </tr>
                </thead> --}}
                <tbody>
                        <tr>
                           <td scope='row'>Category Name</td>
                           <td> {{$catagory->catagory_name}}</td>
                        </tr>
                        <tr>
                           <td scope='row'>Create By</td>
                           <td> {{App\Models\User::find($catagory->created_by)->name}}</td>
                        </tr>
                        <tr>
                           <td scope='row'> Create At </td>
                           <td>{{$catagory->created_at}}

                                    @if ($catagory->created_at->diffinseconds()<60)
                                    <div class="badge bg-dark badge-sm text-white">Just Now</div>
                                    @else
                                    <div class="badge bg-dark badge-sm text-white">{{$catagory->created_at->diffforhumans()}}</div>
                                    @endif

                        </td>

                        <tr>
                           <td scope='row'>Update By</td>
                           <td>
                               @if ($catagory->updated_by)
                                    {{App\Models\User::find($catagory->updated_by)->name}}
                                    @else
                                    <p>No Update</p>
                               @endif
                               </td>
                        </tr>

                        </tr>
                        <tr>
                           <td scope='row'> Lat Update At </td>
                            <td>@if ($catagory->updated_at)
                                    @if ($catagory->updated_at->diffinseconds()<60)
                                        <div class="badge bg-dark badge-sm text-white">Update Just Now</div>
                                    @else
                                        <div class="badge bg-dark badge-sm text-white">{{$catagory->updated_at->diffforhumans()}}</div>
                                    @endif
                                @else
                                    <div class="badge bg-dark badge-sm text-white"> Not Update yet.</div>

                            @endif





                        </td>
                        </tr>



                </tbody>
                </table>

                <a href="{{url()->previous()}}" class="btn btn-primary text-white">Back</a>
            </div>
         </div>
        </div>
    </div>
</div>

@endsection
