<?php
    // include('connect.php');
    // require_once("connect.php");

    // if(isset($_POST['username'])){
    //     $username = $_POST['username'];
    // }
    // if(isset($_POST['password'])){
    //     $password = $_POST['password'];
    // }

    // if($password){
    //     $sql_select = "SELECT username FROM users WHERE username = '$username'";

    //     $ret = mysqli_query($conn, $sql_select);
    //     $row = mysqli_fetch_array($ret);

    //     if($username == $row['username']){
    //         echo "<script>alert('username is used');<script>";
    //         header("location:register.html");
    //     }else {

    //         $sql_insert = " INSERT INTO users(username, password) VALUES($username, $password)";
    //         mysqli_query($conn, $sql_insert);
    //         echo "<script>alert('ok!');<script>";
    //         header("location:login.html");
    //     }
    //     mysqli_close($conn);
    // } else {
    //     echo "<script>alert('ok!');<script>";
    //     header("location:register.html");
    // }
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