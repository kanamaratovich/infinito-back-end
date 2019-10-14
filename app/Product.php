<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id' , 'id');
    }

    /*public function prices(){
    	return $this->hasMany(ProductPrice::class, 'product_id','id');
    }*/
}
