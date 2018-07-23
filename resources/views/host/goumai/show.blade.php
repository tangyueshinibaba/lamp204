<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<link href="/common/host/css/common.css" rel="stylesheet" type="text/css" />
<link href="/common/host/css/style.css" rel="stylesheet" type="text/css" />

<script src="/common/host/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/common/host/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/common/host/js/common_js.js" type="text/javascript"></script>
<script src="/common/host/js/footer.js" type="text/javascript"></script>
<script src="/common/host/address/area.js" type="text/javascript"></script>
<script src="/layui/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/common/host/layer/layer.js" type="text/javascript"></script>
<script type="text/javascript" src="/layui/layui.all.js"></script>

<title>网站首页</title>
</head>

<body>
<head>

<link href="/queren/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
<link href="/queren/basic/css/demo.css" rel="stylesheet" type="text/css" />
<link href="/queren/css/cartstyle.css" rel="stylesheet" type="text/css" />
<link href="/queren/css/jsstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/queren/js/address.js"></script>
 <div id="header_top">
@if(session('username') !== null)
 <!--顶部开始-->
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
     <div class="Collection"><a href="#" class="green">{{ session('username')}}已登录</a><a href="/user/edit/{{ session('id')}}" class="green">个人中心</a><a href="/login/logout" class="green">退出登录</a></div>
    <div class="hd_top_manu clearfix">
      <ul class="clearfix">
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/host">首页1</a></li> 
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="/hostwenti/index">问题反馈</a> </li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/cur/index">我的购物车<b>({{session('res')}})</b></a></li>
       
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
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/host">首页1</a></li> 
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
       @if(session('username')==null)
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#" class="mycar">我的购物车<b>({{session('res')}})</b></a></li> 
        @endif
      </ul>
    </div>
  </div>
</div>
@endif

      <div class="nav white">
        <div class="logo"><img src="" /></div>
        <div class="logoBig">
          <li><img src=""></li>
        </div>

        <div class="search-bar pr">
          <a name="index_none_header_sysc" href="#"></a>
          <form style="border:1px solid #90B830;">
            <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
            <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit" style="background:#90B830;">
          </form>
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


