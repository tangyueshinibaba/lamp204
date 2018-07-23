<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\User;

class RepassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {

        return view('host.user.repass');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {   
        //接收表单数据
        $oldpass = $request -> input('oldpass');
        $newpass = $request -> input('newpass');
        $newpass1 = $request -> input('newpass_confirmation');
        $phone = $request -> input('phone');
        //从数据库取出要验证的手机号
        $res = User::where('id',session('id')) -> value('phone');
        //从数据库取出旧密码并匹配
        $res1 = User::where('id',session('id')) -> value('pass');
        $pwd = \Hash::check($oldpass,$res1);
        if ($pwd == false) {
            return back() -> with('error','原密码输入错误');
        }
        //判断并执行修改
        if ($newpass != $newpass1) {
            return back() -> with('error','新密码输入不一致');
        }
        //新密码长度限制
        if (strlen($newpass) < 6 || strlen($newpass) > 12 ) {
            return back() -> with('error','请输入6-12位密码位密码');
        }
        //手机号和数据库匹配
        if ($phone != $res) {
            return back() -> with('error','与绑定手机号不一致，请重新输入手机号');
        }
        if ($pwd == true && $phone == $res && $newpass == $newpass1) {
            //查询要修改的个人信息
            $user = User::where('id',session('id')) -> first();
            //密码加密，执行保存
            $user -> pass = \Hash::make($newpass);
            $user -> save();
            //清空session，重新登录
            session(['username'=>null]);
            return redirect('/host')-> with('success','密码修改成功,请重新登录');
        }
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

