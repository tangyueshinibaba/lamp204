<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="/common/admin/css/pintuer.css">
    <link rel="stylesheet" href="/common/admin/css/admin.css">

    <link href="/common/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="/common/admin/css/simple-line-icons.css" rel="stylesheet">
    <link href="/common/admin/css/style.css" rel="stylesheet">

    <script src="/common/admin/js/jquery.js"></script>   
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="/common/host/layer/layer.js" type="text/javascript"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top"style="margin-top:-10px;">
    <h1><img src="/common/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="/adminlog"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>首页详情</h2>

  <ul style="display:block">
    <li><a href="/carousel" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>  
    <li><a href="/adver/create" ><span class="icon-caret-right"></span>广告位</a></li>
    <li><a href="/cates/create" ><span class="icon-caret-right"></span>栏目管理</a></li>
    <li><a href="/adminproduct/create" ><span class="icon-caret-right"></span>产品详情</a></li>
    <li><a href="/adminwenti/index" ><span class="icon-caret-right"></span>反馈处理</a></li>
  </ul>   

    
  <h2><span class="icon-user"></span>用户管理</h2>

  <ul>
    <li><a href="/adminuser/create"><span class="icon-caret-right"></span>用户添加</a></li>
    <li><a href="/adminuser"><span class="icon-caret-right"></span>用户列表</a></li>

  </ul>
  <h2><span class="icon-user"></span>活动管理</h2>
    <ul style="display:block"><li><a href="/adminhd/index"><span class="icon-caret-right"></span>活动列表</a></li></ul>

  <h2><span class="icon-user"></span>友情链接</h2>

  <ul>
    <li><a href="/fri/index"><span class="icon-caret-right"></span>链接列表</a></li>
    <li><a href="/fri/create"><span class="icon-caret-right"></span>添加链接</a></li>

  </ul>

  <h2><span class="icon-user"></span>订单表</h2>
  <ul style="display:block">
    <li><a href="/adminorder/index"><span class="icon-caret-right"></span>订单详情</a></li>
  </ul>

   <h2><span class="icon-user"></span>评价管理</h2>
    <ul style="display:block">
    <li><a href="/adminpingjia/index"><span class="icon-caret-right"></span>用户评价</a></li>
  </ul>
  <h2><span class="icon-user"></span>站点管理</h2>
    <ul style="display:block">
    <li><a href="/admin/manage"><span class="icon-caret-right">站点详情</span></a></li>
  </ul>
  <h2><span class="icon-user"></span>购物车管理</h2>
  <ul style="display:block">
    <li><a href="/admincur/index"><span class="icon-caret-right">购物车详情</span></a></li>
  </ul>
    <h2><span class="icon-user"></span>屏蔽词</h2>
  <ul style="display:block">
    <li><a href="/adminpingbi/index"><span class="icon-caret-right">添加屏蔽词</span></a></li>
  </ul>

  <h2><span class="icon-user"></span>收藏夹管理</h2>
    <ul style="display:block">
    <li><a href="/adminshoucang/index"><span class="icon-caret-right"></span>收藏夹列表</a></li>
  </ul>

</div>

<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
  @section('content')
  
  @show
</div>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>