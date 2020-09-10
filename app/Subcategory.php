<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name','category_id'
    ];

     public function categories($value='')
    {
    	return $this->belongsTo('App\Category');
    }

      public function items($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
