<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded = [];


    public function parent()
    {
    	return $this->belongsTo(static::class, 'id' , 'parent_id');
    }

    public function childrenCategories()
    {
    	return $this->hasMany(static::class, 'parent_id','id');
    }

    public function subCategories()
    {
        return $this->hasMany(static::class, 'parent_id','id')->with('childrenCategories');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id','category_id');
    }    

    public static function productsByCategoryIds($childIds){

        return Product::whereIn('category_id', $childIds)->get();
    }
}
