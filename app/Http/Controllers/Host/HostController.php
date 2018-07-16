<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Advers;
use App\Models\host\Cates;

use App\Models\host\Carousel;

use App\Models\host\Hostcurs;

use App\Models\host\Products;

use App\Models\admin\Fri;
class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data=Advers::all();
        $cates=Cates::all();
        $fris = Fri::all();

        $carousel = Carousel::all();
        

        $products=Products::all();


        foreach($cates as $k=>$v){
                //统计出现的次数
                if(substr_count($v->path,",")==1) {
                $b[]=$v;
                }
                if(substr_count($v->path,",")==2) {
                $c[]=$v;
                }
              
            }
        // dump($b);die;

        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
       foreach ($data1 as $k=>$v){
        $s+=$v->fukuan;
       }
        session(['res'=>$res]);
       return view('/host/host/index',['data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s,'fris' => $fris]);
       //return view('/host/cc/index',['data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel]);


        // return view('/host/host/index',['data'=>$data,'cates'=>$cates,'carousel'=>$carousel,'products'=>$products,'b'=>$b,'c'=>$c]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {

        return view('host/cc/index');

        return view('host.common.default');

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
