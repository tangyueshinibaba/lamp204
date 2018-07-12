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
        $res = $request -> all();
        $username = $request -> input('username');
        $password = $request -> input('password');
        //判断用户是否存在
        $user = User::where('uname',$username) -> first();
        //dump($user);die;
        //从数据库取出密码
        $res1 = User::where('uname',$username) -> value('pass');
        $res2 = User::where('uname',$username) -> value('id');
        //解密并判断是否相同
        $pwd = \Hash::check($password,$res1);
        if ( $user && $pwd == true) {
             session(['username' => $res['username'],'id' => $res2]);
             return redirect('/host');
        } else {
             return  back() -> with('error','用户名或密码不正确');
        }   
    }
    public function getLogout()
    {
        //清空session
        session(['username'=>null]);
        return redirect("/host");
    }
}
