<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('dashboard.coupon.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            // '*'=>'required',
            'coupon_name' => 'required|unique:coupons',
            'coupon_validity_date' => 'required',
            'coupon_type' => 'required',
            'coupon_amount' => 'required',
            'minimum_order' => 'required',
            'coupon_limit' => 'required',
        ]);

        Coupon::insert([
            'coupon_name' => $request->coupon_name,
            'coupon_validity_date' => $request->coupon_validity_date,
            'coupon_type' => $request->coupon_type,
            'coupon_amount' => $request->coupon_amount,
            'minimum_order' => $request->minimum_order,
            'coupon_limit' => $request->coupon_limit,
        ]);

        // return response()->json(["success"=>"Coupon Add Successfully!"]);
        return back()->with('success','Coupon Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
    }

    // =======check coupon========
    public function checkcoupon(Request $request){
        if(Coupon::where('coupon_name',$request->coupon_name)->exists()){
            $coupon_info = Coupon::where('coupon_name', $request->coupon_name)->first();
            // echo $coupon_info->coupon_validity_date;
            if(Carbon::today()<= $coupon_info->coupon_validity_date){
                // echo $coupon_info->minimum_order;
                // echo $request->sub_total;
                if($coupon_info->minimum_order > $request->sub_total){
                    Session::put('s_coupon_name',' ');
                    return response()->json([
                        "error" => "You have to order minimun". $coupon_info->minimum_order,
                    ]);
                }else{
                    if($coupon_info->coupon_limit == 0){
                        Session::put('s_coupon_name', '');
                        return response()->json([
                            "error" => "This Cuoupon Limit is Over!",
                        ]);
                    }else{
                        //add coupon in sess
                        Session::put('s_coupon_name', $request->coupon_name);

                         if($coupon_info->coupon_type == 'percentage'){
                            $grand_total = $request->sub_total - ($request->sub_total * ($coupon_info->coupon_amount / 100));
                         }else{
                             $grand_total = $request->sub_total-$coupon_info->coupon_amount;
                         }
                        return response()->json([
                            "grand_total" => $grand_total,
                            "coupon_type" => $coupon_info->coupon_type,
                            "coupon_amount" => $coupon_info->coupon_amount,
                        ]);
                    }
                }
            }else{
                Session::put('s_coupon_name', '');
                return response()->json([
                    "error" => "This Coupon Validity date was Over!",
                ]);
            }
        }else{
            Session::put('s_coupon_name', '');
             return response()->json([
                 "error" => "This Coupon does not Exists",
             ]);
        }
        // echo 'hi';
        // echo $coupon_info->coupon_name;
    }
}
