<?php
include"../../connect.php";

$pet_id = $_GET['pet_id'];

$sql = "update pet set state = 1 where id = $pet_id";
$sql1 = "update adopt set state = 1 where pet_id = $pet_id ";
if($result = $conn -> query($sql) and $result2 = $conn -> query($sql1)){
    echo "<script>alert('delect ok!');</scrip>";
    header("refresh:0;url=../applying.php");
}else{
    echo "<script>alert('delect failed!');</scrip>";
    header("refresh:0;url=../applying.php");
}

?>