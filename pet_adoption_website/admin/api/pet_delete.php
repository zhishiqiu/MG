<?php 
include"../../connect.php";

$pet_id = $_GET["pet_id"];
$sql = "DELETE from pet where id = $pet_id";
if($result = $conn -> query($sql)){
    echo "<script>alert('delect ok!');</scrip>";
    header("refresh:0;url=../pet_management.php");
}else{
    echo "<script>alert('delect failed!');</scrip>";
    header("refresh:0;url=../pet_management.php");
}
?>