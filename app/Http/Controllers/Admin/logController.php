<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class logController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        if($request->session()->has('login'))
        {
            return redirect('/adminuser');
        }
        return view('/admin/log/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCheck(Request $request)
    {   
        //$rules = ['captcha' => 'required|captcha'];
        // $this->validate($request, [
        //     'captcha' => 'required|captcha'
        // ]);

        //dd($code);
         $user = new user;//dd($request -> input('uname', ''));
        //$info = $user->where('uname', $request->input('uname', ''))->paginate();
        $info = $user->where('uname', $request -> input('uname', ''))->get();
        //dd(count($info));
        //dd($info);
        //dd($info->psword);
        // $mod = new Model("users");
        // $pass = md5($_POST['pass']);
        // $sql = "select * from users where username='{$_POST['username']}' and pass='{$pass}'";
        // $list = $mod->query($sql);
        if(count($info)>0 && (Hash::check($request -> input('psword', ''), $info['0']->psword))){
            //获取登录者信息并放入到session中
            $request->session()->put('login', $request -> input('uname', ''));
            //跳转到后台首页
            return redirect('/adminuser');
            //header("Location:{$url}");
        }else{
            //$this->errinfo = "登录账号或密码错误！";
            return redirect('/adminuser');//
            return redirect('/adminlog'); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getLogout(Request $request)
    {
        //
        $request->session()->forget('login');
        return redirect('/admin/log');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getVerify()
    {
        //
        $verify = new \Verify();
        
        $verify->ttf='/common/msyh.ttf'; //验证码输出时的字体文件
        $verify->length=4;//验证码位数
        $verify->type=1;//验证码类型：1纯数字 2数字加小写字母  其他表示数字加大小写字母
        
        $verify->entry();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
