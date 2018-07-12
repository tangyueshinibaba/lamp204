<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
<<<<<<< HEAD
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
=======
    //
    
}
>>>>>>> origin/zsg
