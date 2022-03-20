<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\catagory;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Product_Featured_Photos;
use Illuminate\Http\Request;
use App\Models\Slider;

class FrontedController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $categories = catagory::all();
        $products = Product::latest()->get();
        Cart::where('user_id', auth()->id())->get();
        $carts = Cart::where('user_id',auth()->id())->get();
        return view('frontend.index', compact('sliders', 'categories', 'products', 'carts'));
    }

    // public function profile(){

    //     return view('dashboard.profile.index');
    // }

    public function shop(){

        return view('frontend.shop');
    }

    public function about_us(){
        return view('frontend.shop');
    }

    public function contact_us(){
        return view('frontend.shop');
    }

    public function shop_left_sidebar(){
        return view('frontend.shop_left_sidebar');
    }

    public function pruductdetails($slug){

        $product = Product::where('slug', $slug)->first();

        $product_featured_photos = Product_Featured_Photos::where('product_id', $product->id)->get();
        //this code query not same product in subcategory
        // $related_products = Product::where('subcategory_id', $product->subcategory_id)->where('id', '!=', $product->id)->get();
        // this code query not same pruduct and query latest and my count product
        $related_products = Product::where('subcategory_id', $product->subcategory_id)->where('id', '!=', $product->id)->latest()->take(4)->get();
        $inventoreis = Inventory::where('product_id', $product->id)->select('color_id')->groupBy('color_id')->get();
        $totalinventory = Inventory::where('product_id', $product->id)->sum('quantity');

        return view('frontend.pruduct_details',compact('product', 'related_products', 'totalinventory', 'product_featured_photos', 'inventoreis'));
    }


    public function getsizes(Request $request){
        // echo $request-> product_id;
        // echo $request->color_id;
        $strsize = "<option>- Select One -</option>";
      $sizes =  Inventory::where([
            'product_id' =>$request->product_id,
            'color_id' => $request->color_id,
        ])->get();
        foreach($sizes as $size){
          $strsize .= "<option value='$size->size_id'>".$size->relationtosize->size_name."</option>";
        }
        echo $strsize;
    }

    public function getproducts(Request $request){
      echo  Inventory::where([
            'product_id' => $request->product_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
        ])->first()->quantity;

    }
}
