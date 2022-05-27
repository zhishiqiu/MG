

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="style/index.css"/>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="font/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="style/user.css" />
   
</head>
<body>
    
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
                <!-- check cookie -->
                <?php if(isset($_COOKIE["username"])){
                    echo "
                    <div class='user'>              
                            <a href='#'>
                                <img class='jiantou' src='image/jiantou.png' >
                                <img class='userimage' src='image/user.jpg' >
                            </a>
                        
                         
                        <div class='manage-cont'>
                            <div class='item_manage manage_info'>
                                <div> " . $_COOKIE["username"] . " </div>
                            </div>
                            <div class='item_manage manage_info'>
                                <div><a href='logout.php' title='logout'>Sign out</a></div>
                                
                            </div>
                            <div class='item_manage manage_info'>
                                <div>
                                    <a href='userhome.php'>Your profile</a>
                                </div>
                            </div>
                        </div>         
                    </div>
                ";
                    
                }else{
                    echo "
                    <div class='dengru'>
                        <div><a href='loginpage.php'>LOGIN</a></div>
                        <div><a href='registerpage.ph'>SIGN UP</a></div>
                    </div>
                    ";
                }?>
                    
            </div>
        </div>

    
        </div>
        <div class="head">
        <div class="banner">
            <div><img src="image/3.jpg">
                <span style="position: absolute; margin-top: 200px; font-size: 70px; font-weight: 200; color: blanchedalmond;">Find your new best friend there</span>
            </div>
            <div><img src="image/index1.jpg">
                <span style="position: absolute; margin-top: 200px; font-size: 70px; font-weight: 200; color: blanchedalmond;">Find your new best friend there</span>
            </div>
            <div><img src="image/5.webp">
                <span style="position: absolute; margin-top: 200px; font-size: 70px; font-weight: 200; color: blanchedalmond;">Find your new best friend there</span>
            </div>
            </div>
            <ul class="lrbutton">
                <li>&lt;</li>
                <li>&gt;</li>
            </ul>
           
        </div>

        <div class="center">
            <h1>아이들에게 집을 주세요!</h1>
        </div>

        <div class="field">
            <div class="paragraph">
            <div class="field_name1">
                <h1>Planning to Adopt a Pet?</h1>
            </div>
            
                <div class="layout">
                    <div class="field_name2">
                        <div class="field_item">
                            <h2>Prepare For Adopt a Pet</h2>
                            <p>Helping people who haven't made up their minds about having a pet</p>
                            <div class="botton">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="field_item">
                            <h2>Pet Adoption FAQs </h2>
                            <p>Get answers to questions you haven't thought of</p>
                            <div class="botton">
                                <a href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>

        <div class="introduction">
            <div class="shuoming">
                
            </div>
        </div>

        <div class="center-2">
            <ul class="imglist imglistone">
                <li><a href="#">
                    <img src="image/maolizi2.jpg">
                    <div class="text">
                        <div>
                            <i class="iconfont icon-yanjing"></i><span>10000</span>
                        </div>
                        <h3>.............</h3>
                    </div>
                </a>
               </li>

                <li><a href="#">
                    <img src="image/maolizi3.jpg">
                    <div class="text">
                        <div>
                            <i class="iconfont icon-yanjing"></i>
                            <span>10000</span>
                        </div>
                        <h3>.............</h3>
                    </div>
                </a></li>
                
            </ul>
            <ul class="imglist imglisttwo">
                <li>
                    <a href="#">
                        <img src="image/goulizi.jpg">
                        <div class="text">
                            <div>
                                <i class="iconfont icon-yanjing"></i><span>10000</span>
                            </div>
                            <h3>.............</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/goulizi2.jfif">
                        <div class="text">
                            <div>
                                <i class="iconfont icon-yanjing"></i><span>10000</span>
                            </div>
                            <h3>.............</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="image/goulizi3.jpg">
                        <div class="text">
                            <div>
                                <i class="iconfont icon-yanjing"></i><span>10000</span>
                            </div>
                            <h3>.............</h3>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="more">
                <a href="pet_adoption.php">More</a>
            </div> 
        </div>
        <!--<about us>-->

        <div class="bac">
            <div class="imgbox">
                <img class="b-p" src="image/mycompany.png">
                <img class= "ptwo" src="image/29.png">
                <label class="content">We have a heart that loves animals, and we raise and nurture pets, hoping to find an owner who loves them and understands them, and finds a good family for them. At the same time, we also hope that it can bring happiness to the owner and accompany the owner. . We raise and breed puppies with the most professional personnel to ensure the physical and mental health of pets and the needs of buyers...</label>
                <a id="com"><label class="yetou">/ABOUT US</label></a>
            </div>
        </div>
        
       



        <div class="foottop"></div>
        <div class="footer">
            <div class="container">
                <div class="footer-yi"> 
                        <h1>PetCompany</h1>
                        <h2>Contact us</h2>
                    <span>
                        <a href="#" ><h3>Terms of service</h3></a>
                        <a href="#"><h3>Privacy policy</h3></a>
                        <a href="#"><h3>Location-based service Terms</h3></a>
                    </span>                   
                </div>
                <div class="footer-two">
                    <img src="image/liantu.png">
                    <p class="follow">Follow Us</p>
                </div>
               
               
            </div>
        </div>
        <script type = "text/javascript" src="script/js.js"></script>
        
        <script type = "text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/login.js"></script>
     
</body>
</html>