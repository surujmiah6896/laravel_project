<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\Country;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Product_Featured_Photos;
use App\Models\Shipping;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Image;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::latest()->get();
        return view('dashboard.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = catagory::all();
        // $subcategories = SubCategory::all();
        return view('dashboard.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->discounted_price == Null){
           echo $discounted_price = $request->regular_price;
        }else{
           echo $discounted_price = $request->discounted_price;
        }
        if($request->discounted_price > $request->regular_price){
            return back()->withErrors(['discounted_price_errors','Discount price not Applicable for Regular Price!']);
        }


        $request->validate([
            'product_name' => 'required',
            'regular_price' => 'required',
            'product_thumbnail_photo' => 'required',

        ]);


        if ($request->hasFile('product_thumbnail_photo')) {
            //new Name of Photo
            $new_name = "product_thumbnail_photo-" . Str::random(5) . "." . $request->file('product_thumbnail_photo')->getClientOriginalExtension();
            //new Location for save photo
            $new_link = base_path('public/uploads/product_photo/') . $new_name;
            //make photo and save
            Image::make($request->file('product_thumbnail_photo'))->resize(800, 800)->save($new_link);
        }



        // $request->except('_token');
        product::insert([
            'product_name' => $request->product_name,
            'regular_price' => $request->regular_price,
            'discounted_price' => $discounted_price,
            'slug' => Str::slug($request->product_name)."-".Str::random(5),
            'sku' => Str::random(5),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'weight' => $request->weight,
            'dimension' => $request->dimension,
            'materials' => $request->materials,
            'other_info' => $request->other_info,
            'product_thumbnail_photo' => $new_name,
            'created_by' => auth()->user()->id,
            'created_at' => Carbon::now(),

        ]);

            // Product::insert($request->except('_token')+[

            //     'slug' => $request->Str::random(5),
            //     'sku' => Str::slug($request->sku)."-".Str::random(5),
            //     'created_at' => Carbon::now(),
            //     'created_by' => auth()->user()->id,
            // ]);

        return back()->with('create_massege', 'Create Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getsubcategories(Request $request){
        $subcategories = SubCategory::where('category_id',$request->category_id)->get();
        if($subcategories->count()==0){
            $Str_to_send = "<option value=''>- No Data at Database -</option>";
        }else{
            $Str_to_send = "<option value=''>-Select One SubCategory-</option>";

        }
         foreach($subcategories as $subcategory){
            //  echo $subcategory->subcategory_name. $subcategory->id;
             $Str_to_send .= "<option value='$subcategory->id'>$subcategory->subcategory_name</option>" ;
         }
         echo $Str_to_send;
    }



    public function addfeaturedphotos($product_id){
        $product = Product::find($product_id);
        $product_featured_photos = Product_Featured_Photos::where('product_id',$product_id)->get();

        return view('dashboard.product.addfeaturedphotos',compact('product_id','product', 'product_featured_photos',));
    }


    public function addfeaturedphotospost(Request $request, $product_id){
        $status = true;
        foreach ($request->file('product_featured_photos') as $key => $product_featured_photo) {
            // echo $product_featured_photo->getClientOriginalExtension();
            if(!in_array($product_featured_photo->getClientOriginalExtension(),['jpg','png','webp'])){
                $status = false;
            }
        }

        if($status){
            foreach ($request->file('product_featured_photos') as $key => $product_featured_photo) {

                //photo upload code start
                $new_name = $product_id . "-" . Str::random(5) . "." . $product_featured_photo->getClientOriginalExtension();
                $save_link = base_path('public/uploads/product_featured_photos/') . $new_name;
                Image::make($product_featured_photo)->resize(270, 310)->save($save_link);
                //photo upload code end

                Product_Featured_Photos::insert([
                    'product_id' => $product_id,
                    'product_featured_photo_name' => $new_name,
                    'created_at' => Carbon::now(),

                ]);
            }
            return back()->with('product_featured_photos', 'Featured Photo Add Successfully!.');


        }else{
            return back()->with('file_format_error', 'There is one or many unsupported flie in your attachement!.');
        }
    }


    public function deletefeaturedphotos($deletefeaturedphotos_id){
        // return  $deletefeaturedphotos_id;
        unlink(base_path('public/uploads/product_featured_photos/').Product_Featured_Photos::find($deletefeaturedphotos_id)->product_featured_photo_name);
        Product_Featured_Photos::find($deletefeaturedphotos_id)->delete();
        return back()->with('delete_message','Deleted Successfully!.');
    }


    public function addinventory($product_id){
        $product = Product::find($product_id);
        $colors = Variation::all();
        $sizes = Size::all();
        $inventoreis = Inventory::where('product_id', $product_id)->get();
        return view('dashboard.product.addinventory', compact('product_id', 'inventoreis', 'product','colors','sizes'));
    }

    public function addinventorypost(Request $request, $product_id){
        //check new data available in database yes or no
      $isexists =  Inventory::where([
            'product_id' => $product_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
        ])->exists();

        //old data increment in database
        if($isexists){
            Inventory::where([
                'product_id' => $product_id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
            ])->increment('quantity',$request->quantity);
        }else{
            //new data store in database
            Inventory::insert([
                'product_id' => $product_id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'quantity' => $request->quantity,
                'created_at' => Carbon::now(),
            ]);
        }
        return back()->with('inventoryadd', 'Add Successfully!.');
    }

    public function shipping(){

    }

    public function addshipping(Request $request){


    }

}
