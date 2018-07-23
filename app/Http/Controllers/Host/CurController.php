<?php

namespace App\Http\Controllers\host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\host\Products;
use App\Models\host\Hostcurs;
use App\Models\host\Orders;
use App\Models\host\User;
use App\Models\host\Address;

class CurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {    
        $id=session('id');
        $data1=Hostcurs::where('uid','=',$id)->get();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $user=User::find($id);
        $data=Hostcurs::where('uid','=',$id)->get();
        $changdu=count($data);
        session(['res'=>$res]);
       return view('host.cur.index',['data'=>$data,'res'=>$res,'s'=>$s,'user'=>$user,'changdu'=>$changdu]);
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
    public function getStore(Request $request,$id)
    {
       //实例化购物车表
         $a=$request->input('a');
         $b=$request->input('b');
         $c=$request->input('c');
         $d=$request->input('d');
         $e=$request->input('e');
         $f=$request->input('f');
         $g=$request->input('g');
        $data=new Hostcurs;
        if($c!=null && session('username')!=null){
             $data->shuliang=$a;
            $data->fukuan=$b;
            $data->price=$d;
            $data->guige=$c;
            $data->pid=$id;
            $data->profile=$e;
            $data->pname=$f;
            $data->uid=$g;
            $data->save();
            echo "success";
        }else{
            echo "error";
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow()
    {   $res=hostcurs::where('uid','=',session('id'))->get();
        $data=Address::where('uid','=',session('id'))->get();
       // dd($data);
      return view('host/cur/show',['data'=>$data,'res'=>$res]);
    }
    public function getTijiao(Request $request)
    {   
        $pid=$request->input('pid');
        $sl=$request->input('sl');
        $zj=$request->input('zongjia');
        $guige=$request->input('guige');
        $pids=implode($pid,',');
        $sls=implode($sl,',');
        $guiges=implode($guige,',');
       
       $order=new Orders;
       $order->pid=$pids;
       $order->uid=session('id');
       $order->shuliang=$sls;
       $order->zongjia=$zj;
       $order->ddh=str_random(10);
       $order->guige=$guiges;
       $res=$order->save();
        if($res==true){
            echo "success";
            session(['ddh'=>$order->ddh,'pid'=>$pid]);
        }else{
            echo "error";
        }
     
       
    }
    public function getShouhuo(Request $request)
    {   
        $data= Orders::where('ddh','=',session('ddh'))->where('uid','=',session('id'))->first();
        $address=$request->input('address');
        $name=$request->input('name');
        $data->address=$name.','.$address;
        $res=$data->save();
        
         if($res==true){
            echo "success";
           
        }else{
            echo "error";
        }

    }
    public function getDizhi()
    {   
         //购物车表
        $gou=Hostcurs::where('uid','=',session('id'))->get();
        $arr =[];
        foreach ($gou as $key => $value) {
           $arr[]=$value->id;
        }
        $res=Hostcurs::destroy($arr);
        if($res==true){
        return view('host/cur/tijiao');
        }
      
    }
    public function getQrtijiao()
    {
        return view('host/cur/tijiao');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
       $res=Hostcurs::find($id);
       $data=$res->delete();
        if($data==true){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    public function getCur(){
        $data=Hostcurs::all();
        $res=count($data);
        $s=0;
       foreach ($data as $k=>$v){
        $s+=$v->fukuan;
       }
        return view('host.common.default',['res'=>$res,'s'=>$s]);
    }
    //批量删除
    public function getDeleteall(request $request)
    {   
        $id=$request->input('che');
        $data=Hostcurs::destroy($id);
        if($data){
            echo "success";
        }else{
            echo 'error';
        }
    }
}
