<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

use Eastwest\Json\Facades\Json;

class CategoryController extends Controller
{
    public function index(){
    	return Category::where('parent_id', null)->with('subCategories')->get();
    	//use PagesController home
    }

    public function create(Request $request){
    	return Category::create([
    		'parent_id' => $request->parent_id,
    		'name' => $request->name
    	]);
    }

    public function wehave(){ 

            $json = '[
    {
        "name" : "Кошки",
        "parent_id" : null,
        "sub_categories":[{"name":"new subCategory","children_categories":[]},{"name" : "atherSub","children_categories":[]}]
        
    },
    {
        "parent_id": null,
        "name" : "Собаки",
        "sub_categories" : []
    },
    {
        "parent_id": null,
        "name": "Рыбы",
        "sub_categories" : []
    }
]';

            $categories = json_decode($json);

            foreach($categories as $newCategory)
            {

                $category = $this->create(new Request(array(
                    'name' => $newCategory->name,
                    'parent_id' => $newCategory->parent_id
                )));

                $subCategories = $newCategory->sub_categories;

                if(count($subCategories)>0)
                {
                    foreach ($subCategories as $newSubCategory) 
                    {

                        $subCategory = $this->create(new Request(array(
                            'name' => $newSubCategory->name,
                            'parent_id' => $category->id
                        )));

                        $childrenCategories = $newSubCategory->children_categories;

                        if(count($childrenCategories)>0)
                        {
                            foreach ($childrenCategories as $newChildrenCategory) 
                            {
                                $this->create(new Request(array(
                                    'name' => $newChildrenCategory->name,
                                    'parent_id' => $subCategory->id
                                )));
                            }
                        }                        
                    }
                }
            }

            return "done";
    }

}
