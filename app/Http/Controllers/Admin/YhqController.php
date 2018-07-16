<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Yhq;

class YhqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //接收数据库
        $yhq = Yhq::paginate(2);
        return view('admin.yhq.index',['yhq' => $yhq]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //echo 'aaa';
        return view('admin.yhq.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //接收提交信息
        $data=$request -> except('_token');

        //添加数据
        $yhq = new Yhq;
        $yhq -> num = $data['num'];
        $yhq -> title = $data['title'];
        $yhq -> price = $data['price'];
        $yhq -> yhprice = $data['yhprice'];
        $yhq -> shuoming = $data['shuoming'];
        $yhq -> starttime = $data['starttime'];
        $yhq -> endtime = $data['endtime'];
        //保存
        if($yhq->save()){
            return redirect('/yhq/index')->with('success','添加成功');
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
        //
        $data = Yhq::where('id',$id)->first();
        return view('admin.yhq.edit',['data' => $data]);
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
    public function getDestroy($id)
    {
         //Fri::destory($id);
        $yhq = Yhq::find($id);
        if ($yhq->delete()) {
            return redirect('/yhq') -> with('success','删除成功');
        } else {
            return back() -> with('error','删除失败');
        }        
    }
    
}
