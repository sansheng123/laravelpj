<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Item;
use App\Brand;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function mainfun($value=''){
        $categories=Category::All()->take(8);
         $subcategories=Subcategory::All();
         $items=Item::All();
         $brands =Brand::All();

    	return view('main',compact('categories','subcategories','items','brands'));
    }
     public function brandfun($id){
        $brand= Brand::find($id);
          $categories=Category::All();
         $subcategories=Subcategory::All();
    	return view('brand',compact('categories','subcategories','brand'));
    }
     public function itemdetailfun($id){
        $item = Item::find($id);
        $categories=Category::All();
         $subcategories=Subcategory::All();
    	return view('itemdetail',compact('categories','subcategories','item'));
    }
     public function loginfun($value=''){
          $categories=Category::All();
         $subcategories=Subcategory::All();
    	return view('login',compact('categories','subcategories'));
    }
     public function promotionfun($value=''){
    	return view('promotion');
    }
     public function registerfun($value=''){
           $categories=Category::All();
         $subcategories=Subcategory::All();
    	return view('register',compact('categories','subcategories'));
    }
     public function shoppingcartfun($value=''){
         $categories=Category::All();
         $subcategories=Subcategory::All();
         $items=Item::All();

        return view('shoppingcart',compact('categories','subcategories','items'));
    
    }
     public function subcategoryfun($value=''){
    	return view('subcategory');
    }

 //    public function brandfun($value=''){
		
		
	// 	return view('brand');
	// }
}
