<?php
    include('connect.php');

    $username = $_POST['username'];
    $password = $_password['password'];

    if ($username and $password){
        $sql = "select * from login where username = '$username' and password = '$password' ";
        $result = $conn->query($sql4);
        if ($result->num_rows > 0){
            header("refresh:0;url=index.html");
        }else{
            echo "<script>alert('잘못된 계정이나 비밀번호!');</script>";

            header("refresh:0;url=login-.php");
        }
    }else{
        echo "<script>alert('please enter you username or password');<script>";

        header("refresh:0;url=login.html");
    }

?>