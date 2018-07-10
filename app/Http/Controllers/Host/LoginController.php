<?php

namespace App\Http\Controllers\host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('host.login.login');
        // echo 'aa';
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postDologin(Request $request)
    {
         
        //接受用户提交信息
        //$login = $request -> except('_token');
        $username = $request -> input('username');
        $password = $request -> input('password');
        //表单中的信息和数据信息做对比
        dump($username,$password);die;
       
    }
}
