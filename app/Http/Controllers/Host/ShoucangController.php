<?php

namespace App\Http\Controllers\host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Products;
use App\Models\admin\User;
use App\Models\host\Hostcurs;
use App\Models\host\Shoucang;
class ShoucangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        $user = User::find($id);
        $shoucang = Shoucang::where('uid','=',$id)->get();
        $n = count($shoucang);
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        return view('host.shoucang.index',['res'=>$res,'s'=>$s,'user'=>$user,'shoucang'=>$shoucang,'n'=>$n]);
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
    public function getShow(Request $request,$id)
    {
        $dj = $request->input('d');
        $img = $request->input('e');
        $pname = $request->input('f');
        $uid = $request->input('g');
        $data = new Shoucang;
        if(session('username')!=null){
            $data->pname = $pname;
            $data->img = $img;
            $data->price = $dj;
            $data->pid = $id;
            $data->uid = $uid;
            $data->save();
            echo 'success';
        }else{
            echo 'error';
        }
        
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
        $data = Shoucang::find($id);
        //dd($data);
        $id = session('id');
        if($data->delete()){
            return redirect('/shoucang/index/'.$id)->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
