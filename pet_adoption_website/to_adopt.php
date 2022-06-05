<?php 
    if(!isset($_COOKIE['username'])){
        header("refresh:0;url=loginpage.php");
    }

    $pet_id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoption</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
	<link rel="stylesheet" type="text/css" href="style/uppet.css" />
	<link rel="stylesheet" type="text/css" href="style/user.css" />
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
                        <a href="pet_adoption_FAQs.php"><p class="xiatiao">Pet Adoption FAQs</p></a>
                        <a href="prepare.php"><p class="xiatiao2">Prepare For Adopt A Pet</p></a>
                    </div>
                    </li>
                    <li><a href="index.php">ABOUT COMPANY</a></li>
                    
                </ul>
                <div class="user">              
                            <a href="userhome.php">
                                <img class="jiantou" src="image/jiantou.png" >
                                <img class="userimage" src="image/user.jpg" >
                                <!-- <img class="userimage" > -->
                            </a>
                        
                         
                        <div class="manage-cont">
                            <div class="item_manage manage_select">
                                <!-- <div class="logout"><a href="userhome.php">user home</a></div> -->
                                <div> <?php echo $_COOKIE['username']?> </div>
                            </div>
                            <div class="item_manage manage_info">
                                <div class="logout"><a href="logout.php" title="logout">Sign out</a></div>
                                
                            </div>
                            <div class="item_manage manage_info">
                                <a href="userhome.php">Your profile</a>
                            </div>
                        </div>
                         
                </div>

            </div>
    </div>

	<div class="head">
        <div class="banner">
            <div><img src="image/to adopt.jpg"></div>
        </div>
    </div>
    <div>
<div class="fabucontent">
	<div style="font: size 25px ; text-align: center; color:lightslategray;">
		<h2>ADOPTION</h2>
	</div>
	<div class="cont-inner" >
        <form action="php/adopt.php" method="post">
            <table style="font-size: 18px ;color:lightslategrey;">
                <tr class="inner-main">
                    <td>name ： </td>
                    <td><input type="text" name="adoption_name"></td>
                </tr>
                <tr class="inner-main">
                    <td>age ： </td>
                    <td><input type="text" name="adoption_age"></td>
                </tr>
                <tr class="inner-main">
                    <td>tel ： </td>
                    <td><input type="text" name="adoption_tel"></td>
                </tr>
                <tr class="inner-main">
                    <td>place ： </td>
                    <td><input type="text" name="adoption_place"></td>
                </tr>
                <tr class="inner-main" style="display:none ;">
                    <td>pet_id : </td>
                    <td><input type="text" name="adoption_pet_id" value=" <?php echo $pet_id?> "></td>
                </tr>
            </table>
            <div class="cont-btn">
				<input class="button" type="submit" value="submit">
			</div>
        </form>
    </div>
</div>
</body>
</html>