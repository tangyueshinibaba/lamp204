@extends('host.common.default')
@section('content')
@include('host.vip.index') 
 
 <!--右侧样式-->
  <div class="right_style">
 <!--地址管理-->
  <div class="user_address_style">
    <div class="title_style"><em></em>地址管理</div> 
   <div class="add_address">
    <span class="name">添加送货地址</span>
    <form action="/address/store" method="post">
      {{csrf_field()}}
    <table cellpadding="0" cellspacing="0" width="100%">
     <tr>
      <td class="label_name">收&nbsp;货&nbsp;&nbsp;人：</td>
      <td><input name="uname" type="text"  class="add_text" style=" width:100px"/><i>*</i></td>
    </tr>
     <tr>
      <td class="label_name">所在地区：</td>
        <td>
          <select id="Province" runat="server" name="province" style="width: 90px" ></select>
          <select id="Country" runat="server" name="country" style="width: 90px"></select>
          <select id="Town" runat="server" name="town" style="width: 90px"></select>
          
          <script language="javascript">
            setup();
          </script>


          <i>*</i>
        </td>
      </tr>
     <tr>
      <td class="label_name">街道地址：</td><td><textarea name="address" cols="" rows="" style=" width:500px; height:100px; margin:5px 0px"></textarea><i>*</i></td>
    </tr>
     <tr>
      <td class="label_name">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</td><td><input name="youbian" type="text" class="add_text" style=" width:100px"/><i>*</i></td>
    </tr>
     <tr><td class="label_name">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</td><td><input name="shouji" type="text" class="add_text" style=" width:200px"/><i>*</i></td>
     </tr>
     <tr>
      <td class="label_name">固定电话：</td>
     <td><input name="dianhua" type="text" class="add_text" style="width:200px"></td></tr>
     <tr class="moren_dz" style="color: #999">
      <td class="label_name"></td>
      <td>
        <label><input name="status" type="checkbox" value="1">设置为默认地址</label>
     </td>
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
   <!--用户地址-->
   <div class="address_content">
    <div class="address_prompt">已添加了{{$n}}条地址，最多保存添加5条地址</div>
    <table cellpadding="0" cellspacing="0" class="user_address" width="100%">
    <thead>
     <tr class="label">
      <td width="80px;">收货人</td>
      <td width="180px;">地区</td>
      <td width="220px;">详细地址</td>
      <td width="80px;">邮编</td>
      <td width="120px;">电话手机</td>
      <td width="180px;">发票抬头</td>
      <td width="180px;">操作</td>
    </tr>
     </thead>
     <tbody>
      @foreach($address as $k => $v)
      <tr class="geshu">
        <td>{{$v->uname}}</td>
        <td>{{$v->sheng}}{{$v->shi}}{{$v->xian}}</td>
        <td>{{$v->address}}</td>
        <td>{{$v->youbian}}</td>
        <td>{{$v->shouji}}</td>
        <td>{{$v->dianhua}}</td>
        @if($v->status == 1)
        <td><a href="/address/edit/{{$v->id}}">修改</a> | <a href="/address/destroy/{{$v->id}}">删除</a> | <a href="#" class="moren" style="color:red">默认地址</a> </td>
        @else
        <td><a href="/address/edit/{{$v->id}}">修改</a> | <a href="/address/destroy/{{$v->id}}">删除</a> | <a href="#" class="moren">设为默认</a> </td>
        @endif
      </tr>
      @endforeach
     </tbody>
    </table>
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

    
      
      $('.add_dzbtn').click(function(){
        var a = $('.geshu').length;
        if(a >= 5){
          layer.alert('最多添加5条地址');
          return false;

        }
      })
    </script>

    <script type="text/javascript">
      $('.moren').click(function(){
        $('.moren').text('设为默认');
        $('.moren').removeAttr('style');

        for(var i = 0;i<=4;i++){
          $(this).html('默认地址');
          $(this).css({'color':'red'});
        }

      });
    </script>
@endsection