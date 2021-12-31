<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategory.index',[
            'subcategorys' => SubCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcategorys = catagory::all();
        return view('subcategory.create',compact('allcategorys'));
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
            //this is all required.
            '*'=> 'required',
            // 'subcategory_name' => 'required|unique:sub_categories'
    ]);
        //Option-1
        SubCategory::insert([
            'category_id' =>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,
            'created_by'=>auth()->id(),
            'created_at'=>Carbon::now()
        ]);

        //Option-2
        // $subcategory = new SubCategory;
        // $subcategory ->category_id=$request->category_id;
        // $subcategory ->subcategory_name = $request->subcategory_name;
        // $subcategory ->created_by = auth()->id();
        // $subcategory ->created_at = Carbon::now();
        // $subcategory->save();
        //Note: When you use save then auto add day time in updated_at field.


        //Option -3
        // return $request-> except('_token');
        //Note: except method is avoid filed data from request method.
        //Note: except method is not add created_at this filed add with concat(+)
        // SubCategory::insert($request->except('_token'));
        // SubCategory::insert($request->except('_token')+[
            //     'created_at' => Carbon::now()
            // ]);


            //Option -4
            //this option is auto create a created_at filed .this method work done when some filed fillable
            // SubCategory::create($request->except('_token'));


        return back()->with('create_massege','Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
