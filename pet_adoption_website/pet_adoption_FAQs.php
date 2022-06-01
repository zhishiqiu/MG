<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption FAQs</title>
    <link rel="stylesheet" type="text/css" href="style/public.css" />
    <link rel="stylesheet" type="text/css" href="style/prepare.css" />
    <link rel="stylesheet" type="text/css" href="style/petFAQs.css" />
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
                        <a href="pet_adoption_FAQs.php"><p class="xiatiao">Pet Adoption FAQs</p></a>
                        <a href="prepare.php"><p class="xiatiao2">Prepare For Adopt A Pet</p></a>
                    </div>
                </li>
                <li><a href="activity.html">ABOUT COMPANY</a></li>
                
            </ul>

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
    <div class="knowledge">
        <div class="module_container">
            <div class="container_header">
                <p class="title">Pet Adoption FAQs</p>
                <p class="subtitle">love him with all your heart</p>
            </div>
            <div class="container_content">
                <div class="yetou">
                <p>The following links will take you to some of the most frequently asked questions about adopting a pet that you see on Petfinder. If you can’t find the answer below, please contact us (see the bottom of this page) with any additional questions you have.</p>
                </div>
                <!--First-->
                <div class="drop">
                    <p>
                        <strong>
                            <a href="#">How Do I Search For a Pet? </a>
                        </strong>
                    </p>
                    <div id="adopt">Petfinder.com is a searchable list of pets from over 11,000 shelters and rescue groups across the US, Canada, and Mexico. To find an adoptable pet, you can begin your search using “Find a Pet” located above. Since Petfinder is updated regularly, we recommend that you keep checking back or create a saved search email alert to be notified when new pets matching your search criteria are added to the site.</div>    
                </div>
                <ul>
                        <li>
                            <a href="#">Can I Save My Search or Be Notified When New Pets Are Available?</a> 
                            <div id="notified">To be notified by email when pets matching your search criteria are first posted on the site, use our saved search feature. After performing a search, you will see a button with a bell icon to the right of your search results. Click on this button to set an email alert for your search. To manage all saved searches you can login or create and account here.</div>
                        </li>
                        <li>
                            <a href="#">Is the Pet I See on Petfinder Still Adoptable? </a>
                            <div id="notified">Across the 11,000 shelter and rescue groups in Petfinder’s North American network, each is responsible for updating adoptable pet listings. To learn about a specific pet, please contact the shelter or rescue directly by going to the Pet Profile page and clicking the “Ask About” button.</div>
                        </li>
                        <li>
                            <a href="#">How Often is Petfinder Updated?</a>
                            <div id="notified">
                                Because each shelter and rescue group is responsible for keeping its adoptable pet listings current, Petfinder is continuously updated.
                            </div>
                        </li>
                </ul>
                <!--Second-->
                <div class="drop">
                    <p>
                        <strong>
                            <a href="#">How Do I Adopt a Pet I See On Petfinder? </a>
                        </strong>
                    </p>
                    <div id="adopt">Petfinder is a website and searchable database for over 11,000 animal shelters and rescue groups across the US, Canada and Mexico to post their adoptable pets. While Petfinder does provide a web-based adoption platform for groups across North America, we are not involved in any of our members’ pet adoptions. Each adoption group using our site has its own adoption policies and procedures and solely handles its own pet adoptions. To adopt a pet you see listed on Petfinder, please click the “Ask About” button on the pet’s profile. You will then be given the group’s contact information and, if an email is available for that group, you will be able to email that group using our form.</div>    
                </div>
                <ul>
                        <li>
                            <a href="#">How Do I Meet a Pet I See on Petfinder?</a> 
                            <div id="notified">Once you find a pet you’re interested in adopting, you’ll probably want to meet him or her. Go to the Pet Profile page by clicking on the pet’s picture or name on a search results page. This takes you to the pet’s detail page. Click “Ask About” to directly contact the shelter or rescue to inquire further.</div>
                        </li>
                        <li>
                            <a href="#">Does Contacting the Shelter or Rescue Group Reserve the Pet I’m Interested In? </a>
                            <div id="notified">Submitting an adoption inquiry does not guarantee that the pet you’ve inquired about will still be available. For more information regarding the status of your inquiry, or the pet you’ve applied for, please contact the shelter or rescue group that listed the pet. The shelter’s address and contact information can also be found on the pet’s profile page.</div>
                        </li>
                        <li>
                            <a href="#">Do I Need to Apply to Petfinder?</a>
                            <div id="notified">
                                No. Once you’ve submitted an inquiry to an adoption group, the shelter or rescue group with the pet you’re interested in will be sent your information. It is then up to the shelter or rescue group to determine whether it’s a match.
                            </div>
                        </li>
                </ul>
                <!--Third-->
                <div class="drop">
                    <p>
                        <strong>
                            <a href="#">How Can I Adopt a Pet I See On Petfinder? </a>
                        </strong>
                    </p>
                    <div id="adopt">Petfinder is a website and searchable database for nearly 14,000 animal shelters and rescue groups across the US, Canada and Mexico to post their adoptable pets. While Petfinder does provide a web-based adoption platform for groups across North America, we are not involved in any of our members’ pet adoptions. Each adoption group using our site has its own adoption policies and procedures and solely handles its own pet adoptions. To adopt a pet you see listed on Petfinder, please click the “Adopt Me” button or the “Contact this Organization” button on the pet’s profile. You will then be given the group’s contact information and, if an email is available for that group, you will be able to email that group using our form. More questions about adopting a pet:</div>    
                </div>
                <ul>
                        <li>
                            <a href="#">Does Contacting the Adoption Group Put The Pet on Hold?</a> 
                            <div id="notified">
                                Submitting an adoption inquiry does not guarantee the pet you’ve applied for, nor does it place a pet “on hold”.  For more information regarding the status of your application, or the pet you’ve applied for, please contact the shelter or rescue group listing the pet directly.
                            </div>
                        </li>
                        <li>
                            <a href="#">Am I Applying to Petfinder?</a>
                            <div id="notified">
                                No. Once you’ve submitted an inquiry to an adoption group, the shelter or rescue group with the pet you’re interested in will be sent your information. It is then up to the shelter or rescue group to determine whether it’s a match.
                            </div>
                        </li>
                        <li>
                            <a href="#">How Will I Know If I’ve Been Approved to Adopt a Pet?</a>
                            <div id="notified">
                                After submitting an adoption inquiry, the shelter or rescue group with the pet you’re interested in will contact you. You may also reach out to the shelter or rescue group directly to follow up.
                            </div>
                        </li>
                </ul>
                <!--Fourth-->
                <div class="drop">
                    <p>
                        <strong>
                            <a href="#">What Are The Requirements For Adopting A Pet? </a>
                        </strong>
                    </p>
                    <div id="adopt">Each adoption group that lists its pets on Petfinder has its own rules and requirements for adopting pets. If you’re interested in a specific pet, please reach out to the adoption group that created the pet listing to find out what their policies are.</div>    
                </div>
                <ul>
                        <li>
                            <a href="#">Can I Adopt a Pet Who’s Out of State?</a> 
                            <div id="notified">
                                Thank you for your interest in adopting a pet! Each adoption group that lists its pets on Petfinder has its own rules and requirements for adopting out pets. Petfinder doesn’t dictate adoption group policy, including adoption requirements and whether out-of-state adoptions are allowed by each group. If you’re interested in a specific pet, please reach out to the adoption group that has that pet. (You can contact the group using the contact information found of the pet’s profile page).
                            </div>
                        </li>
                        <li>
                            <a href="#">Will There Be An Adoption Fee?</a>
                            <div id="notified">
                                Petfinder doesn’t dictate adoption group policy, including adoption requirements and fees. If you’re interested in a specific pet, please contact the adoption group that created the pet listing through the Pet Profile page or Member Home Page.
                            </div>
                        </li>
                        <li>
                            <a href="#">Why Do Shelters and Rescue Groups Charge Adoption Fees?</a>
                            <div id="notified">
                                Adoption fees help cover the medical care of the animal while he or she waits for a new home, as well as food and transportation costs. These fees help to provide care for the other animals in the shelter or rescue group who may have medical bills that are much higher than any possible adoption fee. The money also acts as a donation to help support the organization as a whole, allowing the group to continue its efforts to rescue and rehome pets.
                            </div>
                        </li>
                </ul>
            </div>
            <div>
                <img src="image/pp.jpg" style="height: auto; width: auto; margin-top: 100px; margin-bottom: 100px;">
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