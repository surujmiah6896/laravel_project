@extends('layouts.dashboard_master');

@section('dashboard_bar')
Add SubCategory
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create SubCategory</h4>
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


                    <form action="{{route('subcategory.update',$SubCategories->id)}}" method="POST">
                         @method('PATCH')
                        <div class="form-group ">
                        <select id="mySelect2" class="form-control" name="category_id">
                                 {{-- <option value="">{{App\Models\catagory::withTrashed()->find($id)->catagory_name}}</option> --}}
                               @foreach ($allcategorys as $allcategory)
                                <option value="{{$allcategory->id}}"@if ($allcategory->id == $SubCategories->category_id)
                                    selected
                                @endif>
                                {{$allcategory->catagory_name}}</option>
                                @endforeach

                            </select>
                             @error('category_id')
                               <span class="text-danger">{{$message}}</span>
                               @enderror

                        </div>
                        <div class="form-group">
                               <label> SubCategory Name</label>
                               <br>
                               <div class="form-group">
                                   <input type="text" class=" @error('subcategory_name') is-invalid @enderror form-control" name="subcategory_name" value="{{$SubCategories->subcategory_name}}">
                               @error('subcategory_name')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                               </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-rounded">Update</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

 <script>
$('#mySelect2').select2({
  selectOnClose: true
});

 </script>
@endsection

