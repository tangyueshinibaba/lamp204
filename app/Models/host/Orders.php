<?php

namespace App\Models\host;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //商品属于用户
    public function shuyu()
    {
    	return $this->belongsTo('App\Models\User','uid');
    }
    //商品和评价表属于1:1
    public function yiduiyi()
    {
    	return $this->hasOne('App\Models\host\Shoppingjias','did');
    }
}
