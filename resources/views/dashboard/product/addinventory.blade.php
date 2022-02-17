@extends('layouts.dashboard_master');

@section('dashboard_bar')
Add Quantity
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Product - {{$product->product_name}}</h4>
                </div>
                <div class="card-body">

                        {{-- @error('catagory_name')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                        @enderror --}}

                    @if (session('inventoryadd'))
                    <div class=" alert alert-success">
                        {{session('inventoryadd')}}
                    </div>
                    @endif


                    @if (session('file_format_error'))
                    <div class=" alert alert-danger">
                        {{session('file_format_error')}}
                    </div>
                    @endif

                    @if (session('delete_message'))
                    <div class="alert alert-danger">
                        {{session('delete_message')}}
                    </div>
                @endif

                    <form action="{{route('add.inventory.post',$product_id)}}" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <!--left colume-->
                            <div class="col-12">
                                 <div class="form-group">
                                     <label class="text-black" for="">Color</label>
                                     @foreach ($colors as $color)

                                     <div class="form-check">
                                         <input type="radio" class="form-check-input" name="color_id" value="{{$color->id}}" id="flexRadioDefault-{{$color->id}}">
                                            <label class="form-check-lable" for="flexRadioDefault-{{$color->id}}">
                                                {{$color->color_name}} <span class="badge badge-sm" style="background-color:{{$color->color_code}}">  &nbsp;</span>
                                            </label>
                                     </div>
                                     @endforeach
                                </div>
                            </div>

                             <div class="col-12">
                                 <div class="form-group">
                                     <label class="text-black" for=""> Size</label>
                                     <select name="size_id" id="" class="form-control">
                                        <option value="">- Select one -</option>
                                        @foreach ($sizes as $size)
                                        <option value="{{$size->id}}">{{$size->size_name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>

                            <div class="col-12">
                                 <div class="form-group">
                                     <label class="text-black" for=""> Quantity</label>
                                     <input type="number" class="form-control" name="quantity">
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-rounded">Add Inventory</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Add Inventory - {{$product->product_name}}</h4>
                    <span class="badge badge-dark">Total Variation: {{$inventoreis->count()}}</span>
                </div>
                <div class="card-body">
                    <table class="table bordered">
                        <thead >
                            <tr>
                                <th>No</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Maket Value</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_market_value = 0;
                                @endphp
                                @foreach ($inventoreis as $inventory)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$inventory->relationTocolor->color_name}}
                                        <span class="badge badge-sm " style="background-color: {{$inventory->relationTocolor->color_code}}">   </span>
                                    </td>
                                    <td>{{$inventory->relationTosize->size_name}}</td>
                                    <td>{{$inventory->quantity}}</td>
                                    @php
                                    $total_market_value += ($product->discounted_price * $inventory->quantity);
                                    @endphp
                                    <td>{{$product->discounted_price * $inventory->quantity}}</td>
                                    <td><a class="btn btn-sm btn-danger" href="">Delete</a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <b>Total Amount:</b>
                                    </td>
                                    <td><b>{{$inventoreis->sum('quantity')}}</b></td>
                                    <td><b>{{$total_market_value}}</b></td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


