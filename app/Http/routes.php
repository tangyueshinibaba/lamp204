<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
});




//后台首页
Route::controller('/admin1','Admin\AdminController');








//前台首页
Route::controller('/host','Host\HostController');
//前台栏目表
Route::controller('/hostcates','Host\CatesController');
//前台购物车
Route::controller('/cur','Host\CurController');
//前台评价
Route::controller('/pingjia','Host\PingjiaController');
//前台问题反馈
Route::controller('/hostwenti','Host\WentiController');

//后台广告位
Route::controller('/adver','Admin\AdversController');
//后台产品详情
Route::controller('/adminproduct','Admin\ProductController');

//后台评价
Route::controller('/adminpingjia','Admin\PingjiaController');
//后台问题反馈
Route::controller('/adminwenti','Admin\WentiController');
//后台购物车管理
Route::controller('/admincur','Admin\CurController');

//前台广告位
Route::controller('/hostadver','Host\AdverController');
//前台产品详情 购买
Route::controller('/goumai','Host\GoumaiController');
//后台顾客订单表
Route::controller('/adminorder','Admin\OrderController');
//后台屏蔽词
Route::controller('/adminpingbi','Admin\PingbiController');

//后台栏目位
Route::controller('/cates','Admin\CatesController');
















































//后台轮播
Route::controller('/carousel','Admin\CarouselController');
//前台收藏夹
Route::controller('/shoucang','Host\ShoucangController');
//前台订单
Route::controller('/hostorder','Host\OrderController');

//地址管理
Route::controller('/address','Host\AddressController');
//活动
Route::controller('/adminhd','Admin\HuodongController');


// 账户管理
Route::controller('/zhanghu','Host\ZhanghuController');

//后台收藏夹管理
Route::controller('/adminshoucang','Admin\ShoucangController');















































































































//友情链接 zsg
Route::controller('/fri','Admin\FriController');
//前台用户注册 zsg
Route::controller('/user','Host\UserController');
//前台用户登录 zsg
Route::controller('/login','Host\LoginController');
//后台优惠券 zsg
Route::controller('/yhq','Admin\YhqController');


//修改密码
Route::controller('/repass','Host\RepassController');
































Route::controller('/list', 'Host\listController');


Route::controller('/carousel','Admin\CarouselController');

Route::group(['middleware'=>['login']], function(){
	Route::controller('/adminuser','Admin\UserController');
	Route::controller('/adminmanage', 'Admin\ManageController');
});

Route::controller('/adminlog', 'Admin\logcontroller');

