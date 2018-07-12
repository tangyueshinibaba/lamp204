<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	//
	public function shoucanguser()
	{
		return $this->belongsToMany('App\Models\admin\user','shoucangs','shop_id','uid');
	}
    
    public function order_user()
	{
		return $this->belongsToMany('App\Models\admin\user','orders','pid','uid');
	}
}
