<?php /*a:4:{s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\goods\index.html";i:1606244727;s:76:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\layout.html";i:1606229386;s:83:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\header.html";i:1606154917;s:81:"D:\phpstudy_pro\WWW\www.shop.com\tp5_shop\application\admin\view\common\left.html";i:1606237418;}*/ ?>
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


<nav class="breadcrumb">
	<a href="<?php echo url('Index/index'); ?>"><i class="Hui-iconfont">&#xe67f;</i>
	首页</a>
	<span class="c-gray en">&gt;</span>
	分类管理
	<span class="c-gray en">&gt;</span>
    分类列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px;margin-right:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<a class="btn btn-primary radius" href="<?php echo url('Index/index'); ?>">关闭选项卡</a>
	 <!-- <span class="select-box inline">
		<select name="" class="select">
			<option value="0">全部分类</option>
			<option value="1">分类一</option>
			<option value="2">分类二</option>
		</select>
		</span> --> 
		<input type="text" name="" placeholder=" 商品名称" style="width:250px" class="input-text">
		<button class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		 <span class="l">
			 <a class="btn btn-primary radius" data-title="添加" href="<?php echo url('create'); ?>" >
				<i class="Hui-iconfont">&#xe600;</i> 添加
			</a>
		</span>
		 <span class="r">共有数据：<strong><?php echo htmlentities($total); ?></strong> 条</span> 
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th>ID</th>
					<th>标题</th>
					<th>价格</th>
					<th>库存</th>
					<th>浏览次数</th>
					<th>图片</th>
					<th>更新时间</th>
					<th>排序</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo htmlentities($vo['id']); ?></td>
					<td><?php echo htmlentities($vo['title']); ?></td>
					<td><?php echo htmlentities($vo['price']); ?></td>
					<td><?php echo htmlentities($vo['sku']); ?></td>
					<td><?php echo htmlentities($vo['views']); ?></td>
					<td><img style="width:10em;" src="<?php echo htmlentities($vo['img']); ?>"></td>
					<td><?php echo htmlentities($vo['update_time']); ?></td>
					<td><?php echo htmlentities($vo['sort']); ?></td>
					<td class="td-status"><span class="label label-success radius"><?php echo htmlentities($vo['status']); ?></span></td>
					<td class="f-14 td-manage">
						<a href="<?php echo url('edit',['id' => $vo['id']]); ?>" class="ml-5 btn btn-success radius" title="编辑">编辑</a> 
						<a class="ml-5 del btn btn-danger radius" link="<?php echo url('delete',['id'=>$vo['id']]); ?>">删除</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<?php echo $list; ?>
	</div>
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
