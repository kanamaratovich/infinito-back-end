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

    public function children()
    {
    	return $this->hasMany(static::class, 'parent_id','id');
    }

	public function projects()
	{
		return $this->hasMany(Project::class, 'id','category_id');
	}    
}
