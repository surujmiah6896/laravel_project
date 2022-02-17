<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $colors = Variation::all();
        $sizes = Size::all();
        return view('dashboard.variation.index', compact('colors', 'sizes'));
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
            'color_name'=> 'required|unique:variations'
        ], [
            'color_name.required' => 'your size already store!.' //custom error genaret
        ]);
       Variation::insert([
        'color_name' => $request->color_name,
        'color_code' => $request->color_code,
        'created_at' => Carbon::now(),
       ]);

       return back()->with('success','Add Successfully!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function show(Variation $variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function edit(Variation $variation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variation $variation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variation $variation)
    {
         $variation->delete();
         return back()->with('delete_message', 'Size Delete Susseccfully!.');
    }

    public function addsize(Request $request){

    //     $request->validate([
    //         'size'=> 'required|unique:sizes',
    //     ],
    //     [
    //         'size.required|unique' => 'your size already store!.' ,//custom error genaret
    //     ]
    // );

        Size::insert($request->except('_token')+[
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success_size','Size Add Successfully!.');
    }

    public function deletesize($id){
        Size::find($id)->delete();
        return back()->with('delete_messages','Size Delete Susseccfully!.');
    }
}
