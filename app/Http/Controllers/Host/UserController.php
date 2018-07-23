<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\host\User;
use App\Models\host\Hostcurs;
use Hash;
use App\Http\Requests\UserCreateRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //读取数据库数据
        $users = User::paginate(2);

        //渲染到模板
        return view('admin.quser.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //加载到注册模板
        return view('host.user.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 用户注册
     */
    public function postStore(UserCreateRequest $request)
    {
        $users = new User;
        //接收数据
        $username = $request -> input('uname');
        $password = $request -> input('pass');
        $phone = $request -> input('phone');
            
        $users -> pass = Hash::make($password);
        $users -> uname = $username;
        $users -> phone = $phone; 
    
        if ($users -> save()) {
            return redirect('/host')-> with('success','注册成功,唐跃是你爸爸哟');
        } else {
            return back() -> with('error','注册失败');
        }
        
        //执行添加
        //$data = $request -> except('_token');
        // $users = new User;
        // $users -> uname = $request -> input('uname');
        // $users -> pass = $request -> input('pass');
        // $users -> phone = $request -> input('phone');
        // $users -> save();
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
        //从数据库中读取要修改的数据
        $user = User::find($id);

       
        $data1=Hostcurs::all();
        $res=count($data1);
        $s=0;
        foreach ($data1 as $k=>$v){
            $s+=$v->fukuan;
        }
        $data2=Hostcurs::all();
        session(['res'=>$res]);
        return view('host.user.edit',['user' => $user,'res' => $res,'s' => $s]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 展示并修改个人信息
     */
    public function postUpdate(Request $request, $id)
    {
        // $data = $request -> all();
        //dump($request -> hasFile('pic'));die;
        $user = User::find($id);
        $user -> uname = $request -> input('uname');
        $user -> sex = $request -> input('sex');
        $user -> phone = $request -> input('phone');
        $user -> age = $request -> input('age');
        $user -> qq = $request -> input('qq');
        $user -> email = $request -> input('email');
        if($request -> hasFile('pic')){
            $user -> pic = $request -> file('pic');

            //var_dump($carousel -> img);die;
            $ext = $user -> pic ->getClientOriginalExtension();
            //var_dump($ext);die;
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            //$dirname = date('Ymd',time());
            $user -> pic -> move('./common/host/images/user',$name);
            //dump($res);
        }
        $user -> pic = $name;
        if ($user -> save()) {
            return redirect('/user/edit/'.$id) ->with('success','修改成功');
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
    
        $user = User::find($id);
        if ($user->delete()) {
            return redirect('/user') -> with('success','删除成功');
        } else {
            return back() -> with('error','删除失败');
        }   
    }

}
