<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        //
        return view('backend.Subcategories.index',compact('subcategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        $categories = Category::all();

        return view('backend.Subcategories.create',compact('categories'));
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //dd($request);

        //Validation
        $request->validate([
           
            "name" =>'required',
            "category" =>'required'
           
        ]);

        //If include file,upload file
       


        //Data insert
            $subcategory = new Subcategory;
            $subcategory->name = $request->name;
            $subcategory->category_id = $request->category;
            $subcategory->save();


        //redirect
            return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {    $categories = Category::all();
        // $subcategories = Subcategory::all();
        return view('backend.Subcategories.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {

        $request->validate([
            
            "name" =>'required',
             "category" =>'required'
                  ]);

        //file upload,if data
         

        //data update
     
           $subcategory->name = $request->name;
           $subcategory->category_id = $request->category;
           
          
            $subcategory->save();

        //redirect
            return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
       
       $subcategory->delete();

          return redirect()->route('subcategories.index'); 
    }
}
