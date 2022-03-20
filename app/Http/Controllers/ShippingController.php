<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $shippings = Shipping::all();
        return view('dashboard.shipping.index', compact('countries', 'shippings'));
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
        $status = Shipping::where([
            'country_id' => $request->country_id,
            'city_name' => $request->city_name,
        ])->exists();

        if($status){
            return back()->with('error','This country city already exsits');
        }else{
            Shipping::insert($request->except('_token') + [
                'created_at' => Carbon::now(),
            ]);
        }
        return back()->with('shipping', 'Add Successfully!.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shipping::find($id)->delete();
        return back()->with('delete_message', 'Delete Successfully!.');
    }
}
