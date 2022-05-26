<?php 
include("connect.php");

$pet_id = $_GET["id"];

echo $pet_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/user.css" />
    <link rel="stylesheet" type="text/css" href="style/pet.css" />
</head>
<body>
<div class="head">
        <div class="header">
            <div class="container">
                <div class="logo"><a href="index.php"><img src="image/maologo.jpg" ></a></div>
                <ul class="titlelist">
                    <li><a href="index.php">HOME</a></li>
                    <li class="dropdown"><a href="pet_adoption.php">PET ADOPTION</a>
                    <div class="dropdown-content" >
                        <p class="xiatiao">Pet Adoption FAQs</p>
                        <p class="xiatiao2">Prepare For Adopt A Pet</p>
                    </div>
                    </li>
                    <li><a href="#com">ABOUT COMPANY</a></li>
                    
                </ul>
                <div class="user">              
                            <a href="#">
                                <img class="jiantou" src="image/jiantou.png" >
                                <img class="userimage" src="image/user.jpg" >
                                <!-- <img class="userimage" > -->
                            </a>
                        
                         
                        <div class="manage-cont">
                            <div class="item_manage manage_info">
                                <div> <?php echo $_COOKIE['username']?> </div>
                            </div>
                            <div class="item_manage manage_info">
                                <div><a href="logout.php" title="logout">Sign out</a></div>
                                
                            </div>
                            <div class="item_manage manage_info">
                                <div>
                                    <a href="userhome.php">Your profile</a>
                                </div>
                            </div>
                        </div>
                         
                </div>

            </div>
    </div>
    <div class="head">
        <div class="banner">
            <img src="image/pp3.jpg">
        </div>
    </div>
    <div class="petbox">
       <div class="p-pic"><img src="image/aa.jpg"></div>
       <div class="message">
           <p >petname:</p>
           <p>petsex:</p>
           <p>age:</p>
       </div>
       <div class="boxbottom">
           <div class="blank">   
           </div>
       </div>
       <div class="submition">
        <a href="#">to adopt</a>
       </div>

    </div>
</div>
</body>
</html>