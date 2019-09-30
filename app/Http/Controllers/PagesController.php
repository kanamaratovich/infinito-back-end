<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	$allCategories = app('App\Http\Controllers\CategoryController')->index();
		//call App\Http\Controllers\CategoryController index - getallcategories(with children)

    	$allProducts = \App\Product::all();

    	return 
    		[
    			'categories'=>$allCategories,
    			'products'=>$allProducts
    		];
    }
}
