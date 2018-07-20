<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Products;
use App\Models\host\Orders;
use App\Models\host\Hostcurs;
use App\Models\host\Shoppingjias;
use App\Http\Requests\OrderRequest;
class GoumaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {  
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
        //分配模板
        return view('host/goumai/index',['products'=>$products,'n'=>$n,'s'=>$s,'sp'=>$sp,'sptj'=>$sptj,'res'=>$res]);
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
       $data=Products::find($id);
       $pname=$data->pname;
       $sl=$request->input('shuliang');
       $price=$request->input('price');
       $guige=$request->input('guige');
       $uid=$request->input('yonghuid');
       $data->kucun=$data->kucun-$sl;
       $a1=$data->save();
       //随机一个20位得订单号
       $ddh=rand();
       //实例化一个表
       $order=new Orders;
       $order->pid=$id;
       $order->oname=$pname;
       $order->shuliang=$sl;
       $order->guige=$guige;
       $order->zongjia=$price;
       $order->huohao=$data['huohao'];
       $order->ddh=$ddh;
       $order->uid=$uid;
       $order->profile=$data['profile'];
       $a2=$order->save();
       if($a1 && $a2){
        return redirect('/goumai/dingdan')->with('success','下单成功');
       }else{
        return back()->with('error','下单失败');
       }
     
       
    }
    public function getDingdan()
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
