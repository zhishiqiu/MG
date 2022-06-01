<?php
    if(!isset($_COOKIE['username'])){
        header("refresh:0;url=login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your profile</title>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/userhome.css" />
</head>
<body>
    <div class="header">
            <div class="container"style="float: left; position:absolute; margin-left: 10%;" >
                <div class="logo" ><a href="index.php"><img src="image/maologo.jpg" ></a></div>
                <ul class="titlelist">
                    <li><a href="index.php">HOME</a></li>
                    <li class="dropdown"><a href="pet_adoption.php">PET ADOPTION</a>
                    <div class="dropdown-content" >
                        <a href="pet_adoption_FAQs.php"><p class="xiatiao">Pet Adoption FAQs</p></a>
                        <a href="prepare.php"><p class="xiatiao2">Prepare For Adopt A Pet</p></a>
                    </div>
                    </li>
                    <li><a href="#">ABOUT COMPANY</a></li>
                    
                </ul>
                <!--
                <div class="dengru">
                    <div><a href="loginpage.php">LOGIN</a></div>
                    <div><a href="registerpage.php">SIGN UP</a></div>
                </div> 
                -->
            </div>
        </div>
        <div class="banner" style="margin-top:80px;">
            <div class="box"><img src="image/userpage.jpg"></div>
			<div class="user">
				<div class="user-img"><img src="image/user.jpg" ></div>
				<div class="user-text">
					<div><h3><?php echo $_COOKIE['username']?></h3><i class="iconfont icon-v"></i><span>+focus on</span><span>...</span></div>
					<p>focus on1<span>|</span>fans8994</p>
				</div>
			</div>
		</div>
        <div class="user-nav">
			
            <div class="first"><a href="upPet.php">Post Content</a></div>
			<div class="second"><a href="pet_adoption.php">Pet Adoption</a></div>
            
		</div>
</body>
</html>