<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatesRequest;
use App\Models\admin\Cates;
use DB;
class CatesController extends Controller
{   
    public static function g()
    {       
         //获取所有的用户信息
        $data=cates::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate();
            foreach($data as $k=>$v){
                //统计出现的次数
                $n=substr_count($v->path,',');
                $data[$k]->cname=str_repeat('|----',$n).$data[$k]->cname; 
            }
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {    //$name=$request->input('cname'); 
       // dump($name);
        //$data=Cates::where('cname','like','%'.$name.'%')->paginate(3);
        return view('admin/cates/index',['data'=>self::g()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('admin/cates/create',['data'=>self::g()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(CatesRequest $request)
    {
        //接受用户的提交信息
        //$data=$request->except('_token');

        $res=new cates;
        //检测当前分类是否为顶级分类
        $pid=$request->input('pid','');
        if($pid==0){
            $res->path='0';
        }else{
            $parent_data=Cates::find($pid);
            $res->path=$parent_data->path.','.$parent_data->id;
        }

        $res->cname=$request->input('cname');
        $res->pid=$pid;
        if($res->save()){
            return redirect('cates/index')->with('success','添加成功');
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
    public function getDestroy($id)
    {   //查看当前分类是否有子类
        $data=Cates::where('pid','=',$id)->first();
        if(empty($data)){
            $res=Cates::destroy($id);
            if($res){
            return redirect('cates/index')->with('success','删除成功');
            }else{
            return back()->with('error','删除失败');
            }

        }else{
            return back()->with('error','当前有子类不能删除');
        }
        
    }
}
