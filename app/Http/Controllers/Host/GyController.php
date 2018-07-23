<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Guanyu;

class GyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        return view('host.gywm.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $data = Guanyu::paginate(5);
        return view('admin.gywm.index',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        
        $guanyu = new Guanyu;
        //把接收到的数据存到数据库
        $guanyu -> name = $request-> input('name');
        $guanyu -> phone = $request-> input('tel');
        $guanyu -> content = $request-> input('txt_con');
        if ($guanyu -> save()) {
            return back() -> with('success','留言提交成功');
        }else{
            return back() -> with('error','留言提交失败');
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
    public function getDestroy($id)
    {
    
        $data = Guanyu::find($id);
        if ($data->delete()) {
            return redirect('/gywm/list') -> with('success','删除成功');
        } else {
            return back() -> with('error','删除失败');;
        }      
    }
}
