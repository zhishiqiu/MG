<?php
    include "connect.php";
    // session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
   
if($username == "root" and $password == "12345"){
    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
    header("refresh:0;url=admin.php");
}else{
    if ($username and $password){
        $sql1 = "select username, password from users where username = '$username' and password = '$password' ";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0){
             setcookie('username',$username,time() + 24 * 3600,'/');
             setcookie('password',$password,time() + 24 * 3600,'/');
             echo "<script>alert('welcome! ?username=$username');</script>";
             header("refresh:0;url=index.php");
        }else{
             echo "<script>alert('worry username or password');</scrip>";
             header("refresh:0;url=loginpage.php");
        }
    }else{
        echo "<script>alert('please enter you username or password');<script>";
        header("refresh:0;url=loginpage.php");
    }
}
    $conn->close();
?>