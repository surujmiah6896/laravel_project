@extends('layouts.dashboard_master');

@section('dashboard_bar')
Variation Manager
@endsection

@section('content')

<div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            Add Color
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

                            <form action="{{route('variation.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-black">Color Name</label>
                                    <input type="text" class="form-control" name="color_name" placeholder="Enter Color Name">
                                </div>
                                <div class="form-group">
                                    <label class="text-black">Color Code</label>
                                    <input type="color" class="col-3 form-control" name="color_code">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-info" type="submit">Add Color</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        List Color
                    </div>
                    <div class="card-body">
                            @if (session('delete_message'))
                                <div class="alert alert-danger">{{session('delete_message')}}</div>
                            @endif
                   <table class="table table-bordered">
                       <thead class="thead-inverse|thead-default">
                           <tr>
                               <th>NO</th>
                               <th>Color Name</th>
                               <th>Color Code</th>
                               <th>Action</th>
                           </tr>
                           </thead>
                           <tbody>
                               @foreach ($colors as $color)
                                {{$color->id}}
                               <tr>
                                   <td>{{$loop->index+1}}</td>
                                   <td>{{$color->color_name}}</td>
                                   <td><span class="badge" style="background-color: {{$color->color_code}} "> &nbsp;</span></td>
                                   <td>
                                        <form action="{{route('variation.destroy',$color->id)}}" method="POST">
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
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Add Size
                    </div>
                    <div class="card-body">
                        @if (session('success_size'))
                            <div class="alert alert-success">{{session('success_size')}}</div>
                        @endif

                        <!-- custom validation error message show -->
                         @error('size')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                        @enderror



                        <form action="{{route('add.size')}}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label class="text-black">Size Name</label>
                                <input type="text" class="form-control" name="size_name" placeholder="Enter Size">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-info" type="submit">Add Size</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            List Size
                        </div>
                        <div class="card-body">
                            @if (session('delete_messages'))
                                <div class="alert alert-danger">{{session('delete_messages')}}</div>
                            @endif
                    <table class="table table-bordered">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>NO</th>
                                <th>Size Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($sizes as $size)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$size->size_name}}</td>
                                    <td><a href="{{route('delete.size',$size->id)}}" class="btn btn-sm btn-danger">Delete</a></tr>
                                @endforeach

                            </tbody>
                    </table>


                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>


@endsection



