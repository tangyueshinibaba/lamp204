@extends('host.common.default')
@section('content')
<style>
  .dizhi{
      border:1px solid red; width:50px;
      margin-left:100px;
    }
  .genghuan{
    cursor: pointer;
  }
  tr{
    width: 1229px;
    height: 40px;
  }
  .shuxing{
    color:red;
  }
  tbody tr:not(:first-child){
   display: none;
  }
</style>
<link type="text/css" href="/common/yiqi/css/css.css" rel="stylesheet" />
<script type="text/javascript" src="/common/yiqi/js/jquery.js"></script>
<script type="text/javascript" src="/common/yiqi/js/js.js"></script>
<script src="/common/yiqi/js/wb.js" type="text/javascript" charset="utf-8"></script>
<div style="margin-left:100px;">
    <div class="cont">
   <div class="carImg"><img src="/common/yiqi/images/car2.jpg" width="961" height="27"></div>
   <h4 class="orderTitle">收货地址</h4>
   <table class="ord">
   
    <tbody>
   
     @foreach($data as $k=>$v)
    @if($v->status==1)
    <tr>
       <td width="20%" class="genghuan">更换地址v</td>
      <input type="hidden" value="{{$v->id}}" class="mrid">
       <td width="10%">
       <label for="abc">
        <p class="d"><input type="hidden" id="abc"> {{$v->uname}}</p>
       </label>
       </td>
       <td width="50%" class="add">
      
        {{$v->sheng}},{{$v->shi}},{{$v->xian}},{{$v->address}} ,{{$v->youbian}},{{$v->shouji}}
     
       </td>
       <td>
  <!--       <span class="green upd">[修改]</span> | <span class="green add">[添加]</span> --> 
        @if($v->status==1)
        <span class="moren" style=" cursor: pointer; ">[默认地址]</span> | <a href="/address/index/{{session('id')}}">[添加]</a>
        @else
        <span class="moren" style=" cursor: pointer;">[设为默认]</span> | <a href="/address/index/{{session('id')}}">[添加]</a>
        @endif
       </td>

    </tr>
   @endif
    @endforeach
    @foreach($data as $k=>$v)
    @if($v->status==0)
    <tr>
      <td width="20%" class=""></td>
      <input type="hidden" value="{{$v->id}}" class="mrid">
       <td width="10%">
       <label for="abc">
        <p ><input type="hidden" > {{$v->uname}}</p>
       </label>
       </td>
       <td width="50%">
      
        {{$v->sheng}},{{$v->shi}},{{$v->xian}},{{$v->address}} ,{{$v->youbian}},{{$v->shouji}}
     
       </td>
       <td>
  <!--       <span class="green upd">[修改]</span> | <span class="green add">[添加]</span> --> 
        @if($v->status==1)
        <span class="moren" style=" cursor: pointer; ">[默认地址]</span> | <a href="/address/index/{{session('id')}}">[添加]</a>
        @else
        <span class="moren" style=" cursor: pointer;">[设为默认]</span> | <a href="/address/index/{{session('id')}}">[添加]</a>
        @endif
       </td>

    </tr>
   @endif
    @endforeach

   </tbody>
   <script>
   $('.moren').click(function(){
    $('.moren').removeClass('shuxing');
    $(this).addClass('shuxing');
    $('.moren').text('设为默认');
    $(this).text('默认地址');
   })
   </script>
   </table><!--ord/-->
   <div class="address">
    <div class="addList">
     <label><span class="red">* </span>选择地区:</label>
     <select>
      <option>请选择省</option>
     </select>
     <select>
      <option>请选择市</option>
     </select>
     <select>
      <option>请选择地区</option>
     </select>
    </div><!--addList-->
    <div class="addList">
     <label><span class="red">* </span>详细地址:</label>
     <input type="text">
    </div><!--addList-->
    <div class="addList">
     <label><span class="red">* </span>邮政编码:</label>
     <input type="text">
    </div><!--addList-->
    <div class="addList">
     <label><span class="red">* </span>收件人:</label>
     <input type="text">
    </div><!--addList-->
    <div class="addList">
     <label><span class="red">* </span>手机号码:</label>
     <input type="text"> 或者固定电话 <input type="text">
    </div><!--addList--> 
    <div class="addList2">
     <input type="image" src="" width="100" height="32">
    </div><!--addList2/-->
   </div><!--address/-->
   <h4 class="orderTitle">支付方式</h4>
   <ul class="zhiList">
   <li class="zhistyle">网银支付-借记卡</li>
   <li class="">网银支付-信用卡</li>
   <li>财付通-余额支付</li>
   <li>支付宝-余额支付</li>
   <div class="clears"></div>
  </ul><!--zhiList/-->
  <div class="zhifufangshi" style="display: block;">
   <ul class="yinhang">
    <li><input type="radio"><img src="/common/yiqi/images/yin1.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin2.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin3.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin4.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin5.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin6.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin7.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin8.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin9.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin1.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin2.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin3.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin4.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin5.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin6.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin7.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin8.gif"></li>
    <div class="clears"></div>
   </ul>
  </div><!--zhzhifufangshii/-->
  <div class="zhifufangshi" style="display: none;">
   <ul class="yinhang">
    <li><input type="radio"><img src="/common/yiqi/images/yin7.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin8.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin9.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin1.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin2.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin3.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin4.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin5.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin6.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin7.gif"></li>
    <li><input type="radio"><img src="/common/yiqi/images/yin8.gif"></li>
    <div class="clears"></div>
   </ul>
  </div><!--zhzhifufangshii/-->
  <div class="zhifufangshi" style="display: none;">
   <ul class="yinhang">
    <li><input type="radio"><img src="/common/yiqi/images/caifutong.jpg"></li>
    <div class="clear"></div>
   </ul>
  </div><!--zhzhifufangshii/-->
  <div class="zhifufangshi" style="display: none;">
   <ul class="yinhang">
    <li><input type="radio"><img src="/common/yiqi/images/zhifubao.jpg"></li>
    <div class="clear"></div>
   </ul>
  </div><!--zhzhifufangshii/-->
  </div>
  <tr>
     <td colspan="2" style="height:50px;">
      <a href="#" class="tijiao"><img src="/common/yiqi/images/tijao.png" width="142" height="32"></a>
     </td>
    </tr>
</div>
<script>
  $('.genghuan').click(function(){
    $(this).parent().siblings().toggle();
    $(this).parent().siblings().find('.genghuan').text('');
  });
  $('.tijiao').click(function(){
    a=$('.add').text();
    b=$('.d').text();
    $.get('/cur/shouhuo',{'address':a,'name':b},function(msg){
        if(msg=='success'){
              location.href="/cur/dizhi";
           }else{
            return back();
           }
    },'html');
  })
  //设置默认地址
  $('.moren').click(function(){
    var id=$(this).parent().parent().find('.mrid').val();
    var ids=[];
    $(this).parent().parent().siblings().find('.mrid').each(function(){
      ids.push($(this).val());
    });
    $.get('/address/moren',{'id':id,'ids':ids},function(msg){
      if(msg=='success'){
        location.href="/cur/show";
      }else{
        layer.alert('默认地址设置失败');
      }
    },'html');
  })

</script>
@endsection