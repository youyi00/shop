<?php /*a:1:{s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\login\index.html";i:1606148537;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link href="/public/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/public/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/public/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录</title>
</head>
<body>
<div class="header"></div>
<div class="loginWraper">
  <div class="loginBox">
    <form class="form form-horizontal">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input class="input-text size-L" name="code" placeholder="验证码" style="width:150px;">
          <img class="reloadverify" src="<?php echo url('Login/verify'); ?>">
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;"/>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script>// 刷新验证码
    $(function() {
        var verifyimg = $(".reloadverify").attr("src");
        $(".reloadverify").click(function() {
            if (verifyimg.indexOf('?') > 0) {
                $(".reloadverify").attr("src", verifyimg + '&random=' + Math.random());

            } else {
                $(".reloadverify").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
            }
        });

        $("form").submit(function(e){
            var res = $(this).serialize();
            var url = "<?php echo url('Login/save'); ?>";
            $.ajax({  
                url:  url,
                data: res,  
                type: 'post',  
                success:function(data){  
                    if (data.code == 1) {
                        layer.alert(data.msg,{icon:6},function (index) {
                            layer.close(index);
                            window.location.href = "<?php echo url('Index/index'); ?>";
                        }); 
                    } else{
                        layer.alert(data.msg,{icon:5},function (index) {
                            layer.close(index);
                        }); 
                    }
                }
            });  
            return false; // 阻止表单跳转
        });
    });
</script>
</body>
</html>