<?php
require_once("../connect.php");
header("content-type:text/html;charset=utf-8");
//上架家养宠物，放入数据库
$filename=$_FILES['pet-submit']['name'];
$data=$_FILES['pet-submit']['tmp_name'];

$username=$_COOKIE['username'];
$petType=$_POST['petType'];
$petName=$_POST['petName'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$place=$_POST['place'];
$vacc=$_POST['vacc'];
$tel=$_POST['tel'];
$remark=$_POST['remark'];
//上传图片，移动图片
$destination="../image".$filename;
move_uploaded_file($data, $destination);
$n="image/".$filename;
$sql="insert into pet(pic,petType,petName,sex,age,place,vacc,tel,remark)
    values('$n','$petType','$petName','$sex','$age','$place','$vacc','$tel','$remark')";
$result=$conn->query($sql);
	
		if($result){
			
			echo "<script>alert('上架请求成功');window.location.href='../pet-main.php';</script>";
		}else {
			echo "<script>alert('上架失败');window.location.href='../pet-main.php'; </script>";
		}
			
?>