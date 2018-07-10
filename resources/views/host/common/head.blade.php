<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/common/host/css/common.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/style.css" rel="stylesheet" type="text/css" />
<script src="/common/host/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/common/host/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/common/host/js/common_js.js" type="text/javascript"></script>
<script src="/common/host/js/footer.js" type="text/javascript"></script>
<title>网站首页</title>
</head>

<body>
<head>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
      <div class="Collection"><a href="#" class="green">请登录</a> <a href="#" class="green">免费注册</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">首页</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>	
	  </ul>
	</div>
    </div>
  </div>
  <div id="header"  class="header page_style">
  <div class="logo"><a href="index.html"><img src="/common/host/images/logo.png" /></a></div>
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
   <div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="/common/host/images/tianma.png"></div>
		    <div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="Shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>
 </div>
</div>
<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a href="Home.html">首页</a></li>
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
<!--广告幻灯片样式-->
   	<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
			<div class="bd">
				<ul>
					<li><a href="#" target="_blank"><div style="background:url(/common/host/AD/ad-1.jpg) no-repeat; background-position:center; width:100%; height:450px;"></div></a></li>
					<li><a href="#" target="_blank"><div style="background:url(/common/host/AD/ad-2.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
					<li><a href="#" target="_blank"><div style="background:url(/common/host/AD/ad-1.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
					<li><a href="#" target="_blank"><div style="background:url(/common/host/AD/ad-2.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
				</ul>
			</div>
			<!-- 下面是前/后按钮-->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
		</script>
 </div>

<!--内容样式-->
<div id="mian">
 <div class="clearfix marginbottom">
 <!--产品分类样式栏目表-->
	@section('cates')
	@show
<!--产品分类样式栏目表结束-->
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",	});</script>
  <!--产品栏切换-->
  <div class="product_list left">
  		<div class="slideGroup">
			<div class="parHd">
				<ul><li>新品上市</li><li>超值特惠</li><li>本期团购</li><li>产品精选</li><li>抢先一步</li></ul>
			</div>
			<div class="parBd">
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_11.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_12.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_13.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_34.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_58.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_57.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_56.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_54.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_55.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_50.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_51.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_52.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_53.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_17.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_16.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="/common/host/products/p_19.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

			</div><!-- parBd End -->
		</div>
        <script type="text/javascript">
			/* 内层图片无缝滚动 */
			jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
			/* 外层tab切换 */
			jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
		</script>
        <!--广告样式-->
        @section('adver')
       	@show
       	<!--广告样式结束-->
  </div>
 </div>
 <!--板块栏目样式-->
 @section('product')
 @show
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/common/host/images/bk_img_19.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_15.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_13.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_12.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_11.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
   <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/common/host/images/bk_img_22.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_21.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_25.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_22.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_24.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="/common/host/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_31.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_32.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_33.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="/common/host/products/p_37.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
 </div>
 <!--友情链接-->
 <div class="link_style clearfix">
 <div class="title">友情链接</div>
 <div class="link_name">
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="/common/host/products/logo/34.jpg"  width="100"/></a>
 </div>
 </div>
</div>
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
     <dd><a href="#">推荐分享说明 </a></dd>
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
     <dd><a href="#">常见问题 </a></dd>
	</dl>
     <dl>
	 <dt>帮助中心</dt>
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
</div>
 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>消息中心</strong></a> </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		<p class="good_cart">9</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <div class="bjfffs"></div>
        <dl onclick="javascript:;">
		    <dt><img src="/common/host/images/Service1.png"></dt>
		       <dd><strong>QQ客服1</strong>
		          <p class="p1">9:00-22:00</p>
		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
				<dl onclick="javascript:;">
		          <dt><img src="/common/host/images/Service1.png"></dt>
		          <dd> <strong>QQ客服1</strong>
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
			 <p><img src="/common/host/images/erweim.jpg" width="180px" height="180px" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>

</body>
</html>
