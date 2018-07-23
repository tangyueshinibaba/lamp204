<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Products;
use App\Models\host\Orders;
use App\Models\host\Hostcurs;
use App\Models\host\Shoppingjias;
use App\Models\host\histroy;
use App\Http\Requests\OrderRequest;
use App\Models\host\Address;
use App\Models\admin\pingbis;
class GoumaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {   
        $his=new histroy;
        $his->uid=session('id');
        $his->pid=$id;
        $his->save();
        $products=Products::find($id);
        $pro=$products->profile;
        $n=explode('#', $pro);
        $ids=session('id');
        $data1=Hostcurs::where('uid','=',$ids)->get();
         //评价表与商品表关联
        $sp=Shoppingjias::where('pid','=',$id)->get();
        //商品对应的id的统计
        $sptj=count($sp);
        $res=count($data1);
        $s=0;
        foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        session(['res'=>$res]);
        //历史记录 去除重复记录
         $data=histroy::where('uid','=',session('id'))->groupBy('pid')->get();
         //dd($data);
         $ci=pingbis::find(1);
         $cis=explode(',',$ci->content);
         foreach($sp as $k=>$v){
          $sp[$k]['content']=str_replace($cis, '*', $v->content);
         }
        //分配模板
<<<<<<< HEAD
<<<<<<< HEAD
        return view('host/goumai/index',['products'=>$products,'n'=>$n,'s'=>$s,'sp'=>$sp,'sptj'=>$sptj,'his'=>$data]);
=======
        return view('host/goumai/index',['products'=>$products,'n'=>$n,'s'=>$s,'sp'=>$sp,'sptj'=>$sptj,'res'=>$res]);
>>>>>>> origin/xyf
=======
        return view('host/goumai/index',['products'=>$products,'n'=>$n,'s'=>$s,'sp'=>$sp,'sptj'=>$sptj,'res'=>$res]);
>>>>>>> origin/zsg
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getStore(OrderRequest $request,$id)
    {  
      $data1=Address::where('uid','=',session('id'))->get();
       $data=Products::find($id);
       $pname=$data->pname;
       $sl=$request->input('shuliang');
       //商品id
       $pid=$request->input('shangpinid');
       //总价
       $price=$request->input('price');
       //单价
       $dj=$request->input('danjia');
       $guige=$request->input('guige');
       $uid=$request->input('yonghuid');
       $data->kucun=$data->kucun-$sl;
      if($data->kucun<=0){
        return back()->with('success','库存已经不足');
      }
       $a1=$data->save();
      
      return view('host/goumai/show',['pname'=>$pname,'sl'=>$sl,'price'=>$price,'guige'=>$guige,'data1'=>$data1,'dj'=>$dj,'pid'=>$pid,'data'=>$data]);
     
       
    }
    public function getDingdan(Request $request)
    {   
      $pid=$request->input('pid');
      $pname=$request->input('name');
       $sl=$request->input('shuliang');
       $price=$request->input('zongjia');
       $guige=$request->input('guige');
       $uid=$request->input('yhid');
       //获取收货人和地址
        $shou=$request->input('shou');
        $sheng=$request->input('sheng');
        $shi=$request->input('shi');
        $xian=$request->input('xian');
        $address=$request->input('address');
      
      //实例化一个10位ddh
       $ddh=str_random(10);
       //实例化一个表
       $order=new Orders;
       $order->pid=$pid;
       $order->oname=$pname;
       $order->shuliang=$sl;
       $order->guige=$guige;
       $order->zongjia=$price;
       $order->ddh=$ddh;
       $order->uid=$uid;
       $order->address=$shou.','.$sheng.','.$shi.','.$xian.','.$address;
       $a2=$order->save();
     if($a2==true){
      echo "success";
     }else{
      echo "error";
     }
      
      
    }
    //接受购买的收货地址
    public function getDd(Request $request)
    {
      //接受收货地址
      $address=$request->input('address');
      $name=$request->input('name');
      $data=Products::where('pid','=',session('gmpid'))->where('ddh','=',session('gmddh'))->first();
      dd($data);
      $data->address=$name.','.$address;
      $res=$data->save();
      if($res){
        echo "success";
      }else{
        echo "error";
      }
    }
    //更换默认地址
    public function postDizhi(Request $request)
    {
      $data=Address::where('uid','=',session('id'))->get();
      foreach ($data as $key => $value) {
        $value->status=0;
        $value->save();
      }
      $id=$request->input('a');
      $data1=Address::find($id);
      $data1->status=1;
      $res=$data1->save();
       if ($res==true) {
        echo "success";
      }else{
        echo "error";
      }
    }
    //修改地址
    public function getBianji($id)
    {
     echo "string";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow()
    {
            

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
