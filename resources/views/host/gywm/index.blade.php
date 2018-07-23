
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>联系我们-昌平F4</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="full-screen" content="yes">
    <link rel="stylesheet" href="/common/host/guanyu/css/cui.css" />
    <link rel="stylesheet" href="/common/host/guanyu/css/style.css" />
    <link rel="stylesheet" href="/common/host/guanyu/css/less.css" />
    <script type="text/javascript" src="/layui/layui.all.js"></script>
    <script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>
</head>
<body>
<div id="hd">
    <div class="wp">
        <div class="logo"><a href="index1"><img src="/common/host/guanyu/picture/logo.png" alt=""></a></div>
        <div id="nav">
            <ul>
                <li><a href="/host" >商城首页</a></li>
                
                <li><a href=""  style="color:#e4392a; border-bottom:3px solid #e4392a;">联系我们</a></li>
            </ul>
        </div>
        <div class="tel">888-888-8888</div>
    </div>
</div>
<!-- end #hd -->

<div class="c"></div>	<div id="bd">
    <div id="ban-in" style="background-image:url(/common/host/guanyu/images/14415953225349.jpg)">
        <div class="ban-bg"></div>
    </div>
    <div class="row4 fix">
        <div class="wp">
            <div class="tit-i">
                <h3>联系我们</h3>
                <h5><span>contact</span> webthink</h5>
            </div>
            <div class="contact-l">
                <ul class="ul-contact">
                    <li class="li1">北京市昌平区兄弟连昌平F4</li>
                    <li class="li2"><a href="tel:010-51265006">888-8888-8888 (咨询) <br /><a href="tel:400-008-0408">888-8888-8888 (咨询)</a><br /><a href="tel:13581789985">138 8888 8888 (咨询)</a></li>
                    <li class="li3"><a href="mailto:sales@webthink.com.cn">sales@webthink.com.cn</a></li>
                </ul>
            </div>
            <div class="contact-r">
                <!-- 显示错误信息 -->
 @if (session('error'))
  <script>
     layer.alert('{{session('error')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
<!-- 显示错误信息 -->
@if (session('success'))
  <script>
     layer.alert('{{session('success')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
                <!--<iframe scrolling="no" frameborder="0" src="guest.php" width="100%" height="235"></iframe>-->
                <form action="/gywm/store" class="contact-form" method="post">
                {{ csrf_field() }}
                    <div class="">
                        <input type="text" class="inp l" name="name" id="name" placeholder="您的姓名">
                        <input type="text" class="inp r" name="tel" id="tel" placeholder="您的联系方式">
                    </div>
                    <textarea cols="30" rows="10" name="txt_con" id="txt"></textarea>
                    <input type="submit" value="提交您的需求" class="sub" id="sub">
                </form>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="map-s">
            <a href="javascript:void(0);" class="btn"><em></em>点击展开地图</a>
        </div>
        <div class="map-pop map-pop-big">
            <a href="javascript:void(0);" class="btn-down"></a>
            <div class="map-bg1"></div>
            <div class="map-bg2"></div>
            <div id="map" class="map-c" style="width:100%;height:100%;"></div>
        </div>
    </div>
</div>
<!-- end #bd -->
<div class="c"></div>
<!-- begin #fd -->
<div id="fd" class="index-fd pr">
    <div class="map-bg3"></div>
    <div class="wp">
        <div class="fd-top">
            <dl>
                <dt>关于我们</dt>
                <dd>
                    <ul class="ul-fd">
                        <li><a href="">公司简介</a></li>
                        <li><a href="">葡萄酒基地</a></li>
                        <li><a href="">我们的团队</a></li>
                        <li><a href="">客户监控系统</a></li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>新手指南</dt>
                <dd>
                    <ul class="ul-fd">
                        <li><a href="">新用户注册</a></li>
                        <li><a href="">购物流程</a></li>
                        <li><a href="">移动端下载</a></li>
                        <li><a href="">行业解决方案</a></li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>配送服务</dt>
                <dd>
                    <ul class="ul-fd">
                        <li><a href="">配送发铭文</a></li>
                        <li><a href="">配送时限</a></li>
                        <li><a href="">运输包装说明</a></li>
                        <li><a href="">发票制度</a></li>
                        
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>售后服务</dt>
                <dd>
                    <ul class="ul-fd">
                        <li><a href="">退换货流程</a></li>
                        <li><a href="">退款说明</a></li>
                        <li><a href="">正品保障</a></li>
                        <li><a href="">投诉建议</a></li>
                        
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt>联系我们</dt>
                <dd class="pr">
                    <p><a href="" class="weixin"></a><a href="" class="sina"></a><span class="weixin-pic"><img src="/common/host/guanyu/picture/ewm.jpg" alt=""></span></p>
                    <p><b class="tel">110-120-1111</b></p>
                </dd>
            </dl>
        </div>
    </div>
    <div class="fd-copy">
        <div class="wp">
            <p>
                <span>昌平F4网络技术（北京）有限公司 Copyright&copy; 2007-2015 </span><a href=""><span>京ICP备07017583号-1</span></a> <a href=""></a>
            </p>
        </div>
    </div>
</div>
<div class="side">
    <ul>
        <li><a href=""><div class="sidebox"><img src="/common/host/guanyu/picture/side_icon02.png">在线咨询</div></a></li>
        <li><a href=""><div class="sidebox"><img src="/common/host/guanyu/picture/side_icon01.png">在线咨询<!-- QQ:16757330 --></div></a></li>
        <li><a href="javascript:void(0);" ><div class="sidebox"><img src="/common/host/guanyu/picture/side_icon03.png">4000080408</div></a></li>
    </ul>
</div>
<div class="side2">
    <ul>
        <li><a href=""><img src="/common/host/guanyu/picture/r_icon1.png" alt=""></a><div class="weixin"><em></em><img src="/common/host/guanyu/picture/ewm.jpg" alt=""></div></li>
        <li><a href="javascript:goTop();" class="sidetop"><img src="/common/host/guanyu/picture/r_icon2.png"></a></li>
    </ul>
</div>
<script type="text/javascript" src="/common/host/guanyu/js/jquery.js"></script>
<script type="text/javascript" src="/common/host/guanyu/js/lib.js"></script>
<script type="text/javascript">
    $("#sub").click(function(e) {
        var name=$("#name").val();
        var tel=$("#tel").val();
        var txt=$("#txt").val();
        var re = /^[1][34587]\d{9}$/;
        if(name==""){
            alert("姓名不能为空");
            return false;
        }
        if(!re.test(tel)){
            alert("请输入正确的联系方式");
            return false;
        }
        if(txt==""){
            alert("请输入您的需求");
            return false;
        }
    });
</script>
<script>
    $('.map .btn').click(function(){
        $('.map-pop').show();
        $(this).parents('.map').addClass('map-big');
        var winW = $(window).width();
        var winH = $(window).height();
        if(winW < 768){
            $('.map-pop').height($(window).height()-50-80);
            $('.map-big').height($(window).height()-50-80);
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }else{

            $('.map-pop').height($(window).height()-344-101);
            $('.map-big').height($(window).height()-344-101);
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }
        initMap();
    })
    $('.map .btn-down').click(function(){
        $('.map-pop').hide();
        $(this).parents('.map').removeClass('map-big');
        $('.map').height('107');
    })
</script>
<script type="text/javascript" src="/common/host/guanyu/js/9d8c96d60d0346a38150ff5e01147083.js"></script>
<script type="text/javascript" src="/common/host/guanyu/js/map.js"></script>
</body>
</html>