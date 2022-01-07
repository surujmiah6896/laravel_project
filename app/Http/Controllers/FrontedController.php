<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;
use App\Models\Slider;

class FrontedController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $categories = catagory::all();
        return view('frontend.index', compact('sliders', 'categories'));
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
}
