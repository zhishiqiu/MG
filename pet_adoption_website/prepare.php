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
    <title>Prepare for adopt a pet</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/prepare.css" />
    <link rel="stylesheet" type="text/css" href="style/user.css" />
    <link rel="icon" type="image/x-icon" href="image/bitbug_favicon.ico" />
</head>
<body>
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

            <?php if(isset($_COOKIE["username"])){
                    echo "
                    <div class='user'>              
                            <a href='userhome.php'>
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
    <div class="knowledge">
        <div class="module_container">
            <div class="container_header">
                <p class="title">Prepare For Adopt A Pet</p>
                <p class="subtitle">love him with all your heart</p>
            </div>
            <div class="container_content">
                <div class="content_wrapper">
                    <p class="p-f">Nowadays, many urban aborigines choose to live with pets, and some even vow to live with their pets for a lifetime. The following ten rules are things to think about before you decide to adopt a pet.</p>
                    <div class="payattention">
                        <p>1. Don't be impulsive to raise pets</p>
                        <p>Never adopt or buy a pet on a whim. Be sure to think carefully before adopting a pet. Although you may be deeply adored by those little cuties, you must remember that if you raise it, it means an extra family member in the family. Sometimes we don't judge our needs very well, and impulsive decisions driven by those desires are often wrong. Before deciding to adopt a pet, it is best to browse Tieba or Weibo to see what kind of pet is suitable for your lifestyle. Don't be impulsive.</p>
                    </div>
                    <div class="payattention">
                        <p>2. Multi-channel understanding</p>
                        <p>Take the time to understand the kind of pet you are considering purchasing. Merchants are often not the best source of information. Books can sometimes be referred to, but people who write books may not write so clearly because of their deep love for a certain species. It is important to remember that a pet can change the outcome of a family and it needs to be embraced by all family members. If you're considering buying a dog, be sure to understand the special attributes of the breed you want to buy. Dog breeds are like people in personality, abilities, and needs—different.</p>
                    </div>
                    <div><img src="image/pp3.jpg" style="height: 400px; width: 500px;padding-left: 300px;"></div>
                    <div class="payattention"> 
                        <p>3. Pets need to match your lifestyle</p>
                        <p> Are you a night owl or a regular sleeper? Some pets, such as honey kangaroos and ferrets, sleep most of the day and are most active at night. Do you work long hours? Some pets are lonely, while others are not bothered by loneliness. do you have kids? Do they harm pets? If you travel a lot, who will look after your pets while you are away?</p>
                    </div>
                    <div class="payattention"> 
                        <p>4. Pets need to match your home environment</p>
                        <p>How much free space do you have in your home? Have a backyard? Is there a fence? What would your neighbors think of this pet (especially a large barking dog)? If you rented a house, what would your landlord think about this pet?</p>
                    </div>
                    <div class="payattention"> 
                        <p>5. Weigh well, whether this time point is the best time to accept pets</p>
                        <p>Consider frankly whether now is really the right time to have one (another) pet in your life. If you already have a pet, how does the new friend get along with the one you already have? How stable are your relationships? How is your health?</p>
                    </div>
                    <div><img src="image/knowledge2.jpg" style="height: 600px; width: 800px;padding-left: 200px;"></div>
                    <div class="payattention"> 
                        <p>6. Think about how long you want your pet to live</p>
                        <p>How long do you want your pet to live? The average lifespan for dogs and cats is 12-16 years -- some longer. Turtles and goldfish have indeterminate lifespans, similar to those of us humans. Small parrots live 8-14 years old and large parrots live 35-60 years old.</p>
                    </div>
                    <div class="payattention"> 
                        <p>7. Cost</p>
                        <p>In addition to the cost of buying pets, you will also need to buy them a range of things they usually need. Over time, the cost of a good diet will far exceed anything you pay for an animal. It may also require expensive veterinary care, grooming and babysitting fees.</p>
                    </div>
                    <div class="payattention">
                        <p>10. What types of pets should I consider?</p>
                        <p>Most dogs are smart, loyal, happy, and obedient. They are closely related to their owners. But if you want them to grow healthy and strong, you need to spend a lot of time</p>
                        <p>Cats have been kept as pets since Egypt. They are more independent than dogs and can tolerate loneliness, can spend a day on their own, and thrive even on their own.</p>
                    </div>
                </div>    
            </div>
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
</body>
</html>