<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	//
	public function shoucanguser()
	{
		return $this->belongsToMany('App\Models\host\user','shoucangs','shop_id','uid');
	}
    
    public function order_user()
	{
		return $this->belongsToMany('App\Models\host\user','orders','pid','uid');
	}
}
