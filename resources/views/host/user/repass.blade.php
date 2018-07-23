<!DOCTYPE html>
<html>

<head>
<title>密码修改</title>
<meta charset="gb2312">
<link href="/common/host/adminzc/css/home.css?v=2" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/common/host/adminzc/js/jquery-1.7.2.js"></script>
<meta name="author" content="www.xmoban.cn">
<meta name="copyright" content="Copyright X模版 www.xmoban.cn">
<script type="text/javascript" src="/layui/layui.all.js"></script>
<script type="text/javascript" src="/layui/jquery-3.2.1.min.js"></script>
</head>

<body>

<div class="wrap">
	<div class="banner-show" id="js_ban_content">
		<div class="cell bns-01">
			<div class="con">
			</div>
		</div>
		<div class="cell bns-02" style="display:none;">
			<div class="con">
				<a href="http://sc.chinaz.com" target="_blank" class="banner-link">
				<i>圈子</i></a> </div>
		</div>
		<div class="cell bns-03" style="display:none;">
			<div class="con">
				<a href="http://sc.chinaz.com" target="_blank" class="banner-link">
				<i>企业云</i></a> </div>
		</div>
	</div>
	<div class="banner-control" id="js_ban_button_box">
		<a href="javascript:;" class="left">左</a>
		<a href="javascript:;" class="right">右</a> </div>
	<script type="text/javascript">
                ;(function(){
                    
                    var defaultInd = 0;
                    var list = $('#js_ban_content').children();
                    var count = 0;
                    var change = function(newInd, callback){
                        if(count) return;
                        count = 2;
                        $(list[defaultInd]).fadeOut(400, function(){
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                        $(list[newInd]).fadeIn(400, function(){
                            defaultInd = newInd;
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                    }
                    
                    var next = function(callback){
                        var newInd = defaultInd + 1;
                        if(newInd >= list.length){
                            newInd = 0;
                        }
                        change(newInd, callback);
                    }
                    
                    var start = function(){
                        if(start.timer) window.clearTimeout(start.timer);
                        start.timer = window.setTimeout(function(){
                            next(function(){
                                start();
                            });
                        }, 8000);
                    }
                    
                    start();
                    
                    $('#js_ban_button_box').on('click', 'a', function(){
                        var btn = $(this);
                        if(btn.hasClass('right')){
                            //next
                            next(function(){
                                start();
                            });
                        }
                        else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                                newInd = list.length - 1;
                            }
                            change(newInd, function(){
                                start();
                            });
                        }
                        return false;
                    });
                    
                })();
            </script>
	<div class="container">
<!-- 显示错误信息 -->
 @if (session('error'))
  <script>
     layer.alert('{{session('error')}}', {
      icon: 1,
      skin: 'layer-ext-moon'
    })
  </script>   
@endif
	<form action="/repass/update/{{session('id')}}" method = "post">     
	 {{ csrf_field() }}
		<div class="register-box">
			<div class="reg-slogan"><h2>修改密码</h2></div>
			<div class="reg-form" id="js-form-mobile">
				
				<h3>原密码：</h3><div class="cell">
					<input type="password" name="oldpass" id="js-mobile_ipt" class="text"  value = "{{ old('oldpass') }}" placeholder="请输入原密码"/>
				</div>
				<h3>新密码：</h3><div class="cell">
					<input type="password" name="newpass" id="js-mobile_ipt" class="text"  value = "{{ old('oldpass') }}"  placeholder="请输入新密码"/>
				</div>
				<h3>确认新密码：</h3><div class="cell">
					<input type="password" name="newpass_confirmation" id="js-mobile_ipt" class="text"  value = "{{ old('oldpass') }}"  placeholder="确认新密码"/>
				</div>
				<h3>手机号：</h3>
				<div class="cell">
					<input type="text" name="phone" id="js-mobile_ipt" class="text"  value = "{{ old('phone') }}" placeholder="请输入手机号"/>
				</div>
				<div class="bottom">
					<!-- <a  href="" class="button btn-green">
					确认注册</a> -->
					<input type="submit" id="js-mobile_btn" value = "确认修改"  class="button btn-green" >
                    
				</div>
			</div>
		</div>
	   </form>
	</div>
</div>
<div class="footer">
	<div class="con">
		<div class="copy-right">
			<div class="cell">
				<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
					<p>昌平F4：唐跃 薛艳峰 张曙光 宋宇博 </p>
					<p>PHP高级工程师</p>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>
