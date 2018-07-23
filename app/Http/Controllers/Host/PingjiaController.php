<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Products;
use App\Models\host\Orders;
use App\Models\host\Shoppingjias;
use App\Models\admin\pingbis;
class PingjiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        $dat=Orders::where('id','=',$id)->get();
       
        foreach($dat as $k=>$v){
             return view('host/pingjia/index',['dat'=>$v]);
        }
       
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
    public function getStore(Request $request)
    {
       $a=$request->input('a');
       $b=$request->input('b');
       $c=$request->input('c');
       $d=$request->input('d');
       $e=$request->input('e');
       $f=$request->input('f');
       $g=$request->input('g');
       $h=$request->input('h');
       $data=Orders::where('id','=',$h)->first();
       $data->sfpj='1';
       $data->save();
       $res=new Shoppingjias;
        $res->pid=$e;
        $res->uid=session('id');
        $res->profile=$a;
        $res->content=$d;
        $res->uname=$c;
        $res->spddh=$f;
        $res->pingfen=$g;
        $res->did=$h;
        $r=$res->save();
        //获得最后一条插入的评价id
        $spid=$res->id;
        if($r && $d!=null){
            session(['spid'=>$spid]);
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
    public function getShow($id)
    {   
        //查看已评价
        $data=Shoppingjias::find($id);  
        return view('host/pingjia/show',['data'=>$data]);
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