<div class="concent">
        <!--地址 -->
        <div class="paycont">
          <div class="address">
            <h3>确认收货地址 </h3>
            <div class="clear"></div>
            <ul>
              <div class="per-border"></div>
              <div class="per-border"></div>
              @foreach($data1 as $k2=>$v2)
                @if($v2->status==1)
                <input type="hidden" class="morendizhiid" value="{{$v2->id}}" />
                @endif
            
              <li class="user-addresslist">
                <div class="address-left">
                  <div class="user DefaultAddr">
                    <span class="buy-address-detail">   
                   <span class="buy-user shouhuorendizhi">{{$v2->uname}} </span>
                    <span class="buy-phone shoujis">{{$v2->shouji}}</span>
                    </span>
                  </div>
                  <div class="default-address DefaultAddr">
               
                    <span class="buy-line-title buy-line-title-type">收货地址：</span>
                    <span class="buy--address-detail">
                   <span class="province shengs" >{{$v2->sheng}}</span>
                    <span class="city shis" >{{$v2->shi}}</span>
                    <span class="dist xians">{{$v2->xian}}</span>
                    <span class="street dizhis">{{$v2->address}}</span>
                    </span>

                    </span>
                  </div>
                  <ins class="deftip hidden">默认地址</ins>
                </div>
                <div class="address-right">
                  <span class="am-icon-angle-right am-icon-lg"></span>
                </div>
                <div class="clear"></div>

                <div class="new-addr-btn">
                <input type="hidden" class="zhuangtai" value="{{$v2->status}}" />
               
                 
                  @if($v2->status==1)
                   <a href="#" class="sheweimoren" value="{{$v2->id}}" ids="{{$v2->id}}" sheng="{{$v2->sheng}}"style="color:red;">默认地址</a>
                  @elseif($v2->status==0)
                   <a href="#" class="sheweimoren" value="{{$v2->id}}" ids="{{$v2->id}}" sheng="{{$v2->sheng}}">设为默认</a>
                  @endif
                  <input type="hidden" class="idsss"/>
                  <span class="new-addr-bar">|</span>
                  <a href="#">编辑</a>
                  <span class="new-addr-bar">|</span>
                  <a href="javascript:void(0);"  onclick="delClick(this);">删除</a>
                </div>

              </li>
              
              @endforeach
            </ul>

            <div class="clear"></div>
          </div>
          <!--物流 -->
          <div class="logistics">
            <h3>选择物流方式</h3>
            <ul class="op_express_delivery_hot">
              <li data-value="yuantong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -468px"></i>圆通<span></span></li>
              <li data-value="shentong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -1008px"></i>申通<span></span></li>
              <li data-value="yunda" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -576px"></i>韵达<span></span></li>
              <li data-value="zhongtong" class="OP_LOG_BTN op_express_delivery_hot_last "><i class="c-gap-right" style="background-position:0px -324px"></i>中通<span></span></li>
              <li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
            </ul>
          </div>
          <div class="clear"></div>

          <!--支付方式-->
          <div class="logistics">
            <h3>选择支付方式</h3>
            <ul class="pay-list">
              <li class="pay card"><img src="/queren/images/wangyin.jpg" />银联<span></span></li>
              <li class="pay qq"><img src="/queren/images/weizhifu.jpg" />微信<span></span></li>
              <li class="pay taobao"><img src="/queren/images/zhifubao.jpg" />支付宝<span></span></li>
            </ul>
          </div>
          <div class="clear"></div>

          <!--订单 -->
          <div class="concent">
            <div id="payTable">
              <h3>确认订单信息</h3>
              <div class="cart-table-th">
                <div class="wp">

                  <div class="th th-item">
                    <div class="td-inner">商品信息</div>
                  </div>
                  <div class="th th-price">
                    <div class="td-inner">单价</div>
                  </div>
                  <div class="th th-amount">
                    <div class="td-inner">数量</div>
                  </div>
                  <div class="th th-sum">
                    <div class="td-inner">金额</div>
                  </div>
                  <div class="th th-oplist">
                    <div class="td-inner">配送方式</div>
                  </div>

                </div>
              </div>
              <div class="clear"></div>

              <tr class="item-list">
                <div class="bundle  bundle-last">

                  <div class="bundle-main">
                    <ul class="item-content clearfix">
                      <div class="pay-phone">
                        <li class="td td-item">
                          <div class="item-pic">
                            <a href="#" class="J_MakePoint">
                              <img src="/queren/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg"></a>
                          </div>
                          <div class="item-info">
                            <div class="item-basic-info">
                              <a href="#" class="item-title J_MakePoint mingzi" data-point="tbcart.8.11">{{$pname}}</a>
                            </div>
                          </div>
                        </li>
                        <li class="td td-info">
                          <div class="item-props">
                          @if($guige=='1')
                            <span class="sku-line" value="{{$guige}}">规格一</span>
                          @elseif($guige=='2')
                            <span class="sku-line" value="{{$guige}}">规格二</span>
                          @elseif($guige=='3')
                            <span class="sku-line" value="{{$guige}}">规格三</span>
                          @endif
                          
                         
                          </div>
                        </li>
                        <li class="td td-price">
                          <div class="item-price price-promo-promo">
                            <div class="price-content">
                              <em class="J_Price price-now danjia">{{$dj}}</em>
                            </div>
                          </div>
                        </li>
                      </div>
                      <li class="td td-amount">
                        <div class="amount-wrapper ">
                          <div class="item-amount ">
                        
                          <input type="hidden"  value="{{$data->id}}" class="shangpinid" />
                      
                            <span class="phone-title">购买数量</span>
                            <div class="sl">
                              <input class="min am-btn jian" name="" type="button" value="-"  />
                              <input class="text_box shuliang" name="" type="text" value="{{$sl}}" style="width:30px;" disabled="disabled;" />
                              <input class="add am-btn jia" name="" type="button" value="+"  />
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="td td-sum">
                        <div class="td-inner">
                          <em tabindex="0" class="J_ItemSum number zongjia">{{$price}}</em>
                        </div>
                      </li>
                      <li class="td td-oplist">
                        <div class="td-inner">
                          <span class="phone-title">配送方式</span>
                          <div class="pay-logis">
                            包邮<b class="sys_item_freprice"></b>
                          </div>
                        </div>
                      </li>

                    </ul>
                    <div class="clear"></div>

                  </div>
              </tr>
              <div class="clear"></div>
              </div>

                           </div>
              <div class="clear"></div>
              <div class="pay-total">
            <!--留言-->
              <div class="order-extra">
                <div class="order-user-info">
                  <div id="holyshit257" class="memo">
                    <label>买家留言：</label>
                    <input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
                    <div class="msg hidden J-msg">
                      <p class="error">最多输入500个字符</p>
                    </div>
                  </div>
                </div>

              </div>
              <!--优惠券 -->
              <div class="buy-agio">
                <li class="td td-coupon">

                  <span class="coupon-title">优惠券</span>
                  <select data-am-selected>

                    <option value="a">
                      <div class="c-price">
                        <strong>￥8</strong>
                      </div>
                      <div class="c-limit">
                        【消费满95元可用】
                      </div>
                    </option>
                    <option value="b" selected>
                      <div class="c-price">
                        <strong>￥3</strong>
                      </div>
                      <div class="c-limit">
                        【无使用门槛】
                      </div>
                    </option>
                  </select>
                </li>

                <li class="td td-bonus">

                  <span class="bonus-title">红包</span>
                  <select data-am-selected>
                    <option value="a">
                      <div class="item-info">
                        ¥50.00<span>元</span>
                      </div>
                      <div class="item-remainderprice">
                        <span>还剩</span>10.40<span>元</span>
                      </div>
                    </option>
                    <option value="b" selected>
                      <div class="item-info">
                        ¥50.00<span>元</span>
                      </div>
                      <div class="item-remainderprice">
                        <span>还剩</span>50.00<span>元</span>
                      </div>
                    </option>
                  </select>

                </li>

              </div>
              <div class="clear"></div>
              </div>
              <!--含运费小计 -->
              <div class="buy-point-discharge ">
                <p class="price g_price ">
                  合计（含运费） <span>¥</span><em class="pay-sum" style="color:#90B830;">{{$price}}</em>
                </p>
              </div>

              <!--信息 -->
              <div class="order-go clearfix">
                <div class="pay-confirm clearfix">
                  <div class="box" style="border:1px solid #90B830;">
                    <div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
                      <span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee" style="color:#90B830;">{{$price}}</em>
                      </span>
                    </div>
                    <input type="hidden"  value="{{session('id')}}" class="uid" />
                    <div id="holyshit268" class="pay-address">
                       @foreach($data1 as $k=>$v)
                       @if($v->status==1)
                      <p class="buy-footer-address">
                        <span class="buy-line-title buy-line-title-type">寄送至：</span>
                        <span class="buy--address-detail">
                   <span class="province sheng">{{$v->sheng}}</span>
                        <span class="city shi">{{$v->shi}}</span>
                        <span class="dist xian">{{$v->xian}}</span>
                        <span class="street addressa">{{$v->address}}</span>
                        </span>
                        </span>
                      </p>
                      <p class="buy-footer-address">
                        <span class="buy-line-title">收货人：</span>
                        <span class="buy-address-detail">   
                                         <span class="buy-user shouhuo">{{$v->uname}}</span>
                        <span class="buy-phone shoujisss">{{$v->shouji}}</span>
                        </span>
                      </p>
                      @endif
                      @endforeach
                    </div>
                  </div>

                  <div id="holyshit269" class="submitOrder">
                    <div class="go-btn-wrap">
                      <a id="J_Go" href="#" class="btn-go tijiao" tabindex="0" title="点击此按钮，提交订单" style="background:#90B830;">提交订单</a>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>

            <div class="clear"></div>
          </div>
        </div>
        <div class="footer">
          <div class="footer-hd">
            <p>
              <a href="#">恒望科技</a>
              <b>|</b>
              <a href="#">商城首页</a>
              <b>|</b>
              <a href="#">支付宝</a>
              <b>|</b>
              <a href="#">物流</a>
            </p>
          </div>
          <div class="footer-bd">
            <p>
              <a href="#">关于恒望</a>
              <a href="#">合作伙伴</a>
              <a href="#">联系我们</a>
              <a href="#">网站地图</a>
              <em>© 2015-2025 Hengwang.com 版权所有</em>
            </p>
          </div>
        </div>
      </div>
      <div class="theme-popover-mask"></div>
      <div class="theme-popover">

        <!--标题 -->
        <div class="am-cf am-padding">
          <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">编辑地址</strong> / <small>Updata address</small></div>
        </div>
        <hr/>
         @foreach($data1 as $k3=>$v3)
          @if($v3->status==1)
        <div class="am-u-md-12">
          <form class="am-form am-form-horizontal">

            <div class="am-form-group">
              <label for="user-name" class="am-form-label">收货人</label>
              <div class="am-form-content">
                <input type="text" id="user-name" name="uname" value="{{$v3->uname}}"placeholder="收货人">
              </div>
            </div>

            <div class="am-form-group">
              <label for="user-phone" class="am-form-label">手机号码</label>
              <div class="am-form-content">
                <input id="user-phone" placeholder="手机号必填" type="email" name="shouji" value="{{$v3->shouji}}">
              </div>
            </div>

            <div class="am-form-group">
              <label for="user-phone" class="am-form-label">所在地</label>
              <div class="am-form-content address">
                <select id="Province" runat="server" name="province sheng" style="width: 90px">{{$v3->sheng}}11</select>
                <select id="Country" runat="server" name="country shi" style="width: 90px"></select>
                <select id="Town" runat="server" name="town xian" style="width: 90px"></select>
              </div>
            </div>

            <div class="am-form-group">
              <label for="user-intro" class="am-form-label">详细地址</label>
              <div class="am-form-content">
                <textarea class="" rows="3" id="user-intro" name="address" placeholder="输入详细地址"></textarea>
                <small>100字以内写出你的详细地址...</small>
              </div>
            </div>

            <div class="am-form-group theme-poptit">
              <div class="am-u-sm-9 am-u-sm-push-3">
                <div class="am-btn am-btn-danger">保存</div>
                <div class="am-btn am-btn-danger close">取消</div>
              </div>
            </div>
          </form>
          @endif
          @endforeach
        </div>

      </div>

      <div class="clear"></div>


