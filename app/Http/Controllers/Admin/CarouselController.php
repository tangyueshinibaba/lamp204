<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\admin\Carousel;
class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data = Carousel::paginate(3);
        //dump($data);
        return view('admin.carousel.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //加载添加页面
        return view('admin.carousel.create');
		
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {

        $carousel = new Carousel;
        //dump($carousel);die;
        $carousel -> title = $request -> input('title','');
        $carousel -> describe = $request -> input('describe','');
        $carousel -> url = $request -> input('url','');
        // 使用request 创建文件上传对象
        if($request -> hasFile('img')){
            $img = $request -> file('img');
            $ext = $img ->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $img -> move('./common/admin/images/lunbo',$name);
        }
        $carousel -> img = $name;
        //$carousel -> save();
        if($carousel -> save()){
            return redirect('/carousel')->with('success','添加成功');
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
    public function getEdit($id)
    {
        $data = Carousel::find($id);
        return view('admin.carousel.edit',['data'=>$data]);
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

        $carousel = Carousel::find($id);

        //dump($carousel);die; 
        $carousel -> title = $request -> input('title','');
        $carousel -> describe = $request -> input('describe','');
        $carousel -> url = $request -> input('url','');
        // 使用request 创建文件上传对象
        if($request -> hasFile('img')){
            $img = $request -> file('img');
            if($img != null){
                $ext = $img ->getClientOriginalExtension();
                //var_dump($ext);die;
                // 处理文件名称
                $temp_name = str_random(20);
                $name =  $temp_name.'.'.$ext;
                //$dirname = date('Ymd',time());
                $img -> move('./common/admin/images/lunbo',$name);
                $carousel -> img = $name;
            }
        }
        //$carousel -> save();
        if($carousel -> save()){
            return redirect('/carousel')->with('success','修改成功');
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
        $carousel = Carousel::find($id);
        
        if($carousel->delete()){
            return redirect('/carousel')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

}
