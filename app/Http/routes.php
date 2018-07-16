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
Route::controller('/admin','Admin\AdminController');

<<<<<<< HEAD
=======


<<<<<<< HEAD







>>>>>>> origin/xyf
=======
>>>>>>> origin/zsg
//前台首页
Route::controller('/host','Host\HostController');
//前台栏目表
Route::controller('/hostcates','Host\CatesController');
//前台购物车
Route::controller('/cur','Host\CurController');
//前台评价
Route::controller('/pingjia','Host\PingjiaController');

//后台广告位
Route::controller('/adver','Admin\AdversController');
//后台产品详情
Route::controller('/adminproduct','Admin\ProductController');
<<<<<<< HEAD
//后台评价
Route::controller('/adminpingjia','Admin\PingjiaController');
=======
>>>>>>> origin/zsg

//前台广告位
Route::controller('/hostadver','Host\AdverController');
//前台产品详情 购买
Route::controller('/goumai','Host\GoumaiController');
//后台顾客订单表
Route::controller('/adminorder','Admin\OrderController');


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






























Route::controller('/admin/user','Admin\UserController');
Route::controller('/admin/manage', 'Admin\ManageController');

<<<<<<< HEAD



=======
>>>>>>> origin/zsg

Route::controller('/carousel','Admin\CarouselController');


<<<<<<< HEAD




=======
>>>>>>> origin/zsg

