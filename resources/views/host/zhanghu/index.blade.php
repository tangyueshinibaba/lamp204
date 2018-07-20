@extends('host.common.default')
@section('content')
@include('host.vip.index')

<div class="right_style">
  <div class="title_style"><em></em>账户管理</div> 
  <div class="user_Account_style">
   <div class="user_Account">
   <div class="title_name">我的账户余额：（小充钱包）</div>
   <div class="Balance clearfix">
    @if($user->money == null)
    <p class="je_Balance">账户余额：<b><i>0.00</i></b>元 </p>
    @else
    <p class="je_Balance">账户余额：<b><i>{{$user->money}}</i></b>元 </p>
    @endif
    <p class="clearfix Account_btn"><a href="/zhanghu/create" class="Recharge_btn" id="Recharge_btn1">充值</a><a href="/zhanghu/show/{{$user->id}}" class="withdraw_btn" id="cz_Records_btn">充值记录</a></p>
   </div>
   </div>
  </div>
  </div>
</div>
</div>
<script type="text/javascript">
//弹出一个iframe层
$('#cz_Records_btn').on('click', function(){
  layer.open({
    type: 2,
    title: '充值记录',
    maxmin: true,
    shadeClose: true, //点击遮罩关闭层
    area : ['900px' , '450px'],
    content:'1'
  });
});
</script>
@endsection