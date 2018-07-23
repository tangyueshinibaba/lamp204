<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\products;
use App\Http\Requests\profuctRequest;
use App\Http\Requests\productupdateRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
      $pname=$request->input('pname');
      $data=products::where('pname','like','%'.$pname.'%')->paginate(3);
      return view('admin/product/index',['data'=>$data,'pname'=>$pname]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(profuctRequest $request)
    {
        //接受所有的信息
        $data=$request->except('_token');
        //接受产品图
        $file=$request->file('profile');
        $arr=[];
        foreach($file as $k=>$v){
              //获取头像的后缀
            $hz=$v->getClientOriginalExtension();
           //随机拼接一个10位字符
            $dirname=str_random(10);
            //拼接一个文件名
            $name=$dirname.'.'.$hz;
            //获取一个时间
            $time=date('Ymd',time());
             $filename = $time.'/'.$name;
            //移动
            $res=$v->move('./uploads/'.$time,$name);
            $arr[]=$time.'/'.$name;

        }
         $n=implode($arr,'#');
        $products=new products;
        $products->pname=$request->input('pname');
        $products->profile=$n;
        $products->huohao=$request->input('huohao');
        $products->kucun=$request->input('kucun');
        $products->jieshao=$request->input('jieshao');
        $products->price=$request->input('price');
        if($products->save()){
            return redirect('adminproduct/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        echo "string";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
       $data=Products::find($id);
       $file=$data['profile'];
       $n=explode('#',$file);
       //分配模板
       return view('admin/product/edit',['data'=>$data,'n'=>$n]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(productupdateRequest $request, $id)
    {
       //更新所有的用户
        $data=$request->except('_token');
        //接受头像
        $file=$request->file('profile');
         $res=Products::find($id);
        if($file==null){
            foreach($file as $k=>$v){
               //获取头像的后缀
                $hz=$v->getClientOriginalExtension();
               //随机拼接一个10位字符
                $dirname=str_random(10);
                //拼接一个文件名
                $name=$dirname.'.'.$hz;

                //获取一个时间
                $time=date('Ymd',time());
                 $filename = $time.'/'.$name;
                //移动
                $res=$v->move('./uploads/'.$time,$name);
                $arr[]=$time.'/'.$name;
            }

            $n=implode($arr,'#');
             $res->pname=$data['pname'];
            $res->price=$data['price'];
            $res->huohao=$data['huohao'];
            $res->kucun=$data['kucun'];
            $res->profile=$n;
            $res->jieshao=$data['jieshao'];
        }else{  
            $res->pname=$data['pname'];
            $res->price=$data['price'];
            $res->huohao=$data['huohao'];
            $res->kucun=$data['kucun'];
            $res->jieshao=$data['jieshao'];
        }
         if($res->save()){
            return redirect('adminproduct/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
       $data=Products::find($id);
       $res=$data->delete();
       if($res){
       return redirect('adminproduct/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }

    }
}
