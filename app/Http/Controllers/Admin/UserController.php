<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        $keywords = $request -> input('keywords', '');
        $user = new user;
        $info = $user->where('uname', 'like', '%'.$keywords.'%')->paginate(5);
        return view('/admin/user/user', ['info' => $info, 'keywords' => $keywords]);

        // $info->setPath('user');//  
        //    $num=$info->lastPage();  
        //    $next_page=$num-$info->currentPage() ==0 ? $num : $info->currentPage()+1 ;  
        //    $last_page=$info->currentPage()-1 <0 ? 1 : $info->currentPage()-1 ;  
        //    $info->next=$next_page;  
        //    $info->last=$last_page;  
        //    return view('/admin/user/user')->with('info',$info); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('/admin/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {   
        $this->validate($request, [
            'uname' => 'required|unique:users',
            ],[
            'uname.unique' => '用户名重复',   
            ]);

        $pic = '';
        if($request -> hasFile('profile')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('profile');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            //sdump($res);
            $pic = '/uploads/'.$dirname.'/'.$name;
       }
        $user = new user;
        $user -> uname = $request -> input('uname', '');
        $user -> psword = Hash::make($request -> input('psword', ''));
        $user -> name = $request -> input('name', '');
        $user -> pic = $pic;
        $user -> phone = $request -> input('phone', '');
        $user -> email = $request -> input('email', '');
        $user -> created_at = date('Y-m-d H:i:s',time());
        $user -> updated_at = date('Y-m-d H:i:s',time());
        $user -> save();
        return redirect('/adminuser');
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
        //
        $user = new user;
        $info = $user::find($id);
        return view('/admin/user/edit', ['info' => $info]);
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
        //
        $user = new user;
        $user = user::find($id);
        //dd($id);die;
        if($user -> uname != $request -> input('uname', '')){
            $this->validate($request, [
                'uname' => 'required|unique:users',
                ],[
                'uname.unique' => '用户名重复',   
                ]);
        }
        if($request -> hasFile('profile')){

            // 使用request 创建文件上传对象
            $profile = $request -> file('profile');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/'.$dirname,$name);
            //sdump($res);
            $pic = '/uploads/'.$dirname.'/'.$name;
       }else{
            $pic = $user -> pic;
       }
        $psword = '';
        if($request -> input('psword', '') == ''){
            $psword = $user->psword;
        }else{
            $psword = Hash::make($request -> input('psword', ''));
        }
        $user -> uname = $request -> input('uname', '');
        $user -> psword = $psword;
        $user -> name = $request -> input('name', '');
        $user -> pic = $pic;
        $user -> phone = $request -> input('phone', '');
        $user -> email = $request -> input('email', '');
        $user -> updated_at = date('Y-m-d H:i:s',time());
        $user -> save();
        return redirect('/admin/user');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        $user = new user;
        $user = user::find($id); 
        $user -> delete();
        return redirect('/admin/user');
    }
}
