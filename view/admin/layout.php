<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title>系统管理</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/css/mdui.min.css" integrity="sha256-lCFxSSYsY5OMx6y8gp8/j6NVngvBh3ulMtrf4SX5Z5A=" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.1/dist/js/mdui.min.js" integrity="sha256-dZxrLDxoyEQADIAGrWhPtWqjDFvZZBigzArprSzkKgI=" crossorigin="anonymous"></script>
	<script>$ = mdui.JQ;</script>
	<link rel="icon" href="https://everking.xyz/wp-content/uploads/2020/03/cropped-0f8d375fc1d3270ea9f776710e01baeb-192x192.png" sizes="192x192" />
</head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-layout-dark mdui-theme-primary-orange">
<div style="
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-image: url(https://www.rrll.cc/tuceng/ecy.php);
	background-size: cover;
	background-repeat-x: no-repeat;
	opacity: .2;
"></div>
<header class="mdui-appbar mdui-appbar-fixed mdui-color-theme mdui-appbar-inset" style="background-color: rgba(33,33,33,.7) !important;backdrop-filter: blur(20px)">
  <div class="mdui-toolbar mdui-color-theme" style="background-color: initial !important;">
    <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
    <a href="./" target="_blank" class="mdui-typo-headline mdui-hidden-xs">首页</a>
    <div class="mdui-toolbar-spacer"></div>
    <a href="<?php echo $root?>?/logout"><i class="mdui-icon material-icons">&#xe8ac;</i> 登出</a>
  </div>
</header>
<?php $root = get_absolute_path(dirname($_SERVER['SCRIPT_NAME']));?>
<div class="mdui-drawer" id="main-drawer">
  <div class="mdui-list">
	<br><br>  
	<a href="<?php echo $root?>?/admin" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe8b8;</i>
      <div class="mdui-list-item-content">基本设置</div>
    </a>

    <a href="<?php echo $root?>?/admin/cache" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe53b;</i>
      <div class="mdui-list-item-content">页面缓存</div>
    </a>

    <a href="<?php echo $root?>?/admin/show" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe3a5;</i>
      <div class="mdui-list-item-content">展示设置</div>
    </a>

    <a href="<?php echo $root?>?/admin/images" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe410;</i>
      <div class="mdui-list-item-content">图床设置</div>
    </a>

    <a href="<?php echo $root?>?/admin/upload" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe2c6;</i>
      <div class="mdui-list-item-content">上传管理</div>
    </a>

    <a href="<?php echo $root?>?/admin/setpass" class="mdui-list-item">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe88d;</i>
      <div class="mdui-list-item-content">密码修改</div>
    </a>

    <a href="https://onedrive.live.com/" class="mdui-list-item" target="_blank">
      <i class="mdui-list-item-icon mdui-icon material-icons">&#xe2bf;</i>
      <div class="mdui-list-item-content">登陆微软</div>
    </a>
  </div>
</div>

<a id="anchor-top"></a>

<div class="mdui-container">
	<?php view::section('content');?>
</div>
<script>
	$("a[href='<?php echo'?'.(route::get_uri());?>']").addClass("mdui-text-color-drak");
</script>
</body>

</html>
