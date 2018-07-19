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






Route::controller('/admin','Admin\AdminController');




Route::controller('/admin','Admin\AdminController');



//前台首页
Route::controller('/host','Host\HostController');
//前台栏目表
Route::controller('/hostcates','Host\CatesController');
//前台购物车
Route::controller('/cur','Host\CurController');

//后台广告位
Route::controller('/adver','Admin\AdversController');
//后台产品详情
Route::controller('/adminproduct','Admin\ProductController');


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
























































































































//友情链接 zsg
Route::controller('/fri','Admin\FriController');
//前台用户注册 zsg
Route::controller('/user','Host\UserController');
//前台用户登录 zsg
Route::controller('/login','Host\LoginController');
//后台优惠券
Route::controller('/yhq','Admin\YhqController');
































Route::controller('/admin/user','Admin\UserController');
Route::controller('/admin/manage', 'Admin\ManageController');

Route::controller('/list', 'Host\listController');


Route::controller('/carousel','Admin\CarouselController');

Route::controller('/ic', 'Host\InfoCenterController');








Route::controller('/carousel','Admin\CarouselController');

