@extends('host.common.default')
@section('content')
	<div class="user_style clearfix">
 <div class="user_center clearfix">
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
  <div class="right_style">
 <!--地址管理-->
  <div class="user_address_style">
    <div class="title_style"><em></em>地址管理</div> 
   <div class="add_address">
    <span class="name">修改收货地址</span>
    <form action="/address/update/{{$data->id}}" method="post">
      {{csrf_field()}}
    <table cellpadding="0" cellspacing="0" width="100%">
     <tr>
      <td class="label_name">收&nbsp;货&nbsp;&nbsp;人：</td>
      <td><input name="uname" type="text"  value="{{$data->uname}}" class="add_text" style=" width:100px"/><i>*</i></td>
    </tr>
     <tr>
      <td class="label_name">所在地区：</td>
        <td>
          <select id="Province" runat="server" name="province"  style="width: 90px" ></select>
          <select id="Country" runat="server"  name="country" style="width: 90px"></select>
          <select id="Town" runat="server" name="town"  style="width: 90px"></select>
          
          <script language="javascript">
            setup();
          </script>


          <i>*</i>
        </td>
      </tr>
     <tr>
      <td class="label_name">街道地址：</td>
      <td>
        <textarea name="address" cols="" rows="" style=" width:500px; height:100px; margin:5px 0px">{{$data->address}}</textarea>
      <i>*</i>
    </td>
    </tr>
     <tr>
      <td class="label_name">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</td><td><input name="youbian" type="text" value="{{$data->youbian}}" class="add_text" style=" width:100px"/><i>*</i></td>
    </tr>
     <tr><td class="label_name">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</td><td><input name="shouji" type="text" value="{{$data->shouji}}" class="add_text" style=" width:200px"/><i>*</i></td>
     </tr>
     <tr>
      <td class="label_name">固定电话：</td>
     <td><input name="dianhua" type="text" value="{{$data->dianhua}}" class="add_text" style="width:200px"></td></tr>
     <tr class="moren_dz" style="color: #999">
      <td class="label_name"></td>
      
     </tr>
     <tr>
      <td colspan="2" class="center">
      <input name="" type="submit" value="保存"  class="add_dzbtn"/>
      <input name="" type="reset" value="清空"  class="reset_btn"/>
    </td>
  </tr>
    </table>
  </form>
   </div>
     
  </div>
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
    </script>
@endsection