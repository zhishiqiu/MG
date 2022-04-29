<?php
    include('connect.php');
    // session_start();
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
   
    if ($username and $password){
       
        $sql1 = "select * from login where username = '$username' and password = '$password' ";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0){
             header("location=index.html");
        }else{
             echo "<script>alert('잘못된 계정이나 비밀번호!');</scrip>";

             header("refresh:0;url=login.html");
        }
        
    }else{
        echo "<script>alert('please enter you username or password');<script>";

        header("refresh:0;url=login.html");
    }

?>