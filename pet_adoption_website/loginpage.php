<?php
    if(!isset($_COOKIE['username'])){
        header("refresh:0;url=userpage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/login.css" />
    <link rel="stylesheet" type="text/css" href="style/register.css" />
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo"><a href="index.html"><img src="image/maologo.jpg" ></a></div>
            <ul class="titlelist">
                <li><a href="index.php">HOME</a></li>
                <li><a href="liao.html">PET ADOPTION</a></li>
                <li><a href="activity.html">ABOUT COMPANY</a></li>
                
            </ul>
            <div class="dengru">
                <div><a href="loginpage.php">LOGIN</a></div>
                <div><a href="registerpage.php">SIGN UP</a></div>
            </div>
        </div>
    </div>
    <div class="head">
        <div class="banner">
            <div><img src="image/mao1.png"></div>
            <div><img src="image/mao8.jpg"></div>
            <div><img src="image/mao9.webp"></div>
        </div>
    </div>
    <div class="bg"></div>
    <div class="logobox">
        <h1>LOGIN</h1>
        
        <form action="login.php" method="post">
            <div class="logolable"><lable>Username</lable></div>
            <div class="logoinput" ><input type="text" id="username" name="username" ></div>
            <div class="logolable"><lable>Password</lable></div>
            <div class="logomima"><input type="password" id="password" name="password"></div>
            <div class="logobutton"><input type="submit" id="submit" name="submit" class="logobutton" value="LOGIN"></div>
        </form>
        <div class="logocaozuo">
            <div><a href="#">REGISTER</a></div>
            
        </div>
        <div class="logohuozhe">
            <div>or</div>
        </div>
        <ul class="logoqita">
            <li><a href="#"><img src="image/facebook.png" width="50px" height="50px"></a></li>
            <li><a href="#"><img src="image/instagram.png" width="50px" height="50px"></a></li>
            <li><a href="#"><img src="image/kakao_talk.png" width="50px" height="50px"></a></li>
        </ul>
    </div>
 
   
    
    <script type="text/javascript" src="script/logo.js"></script>
</body>
</html>