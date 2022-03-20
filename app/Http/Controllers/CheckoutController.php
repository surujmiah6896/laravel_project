<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout(){
        $sub_total= 0;
        //---------get subtotal form carts table---------------
        $carts = Cart::where('user_id',auth()->user()->id)->get();
        foreach($carts as $cart){
            $sub_total += $cart->relationToproduct->discounted_price * $cart->cart_amount;
        }
        // echo $sub_total;
        //------------get shipping charge------------------
       $shipping_charge =  Shipping::where([
            'country_id' => Session::get('s_country_id'),
            'city_name' => Session::get('s_city_name'),
        ])->first()->shipping_charge;
        //---------coupon yes or no--------------------
        if(Session::get('s_coupon_name')){
            // echo Session::get('s_coupon_name');
            $coupon_info = Coupon::where('coupon_name', Session::get('s_coupon_name'))->first();
            // echo $coupon_info->coupon_amount;
            // echo $coupon_info->coupon_limit;
            // echo $coupon_info->minimum_order;
            // echo $coupon_info->coupon_type;

            if ($coupon_info->coupon_type == 'percentage') {
                $after_copun_total = $sub_total - ($sub_total * ($coupon_info->coupon_amount / 100));
            } else {
                $after_copun_total = $sub_total - $coupon_info->coupon_amount;
            }
        }else{
            $after_copun_total = $sub_total;
        }
        $grand_total = $after_copun_total + $shipping_charge;
    //   $s_coupon_name =  Session::get('s_coupon_name');

        return view('frontend.customer.checkout', compact('sub_total', 'shipping_charge', 'after_copun_total', 'grand_total'));
    }
}
