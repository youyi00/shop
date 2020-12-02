<?php /*a:4:{s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\cate\create.html";i:1606224996;s:76:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\layout.html";i:1606229386;s:83:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\header.html";i:1606154917;s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\left.html";i:1606237418;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/skin/green/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
</head>
<body>
<!-- header -->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">奥利给！</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>超级管理员</li>
                    <li><a href="#" class="logout" link="<?php echo url('Login/logout'); ?>">退出</a></li>
                    <li id="Hui-msg"> 
                        <!-- <a href="#" title="消息">
                            <span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i>
                        </a> -->
                    </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover">
                        <a href="javascript:;" class="dropDown_A" title="换肤">
                            <i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i>
                        </a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
	    </div>
    </div>
</header>
<!-- 导航 -->
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl>
			<dt><i class="Hui-iconfont">&#xe616;</i>分类管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Cate/index'); ?>">分类管理</a></li>
				</ul>
			</dd>
		</dl>
	</div>
	<div class="menu_dropdown bk_2">
		<dl>
			<dt><i class="Hui-iconfont">&#xe616;</i>商品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Goods/index'); ?>">商品管理</a></li>
				</ul>
			</dd>
		</dl>
	</div>

	<!-- <div class="menu_dropdown bk_2" style="display:none">
		<dl id="menu-aaaaa">
			<dt><i class="Hui-iconfont">&#xe616;</i> 二级导航1<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">三级导航</a></li>
				</ul>
			</dd>
		</dl>
	</div> -->

</aside>
<!-- right -->

<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">

<link rel="stylesheet" href="/public/admin/lib/layui/css/layui.css"  media="all">
<nav class="breadcrumb">
	<a href="<?php echo url('Index/index'); ?>"><i class="Hui-iconfont">&#xe67f;</i>
	首页</a>
	<span class="c-gray en">&gt;</span>
	分类管理
	<span class="c-gray en">&gt;</span>
    分类列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;margin-right:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<article class="page-container">
	<form class="form form-horizontal" action="<?php echo url('save'); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input type="text" class="input-text" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序：</label>
			<div class="formControls col-xs-8 col-sm-4">
				<input type="text" class="input-text" name="sort">
			</div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>上传图片：</label>
            <div class="layui-upload col-sm-4">
                <button type="button" class="layui-btn" id="upload1">上传图片</button>
                <div class="layui-upload-list">
                    <img style="width:200px;" class="layui-upload-img" id="demo1">
                    <p id="demoText"></p>
                </div>
                <input type="hidden" name="img" id="img" />
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>状态</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="status" value="1" type="radio" id="qiyong" checked>
                    <label for="sex-1">启用</label>
                </div>
                <div class="radio-box">
                    <input type="radio" value="0" id="jinyong" name="status">
                    <label for="sex-2">禁用</label>
                </div>
            </div>
        </div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit">保存</button>
			</div>
		</div>
	</form>
</article>
<script type="text/javascript" src="/public/admin/lib/layui/layui.js"></script>
<script>
    layui.use('upload', function(){
      var $ = layui.jquery
      ,upload = layui.upload;
      
      //普通图片上传
      var uploadInst = upload.render({
        elem: '#upload1'
        ,url: "<?php echo url('Upload/upload'); ?>" //上传接口
        ,before: function(obj){
          //预读本地文件示例，不支持ie8
          obj.preview(function(index, file, result){
            $('#demo1').attr('src', result); //图片链接（base64）
          });
        }
        ,done: function(res){
        //上传成功
          if(res.code == 1)
          {
            $('#img').val(res.url);
            return layer.msg(res.msg);
          }
          //如果上传失败
          else
          {
            return layer.msg(res.msg);
          }
        }
        ,error: function(){
          //演示失败状态，并实现重传
          var demoText = $('#demoText');
          demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
          demoText.find('.demo-reload').on('click', function(){
            uploadInst.upload();
          });
        }
      });
    });
    </script>

</section>
<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
    </ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
 <!--/_footer 作为公共模版分离出去-->
 <script type="text/javascript">
        $(function(){
            $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        //删除按钮
        $('.del').click(function(){
            var url = $(this).attr('link');
            layer.confirm('你确定要此操作吗?', {
                icon: 5,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.get(url,function(data){
                    if (data.code == 1) {
                        layer.alert(data.msg, {icon: 6},function (index) {
                            layer.close(index);
                            window.location.reload();
                        });
                    }else{
                        layer.alert(data.msg);
                    }
                });
            });
        });
        //退出
        $('.logout').click(function(){
            var url = $(this).attr('link');
            layer.confirm('你确定要此操作吗?', {
                icon: 5,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.get(url,function(data){
                    if (data.code == 1) {
                        layer.alert(data.msg, {icon: 6},function (index) {
                            layer.close(index);
                            window.location.reload();
                        });
                    }else{
                        layer.alert(data.msg);
                    }
                });
            });
        });
        //表单提交
        $("form").submit(function(e){
                    var res = $(this).serialize();
                    // var url = "<?php echo url('Public/login'); ?>";
                    var url = $(this).attr('action');
                    $.ajax({  
                        url:  url,
                        data: res,  
                        type: 'post',  
                        success:function(data){  
                            if (data.code == 1) {
                                layer.alert(data.msg,{icon:6},function (index) {
                                    layer.close(index);
                                    window.location.href = "<?php echo url('index'); ?>";
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
