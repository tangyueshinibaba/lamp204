@extends('host.common.default')
@section('content')
<div class="user_style clearfix">
 <div class="user_center clearfix">
 <!--产品预订样式-->
 <div class="left_style">
     <div class="menu_style">
     <div class="user_title"><a href="用户中心.html">用户中心</a></div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="images/people.png">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name">化海天堂</span><a href="#">[修改密码]</a></p>
       <p>访问时间：2016-1-21 10:23</p>
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
      <dt class="transaction_manage"><em class="icon_4"></em>分销管理</dt>
      <dd>
        <ul>
          <li> <a href="#">店铺管理</a></li>
          <li> <a href="#">我的盟友</a></li>
          <li> <a href="#">我的佣金</a></li>
          <li> <a href="#">申请提现</a></li>
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
   <div class="Booking_style">
    <div class="Note"></div>
      <div class="Order_form_list">      
       <table>
         <thead>
          <tr><td class="list_name_title0">商品</td>
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
        <!--    <input name="" type="checkbox" value=""  class="checkbox"/>下单时间：2015-12-3 | 订单号：445454654654654 <span class="Time_left"></span> -->
           </td>
           </tr>
           <tr class="Order_Details">
           <td class="Order_product_style">       
            <div class="product_name clearfix">
            <a href="#" class="product_img"><img src="{{$v->profile}}" width="80px" height="80px"></a>
            <a href="3" class="p_name">{{$v->pname}}</a>
            <p class="specification">礼盒装20个/盒</p>
            </div>
           </td>
           <td class="split_line">{{$v->price}}</td>
           <td>{{$v->shuliang}}</td>
           @if($v->guige==1)
            <td class="split_line">规格一</td>
            @elseif($v->guige==2)
            <td class="split_line">规格二</td>
            @elseif($v->guige==3)
            <td class="split_line">规格三</td>
           @endif
            
           <td class="split_line">{{$v->fukuan}}</td>
           <td class="operating">
             <a href="/cur/destroy/{{$v->id}}">删除</a>
             <a href="#">查看物流</a>
             <a href="#">联系客服</a>
           </td>
           </tr>
           </tbody>
            @endforeach            
         </table>

      </div>
   </div>
  </div>
</div>
</div>
@endsection