<!--网站地图-->
<!--网站地图END-->
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
        <dt><img src="/queren/images/Service1.png"></dt>
           <dd><strong>QQ客服1</strong>
              <p class="p1">9:00-22:00</p>
               <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
              </dd>
            </dl>
        <dl onclick="javascript:;">
              <dt><img src="/queren/images/Service1.png"></dt>
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
       <p><img src="/queren/images/erweim.jpg" width="180px" height="180px" /></p>
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
  <script language="javascript">
            setup();
  </script>
  <script>
  //确认订单的在此确认
  //获取数量
  slss=parseInt($('.shuliang').val());
  //获取对应的总价
  zjs=parseInt($('.zongjia').text());
  $('.jia').click(function(){
     var sl=parseInt($('.shuliang').val());
     var sls=(++sl);
      if(sls>10){
        layer.alert('最多可以买10个~');
        $('.jia').style('disabled','disabled');
        return;
      }
      //获取单价
      var dj=parseInt($('.danjia').text());
      //计算总价
      //如果顾客想要在+数量  
      var zong=dj*(sls-slss)+zjs;
      //赋值给总价
      $('.zongjia').text(zong);
      //合计
      $('.pay-sum').text(zong);
      //实付款
      $('.style-large-bold-red').text(zong);
     
  })
  //对应的减法
  $('.jian').click(function(){
      //获取数量
      var sl=parseInt($('.shuliang').val());
      var sls=(--sl);
      if(sls<1){
        layer.alert('最少买1个');
        $('.jia').style('disabled','disabled');
        return;
      }
       //获取单价
      var dj=parseInt($('.danjia').text());
      //计算总价
      //如果顾客想要在+数量  
      var zong=dj*(slss-sls);
      var zong1=zjs-zong;
       //赋值给总价
      $('.zongjia').text(zong1);
      //合计
      $('.pay-sum').text(zong1);
       //实付款
      $('.style-large-bold-red').text(zong1);
  })
  $('.tijiao').click(function(){
  var guige=$('.sku-line').text();
  //接受名字
  var name=$('.mingzi').text();
  //接受数量
  var shuliang=$('.shuliang').val();
  //获取总价
  var zongjia=$('.zongjia').text();
  //获取商品id
  var pid=$('.shangpinid').val();
  //收货人
  var shou=$('.shouhuo').text();
  //用户id
  var yhid=$('.uid').val();
  //地址
  var sheng=$('.sheng').text();
  var shi=$('.shi').text();
  var xian=$('.xian').text();
  var address=$('.addressa').text();
  //ajax
  $.ajax({
    url:'/goumai/dingdan',
    type:'get',
    data:{'name':name,'shuliang':shuliang,'zongjia':zongjia,'pid':pid,'sheng':sheng,'shi':shi,'xian':xian,'address':address,'shou':shou,'guige':guige,'yhid':yhid},
    async:false,
    success:function(msg){
      if(msg=="success"){
          location.href="/cur/qrtijiao";
      }else{
        layer.alert('下单失败');
      }
    },
  });
})
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
//设为默认
$('.sheweimoren').click(function(){
  a=$(this).attr('ids');
   $('.sheweimoren[ids='+a+']').click(function(){
          layer.msg('你已经选择默认地址,不能重复选择');
          return false;
         })
  //获取默认地址id
  var morenid=$('.morendizhiid').val();
  //获取收货地址
   sheng=$(this).parent().parent().find('.shengs').text();
   xian=$(this).parent().parent().find('.xians').text();
   shi=$(this).parent().parent().find('.shis').text();
   dizhi=$(this).parent().parent().find('.dizhis').text();
   name=$(this).parent().parent().find('.shouhuorendizhi').text();
   shouji=$(this).parent().parent().find('.shoujis').text();
  $.ajax({
    url:'/goumai/dizhi',
    type:'post',
    data:{'a':a},
    async:false,
    success:function(msg){
     if(msg=='success'){
         layer.msg('设置成功');
         $('.sheweimoren').html('设为默认');
         $('.sheweimoren').css('color','');
         $('.sheweimoren[ids='+a+']').html('<font style="color:red;">默认地址</font>');
         
         $('.sheng').html(sheng);
         $('.shi').html(shi);
         $('.xian').html(xian);
         $('.addressa').html(dizhi);
         $('.shoujisss').html(shouji);
         $('.shouhuo').html(name);
     }else{
        layer.msg('设置失败');
     }
    },
  });
})
</script>


