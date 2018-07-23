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
 @if (session('success'))
  <script>
     layer.alert('{{session('success')}}', {
      icon: 2,
      skin: 'layer-ext-moon'
    })
  </script>   
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
    background: url() repeat;
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
            <input type="button" value="加入收藏" id="h1" class="addcart" />
        </div>
       <div class="float-lt pro_detail_con">
<form action="/goumai/store/{{$products->id}}" method="get">
    <div class="pro_detail_tit">{{$products->pname}}</div>
   <input type="hidden" value="{{session('id')}}" class="yonghuid">
    <div class="clear"></div>
   <!--  <div class="pro_detail_price  margin-t20"><span class="margin-r20">市场价</span><span style=" font-size:16px"><s>￥450.00</s></span></div> -->
    <div class="clear"></div>
    <input type="hidden" class="shangpinid" value="{{$products->id}}">
    <span class=" pro_detail_act margin-t20 fl margin-r20">单价</span>
    <span class=" pro_detail_act margin-t20 fl margin-r20" style="font-size:26px; font-weight:bold; color:#dd514c;">¥</span>
    <div class="pro_detail_act margin-t20 fl">
    <input type="hidden" name="danjia" value="{{$products->price}}">
    <span style="font-size:26px; font-weight:bold; color:#dd514c;" class="danjia">{{$products->price}}</span></div>
    <div class="clear"></div>
    <div class="act_block margin-t5"><span>本商品可使用9999积分抵用￥9.99元</span></div>
    <div class="pro_detail_number margin-t30">
        <div class="margin-r20 float-lt">数量</div>
        <div class=""> 
            <i class="jian"></i>
                <input type="text"  value="{{$products->shuliang}}" disabled="disabled"  name="shuliang" class="float-lt choose_input shuliang ">
            <i class="jia"></i> <span>&nbsp;盒</span> <span class="kucun">（库存{{$products->kucun}}盒）</span> </div>
        <div class="clear"></div>
    </div>
    <input type="hidden" class="sllll" value="{{$products->shuliang}}" name="shuliang">
    <!-- 用户的id -->
    <input type="hidden" name="yonghuid" value="{{session('id')}}">
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
        <wb:share-button appkey="4066904179" addition="text" type="button" default_text="%E6%8C%91%E5%95%A5%E4%B9%B0%E5%95%A5%E9%83%BD%E4%B8%A4%E5%9D%97" ralateUid="1770797211"></wb:share-button>
    </div>
    <div class="clear"></div>
    <div class="pro_detail_btn margin-t30">
        <ul>
            @if(session('username')==null)
            <input type="submit" class="pro_detail_shop shopping liji" value="立即购买" style="display:inline;">
            <script>
                 $('.liji').click(function(){
                layer.alert('请登录', {icon: 6});
                return false;
              })
            </script>
            @elseif(session('username')!=null)
             <input type="submit" class="pro_detail_shop shopping" value="立即购买" style="display:inline;">
            @endif
              <a href="#" class="pro_detail_shop gouwu" style="float:left;">加入购物车</a>
        </ul>
    </div>
    </form>
   
    
</div>
 <!-- <div class="liulan" style="width:300px;height:600px; float:right;margin-top:-400px;overflow:hidden;">
    <div style="text-align:center;">浏览历史<span style="margin-left:10px;" class="xiala" style="cursor: pointer">v</span></div>
    @foreach($his as $k5=>$v5)
    <div style="width:300px;height:200px; cursor: pointer;margin-bittom:1px;">
      <a href="/goumai/index/{{$v5->pid}}"><img src="/uploads/{{$v5->shuyu->profile}}" style="width:300px;height:200px" class="shuyu"></a>
    </div>  
    @endforeach
   
 </div> -->
 <div class="us_Record">
      <div id="Record_p" class="Record_p">
        <div class="title_name"><span class="name left">浏览历史</span><span class="pageState right"><span>1</span>/7</span></div>
          <div class="hd"><a class="next">&lt;</a><a class="prev">&gt;</a></div>
            <div class="bd">
                <ul >
                 @foreach($his as $k5=>$v5)
                <li class="clone">
                        <div class="p_width">
                    <div class="pic"><a href=""><img src="/uploads/{{$v5->shuyu->profile}}"></a></div>  
                    <div class="title"><a href="/goumai/index/{{$v5->pid}}">{{$v5->shuyu->pname}}</a></div>
                    <div class="Purchase_info"><span class="p_Price">￥{{$v5->shuyu->price}}</span> <a href="/goumai/index/{{$v5->pid}}" class="Purchase">立即购买</a></div>
                </div>  
                    </li>
                 @endforeach
                 </ul></div>            
         </div>
         <script type="text/javascript">jQuery("#Record_p").slide({ mainCell:".bd ul",effect:"leftLoop",vis:1,autoPlay:false });</script>
        </div>
 <script>
 $('.xiala').click(function(){
    $(this).parent().parent().last().append($(this).parent().next().show());
 })
 </script>
<script>

  $('.gouwu').click(function(){
  
        //接受数量
        var sl=$('.sllll');
        var shuliang=sl.val();
        //获取用户id
        var id=$('.yonghuid').val();
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
       
        $.get('/cur/store/{{$products->id}}',{'a':shuliang,'b':zj,'c':guige,'d':dj,'e':img,'f':pname,'g':id},function(msg){
            if(msg=='success'){
                layer.alert('添加成功', {icon: 6});
            }else{
                
               layer.open({
                  type: 1
                  ,offset: 't' //具体配置参考：offset参数项
                  ,content: '<div style="padding: 20px 80px;">请选择规格或者登录</div>'
                  ,btn: '关闭'
                  ,btnAlign: 'c' //按钮居中
                  ,shade: 0 //不显示遮罩
                  ,yes: function(){
                    layer.closeAll();
                  }
                });

            }
                
            
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
                            全部（{{$sptj}}）
                        </li>
                        
                    </ul>
                    <table width="100%" border="0">
                   
                    @foreach($sp as $k2=>$v2)
                        <tr>
                            <td width="80" align="left"><a href="" rel="" class="preview"><img src="/uploads/{{$n[0]}}" width="60" height="60" class="border_gry" /></a></td>
                            <td>{{$v2->content}}<br />    
                            <span class="pro_judge_time">{{$v2->created_at}}</span></td>
                            <td>{{$v2->uname}}</td>
                            
                        </tr>
                  @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="hotpro">
        <div class="hotpro_title">店长推荐</div>
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

<script>

  $('.addcart').click(function(){
  
        
        //获取用户id
        var id=$('.yonghuid').val();
        //获取单价
        var dj=$('.danjia').text();

        var img=$('.zhaopian img').attr('src');
        var pname=$('.pro_detail_tit').html();
        //console.log(guige+'--'+shuliang);return;
       
        $.get('/shoucang/show/{{$products->id}}',{'d':dj,'e':img,'f':pname,'g':id},function(msg){
            if(msg=='success'){
                layer.alert('收藏成功', {icon: 6});
                $('.addcart').val('已收藏');
            }else{
                
               layer.open({
                  type: 1
                  ,offset: 't' //具体配置参考：offset参数项
                  ,content: '<div style="padding: 20px 80px;">请登录</div>'
                  ,btn: '关闭'
                  ,btnAlign: 'c' //按钮居中
                  ,shade: 0 //不显示遮罩
                  ,yes: function(){
                    layer.closeAll();
                  }
                });

            }    
            
        },'html');

  })
</script>
</body>
</html>
@endsection


