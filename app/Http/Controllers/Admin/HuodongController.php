<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Products;
class HuodongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data = Products::paginate(3);
        return view('admin.huodong.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('admin.huodong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        $data = new Products;
        //dd($data);
        $data -> pname = $request -> input('pname','');
        $data -> jieshao = $request -> input('jieshao','');
        
        $data -> price = $request -> input('price','');
        $data -> status = $request -> input('status','');
        // 使用request 创建文件上传对象
        if($request -> hasFile('profile')){
            $profile = $request -> file('profile');
            $arr = [];
            foreach ($profile as $key => $value) {
                $ext = $value ->getClientOriginalExtension();
                // 处理文件名称
                $temp_name = str_random(20);
                $name =  $temp_name.'.'.$ext;
                $time=date('Ymd',time());
                $value -> move('./uploads/'.$time,$name);
                $arr[] = $time.'/'.$name;
            }
            $n=implode($arr,'#');
            //dd($n);
        }
        $data -> profile = $n;
        //$carousel -> save();
        if($data -> save()){
            return redirect('/adminhd')->with('success','添加成功');
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
    public function getEdit($id)
    {
        $data = Products::find($id);
        return view('admin.huodong.edit',['data'=>$data]);
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
        $data = Products::find($id);
        //dd($data);
        $data -> pname = $request -> input('pname','');
        $data -> jieshao = $request -> input('jieshao','');
        
        $data -> price = $request -> input('price','');
        $data -> status = $request -> input('status','');
        // 使用request 创建文件上传对象
        if($request -> hasFile('profile')){
            $profile = $request -> file('profile');
            $arr = [];
            foreach ($profile as $key => $value) {
                $ext = $value ->getClientOriginalExtension();
                // 处理文件名称
                $temp_name = str_random(20);
                $name =  $temp_name.'.'.$ext;
                $time=date('Ymd',time());
                $value -> move('./uploads/'.$time,$name);
                $arr[] = $time.'/'.$name;
            }
            $n=implode($arr,'#');
            //dd($n);
        }
        $data -> profile = $n;
        if($data -> save()){
            return redirect('/adminhd')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $data = Products::find($id);
        
        if($data->delete()){
            return redirect('/adminhd')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
