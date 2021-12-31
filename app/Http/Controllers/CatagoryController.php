<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $deleted_categorys = catagory::onlyTrashed()->get();
        $catagorys = catagory::all();
        return view('catagory.index',compact('catagorys', 'deleted_categorys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catagory.create');

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
            'catagory_name'=>'required|unique:catagories'
        ],[
            'catagory_name.required' =>'your custom comments'//custom error genaret
        ]);
       catagory::insert([
            'catagory_name'=> $request->catagory_name,
            'created_by'=> auth()->id(),
            'created_at'=> Carbon::now(),
            // 'created_at'=> Carbon::now()->addHours(6),//time add for bd time other wayz confi->app->set time for app on your contry
       ]);
       return back()->with('create_massege','Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
    {
        // return view('catagory.show',compact('catagory'));
        // return view('catagory.show');
        //    return Crypt::decrypt($catagory->id);
        // return $catagory;
        return view('catagory.show',compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(catagory $catagory)
    {
        return view('catagory.edit',compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catagory $catagory)
    {
        $request->validate([
            'catagory_name' => 'required|unique:catagories,catagory_name,'.$catagory->id
        ], [
            'catagory_name.required' => 'your custom comments' //custom error genaret
        ]);

        //Update Option 1
       $catagory->update([
         'catagory_name'=> $request->catagory_name,
         'updated_by'=> auth()->id(),
        ]);

        //Update Option 2
        //  $catagory->catagory_name = $request->catagory_name;
        //  $catagory->save();

         return back()->with('update_message','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagory $catagory)
    {   // this code for custom controller and custom model
        // $id = $catagory->id;
        // catagory::find($id)->delete();

        // this code for only Resourcefull Controller.
        $catagory->delete();
        return back()->with('delete_message','Delete Successfully!');
    }

    public function restore($id){
        catagory::onlyTrashed()->where('id',$id)->restore();
        return back()->with('restore_massege','Restore Successfully!');
    }
    public function forcedelete($id){
        catagory::onlyTrashed()->where('id', $id)->forceDelete();
        SubCategory::where('category_id', $id)->forcedelete();
        return back()->with('parmanent_delete_massege','Parmanent Delete Successfully!');
    }
}
