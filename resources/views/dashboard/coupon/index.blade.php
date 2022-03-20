@extends('layouts.dashboard_master');

@section('dashboard_bar')
Coupon Manager
@endsection

@section('content')

<div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            Add Coupon
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif

                            <!-- custom validation error message show -->
                                @error('color_name')
                                    <div class="alert alert-danger">
                                    {{$message}}
                                    </div>
                                @enderror

                            <form action="{{route('coupon.store')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="text-black">Coupon Name</label>
                                    <input type="text" class=" form-control" name="coupon_name" placeholder="Enter Coupon Name">
                                    @error('coupon_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-black">Coupon Validity Date</label>
                                    <input type="date" class=" form-control" name="coupon_validity_date" placeholder="Enter Coupon Date">
                                    @error('coupon_validity_date')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="text-black">Coupon Type</label>
                                   <select name="coupon_type" class="form-control">
                                        <option value="flat">Flat Discount</option>
                                        <option value="percentage">Percentage Discount</option>
                                   </select>
                                    @error('coupon_type')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="text-black">Coupon Amount</label>
                                    <input type="number" class=" form-control" name="coupon_amount"  placeholder="Enter Coupon Amount">
                                    @error('coupon_amount')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="text-black">Minimum Order</label>
                                    <input type="number" class=" form-control" name="minimum_order"  placeholder="Enter Coupon Amount">
                                    @error('minimum_order')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="text-black">Coupon Limit</label>
                                    <input type="number" class=" form-control" name="coupon_limit" placeholder="Enter Coupon Limit">
                                    @error('coupon_limit')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
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
                        List Coupon
                    </div>
                    <div class="card-body">
                            @if (session('delete_message'))
                                <div class="alert alert-danger">{{session('delete_message')}}</div>
                            @endif
                   <table class="table table-bordered">
                       <thead class="thead-inverse|thead-default">
                           <tr>
                               <th>NO</th>
                               <th>Coupon Name</th>
                               <th>Coupon Validity Date</th>
                               <th>Coupon Type</th>
                               <th>Coupon Amount</th>
                               <th>Minimum Order</th>
                               <th>Coupon Limit</th>
                               <th>Action</th>
                           </tr>
                           </thead>
                           <tbody>
                               @foreach ($coupons as $coupon)
                                {{-- {{$coupon}} --}}
                               <tr>
                                   <td>{{$loop->index+1}}</td>
                                   <td>{{$coupon->coupon_name}}</td>
                                   <td>{{$coupon->coupon_validity_date}}</td>
                                   <td>{{$coupon->coupon_type}}</td>
                                   <td>{{$coupon->coupon_amount}}</td>
                                   <td>{{$coupon->minimum_order}}</td>
                                   <td>{{$coupon->coupon_limit}}</td>

                                   <td>
                                        <form action="{{route('coupon.destroy',$coupon->id)}}" method="POST">
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





