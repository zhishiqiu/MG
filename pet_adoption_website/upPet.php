<?php 
if(!isset($_COOKIE['username'])){
    header("refresh:0;url=loginpage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>up pet</title>
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
            <div><img src="image/fabu1.jpg"></div>
        </div>
    </div>
	

	<div class="fabucontent">
			<div class="cont-title">
				<h2>Post Content</h2>
			</div>
		<div class="cont-inner">
			<form action="php/uploadPet.php" method="post" enctype="multipart/form-data">
				<table>
					<tr class="inner-main">
						<td>picture：</td>
						<td><input type="file" name="pet-submit"></td>
					</tr>
					<tr class="inner-main">
						<td>type：</td>
						<td><input type="text" name="petType"/></td>
					</tr>
                    <tr class="inner-main">
						<td>pet name：</td>
						<td><input type="text" name="petName"/></td>
					</tr>
					<tr class="inner-main">
						<td>sex：</td>
						<td>
							<input type="radio" name="sex" value="male">male
							<input type="radio" name="sex" value="female">female
						</td>
					</tr>
					<tr class="inner-main">
						<td>age：</td>
						<td><input type="text" name="age"/></td>
					</tr>
                    <tr class="inner-main">
						<td>place：</td>
						<td><input type="text" name="place"/></td>
					</tr>
					<tr class="inner-main">
						<td>whether to vaccinate：</td>
						<td>
							<input type="radio" name="vacc" value="yes">yes
							<input type="radio" name="vacc" value="no"> no
						</td>
					</tr>
					<tr class="inner-main">
						<td>tel：</td>
						<td><input type="text" name="tel"/></td>
					</tr>
					<tr class="inner-main">
						<td>remark：</td>
						<td><input type="text" name="remark"/></td>
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