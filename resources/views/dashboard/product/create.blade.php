@extends('layouts.dashboard_master');

@section('dashboard_bar')
Products
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h4 class="card-title text-white">Create Product</h4>
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


                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <!--left colume-->
                            <div class="col-4">
                                <div class="form-group">
                               <label> Product Name</label>
                               <br>
                               <input type="text" value="{{old('product_name')}}" class=" @error('product_name') is-invalid @enderror form-control" name="product_name" placeholder="Enter Product Name">
                               @error('product_name')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>


                                <div class="form-group">
                               <label> Regular Price</label>
                               <br>
                               <input type="number" value="{{old('regular_price')}}" class=" @error('regular_price') is-invalid @enderror form-control" name="regular_price" placeholder="Enter Regular Price">
                               @error('discounted_price_errors')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>


                                <div class="form-group">
                               <label> Discounted Price</label>
                               <br>
                               <input type="number" value="{{old('discounted_price')}}" class=" @error('discounted_price') is-invalid @enderror form-control" name="discounted_price" placeholder="Enter Discounted Price">
                               @error('discounted_price')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>

                                  {{-- <div class="form-group">
                               <label> Discounted Price</label>
                               <br>
                               <input type="number" class=" @error('discounted_price') is-invalid @enderror form-control" name="discounted_price" placeholder="Enter Sale off Price">
                               @error('discounted_price')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div> --}}


                                 <div class="form-group">
                                    <label>Product Thumbnail Photo</label>
                                     <input type="file" value="{{old('product_thumbnail_photo')}}" name="product_thumbnail_photo" class="@error('product_thumbnail_photo') is-invalid @enderror form-control">

                                     @error('product_thumbnail_photo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>

                            </div>

                            <!--Center colume-->
                            <div class="col-4">
                             <div class="form-group">
                               <label>Category Name</label>
                               <br>
                                <select id="category_dropdown" name="category_id" class=" @error('category_id') is-invalid @enderror form-control">
                                <option value="">-Select One Category-</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->catagory_name}}</option>

                                @endforeach

                                {{-- @foreach ($allcategorys as $allcategory)
                                <option value="{{$allcategory->id}}">{{$allcategory->catagory_name."-".$allcategory->id}}</option>
                                @endforeach --}}

                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                 </div>
                                <div class="form-group">
                                    <label>SubCategory Name</label>
                                    <br>
                                <select id="subcategory_dropdown" name="subcategory_id" class=" @error('subcategory_id') is-invalid @enderror form-control">
                                    <option value="">-No Data Yet!-</option>




                                </select>
                                    @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                <label> Weight</label>
                                <br>
                                <input type="number"  value= "{{old('weight')}}" class=" @error('weight') is-invalid @enderror form-control" name="weight" placeholder="Enter Product Weight">
                                @error('weight')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>




                            </div>

                            <!--Right colume-->
                            <div class="col-4">
                             <div class="form-group">
                               <label> Dimensions</label>
                               <br>
                               <input type="text" value= "{{old('dimension')}}" class=" @error('dimension') is-invalid @enderror form-control" name="dimension" placeholder="Enter Product Dimension">
                               @error('dimension')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                             </div>


                                <div class="form-group">
                               <label> Materials</label>
                               <br>
                               <input type="text" value= "{{old('materials')}}" class=" @error('materials') is-invalid @enderror form-control" name="materials" placeholder="Enter materials">
                               @error('materials')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>

                                <div class="form-group">
                               <label> Others Info</label>
                               <br>
                               <input type="text" value= "{{old('other_info')}}" class=" @error('other_info') is-invalid @enderror form-control" name="other_info" placeholder="Enter Others info">
                               @error('other_info')
                               <span class="text-danger">{{$message}}</span>
                               @enderror
                                </div>


                            </div>
                             <!--for description colume-->
                            <div class="col-12">
                                <div class="form-group">
                               <label>Short Description</label>
                               <br>
                                <textarea type="text" value= "{{old('short_description')}}" name="short_description" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                               <label>Long Description</label>
                               <br>
                                <textarea id="long_descreiption" type="text" value= "{{old('long_description')}}" name="long_description" class="form-control" rows="5"></textarea>
                                </div>
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


@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('#category_dropdown').change(function(){
            var category_id =  $(this).val();
            // alert(category_id);

            //ajax start
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //custom ajax code start here
            $.ajax({
                type:'POST',
                // this is only url
                // url:'/get/subcategories',
                // this is router url
                url: '{{route('get.subcategories')}}',

                data:{category_id:category_id,},

                success: function(data){
                    // alert(data);
                    $('#subcategory_dropdown').html(data);
                },
            });
            //ajax end
        })
         //summernote
            $('#long_descreiption').summernote();

    })
</script>
@endsection



