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
}
