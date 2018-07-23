<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\User;
use App\Models\host\Hostcurs;
use App\Models\host\Zhanghu;
class ZhanghuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        $user = User::find($id);
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        
        //dd($zhanghu);
        return view('host.zhanghu.index',['user'=>$user,'res'=>$res,'s'=>$s]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $user = User::find(session('id'));
        //dd($user);
        return view('host.zhanghu.create',['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        $zhanghu = User::find(session('id'));
        $zhanghu -> money += $request->input('money','');
        $id = session('id');
        if($zhanghu->save()){
            return redirect('/zhanghu/index/'.$id)->with('success','充值成功');
        }else{
            return back()->with('error','充值失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        $zhanghu = User::find($id);
        $data = $request->input('money','');
        return view('host.zhanghu.show',['data'=>$data]);
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
