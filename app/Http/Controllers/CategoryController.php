<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
    	return Category::where('parent_id', null)->with('subCategories')->get();
    	//use PagesController home
    }

    public function create(){
    	return Category::create([
    		'parent_id' => request('parent_id'),
    		'name' => request('name')
    	]);
    }

    public function wehave(){

    	$categories = request('categories');

    	return $categories;
    }

}
