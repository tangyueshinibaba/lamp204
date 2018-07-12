<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\manage;

class manageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $manage = new manage;
        $info = $manage::find(1);//dd($info);
        return view('/admin/manage/manage', ['info' => $info]);
        //return view('/admin/manage/manage');
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
    public function postStore(Request $request)
    {
        //
        $pic = "";
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
        $manage = new manage;
        $manage = manage::find(1);
        $manage -> title = $request -> input('title', '');
        $manage -> keywords = $request -> input('keywords', '');
        $manage -> pic = $pic;
        $manage -> switch = $request -> input('switch', '');
        $manage -> copyright = $request -> input('copyright', '');
        $manage -> updated_at = date('Y-m-d H:i:s',time());
        $manage -> save();
        return redirect('/admin/manage');
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
