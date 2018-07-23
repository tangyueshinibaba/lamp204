@extends('host.common.default')
@section('content')
@include('host.vip.index')
 <!--右侧样式-->
  <div class="contRight">
   <h2 class="oredrName">
    订单详情
   </h2>
   <table style="border:1px solid #ccc">
    <tr>
     <th>订单编号</th>
     <td>{{$orders->ddh}}</td>
    </tr>
    <tr>
     <th>商品名称</th>
     <td>{{$orders->oname}}</td>
    </tr>
    <tr>
     <th>订单价钱</th>
     <td>￥{{$orders->zongjia}}</td>
    </tr>
    <tr>
     <th>订单信息</th>
     <td> 
{{$orders->address}}</td>
    </tr>
    <tr>
     <th>商家</th>
     <td>17商城</td>
    </tr>
    <tr>
     <th>支付方式</th>
     <td>支付宝支付</td>
    </tr>
    <tr>
     <th>支付状态</th>
     <td>成功</td>
    </tr>
   </table> 
   </div>
  </div>
 </div>
</div>

@endsection