<?php
    include('connect.php');

    $username = $_POST['username'];
    $password = $_password['password'];

    if ($username and $password){
        $sql = "select * from login where username = '$username' and password = '$password' ";
    }else{
        echo "<script>alert('please enter you username or password');<script>";

        header("refresh:0;url=login.html");
    }

?>