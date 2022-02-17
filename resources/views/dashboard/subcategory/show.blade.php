@extends('layouts.dashboard_master')

@section('dashboard_bar')
SubCalegory info
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">
         <div class="card">
               <div class="card-header text-white bg-primary">
                <div class="col-md-12">
                    <h4 class="card-title text-white">SubCategory</h4>
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
                           <td scope='row'>SubCategory Name</td>
                           <td> {{$subCategories->subcategory_name}}</td>
                        </tr>
                        <tr>
                           <td scope='row'>Create By</td>
                           <td> {{App\Models\User::find($subCategories->created_by)->name}}</td>
                        </tr>
                        <tr>
                           <td scope='row'> Create At </td>
                           <td>{{$subCategories->created_at}}

                                    @if ($subCategories->created_at->diffinseconds()<60)
                                    <div class="badge bg-dark badge-sm text-white">Just Now</div>
                                    @else
                                    <div class="badge bg-dark badge-sm text-white">{{$subCategories->created_at->diffforhumans()}}</div>
                                    @endif

                        </td>

                        <tr>
                           <td scope='row'>Update By</td>
                           <td>
                               @if ($subCategories->updated_by)
                                    {{App\Models\User::find($subCategories->updated_by)->name}}
                                    @else
                                    <p>No Update</p>
                               @endif
                               </td>
                        </tr>

                        </tr>
                        <tr>
                           <td scope='row'> Lat Update At </td>
                            <td>@if ($subCategories->updated_at)
                                    @if ($subCategories->updated_at->diffinseconds()<60)
                                        <div class="badge bg-dark badge-sm text-white">Update Just Now</div>
                                    @else
                                        <div class="badge bg-dark badge-sm text-white">{{$subCategories->updated_at->diffforhumans()}}</div>
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


@endsection

