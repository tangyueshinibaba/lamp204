<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //加载到注册模板
        return view('host.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 用户注册
     */
    public function postStore(Request $request)
    {
        //接受用户提交信息
        $data = $request -> except('_token');
        //执行添加
        $users = new User;
        $users -> uname = $request -> input('uname');
        $users -> pass = Hash::make($request -> input('pass'));
        $users -> phone = $request -> input('phone');
        $users -> save();
        
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
        //从数据库中读取要修改的数据
        $data = User::find($id);
        return view('host.user.edit',['data' => $data]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 展示并修改个人信息
     */
    public function postUpdate(Request $request, $id)
    {
        // $data = $request -> all();
        //dump($request -> hasFile('pic'));die;
        $user = User::find($id);
        $user -> uname = $request -> input('uname');
        $user -> sex = $request -> input('sex');
        $user -> phone = $request -> input('phone');
        $user -> age = $request -> input('age');
        $user -> qq = $request -> input('qq');
        $user -> email = $request -> input('email');
        if($request -> hasFile('pic')){
            $user -> pic = $request -> file('pic');

            //var_dump($carousel -> img);die;
            $ext = $user -> pic ->getClientOriginalExtension();
            //var_dump($ext);die;
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            //$dirname = date('Ymd',time());
            $user -> pic -> move('./common/host/images/user',$name);
            //dump($res);
        }
        $user -> pic = $name;
        if ($user -> save()) {
            return redirect('/user/edit/'.$id);
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
