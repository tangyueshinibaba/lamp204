@extends('host.common.goumai')
@section('jieshao')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="float-lt pro_detail_con">
<form action="/goumai/store/{{$products->id}}" method="get">
    <div class="pro_detail_tit">{{$products->pname}}</div>
    <div class="pro_detail_ad">{{$products->jieshao}}</div>
    <div class="clear"></div>
   <!--  <div class="pro_detail_price  margin-t20"><span class="margin-r20">市场价</span><span style=" font-size:16px"><s>￥450.00</s></span></div> -->
    <div class="clear"></div>
    <span class=" pro_detail_act margin-t20 fl margin-r20">单价</span>
    <span class=" pro_detail_act margin-t20 fl margin-r20" style="font-size:26px; font-weight:bold; color:#dd514c;">¥</span>
    <div class="pro_detail_act margin-t20 fl">
    <span style="font-size:26px; font-weight:bold; color:#dd514c;">{{$products->price}}</span></div>
    <div class="clear"></div>
    <div class="act_block margin-t5"><span>本商品可使用9999积分抵用￥9.99元</span></div>
    <div class="pro_detail_number margin-t30">
        <div class="margin-r20 float-lt">数量</div>
        <div class=""> 
        	<i class="jian"></i>
                <input type="text"  value="{{$products->shuliang}}" disabled="disabled"  name="shuliang" class="float-lt choose_input shuliang ">
            <i class="jia"></i> <span>&nbsp;盒</span> <span>（库存{{$products->kucun}}盒）</span> </div>
        <div class="clear"></div>
    </div>
    <input type="hidden" class="sllll" value="{{$products->shuliang}}" name="shuliang">
    <div class="guige">
        <div class="margin-r20 float-lt" style="line-height:25px;">规格</div>
        
        <ul class="guige">
            <li><input type="radio" name="guige" value="1" id="male"><label for="male">规格一</label></li>
            <li><input type="radio" name="guige" value="2" id="male2"><label for="male2">规格二</label></li>
            <li><input type="radio" name="guige" value="3" id="male3"><label for="male3">规格三</label></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="pro_detail_number margin-t20">
    	<div class="margin-r20 float-lt ">总价 : </div>
        <div class="margin-r20 float-lt price">
        <span style="font-size:26px; font-weight:bold; color:#dd514c;">¥</span>
        <input type="hidden" name="price" value="{{$products->price}}" class="productssss"><span style="font-size:26px; font-weight:bold; color:#dd514c;" class="totalMoney">{{$products->price}}</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="pro_detail_btn margin-t30">
        <ul>
            <!-- //<li class="pro_detail_shop"><a href="/goumai/store/{{$products->id}}">立即购买</a></li> -->
            <input type="submit" class="pro_detail_shop" value="立即购买" style="display:inline">
            <li class="pro_detail_add"><a href="#" onclick="ShowDiv('MyDiv','fade')">加入我的货仓</a></li>
        </ul>
    </div>
    </form>
</div>

<script>
    $('.guige li').click(function(){
        $('.guige li').css('border','1px solid ');
        $(this).css('border','1px solid red');
    })
    var sl=$('.sllll');
	var p=$('.productssss');
	var price=$('.totalMoney');
	$('.jia').click(function(){

		//获取想要买的数量
		var n=$(this).prev();
		var n1=parseInt(n.val());
		//计算数量
		var num=n1+1;
		if(num>10){
		   alert('请合理消费');
           return;
		}
		//赋值
		n.val(num);
        sl.val(num);
		//获取单价
		var danjia=$(this).parent().parent().prev().prev().prev().text();
		var dj=parseFloat(danjia);
		//计算总价
		var sum=dj*num;
		//赋值
		price.text(sum);
        p.val(sum);

	})
	$('.jian').click(function(){
		//获取想要购买的数量
		var n=$(this).next();
		var n1=parseInt(n.val());
		//计算数量
		var num=n1-1;
		if(num<1)
		{
			return;
		}
		//赋值
		n.val(num);
        sl.val(num);
		//获取单价
		var danjia=$(this).parent().parent().prev().prev().prev().text();
		var dj=parseFloat(danjia);
		//计算总价
		var sum=dj*num;
		//赋值
		price.text(sum);
        p.val(sum);

	})

</script>
@endsection