@extends('host.common.default')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger cur1">
        @foreach ($errors->all() as $error)
        <script>
         layer.alert('{{$error}}', {icon: 6});
        </script>
        @endforeach
    </div>
@endif
<style>
img {
    max-width: none;
}
.tb-pic a {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.tb-pic a img {
    vertical-align: middle;
}
.tb-pic a {
*display:block;
*font-family:Arial;
*line-height:1;
}
.tb-thumb {
    margin: 10px 0 0;
    overflow: hidden;
}
.tb-thumb li {
    float: left;
    width: 86px;
    height: 86px;
    overflow: hidden;
    border: 1px solid #cdcdcd;
    margin-right: 5px;
}
.tb-thumb li:hover, .tb-thumb .tb-selected {
    width: 84px;
    height: 84px;
    border: 2px solid #799e0f;
}
/* .tb-s310, .tb-s310 a {
    height: 300px;
    width: 400px;
} */
/* .tb-s310, .tb-s310 img {
    max-height: 300px;
    max-width: 400px;
} */
.tb-booth {
    border: 1px solid #CDCDCD;
    position: relative;
    z-index: 1;
}
div.zoomDiv {
    z-index: 999;
    position: absolute;
    top: 0px;
    left: 0px;
    background: #ffffff;
    border: 1px solid #ccc;
    display: none;
    overflow: hidden;
}

div.zoomMask {
    position: absolute;
    background: url("images/mask.png") repeat;
    cursor: move;
    z-index: 1;
}
<!--弹出隐藏层-->
 .black_overlay {
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 1200px;
    background-color: black;
    z-index: 9999;
    -moz-opacity: 0.4;
    opacity: 0.40;
    filter: alpha(opacity=40);
}
.white_content {
    display: none;
    position: absolute;
    top: 20%;
    left: 40%;
    width: 400px;
    height: 175px;
    border: none;
    background-color: white;
    z-index: 100200;
    overflow: auto;
}
.white_content_small {
    display: none;
    position: absolute;
    top: 20%;
    left: 30%;
    width: 40%;
    height: 50%;
    background-color: white;
    z-index: 1002;
    overflow: auto;
}
.dialogbox {
    padding: 20px;
    line-height: 40px;
}
.addbtn {
    width: 22px;
    height: 22px;
    background: url(images/close2.png) no-repeat;
    margin-right: 5px;
    margin-top: 3px;
    border: none;
    float: right;
}
</style>
<script type="text/javascript">
//弹出隐藏层
function ShowDiv(show_div,bg_div){
document.getElementById(show_div).style.display='block';
document.getElementById(bg_div).style.display='block' ;
var bgdiv = document.getElementById(bg_div);
bgdiv.style.width = document.body.scrollWidth;
// bgdiv.style.height = $(document).height();
$("#"+bg_div).height($(document).height());
};
//关闭弹出层
function CloseDiv(show_div,bg_div)
{
document.getElementById(show_div).style.display='none';
document.getElementById(bg_div).style.display='none';
};

</script>
</head>

<body>


<!--头部快捷栏END-->

<div class="clear">&nbsp;</div>

<!--网站头部-->
<div class="sup-wid">
    <div><img src="/common/host/images/TB27.gif" width="100%"/></div>
    <div class="supplie-top">
        <div class="clear">
           
        </div>
        <div class=" clear bread"><a href="#">首页</a> <span class="pipe">&gt;</span> <a href="#">某供应商</a> <span class="pipe">&gt;</span> <a href="#">某产品</a></div>
</div>

  <div class="pro_detail" >
        <div class="pro_detail_img float-lt">
            <div class="gallery">
                <div class="tb-booth tb-pic tb-s310 zhaopian" style="width:300px;height:300px;"> 
                <a href="#"><img src="/uploads/{{$n[0]}}"  alt="展品细节展示放大镜特效" rel="/uploads/{{$n[0]}}" class="jqzoom"  ></a> </div>
                <ul class="tb-thumb" id="thumblist" >
                    <li class="tb-selected">
                        <div class="tb-pic tb-s40" > <a href="#"><img src="/uploads/{{$n[1]}}" style="width:88px;heigth:88px;" mid="/uploads/{{$n[1]}}" big="/uploads/{{$n[1]}}"></a></div>
                    </li>
                    <li  style="margin-left:10px;">
                        <div class="tb-pic tb-s40"><a href="#"><img src="/uploads/{{$n[2]}}"  style="width:88px;heigth:88px;" mid="/uploads/{{$n[2]}}" big="/uploads/{{$n[2]}}"></a></div>
                    </li>
                    <li  style="margin-left:10px;">
                        <div class="tb-pic tb-s40"><a href="#"><img src="/uploads/{{$n[3]}}"  style="width:88px;heigth:88px;" mid="/uploads/{{$n[3]}}" big="/uploads/{{$n[3]}}"></a></div>
                    </li>
                    
                </ul>
            </div>
            <style type="text/css">
                 .jqzoom{
                    width: 300px;
                    height: 300px;
                } 
            </style>
            <script type="text/javascript">
        $(function(){
                $("#h1").toggle(function(){
                    $("#h1").css("background-image","url('images/iconfont-xingxingman_add.png')");
                },function(){
                    $("#h1").css("background-image","url('images/iconfont-xingxingman_add.png') ");
                })
            }) 

</script>
            <input type="button" value="加入收藏" id="h1" class="addcart" onclick="ShowDiv('MyDiv2','fade2')" />
        </div>
       <div class="float-lt pro_detail_con">
<form action="/goumai/store/{{$products->id}}" method="get">
    <div class="pro_detail_tit">{{$products->pname}}</div>
   
    <div class="clear"></div>
   <!--  <div class="pro_detail_price  margin-t20"><span class="margin-r20">市场价</span><span style=" font-size:16px"><s>￥450.00</s></span></div> -->
    <div class="clear"></div>
    <span class=" pro_detail_act margin-t20 fl margin-r20">单价</span>
    <span class=" pro_detail_act margin-t20 fl margin-r20" style="font-size:26px; font-weight:bold; color:#dd514c;">¥</span>
    <div class="pro_detail_act margin-t20 fl">
    <span style="font-size:26px; font-weight:bold; color:#dd514c;" class="danjia">{{$products->price}}</span></div>
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
            
            <input type="submit" class="pro_detail_shop shopping" value="立即购买" style="display:inline;">
            <a href="#" class="pro_detail_shop gouwu" style="float:left;">加入购物车</a>
            <!-- <li class="pro_detail_shop"><a href="#" onclick="ShowDiv('MyDiv','fade')">加入购物车</a></li> -->
        </ul>
    </div>
    </form>
    
</div>
<script>
  $('.gouwu').click(function(){
  
        //接受数量
        var sl=$('.sllll');
        var shuliang=sl.val();

        //获取总价
        var price=$('.totalMoney');
        var zj=price.text();
        //获取单价
        var dj=$('.danjia').text();
        //获取规格
        var guige=$('.guige li input:checked').val();
        var img=$('.zhaopian img').attr('src');
        var pname=$('.pro_detail_tit').html();
        //console.log(guige+'--'+shuliang);return;
       
        $.get('/cur/store/{{$products->id}}',{'a':shuliang,'b':zj,'c':guige,'d':dj,'e':img,'f':pname},function(msg){
            layer.alert('添加成功', {icon: 6});
        },'html');
         
       
      
  })
</script>
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
       <!--  <div class="float-rt pro_right">
           <div align="center">
               <p><img src="/common/host/images/lmrz.png" /></p>
               <p class="margin-t10">普通会员</p>
           </div>
           <div align="center"><img src="/common/host/images/pro_V2_r6_c9.png" />
               <p class="line-ht20">信用度</p>
               <p class="line-ht20" style="color:#ec3c36;">2.5</p>
           </div>
           <div align="center"><img src="/common/host/images/pro_V2_r8_c10.png" />
               <p class="line-ht30">在线联系</p>
           </div>
           <div align="center"><img src="/common/host/images/pro_V2_r8_c9.png" />
               <p class="line-ht30">了解更多</p>
           </div>
       </div> -->
    </div>
    <div class="clear"></div>
    <script>
        $(function(){
            $(".pro_tab li").each(function(i){
                $(this).click(function(){
                    $(this).addClass("cur").siblings().removeClass("cur");
                    $(".conlist .conbox").eq(i).show().siblings().hide();
                })
            })
        })
    </script>
  <div class="pro_con margin-t55" style="overflow:hidden;">
        <div class="pro_tab">
            <ul>
                <li class="cur">产品介绍</li>
               <!--  <li>规格及包装</li> -->
                <li>评价</a></li>
            </ul>
        </div>
        <div class="conlist">
            <div class="conbox" style="display:block;">{!!$products->jieshao!!}</div>
          <!--   <div class="conbox">2</div> -->
            <div class="conbox">
                <div class="pro_judge">
                    <ul>
                        <li class="cur">
                            <input name="RadioGroup1" type="radio" value="" checked="checked" id="RadioGroup1_0" />
                            全部（100）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_1" />
                            好评（80）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_2" />
                            中评（10）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_3" />
                            差评（10）</li>
                    </ul>
                    <table width="100%" border="0">
                        <tr>
                            <td width="80" align="left"><a href="" rel="" class="preview"><img src="/uploads/{{$n[0]}}" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="hotpro">
        <div class="hotpro_title">热销产品</div>
        <div class="hotpro_box">
            <div class="pro-view-hot">
                <ul>
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul style="margin-right:0;">
                    <li class="pro-img"><a href="#"><img src="/common/host/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
            </div>
        </div>
    </div>
    
</div>

<div class="clear">&nbsp;</div>

<!--弹出层时背景层DIV--> 

<!--商品添加成功DIV-->
<div id="fade" class="black_overlay"> </div>
<div id="MyDiv" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv','fade')">
        <input type="button" class="addbtn">
        </span>商品加入货仓 </div>
    <div class="dialogbox">
        <p>商品添加成功！</p>
    </div>
</div>
</div>

<!--商品收藏成功DIV-->
<div id="fade2" class="black_overlay"> </div>
<div id="MyDiv2" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv2','fade2')">
        <input type="button" class="addbtn">
        </span>商品收藏 </div>
    <div class="dialogbox">
        <p>商品收藏成功！</p>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

    $(".jqzoom").imagezoom();
    
    $("#thumblist li a").mousemove(function(){
        $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
        $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
        $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
    });

});
</script>
</body>
</html>
@endsection


