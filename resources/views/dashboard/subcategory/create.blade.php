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

                    @if (session('create_massege'))
                    <div class=" alert alert-success">
                        {{session('create_massege')}}
                    </div>
                    @endif


                    <form action="{{route('subcategory.store')}}" method="POST">

                        <div class="form-group">
                               <label> SubCategory Name</label>
                               <br>
                            <select id="mySelect2" name="category_id" class=" @error('category_id') is-invalid @enderror form-control">
                                <option value="">-Select One Category-</option>
                                @foreach ($allcategorys as $allcategory)
                                <option value="{{$allcategory->id}}">{{$allcategory->catagory_name."-".$allcategory->id}}</option>
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
                                   <input type="text" class=" @error('subcategory_name') is-invalid @enderror form-control" name="subcategory_name" placeholder="Enter SubCatagory Name">
                               @error('subcategory_name')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
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


