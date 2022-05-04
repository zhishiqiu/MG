<?php
    include "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username && $password){
        $sql3 = "insert into users(username,password) values('$username','$password')";
        if ($conn->query($sql3)){
            echo "<script>alert('회원가입 성공!');</script>";
        }else{
            echo "<script>alert('이메일 또는 이름이 사용되었습니다. 변경하세요.')</script>";
        }
        header("refresh:0;url=login.php");
    }else{
        echo "<script>alert('비워둘 수 없습니다!');</script>";
        header("refresh:0;url=register.html");
    }
    $conn->close();

?>