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
   <div class="Booking_style">
    <div class="Note"></div>
      <div class="Order_form_list">      
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
            <a href="#" class="product_img" style="margin-left:20px;"><img src="{{$v->profile}}" width="80px" height="80px"></a>
            <a href="3" class="p_name" style="margin-left:50px;">{{$v->pname}}</a>
            <p class="specification" style="margin-left:50px;">礼盒装20个/盒</p>
            </div>
           </td>
           <td class="split_line ">{{$v->price}}</td>
           <td>{{$v->shuliang}}</td>
           @if($v->guige==1)
            <td class="split_line">规格一</td>
            @elseif($v->guige==2)
            <td class="split_line">规格二</td>
            @elseif($v->guige==3)
            <td class="split_line">规格三</td>
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
      </div>
     <a href="/cur/show" class="btn" style="width:100px;height:30px;line-height:30px;float:right;">总价:￥{{$s}}</a>
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

        //获取一个物品的价格
       $('.sss').click(function(){
        var s=$('.pricee').text();
        console.log(s);
       })
      </script>
   </div>
  </div>
</div>
</div>
@endsection