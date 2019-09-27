<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	$allCategories = \App\Category::where('parent_id', null)->with('subCategories')->get();
    	$allProducts = \App\Product::all();

    	return 
    		[
    			'categories'=>$allCategories,
    			'products'=>$allProducts
    		];
    }
}
