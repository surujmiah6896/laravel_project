<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function customerlogin(){
        return view('frontend.customer.login');
    }


    public function customerregister(Request $request){
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',

        ]);
       User::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->phone_number,
        'address' => $request->address,
        'role' => 'customer',
        'created_at' => Carbon::now(),
        //create not working role

       ]);
        //Sms Code Start
        //    function send_sms() {
            // $url = "http://bangladeshsms.com/smsapi";
            // $data = [
            //     "api_key" => "C20029775c3dd1be3a5ea5.32472784",
            //     "type" => "text/unicode",
            //     "contacts" => "$request->phone_number",
            //     "senderid" => "ACS INFO",
            //     "msg" => "Hello $request->name, your account created successfully in Goldfish eCommerce",
            // ];
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // $response = curl_exec($ch);
            // curl_close($ch);
        // echo $response;

        //sms code end

        //multi sms code start
            // $url = "http://bangladeshsms.com/smsapimany";
            // $data = [
            //     "api_key" => "{your api key}",
            //     "senderid" => "{sender id}",
            //     "messages" => json_encode([
            //         [
            //             "to" => "88017xxxxxxxx",
            //             "message" => "test sms content …"
            //         ],
            //         [
            //             "to" => "88018xxxxxxxx",
            //             "message" => "test sms content …"
            //         ]
            //     ])
            // ];
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // $response = curl_exec($ch);
            // curl_close($ch);
            // return $response;
        //multi sms code end



        return back()->with('create_massege', 'Create Successfully!');
    }

    public function customerdashboard(){
        return view('frontend.customer.dashboard');
    }

    public function customercart(){
        $carts = Cart::where('user_id', auth()->id())->get();
        return view('frontend.customer.cart',compact('carts'));
    }
}
