<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Products;
use App\Models\admin\User;
use App\Models\host\Shoppingjias;
use App\Models\host\Orders;
use App\Models\host\Hostcurs;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request,$id)
    {  
        //搜索ddh
        $ddh=$request->input('ddh');
        $data=Orders::where('uid','=',session('id'))->where('ddh','like','%'.$ddh.'%')->paginate(3);
        foreach($data as $kk=>$vv){
                $sl=explode(',',$vv->shuliang);
                $pid=explode(',',$vv->pid);
                $guige=explode(',',$vv->guige);
        }
        $r=count($data);
        //$sp=Shoppingjias::where('uid','=',session('id'))->get();
        $res=Shoppingjias::get();
        $user=User::find(session('id'));
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
      return view('host.order.index',['data'=>$data,'r'=>$r,'res'=>$res,'user'=>$user,'s'=>$s,'ddh'=>$ddh]);  
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        $user=User::find(session('id'));
        $orders = Orders::find($id);
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
        foreach ($data1 as $k=>$v){
            $s+=$v->fukuan;
        }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        return view('host.order.detail',['res'=>$res,'user'=>$user,'s'=>$s,'orders'=>$orders]);
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
        $data=Orders::find($id);
        $res=$data->delete();
        if($res){
            return back()->with('success','删除成功');
        }else{
            return back()->with('删除失败');
        }
    }

    public function getDeleteall(request $request)
    {   
        $id=$request->input('che');
        $data=Orders::destroy($id);
        if($data){
            echo "success";
        }else{
            echo 'error';
        }
    }
}
