<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\Advers;
use App\Models\host\Cates;
use App\Models\host\good;
use DB;

use App\Models\host\Carousel;

use App\Models\host\Hostcurs;

use App\Models\host\Products;

class listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $data=Advers::all();
        $cates=Cates::all();
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
        $typeid=10;
        //

        //dd(DB::table('company')->get());
        $types = DB::table('company')->where('typeid', $typeid)->get();
        //dd($types);
        $goods = DB::table('goods')
                ->join('company', 'goods.company_id', '=','company.id')
                ->join('cates', 'company.typeid', '=','cates.id')
                ->where('company.typeid', $typeid)
                ->select('goods.*')
                ->paginate(1);
        $id = 0;
        //dd($goods);
        return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
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
        //
        //dd($id);
        $data=Advers::all();
        $cates=Cates::all();
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
        //

        //dd(DB::table('company')->get());
        $typeid=10;
        $types = DB::table('company')
                ->where('typeid', $typeid)->get();
        $goods = DB::table('goods')
                ->join('company', 'goods.company_id', '=','company.id')
                ->join('cates', 'company.typeid', '=','cates.id')
                ->where('company.id', $id)
                ->select('goods.*')
                //->orderBy('goods.price','desc')
                ->paginate(1);
        //dd($goods);
        //dd($types);
        return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
    }

    // public function getOrderByPrice($id)
    // {
    //     //
    //     //dd($id);
    //     $data=Advers::all();
    //     $cates=Cates::all();
    //     $carousel = Carousel::all();
    //     $products=Products::all();
    //     foreach($cates as $k=>$v){
    //             //统计出现的次数
    //             if(substr_count($v->path,",")==1) {
    //             $b[]=$v;
    //             }
    //             if(substr_count($v->path,",")==2) {
    //             $c[]=$v;
    //             }
              
    //         }
    //     // dump($b);die;
    //      $data1=Hostcurs::all();
    //     $res=count($data1);
    //     $s=0;
    //    foreach ($data1 as $k=>$v){
    //     $s+=$v->fukuan;
    //    }
    //     session(['res'=>$res]);
    //     //

    //     //dd(DB::table('company')->get());
    //     $typeid=10;
    //     $types = DB::table('company')
    //             ->where('typeid', $typeid)->get();
    //     //dd($id);
    //     if($id != 0){
    //         $goods = DB::table('goods')
    //                 ->join('company', 'goods.company_id', '=','company.id')
    //                 ->join('cates', 'company.typeid', '=','cates.id')
    //                 ->where('company.id', $id)
    //                 ->select('goods.*')
    //                 ->orderBy('goods.price', 'desc')
    //                 ->paginate(1);
    //     }
    //     //dd($goods);
    //     //dd($types);
    //     return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
    // }

    public function getAllinfo($id){
        $data=Advers::all();
        $cates=Cates::all();
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
        //

        //dd(DB::table('company')->get());
        $typeid=10;
        $types = DB::table('company')
                ->where('typeid', $typeid)->get();
        //dd($id);
        if($id != 0){
            $goods = DB::table('goods')
                    ->join('company', 'goods.company_id', '=','company.id')
                    ->join('cates', 'company.typeid', '=','cates.id')
                    ->where('company.id', $id)
                    ->select('goods.*')
                    ->paginate(1);
        }else{
            $goods = DB::table('goods')
                ->join('company', 'goods.company_id', '=','company.id')
                ->join('cates', 'company.typeid', '=','cates.id')
                ->where('company.typeid', $typeid)
                ->select('goods.*')
                ->paginate(1);
            $id = 0;
        }
        //dd($goods);
        //dd($types);
        return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //
                //
        //dd($id);
        $data=Advers::all();
        $cates=Cates::all();
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
        //

        //dd(DB::table('company')->get());
        $typeid=10;
        $types = DB::table('company')
                ->where('typeid', $typeid)->get();
        //dd($id);
        if($id != 0){
            $goods = DB::table('goods')
                    ->join('company', 'goods.company_id', '=','company.id')
                    ->join('cates', 'company.typeid', '=','cates.id')
                    ->where('company.id', $id)
                    ->select('goods.*')
                    ->orderBy('goods.price', 'desc')
                    ->paginate(1);
        }else{
            $goods = DB::table('goods')
                ->join('company', 'goods.company_id', '=','company.id')
                ->join('cates', 'company.typeid', '=','cates.id')
                ->where('company.typeid', $typeid)
                ->select('goods.*')
                ->orderBy('goods.price', 'desc')
                ->paginate(1);
            $id = 0;
        }
        //dd($goods);
        //dd($types);
        return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
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
        //
        $data=Advers::all();
        $cates=Cates::all();
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
        //

        //dd(DB::table('company')->get());
        $typeid=10;
        $types = DB::table('company')
                ->where('typeid', $typeid)->get();
        //dd($id);
        if($id != 0){
            $goods = DB::table('goods')
                    ->join('company', 'goods.company_id', '=','company.id')
                    ->join('cates', 'company.typeid', '=','cates.id')
                    ->where('company.id', $id)
                    ->select('goods.*')
                    ->orderBy('goods.price', 'desc')
                    ->paginate(1);
        }else{
            $goods = DB::table('goods')
                ->join('company', 'goods.company_id', '=','company.id')
                ->join('cates', 'company.typeid', '=','cates.id')
                ->where('company.typeid', $typeid)
                ->select('goods.*')
                ->orderBy('goods.price', 'desc')
                ->paginate(1);
            $id = 0;
        }
        //dd($goods);
        //dd($types);
        return view('/host/list/list', ['types'=>$types, 'data'=>$data,'cates'=>$cates,'b'=>$b,'c'=>$c,'products'=>$products,'carousel'=>$carousel,'res'=>$res,'s'=>$s, 'goods'=>$goods, 'id'=>$id]);
    }
}
