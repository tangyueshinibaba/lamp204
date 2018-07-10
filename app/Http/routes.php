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
    return view('welcome');
});

//后台首页
Route::controller('/admin','Admin\AdminController');

<<<<<<< HEAD





=======
>>>>>>> 5d7314f321f99af6f886b96167b2261727fdc252
//前台首页
Route::controller('/host','Host\HostController');
//前台栏目表
Route::controller('/hostcates','Host\CatesController');

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

<<<<<<< HEAD
//前台收藏夹
Route::controller('/shoucang','Host\ShoucangController');
=======




>>>>>>> 5d7314f321f99af6f886b96167b2261727fdc252





















































Route::controller('/fri','Admin\FriController');


<<<<<<< HEAD
=======
Route::controller('/carousel','Admin\CarouselController');

>>>>>>> 5d7314f321f99af6f886b96167b2261727fdc252
