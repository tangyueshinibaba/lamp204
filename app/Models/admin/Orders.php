<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    //属于关系
    public function user()
    {
    	return $this->belongsTo('App\Models\admin\user','uid');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\admin\Products','pid');
    }
}
