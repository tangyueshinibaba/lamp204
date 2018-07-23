<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Address;
use App\Models\host\User;
use App\Models\host\Hostcurs;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        
        $user = User::find($id);
        $address = Address::all();
        $n = count($address);
        //dd($n);
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        return view('host.address.index',['user'=>$user,'res'=>$res,'s'=>$s,'address'=>$address,'n'=>$n]);
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
    public function postStore(Request $request)
    {

        $data = new Address;
        
        $data->uname = $request->input('uname','');
        $data->uid   =session('id');
        $data->sheng = $request->input('province','');
        $data->shi = $request->input('country','');
        $data->xian = $request->input('town','');
        $data->shouji = $request->input('shouji','');
        $data->dianhua = $request->input('dianhua','');
        $data->youbian = $request->input('youbian','');
        $data->address = $request->input('address','');
        $data->status = $request->input('status','');
        $data -> save();

        //dd($data->uname);
        if($data->save()){
            
            return back();
        }
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
    public function getEdit($id)
    {
        $data = Address::find($id);
        
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
        foreach ($data1 as $k=>$v){
            $s+=$v->fukuan;
        }
        $data2=Hostcurs::all();
        session(['res'=>$res]);

        return view('host.address.edit',['res'=>$res,'s'=>$s,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        $data = Address::find($id);

        $data->uname = $request->input('uname','');
        $data->sheng = $request->input('province','');
        $data->shi = $request->input('country','');
        $data->xian = $request->input('town','');
        $data->shouji = $request->input('shouji','');
        $data->dianhua = $request->input('dianhua','');
        $data->youbian = $request->input('youbian','');
        $data->address = $request->input('address','');

        if($data->save()){
            
            return redirect('/address/index/'.$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        $data = Address::find($id);
        
        if($data->delete()){
            return redirect('/address/index/'.$id)->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    //更换默认地址
    public function getMoren(Request $request)
    {
        //接受id
        $id=$request->input('id');
        $ids=$request->input('ids');
        //默认地址状态设为1
        $data=Address::find($id);
        $data->status=1;
        $res=$data->save();
        //其他地址状态设为0
        $d=Address::find($ids);
        foreach($d as $k=>$v){
            $v->status=0;
            $r=$v->save();
        }
        if($res==true && $r==true){
            echo "success";
        }else{
            echo 'error';
        }
    }
}
