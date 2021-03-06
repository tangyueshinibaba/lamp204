<?php

namespace App\Models\host;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $table = "hostusers";


    //一对一关系
    public function userinfo()
    {
    	return $this->hasOne('App\Models\host\Hostcurs','uid');
    }
    public function shoucang()
    {
         return $this->belongsToMany('App\Models\admin\Products','shoucangs','uid','shop_id');
    }

    public function order_product()
    {
         return $this->belongsToMany('App\Models\admin\Products','orders','uid','pid');
    }

    public function userorder()
    {
    	return $this->hasMany('App\Models\admin\Orders','uid');
    }
}
