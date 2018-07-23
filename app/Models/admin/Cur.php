<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Cur extends Model
{
    //指定表名
    public $table='hostcurs';
    //购物车和user表是一对一关系
    public function yiduiyi()
    {
    	return $this->belongsTo('App\Models\admin\user','uid');
    }
}
