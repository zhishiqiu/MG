<?php 
include"../../connect.php";

$user_id = $_GET["id"];
$sql = "DELETE from users where id = $user_id";
if($result = $conn -> query($sql)){
    echo "<script>alert('delect ok!');</scrip>";
    header("refresh:0;url=../user_management.php");
}else{
    echo "<script>alert('delect failed!');</scrip>";
    header("refresh:0;url=../user_management.php");
}
?>