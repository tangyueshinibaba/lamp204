<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Advers;
use App\Http\Requests\AdverBlogPostRequest;
use App\Http\Requests\AdvereditRequest;
class AdversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {   
        //接受用户名
        $advername=$request->input('advername');
        $data=Advers::where('advername','like','%'.$advername.'%')->paginate(3);
        return view('admin/adver/index',['data'=>$data,'title'=>'广告位列表','advername'=>$advername]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('/admin/adver/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(AdverBlogPostRequest $request)
    {
       //接受用户提交信息
        $data=$request -> except('_token');
        $file=$request->file('profile');
        ///dump($file);die;
        //获取文件后缀名
        $hz=$file->getClientOriginalExtension();
        //随机一个10位后缀名
        $dir_name=str_random(10);
        //拼接文件名
        $name=$dir_name.'.'.$hz;
        //获取一个时间
        //$time=date('Y-m-d',time());
        //移动
        $res=$file->move('./uploads/',$name);

        //添加
        $tj=new Advers;
        $tj->advername=$data['advername'];
        $tj->path=$data['path'];
        $tj->profile=$name;
        $tj->weizhi=$data['weizhi'];

        if($tj->save()){
            return redirect('/adver/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
    public function getEdit(Request $request, $id)
    {
       $data=Advers::find($id);
       return view('admin/adver/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //封装
    public static function file($id,$data,$gx)
    {      
            $gx->advername=$data['advername'];
            $gx->path=$data['path'];
            //$gx->profile=$name;
            $gx->status=$data['status'];
            $gx->weizhi=$data['weizhi'];
            $gx->save();
    }
    public function postUpdate(AdvereditRequest $request, $id)
    {
       //接受所有信息
        $data=$request->except('_token');

        $file=$request->file('profile');
        //更新
        $gx=Advers::find($id);
        if(!$file==null){
              //获取头像的后缀
            $hz=$file->getClientOriginalExtension();
            //获取一个10位字符串
            $dirname=str_random(10);
            //拼接一个随机名
            $name=$dirname.'.'.$dirname;
            //移动
            $res=$file->move('./uploads/',$name);
             self::file($id,$data,$gx);
             $gx->profile=$name;
        }else{
            self::file($id,$data,$gx);
        }
           
        if($gx->save()){
            return redirect('adver/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
       $res=Advers::find($id);
       $res->delete();
       if($res->delete()) {  
            return redirect('/adver/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }

    }
}
