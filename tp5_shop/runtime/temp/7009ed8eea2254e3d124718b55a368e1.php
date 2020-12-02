<?php /*a:4:{s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\index\index.html";i:1606151751;s:76:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\layout.html";i:1606229386;s:83:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\header.html";i:1606154917;s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\left.html";i:1606237418;}*/ ?>
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

<div class="page-container">
    <p class="f-20 text-success">欢迎使用奥利给.admin <span class="f-14">v3.1</span>后台模版！</p>
    <p>登录次数：18 </p>
    <p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
    <table class="table table-border table-bordered table-bg">
        <thead>
            <tr>
                <th colspan="7" scope="col">信息统计</th>
            </tr>
            <tr class="text-c">
                <th>统计</th>
                <th>资讯库</th>
                <th>图片库</th>
                <th>产品库</th>
                <th>用户</th>
                <th>管理员</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-c">
                <td>总数</td>
                <td>92</td>
                <td>9</td>
                <td>0</td>
                <td>8</td>
                <td>20</td>
            </tr>
            <tr class="text-c">
                <td>今日</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr class="text-c">
                <td>昨日</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr class="text-c">
                <td>本周</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr class="text-c">
                <td>本月</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
</div>

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
