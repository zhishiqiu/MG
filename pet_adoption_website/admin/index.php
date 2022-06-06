<?php 

?>

<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Background management page</title>
  <link rel="stylesheet" href="../../node_modules/layui/dist/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">Pet Adoption Backend</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <!-- <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul> -->
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="../image/user.jpg" class="layui-nav-img">
          root
        </a>
        <!-- <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl> -->
      </li>
      <li class="layui-nav-item"><a href="../logout.php">logout</a></li>
    </ul>
  </div>


  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item">
          <a href="index.php"><i class="layui-icon layui-icon-home"> </i>Home</a>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;"><i class="layui-icon layui-icon-username"> </i>User Management</a>
          <dl class="layui-nav-child">
            <dd><a href="user_management.php">User</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">Pet Management</a>
          <dl class="layui-nav-child">
            <dd><a href="pet_management.php">Pet Information</a></dd>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">Adoption Application</a>
          <dl class="layui-nav-child">
            <dd><a href="applying.php">Applying</a></dd>
            <dd><a href="applied.php">Applied</a></dd>
        </li>
          
      </ul>
    </div>
  </div>

  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div><p>hello this is home page</p></div>
  </div>

  <div class="layui-footer">
    <!-- 底部固定区域 -->

  </div>
</div>
<script src="../../node_modules/layui/dist/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;

});
</script>
</body>
</html>