<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Shoppingjias extends Model
{
    //后台评价表和用户表关系
    public function shuyu()
    {
    	return $this->belongsTo('App\Models\admin\user','uid');
    }
}
