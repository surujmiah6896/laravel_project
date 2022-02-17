<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
