<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   public function insertcart(Request $request){
       $request->validate([
            '*' => 'required',
       ]);

       //find this product is avalilable in database
       $is_exists = Cart::where([
                    'product_id' =>  $request->product_id,
                    'color_id' => $request->color_id,
                    'size_id' => $request->size_id,
                    'user_id' => $request->user_id,
                    ])->exists();
        //check product
        if($is_exists){
            //old product increment
            Cart::where([
                'product_id' =>  $request->product_id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'user_id' => $request->user_id,
            ])->increment('cart_amount', $request->cart_amount);
            $cart_amount_status = 0;
        }else{
            //new product insert
            Cart::insert([
                'product_id' =>  $request->product_id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'cart_amount' => $request->cart_amount,
                'user_id' => $request->user_id,
                'created_at' => Carbon::now(),
            ]);
            
            $cart_amount_status = 1;
        }

       return response()->json([
            'cart_amount_status' => $cart_amount_status,
       ]);
   }

   public function deletecart($id){

        Cart::find($id)->delete();
        return back()->with('delete_massege', 'Delete Successfully!');
   }

    public function deleteallcart($id)
    {
        // return $id;
        Cart::where('user_id',$id)->delete();
        return back()->with('delete_massege', 'Delete Successfully!');
    }

    //------------get city ----------------
    public function getcitylist(Request $request){
        $select_option = " <option value=''> -Select One- </option>";
      $cities =  Shipping::where('country_id', $request->country_id)->get();
      foreach($cities as $city){
            // echo $city->city_name;
            // echo $city->shipping_charge;
            $select_option .= "  <option value='$city->shipping_charge'>$city->city_name</option>";
      }
      echo $select_option;
    }

    //--------------set country city----------
    public function setcountrycity(Request $request){
        Session::put('s_country_id', $request->country_id);
        Session::put('s_city_name', $request->city_name);

    }
}
