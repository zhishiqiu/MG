<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
                <li class="dropdown"><a href="liao.html">PET ADOPTION</a>
                <div class="dropdown-content" >
                        <p class="xiatiao">Pet Adoption FAQs</p>
                        <p class="xiatiao2">Prepare For Adopt A Pet</p>
                    </div>
                </li>
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
			<h1>Sign Up</h1>
			<form action="register.php" method="post">
				<div class="logolable"><lable>Username</lable></div>
				<div class="logoinput" ><input type="text" id="username" name="username" required="required"></div>
				<div class="logolable"><lable>Password</lable></div>
				<div class="logomima"><input type="password" id="password" name="password" required="required"></div>
				<!-- <div class="logoxieyi">
					<input type="checkbox" id="check"/>
					<span>Read And Accepted<a href="#">（Registration Agreement）</a></span>
				</div> -->
				<div class="logobutton"><input type="submit" id="Sign Up" name="Sign Up" value="Sign up" class="logobutton"></div>
			</form>
			<div class="logocaozuo">
				<div><a href="#"></a></div>
				<div><a href="login.html">Already have an account? Go to login</a></div>
			</div>
		</div>
        

        <script type="text/javascript" src="script/logo.js"></script>
</body>
</html>