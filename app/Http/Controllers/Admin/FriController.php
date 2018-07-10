<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Fri;
use App\Http\Requests\FriInsertRequest;

class FriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //读取数据库数据
        $fris = Fri::paginate(2);
        //dump($fris);die;
        //渲染到模板
        return view('admin.fri.index',['fris' => $fris]);
        //echo 'aaa';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //加载添加模板
        return view('admin.fri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        // /dump($request -> all());die;
        // $this->validate($request, [
        // 'title' => 'required',
        // 'logo' => 'required',
        // 'url' => 'required',
        // ],[
        //     'title.required' => '链接名称不能为空',
        //     'logo.required' => '链接logo不能为空',
        //     'url.required' => '链接地址不能为空',
        // ]);
        $fri = new Fri;
        $fri -> title = $request -> input('title','');

        if($request -> hasFile('pic')){
            $fri -> pic = $request -> file('pic');

            //var_dump($carousel -> img);die;
            $ext = $fri -> pic ->getClientOriginalExtension();
            //var_dump($ext);die;
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            //$dirname = date('Ymd',time());
            $fri -> pic -> move('./common/admin/images/fri',$name);
            //dump($res);
        }       
        $fri -> pic = $name;
        $fri -> url = $request -> input('url','');
        $fri ->save();
        //验证添加
        if ($fri -> save()) {
            return redirect('/fri');
        } else {
            return back();
        }
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
        $data = Fri::where('id',$id)->first();
        return view('admin.fri.edit',['data' => $data]);
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
        $fri = Fri::find($id);
        $fri -> title = $request -> input('title','');
        if($request -> hasFile('pic')){
            $fri -> pic = $request -> file('pic');
            if ($fri -> pic != null) {
                //var_dump($carousel -> img);die;
            $ext = $fri -> pic ->getClientOriginalExtension();
            //var_dump($ext);die;
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            //$dirname = date('Ymd',time());
            $fri -> pic -> move('./common/admin/images/fri',$name);
            //dump($res); 
            $fri -> pic = $name;
            }          
        }               
        $fri -> url = $request -> input('url','');
        if ($fri -> save()) {
            return redirect('/fri');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
       //Fri::destory($id);
        $fri = Fri::find($id);
        if ($fri->delete()) {
            return redirect('/fri') -> with('success');
        } else {
            return back();
        }        
    }
}
