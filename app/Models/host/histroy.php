<?php

namespace App\Models\Host;

use Illuminate\Database\Eloquent\Model;

class histroy extends Model
{
    //历史表和商品表属于关系
    public function shuyu()
    {
    	return $this->belongsTo('App\Models\Host\Products','pid');
    }
}
