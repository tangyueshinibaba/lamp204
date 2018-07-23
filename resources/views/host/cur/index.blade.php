@extends('host.common.default')
@section('content')
<link type="text/css" href="/common/yiqi/css/css.css" rel="stylesheet" />
<script type="text/javascript" src="/common/yiqi/js/jquery.js"></script>
<script type="text/javascript" src="/common/yiqi/js/js.js"></script>
<script src="/common/yiqi/js/wb.js" type="text/javascript" charset="utf-8"></script>
<div class="user_style clearfix">
 <div class="user_center clearfix">
 <!--产品预订样式-->
 <div class="left_style">
     <div class="menu_style">
     <div class="user_title"><a href="用户中心.html">用户中心</a></div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="/common/host/images/user/{{ $user -> pic }}">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name">{{$user->uname}}</span><a href="#">[修改密码]</a></p>
       <p>访问时间：{{$user->created_at}}</p>
       </div>           
     </div>
     <div class="sideMen">
     <!--菜单列表图层-->
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_1"></em>订单管理</dt>
      <dd>
        <ul>
          <li> <a href="用户中心-我的订单.html">我的订单</a></li>
          <li> <a href="用户中心-收货地址.html">收货地址</a></li>
          <li> <a href="用户中心-产品预订.html">产品预订</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="#"> 用户信息</a></li>
        <li> <a href="#"> 我的收藏</a></li>
        <li> <a href="#"> 我的留言</a></li>
        <li> <a href="#">我的标签</a></li>
        <li> <a href="#"> 我的推荐</a></li>
        <li><a href="#"> 我的评论</a></li>
      </ul>
    </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_3"></em>账户管理</dt>
      <dd>
       <ul>
       <li><a href="用户中心-账户管理.html">账户余额</a></li>
        <li><a href="用户中心-消费记录.html">消费记录</a></li>   
       <li><a href="#">跟踪包裹</a></li>
       <li><a href="#">资金管理</a></li>
      </ul>
     </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_4"></em>评价管理</dt>
      <dd>
        <ul>
          <li> <a href="/pingjia/index">我的评价</a></li>
        </ul>
      </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>
 </div>
  <!--右侧样式-->
 @if (session('success'))
  <script>
     layer.alert('{{session('success')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
@if(session('error'))
  <script>
   layer.alert('{{session('error')}}', {
      icon: 2,
      skin: 'layer-ext-moon'
    })
  </script>
@endif
  <div class="right_style">
  <div class="title_style"><em></em>购物车</div> 
  <img src="/common/yiqi/images/car1.jpg" width="951" height="27">
   <div class="Booking_style">
    <div class="Note"></div>
      <div class="Order_form_list">  
          @if($changdu==0)
           <today><img src="/common/host/images/gou.jpg" alt="" style="width:100px;height:100px;margin-left:450px;"><p style="display:inline;">购物车空空如也~~</p></today> 
          @else    
       <table>
         <thead>
          <tr>
          <td class="list_name_title0">商品</td>
          <td class="list_name_title1">单价(元)</td>
          <td class="list_name_title2">数量</td>
          <td class="list_name_title2">规格</td>
          <td class="list_name_title4">实付款(元)</td>
          <td class="list_name_title6">操作</td>
         </tr></thead> 
         @foreach($data as $k=>$v)  
          <tbody>       
           <tr class="Order_info">
           <td colspan="7" class="Order_form_time">
           </td>
           </tr>
           <tr class="Order_Details">
           <td class="Order_product_style">       
            <div class="product_name clearfix">
            <input type="checkbox" style="float:left;" name="che[]" value="{{$v->id}}" class="sss">
            <input type="hidden" value="{{$v->pid}}">
            <a href="#" class="product_img" style="margin-left:20px;"><img src="{{$v->profile}}" width="80px" height="80px"></a>
            <a href="3" class="p_name" style="margin-left:50px;">{{$v->pname}}</a>
            <p class="specification" style="margin-left:50px;">礼盒装20个/盒</p>
            </div>
           </td>
           <td class="split_line ">{{$v->price}}</td>
           <td class="sl">{{$v->shuliang}}</td>
           @if($v->guige==1)
            <td class="split_line guigea" value="{{$v->guige}}">规格一</td>
            @elseif($v->guige==2)
            <td class="split_line guigea" value="{{$v->guige}}">规格二</td>
            @elseif($v->guige==3)
            <td class="split_line guigea" value="{{$v->guige}}">规格三</td>
           @endif
           <td class="split_line pricee" value="55">{{$v->fukuan}}</td>
           <td class="operating">
             <a href="/cur/destroy/{{$v->id}}">删除</a>
             <a href="#">查看物流</a>
             <a href="#">联系客服</a>
           </td>
           </tr>
           </tbody>
         
            @endforeach 

         </table>
        @endif
      </div>
      <div class="zongji">
          总计(不含运费)：<strong  class="red">总价:￥</strong><strong class="red zj">0</strong>
      </div>

      <div class="jiesuan">
        <a href="/host" class="jie_1">继续购物&gt;&gt;</a>
        <a href="#" class="jie_2">立即结算&gt;&gt;</a>
        <div class="clears"></div>
     </div>

     <!-- <a href="/cur/show" class="btn" style="width:100px;height:30px;line-height:30px;float:right;">总价:￥{{$s}}</a> -->
     <a href="#" class="btn qsc">批量删除</a>
      
      <script>
      
        var ck=$('.sss');
        //批量删除
        $('.qsc').click(function(){
            var items = [];
            for (var i=0; i<ck.length; i++) {
                if (ck[i].checked) {
                    items.push(ck[i].value);  // 将id都放进数组
                }
            }
          if(items ==null || items.length==0){
            return false;
          }
            $.get('/cur/deleteall',{'che':items},function(msg){
              if(msg == 'success'){
                  layer.msg('删除成功',{icon: 6});
                  // 移除页面 节点
                  $('input:checked').parent().parent().parent().parent().remove();
                }else{
                  layer.msg('删除失败', {icon: 5});
                }
            },'html')
           
        })

      //获取每个价格或者总价
      $('.sss[type=checkbox]').click(function(){
        //选择购买的商品的id
        pids=[];
        $('.sss:checked').next().each(function(){
          pids.push(parseInt($(this).val()));
        });
        //选择数量
        sl=[];
        $('.sss:checked').each(function(){
          sl.push(parseInt($(this).parent().parent().parent().find('.sl').text()));
        });
        //获取总价
        s=0;
       $('.sss:checked').parent().parent().parent().find('.pricee').each(function(){
          s+=parseInt($(this).text());
       });
        $('.zj').html(s);
        //获取规格
        gg=[];
        $('.sss:checked').each(function(){
            gg.push($(this).parent().parent().parent().find('.guigea').text());
        })
      });
      //立即结算
      $('.jie_2').click(function(){
        if($('.zj').html()==0){
          layer.alert('亲!请选择购买商品哦~~');
          return false;
        }
        $.get('/cur/tijiao',{'pid':pids,'sl':sl,'zongjia':s,'guige':gg},function(msg){
           if(msg=='success'){
              location.href="/cur/show";
           }else{
            return back()
           }
        },'html');

      })
      </script>
   </div>
  </div>
</div>
</div>
@endsection