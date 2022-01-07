<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *w
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_category = catagory::count();
        $total_user = User::count();
        return view('dashboard.home',compact('total_category','total_user'));
    }
    public function dashboard_master()
    {
        return view('layouts.dashboard_master');
    }
    public function profile()
    {
        return view('dashboard.profile.index');
    }
    public function update_profile(Request $request)
    {
         $request->validate([
        'name'=>'required',
        'phone_number'=>'digits:11|nullable'
    ]);

        User::find(auth()->id())->update([
            'name' => $request->name,
            'email' =>$request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);
        // //Profile Photo upload code start
        if($request->hasFile('profile_photo')){
            if(auth()->user()->profile_photo != 'default_user_photo.jpg'){
                unlink(base_path('public/uploads/profile_photo/').auth()->user()->profile_photo);
            }
            //step-1: new profile photo name create(1.jpg)
            $new_name = auth()->id()."-".Str::random(5).".".$request->file('profile_photo')->getClientOriginalExtension();
            //step-2: new profile photo upload
            $save_link = base_path('public/uploads/profile_photo/').$new_name;
            Image::make($request->file('profile_photo'))->resize(300,300)->text('Goldfish', 10,10)->save($save_link);
            //step-3: new profile photo name update at database
            User::find(auth()->id())->update([
                'profile_photo' => $new_name,
            ]);
        }
            //  return back()->with('change_name','Update Successfully!');

        // //Profile Photo upload code end


    //     //Cover Photo upload code start
        if ($request->hasFile('cover_photo')) {
            if (auth()->user()->cover_photo != 'default_cover_photo.jpg') {
                unlink(base_path('public/uploads/cover_photo/') . auth()->user()->cover_photo);
            }
            //step-1: new profile photo name create(1.jpg)
            $new_names = auth()->id() . "-" . Str::random(5) . "." . $request->file('cover_photo')->getClientOriginalExtension();
            //step-2: new profile photo upload
            $save_links = base_path('public/uploads/cover_photo/') . $new_names;
            Image::make($request->file('cover_photo'))->resize(1600, 451)->text('Goldfish', 10, 10)->save($save_links);
            //step-3: new profile photo name update at database
            User::find(auth()->id())->update([
                'cover_photo' => $new_names,
            ]);
        }
        return back()->with('change_name', 'Update Successfully!');

    //    //Cover Photo upload code end



    }
    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'=> 'required|confirmed|alpha_num|min:9',
            'password_confirmation'=> 'required',
        ]);
        //
        // if($request->current_password == $request->password){
        //     return back()-> withErrors([
        //         'current_password'=>''
        //     ]);
        // }
            if(Hash::check($request->current_password,auth()->user()->password)){
                if($request->current_password == $request->password){
                   return back()-> withErrors([
                'current_store'=>'Your Password is Already Store. Please Enter New Password.'
            ]);
                }
                User::find(auth()->id())->update([
                    'password' => bcrypt($request->password)
                ]);
                return back()->with('password_change_message','Password Change Successfully!');
            }
            else{
                return back()->withErrors(['current_password_error' => 'your current password is wrong!']);
            }
    }
}
