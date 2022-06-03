<?php
    include"../../connect.php";

    $user_id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "update users set username = $username, password = $password where id = $user_id";
    if($result = $conn -> query($sql)){
        echo "<script>alert('change ok');</scrip>";
        header("refresh:0;url=../user_management.php");
    }else{
        echo "<script>alert('change fail');</scrip>";
        header("refresh:0;url=../user_management.php");
    }
?>