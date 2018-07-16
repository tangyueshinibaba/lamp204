<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/common/host/css/common.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/style.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/user_style.css" rel="stylesheet" type="text/css" />
<link href="/layui/css/layui.css" rel="stylesheet" type="text/css" />


<link href="/common/host/skins/all.css" rel="stylesheet" type="text/css" />

<link href="/common/host/css/base.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/css.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/style1.css" rel="stylesheet" type="text/css" />


<script src="/common/host/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/common/host/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/common/host/js/common_js.js" type="text/javascript"></script>
<script src="/common/host/js/footer.js" type="text/javascript"></script>
<script src="/common/host/layer/layer.js" type="text/javascript"></script>

<script src="/common/host/js/jquery.simpleGal.js"></script>
<script type="text/javascript" src="/common/host/js/jquery.imagezoom.min.js"></script>





<script src="/common/host/js/iCheck.js" type="text/javascript"></script>
<script src="/common/host/js/custom.js" type="text/javascript"></script>
<script src="/common/host/address/area.js" type="text/javascript"></script>


<title>网站首页</title>
</head>

<body>
<head>
 @if(session('username') !== null)
 <!--顶部开始-->
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
     <div class="Collection"><a href="#" class="green">{{ session('username')}}已登录</a><a href="/user/edit/{{ session('id')}}" class="green">个人中心</a><a href="/login/logout" class="green">退出登录</a></div>
    <div class="hd_top_manu clearfix">
      <ul class="clearfix">
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/host">首页</a></li> 
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>({{session('res')}})</b></a></li> 
      </ul>
    </div>
  </div>
</div>
<!--顶部结束-->
 @else
  <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
    <div class="Collection"><a href="/login/login" class="green">请登录</a> <a href="/user/create" class="green">免费注册</a></div>
    <div class="hd_top_manu clearfix">
      <ul class="clearfix">
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/host">首页</a></li> 
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>({{session('res')}})</b></a></li> 
      </ul>
    </div>
  </div>
</div>
@endif
<!--logo开始-->
  <div id="header"  class="header page_style">
  <div class="logo"><a href="index.html"><img src="/common/host/images/logo.png" /></a></div>
<!--logo结束--> 
  <!--结束图层-->
  <div class="Search">
        <div class="search_list">
            <ul>
                <li class="current"><a href="#">产品</a></li>
                <li><a href="#">信息</a></li>
            </ul>
        </div>
        <div class="clear search_cur">
           <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
           <input name="" type="submit" value="搜 索"  class="Search_btn"/>
        </div>
        <div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
</div>
 <!--购物车样式-->
 <div class="hd_Shopping_list" id="Shopping_list">

   <div class="s_cart">
   @if(session('username')==null)
    <a href="/cur/index" class="mycar">我的购物车</a> 
   <i class="ci-right"></i><i class="ci-count" id="shopping-amount">0</i>
   <script>
      $('.mycar').click(function(){
        layer.alert('请登录', {icon: 6});
        return false;
      })
   </script>
   @elseif(session('username')!=null)
   <a href="/cur/index">我的购物车</a> 
   <i class="ci-right">&gt;</i><i class="ci-count jiesuan" id="shopping-amount">{{session('res')}}</i>
   @endif
   
   </div>

   <div class="dorpdown-layer">
    <div class="spacer"></div>
     <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
     <ul class="p_s_list">     
        <li>
            <div class="img"><img src=""></div>
            <div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
            <div class="Operations">
            <p class="Price">￥55.00</p>
            <p><a href="#">删除</a></p></div>
          </li>
        </ul>       
     <div class="Shopping_style">

     <div class="p-total">共<b>{{session('res')}}</b>件商品　共计<strong>￥55</strong></div>
      <a href="/cur/index" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>


     </div>  
   </div>
 </div>
</div>
<script>

</script>
<!--菜单栏-->
    <div class="Navigation" id="Navigation">
         <ul class="Navigation_name">

            <li><a href="Home.html">首页</a></li>

            <li><a href="/host">首页</a></li>
            <li class="hour"><span class="bg_muen"></span><a href="#">半小时生活圈</a></li>
            <li><a href="#">你身边的超市</a></li>
            <li><a href="#">预售专区</a><em class="hot_icon"></em></li>
            <li><a href="products_list.html">商城</a></li>
            
            <li><a href="#">好评商户</a></li>
            <li><a href="#">热销活动</a></li>
            <li><a href="Brands.html">联系我们</a></li>
         </ul>           
        </div>
    <script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>

@section('content')
@show
<!--网站地图-->
<div class="fri-link-bg clearfix">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="/common/host/images/fo-logo.jpg" width="152" height="81" /></div>
        <div class="left"><img src="/common/host/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
       <div class="">
    <dl>
	 <dt>新手上路</dt>
	 <dd><a href="#">售后流程</a></dd>
     <dd><a href="#">购物流程</a></dd>
     <dd><a href="#">订购方式</a> </dd>
     <dd><a href="#">隐私声明 </a></dd>
	</dl>
	<dl>
	 <dt>配送与支付</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>售后保障</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>支付方式</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	
    <dl>
	 <dt>帮助中心</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
<<<<<<< HEAD
     <dd><a href="#">常见问题</a></dd>
	</dl>
   </div>
    </div>
</div>

=======
     <dd><a href="#">常见问题 </a></dd>
	</dl>     
   </div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->

<div class="copyright">

    <div class="copyright-bg">
        <div class="hotline">为生活充电在线 <span>招商热线：****-********</span> 客服热线：400-******</div>
        <div class="hotline co-ph">
            <p>版权所有Copyright ©***************</p>
            <p>*ICP备***************号 不良信息举报</p>
            <p>总机电话：****-*********/194/195/196 客服电话：4000****** 传 真：********
                
                <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
        </div>
    </div>
>>>>>>> origin/xyf

</div>



 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>消息中心</strong></a> </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">

		<p class="good_cart">{{session('res')}}</p>

			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <div class="bjfffs"></div>
        <dl onclick="javascript:;">
		    <dt><img src=""></dt>
		       <dd><strong>QQ客服1</strong>
		          <p class="p1">9:00-22:00</p>
		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
	          </div>
     </li>
	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span> <strong>微信</strong>
			<div class="cartBox">
       		<div class="bjfff"></div>
			<div class="QR_code">
			 <p><img src="" width="180px" height="180px" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    <li class="fixeBoxLi Home"> <a href="/shoucang/index"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>
</body>
</html>