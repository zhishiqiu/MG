<?php
require_once("../connect.php");
header("content-type:text/html;charset=utf-8");

$adopt_username = $_COOKIE["username"];
$name = $_POST["adoption_name"];
$age = $_POST['adoption_age'];
$tel = $_POST['adoption_tel'];
$place = $_POST['adoption_place'];
$sql = "insert into adopt(username,name,age,tel,place)
    values('$adopt_username','$name','$age','$tel','$place')";
$result=$conn->query($sql);
	
if($result){
			
	echo "<script>alert('추가 성공');window.location.href='../pet_adoption.php';</script>";
}else {
	echo "<script>alert('failed');window.location.href='../pet_adoption.php'; </script>";
}
?>