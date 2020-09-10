<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
    	'voucherno','orderdate','status','note','total','user_id'
    ];
    public function items($value='')
    {
    	return $this->belongsToMany('App\Item','orderdetail')
    				->withPivot('qty')
    				->withTimestamps();
    }
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
