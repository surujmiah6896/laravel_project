@extends('layouts.dashboard_master');

@section('dashboard_bar')
Shipping Manager
@endsection

@section('content')

<div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            Add Shipping
                        </div>
                        <div class="card-body">
                            @if (session('shipping'))
                                <div class="alert alert-success">{{session('shipping')}}</div>
                            @endif

                            <!-- custom validation error message show -->
                                @error('color_name')
                                    <div class="alert alert-danger">
                                    {{$message}}
                                    </div>
                                @enderror

                            <form action="{{route('shipping.store')}}" method="POST">
                                @csrf
                                <div class="form-group" >
                                    <label class="text-black">Country Name</label>
                                    <select name="country_id" id="country_name"  class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}} ({{$country->code}})</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-black">City Name</label>
                                    <input type="text" class=" form-control" name="city_name">
                                </div>
                                <div class="form-group">
                                    <label class="text-black">Shipping Charge</label>
                                    <input type="number" class=" form-control" name="shipping_charge">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-info" type="submit">Add Color</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        List Shipping
                    </div>
                    <div class="card-body">
                            @if (session('delete_message'))
                                <div class="alert alert-danger">{{session('delete_message')}}</div>
                            @endif
                   <table class="table table-bordered">
                       <thead class="thead-inverse|thead-default">
                           <tr>
                               <th>NO</th>
                               <th>Country Name</th>
                               <th>City Name</th>
                               <th>Shipping Charge</th>
                               <th>Action</th>
                           </tr>
                           </thead>
                           <tbody>
                               @foreach ($shippings as $shipping)
                                {{-- {{$shipping}} --}}
                               <tr>
                                   <td>{{$loop->index+1}}</td>
                                   <td>{{$shipping->relationTocountry->name}}</td>
                                   <td>{{$shipping->city_name}}</td>
                                   <td>{{$shipping->shipping_charge}}</td>

                                   <td>
                                        <form action="{{route('shipping.destroy',$shipping->id)}}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-sm btn-danger" href="bg-info">Delete</button>
                                        </form>
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


    </div>
</div>

@endsection

@section('script')
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

 <script>
$('#country_name').select2({
  selectOnClose: true
});

// $(".js-example-placeholder-single").select2({
//     placeholder: "Select a state",
//     allowClear: true
// });
 </script>
@endsection





