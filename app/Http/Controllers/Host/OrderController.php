<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Products;
<<<<<<< HEAD
use App\Models\admin\User;
use App\Models\host\Shoppingjias;
use App\Models\host\Orders;
=======
use App\Models\host\User;
use App\Models\host\Hostcurs;
use App\Models\admin\Orders;
>>>>>>> origin/xyf
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
<<<<<<< HEAD
        $data=Orders::where('uid','=',session('id'))->get();
        $r=count($data);
        //$sp=Shoppingjias::where('uid','=',session('id'))->get();
        $res=Shoppingjias::get();
        $user=User::find(session('id'));
        return view('host.order.index',['data'=>$data,'r'=>$r,'res'=>$res,'user'=>$user]);  
=======
        $user = User::find($id);
        //dd($user);
        $data = $user->order_product;
        //dd($data);
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        return view('host.order.index',['data'=>$data,'res'=>$res,'s'=>$s]);
>>>>>>> origin/xyf
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
    public function getShow($id)
    {
        $data = Products::find($id);
        //dd($data);
        $data1 = $data->order_user;
        
        dd($data1);
        return view('host.order.index',['data'=>$data]);
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
