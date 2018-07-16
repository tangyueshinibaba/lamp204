<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Orders;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {   
         //获取今天凌晨12点
/*       $t = strtotime(date('Y-m-d',time()));
       //获取今天24点
       $end=$t + 24 * 60 * 60;
       //差时间
       $cha=$end-$t;
       $e=date('Y-m-d H:i:s',$end);
       //获取订单总数
     
       $tt=data('Y-m-d H:i:s',$t);*/
         $time=date('Y-m-d',time());
        $data=Orders::all();
        $ss=0;
        foreach($data as $k=>$v){
            $ss+=$v->zongjia;
        }
        $dingdan=count($data);
        
       return view('/admin/index/index',['dingdan'=>$dingdan,'data'=>$data,'ss'=>$ss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {


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
    public function destroy($id)
    {
        //
    }
}
