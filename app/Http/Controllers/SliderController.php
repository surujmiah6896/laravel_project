<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       $sliders = Slider::all();
        return view('dashboard.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.create');
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
            'slider_caption' => 'required',
            'sale_off_price' => 'required|numeric',

         ]);


        // // //Profile Photo upload code start
        if ($request->hasFile('slider_photo')) {
            // if (auth()->user()->profile_photo != 'default_user_photo.jpg') {
            //     unlink(base_path('public/uploads/profile_photo/') . auth()->user()->profile_photo);
            // }
            //step-1: new profile photo name create(1.jpg)
            $new_name = "slider_photo-" . Str::random(5) . "." . $request->file('slider_photo')->getClientOriginalExtension();
            //step-2: new profile photo upload
            $save_link = base_path('public/uploads/slider_photo/') . $new_name;
            Image::make($request->file('slider_photo'))->resize(320, 360)->save($save_link);
            //step-3: new profile photo name update at database


        }

         Slider::insert([
            'slider_caption' => $request->slider_caption,
            'sale_off_price' => $request->sale_off_price,
            'created_by' => auth()->user()->id,
            'created_at' => Carbon::now(),
            'slider_photo' => $new_name,

         ]);

            return back()->with('create_massege','Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        // return $slider;
        return view('dashboard.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

        return view('dashboard.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //  $request->validate([
        //      ''
        //  ]);

        if($request->hasFile('slider_photo')){

            unlink(base_path('public/uploads/slider_photo/').Slider::find($slider->id)->slider_photo);

            $new_name = 'Slider_photo_up'.Str::random(5).'.'.$request->file('slider_photo')->getClientOriginalExtension();
            $save_link = base_path('public/uploads/slider_photo/').$new_name;
            Image::make($request->file('slider_photo'))->save($save_link);
        }

        Slider::find($slider->id)->update([
            'slider_caption' => $request->slider_caption,
            'sale_off_price' => $request->sale_off_price,
            'updated_by' => auth()->user()->id,
            'updated_at' => Carbon::now(),
            'slider_photo' => $new_name,
        ]);

        return back()->with('updated_massege', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        // Slider::find($slider->id)->delete();//this common roule in laravel
        unlink(base_path('public/uploads/slider_photo/').Slider::find($slider->id)->slider_photo);
         $slider->delete(); // this roule only for resourecefull Controller
        return back()->with('delete_message', 'Delete Successfully!');
    }
}
