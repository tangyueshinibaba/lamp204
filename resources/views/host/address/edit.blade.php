@extends('host.common.default')
@section('content')
@include('host.vip.index')
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