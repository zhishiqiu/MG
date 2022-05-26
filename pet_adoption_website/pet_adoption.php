<?php
    if(!isset($_COOKIE['username'])){
        header("refresh:0;url=login.php");
    }

    require_once 'connect.php';
    $sql = "SELECT id, petName, petType, sex, pic , remark from pet";
    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/user.css" />
    <link rel="stylesheet" type="text/css" href="style/pet_adoption.css" />
</head>
<body>
    <div class="head">
        <div class="header">
            <div class="container">
                <div class="logo"><a href="index.php"><img src="image/maologo.jpg" ></a></div>
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
    </div>
   
    <div class="picture"><img src="image/petadopition.jpg"></div>
    <div class="chaxun"></div>
    <div class="cen">
        <div class="adoption img1">
            <?php if($result -> num_rows > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo 
                                "<div class='con'>
                                    <a href='pet.php?id= ". $row["id"] ."'>
                                        <img src =". $row["pic"] . ">
                                        <div class='text-con' >
                                            
                                            <div class='dec'>" . $row["petName"] ."<br>" . $row["remark"] ."</div>
                                        </div>
                                    </a>
                                </div>";
                    }
            }?> 
        </div>
    </div>
    
    <script type = "text/javascript" src="script/layui.js"></script>
    <script type = "text/javascript" src="script/fenye.js"></script>
</body>
</html>