<?php 
    require "../connect.php";
?>

<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Background management page</title>
  <link rel="stylesheet" href="../../node_modules/layui/dist/css/layui.css">
  <link rel="icon" type="image/x-icon" href="../image/bitbug_favicon.ico" />
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
    <div style="text-align: center; margin-top:50px; font:italic 3em Georgia, serif;"><p>Pet management page</p></div>
    <!-- 内容主体区域 -->
    <table class="layui-table">
        <thead>
            <tr>
                <th>pet_id</th>
                <th>pet_name</th>
                <th>pic</th>
                <th>pet_type</th>
                <th>sex</th>
                <th>age</th>
                <th>place</th>
                <th>vacc</th>
                <th>tel</th>
                <th>remark</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql2="SELECT * from pet";
                $result = $conn -> query($sql2);
                if($result -> num_rows > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo 
                        "<tr>
                            <td>". $row["id"] ."</td>
                            <td>". $row["petName"] ."</td>
                            <td> <img src='../".$row['pic'] ."'></td>
                            <td>". $row["petType"] ."</td>
                            <td>". $row["sex"] ."</td>
                            <td>". $row["age"] ."</td>
                            <td>". $row["place"] ."</td>
                            <td>". $row["vacc"] ."</td>
                            <td>". $row["tel"] ."</td>
                            <td>". $row["remark"] ."</td>
                            <td> <div><a href='pet_delete.php?pet_id=". $row['id'] ."'>delect</div> </td>
                        </tr>
                        ";
                    }
                }
            ?>
        </tbody>
    </table>
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