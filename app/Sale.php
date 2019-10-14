<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
	protected $guarded = [];
	
    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id' , 'id');
    }
}
