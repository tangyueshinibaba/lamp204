<?php

namespace App\Models\host;

use Illuminate\Database\Eloquent\Model;

class Hostcurs extends Model
{
   /* //一对一关系
    public function userinfo()
    {
    	return $this->hasOne('App\Models\host\Products','id');
    }
     public function userinfo1()
    {
    	return $this->hasOne('App\Models\host\Orders','pid');
    }
    //购物车和商品表是一对多
    public function yiduiduo()
    {
    	return $this->hasMany('App\Models\host\Products','pid');
    }*/
    //购物车和用户是一对一关系
    public function userinfo()
    {
        return $this->hasOne('App\Models\host\User','uid');
    }
}

