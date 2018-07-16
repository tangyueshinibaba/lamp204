@extends('host.common.default')
@section('content')
	<div class="user_style clearfix">
 <div class="user_center clearfix">
   <div class="left_style">
     <div class="menu_style">
     <div class="user_title"><a href="用户中心.html">用户中心</a></div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="/common/host/images/user/{{ $user -> pic }}">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name">{{session('username')}}</span><a href="#">[修改密码]</a></p>
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
  <div class="right_style">
  <div class="title_style"><em></em>订单管理</div> 
   <div class="Order_form_style">
      <div class="Order_form_filter">
       <a href="#" class="on">全部订单（{{$r}}）</a>
       <a href="/pingjia/show" class="">已评价（2）</a>
       <a href="#" class="">代发货（3）</a>
       <a href="#" class="">待收货（5）</a>
       <a href="#" class="">退货/退款（0）</a>
       <a href="#" class="">交易成功（0）</a>
       <a href="#" class="">交易关闭（0）</a>
      </div>
      <div class="Order_Operation">
     <div class="left"> <label><input name="" type="checkbox" value=""  class="checkbox"/>全选</label> <input name="" type="submit" value="批量确认收货"  class="confirm_Order"/></div>
     <div class="right_search"><input name="" type="text"  class="add_Ordertext" placeholder="请输入产品标题或订单号进行搜索"/><input name="" type="submit" value="搜索订单"  class="search_order"/></div>
      </div>
      <div class="Order_form_list">
         <table>
         <thead>
          <tr><td class="list_name_title0">商品</td>
          <td class="list_name_title1">单价(元)</td>
          <td class="list_name_title2">数量</td>
          <td class="list_name_title4">实付款(元)</td>
          <td class="list_name_title5">订单状态</td>
          <td class="list_name_title6">操作</td>
         </tr>
         </thead> 
           
         @foreach($data as $k => $v)
         
            <tbody>       
           <tr class="Order_info"><td colspan="6" class="Order_form_time"><input name="" type="checkbox" value=""  class="checkbox"/>下单时间:{{$v->created_at}}| 订单号：{{$v->ddh}}</td></tr>
           <tr class="Order_Details" >
           <td colspan="3">
           <table class="Order_product_style">
             <tbody><tr>
             <td>
              <div class="product_name clearfix">
              <a href="#" class="product_img"><img src="Products/p_12.jpg" width="80px" height="80px"></a>
              <a href="3" class="p_name">{{$v->oname}}</a>
              <p class="specification">礼盒装20个/盒</p>
              </div>
              </td>
             <td class="split_line"></td>
             <td>{{$v->shuliang}}</td>
              </tr>
              </tbody>
            </table>
           </td>   
           <td class="split_line">{{$v->zongjia}}</td>
           <td class="split_line"><p style="color:#F33">买家已付款</p></td>
           <td class="operating">
                <a href="#">查看订单</a>
                <a href="#">在线客服</a>
              
               
                @if($v->sfpj==1)
                  <a href="#" style="display:inline;">已评价</a>
                  <a href="#"  style="display:inline;" class="lookpj" rel="{{$v->yiduiyi->id}}">查看评价</a>
               @else
               <a href="/pingjia/index/{{$v->id}}" style="display:inline;">去评价</a>
               @endif

                <a href="#" class="Delivery_btn">确认收货</a>   
                      
           </td>
           </tr>
           </tbody>  
           @endforeach
           
         </table>
    </div>
     </div>
   </div>
   <script>
    $(document).ready(function(){
      $('.Order_form_style input').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });
    });
    //查看评价
    $('.lookpj').click(function(){
    layer.open({
      type: 2,
      area: ['700px', '450px'],
      fixed: false, //不固定
      maxmin: true,
      content: '/pingjia/show/'+$(this).attr('rel'),
    });
    })
    
    </script>
  </div>
 </div>
</div>

@endsection