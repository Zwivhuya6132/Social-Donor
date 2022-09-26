<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../Stylesheets/General CSS/General CSS.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Header.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Navigation.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/footer.css">
    <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Registration.css">
    <link rel="stylesheet" href="../../Stylesheets/Admin CSS/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Social Donors - Admin Login</title>
</head>

<body>

    <header class="header">
            
        <a href="home.php">

            <div class="logo-container">
                <img class="logo" src="../../Logo/download 2.png" >
            </div>

        </a>


        <div class="container">
            
            <div class="search-bar-button">

                    <div class="search-input-container">
                        <div class="search-input">
                            <input type="text" placeholder="Search" class="search-bar">
                            <button type="submit" class="search-btn">search</button>
                            <img src="../../Icons/ant-design_search-outlined.png">
                        </div>
                    </div>

                    <!-- <div class="log-in-button">
                        
                        <a href="Registration.php">
                            <button class="log-in">SIGN-UP/LOGIN</button>
                        </a>

                    </div> -->
            </div>

            <ul class="header-navigation-anchor">

                <a href="home.php"><li class="header-navigation">Home</li></a>
                <a href="Login.php"><li class="actv">Admin Log-In</li></a>
                <a href="Registration.php"><li class="header-navigation">Admin Registration</li></a>
                <a href="donors.php"><li class="header-navigation">Donors</li></a>
                <a href="Available blood.php"><li class="header-navigation">Available Blood</li></a>
                <a href="Blood bank.php"><li class="header-navigation">Blood Bank</li></a>
                <!-- <li class="header-navigation"><a href="#">ABOUT US</a></li> -->

            </ul>

        </div>

    </header>

<!-------------------------------------------------------------------- THIS IS WHERE MY NAVIGATION WILL START ----------------------------------------------------------------->

    <nav class="navigation-container">

        <div class="navigation">

            <a href="../End-User HTML/Home.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img class="home-img" src="../../Icons/ant-design_home-outlined.png">
                    </div>
        
                    <div class="home-text">
                        <p>HOME</p>
                    </div>
                </div>

            </a>

            <!-- <a href="../End-User HTML/Registration.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/ic_baseline-app-registration.png">
                    </div>
        
                    <div class="registration-text">
                        <p>REGISTRATION</p>
                    </div>
                </div>

            </a> -->

            <a href="../End-User HTML/Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/log-in.png">
                    </div>
        
                    <div class="login-text">
                        <p>LOG-IN</p>
                    </div>
                </div>

            </a>

            <a href="../End-User HTML/profile.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/User-profile.png">
                    </div>
        
                    <div class="profile-text">
                        <p>PROFILE</p>
                    </div>
                </div>

            </a>
            
            <a href="../Admin HTML/Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/clarity_dashboard-outline-badged.png">
                    </div>
        
                    <div class="dashboard-text">
                        <p>ADMIN DASHBOARD</p>
                    </div>
                </div>

            </a>

        </div>

    </nav>

<!-------------------------------------------------------------------- THIS IS WHERE THE MAIN CONTENT START --------------------------------------------------------->

    <main>

        <section class="section-one">

            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 5</div>
                  <img src="../../Images/UJ_Coronavirus_Banner.jpg">
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 5</div>
                  <img src="../../Images/SANBS-homepage-banner-landscape1-1400x800 1.png">
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 6</div>
                  <img src="../../Images/3496-SANBS-Recruitment-Collateral-HOMEPAGE-1400x800.png">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="../../Images/download.jpg">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="../../Images/download.png">
                  </div>
                  <br>

                  <div class="dot-holder">
                      
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span> 
                  <span class="dot" onclick="currentSlide(5)"></span> 
                  </div>
                  
                </div>

        </section>

       <section class="section-two">

            <form class="login-form">

                <div>
                    <h1>Admin Login</h1>
                </div>

                <div class="login-details">
                    <div class="input-holder">
                        <label for="email">Email Address:</label><br>
                        <input type="text" name="email" class="" placeholder="Email Address">
                    </div>
    
                    <div class="input-holder toggle">
                        <label for="password">Password:</label><br>
                        <input id="password" type="password" name="password" class="" placeholder="Password">
                        <span id="toggleBtn"></span>
                    </div>
                </div>

                <h6 class="register">Don't have an account yet? <a href="Registration.php"><em>REGISTER</em></a></h6>

                <div class="login-btn">
                    <button type="submit" id="submit" name="submit">LOGIN</button>
                </div>


            </form>

       </section>

       <footer class="footer">

        <div class="footer-child-one">

            <div class="where-to-donate">
                <div>
                    <h5>WHERE TO DONATE</h5>
                </div>

                <div>
                    <ul>
                        <li>Donor Centre</li>
                        <li>Plasma & Platelets</li>
                        <li>Convalescent Plasma donors</li>
                        <li>Blood Drives</li>

                    </ul>
                </div>

            </div>
            
            <div class="donors">
                <div>
                    <h5>DONORS</h5>
                </div>

                <div>
                    <ul>
                        <li>Who Can Donate?</li>
                        <li>Why Donate Blood?</li>
                        <li>Defferals</li>
                        <li>Donor Partners</li>
                        <li>Donors Iron & Ferritin</li>
                        <li>FAQs</li>
                        <li>Can I Save 3 Lives Today</li>

                    </ul>
                </div>

            </div>
            <div class="about-blood">
                <div>
                    <h5>ABOUT BLOOD</h5>
                </div>

                <div>
                    <ul>
                        <li>Blood Types</li>
                        <li>Types of Donations</li>
                    </ul>
                </div>
            </div>
            <div class="services">
                <div>
                    <h5>SERVICES</h5>
                </div>

                <div>
                    <ul>
                        <li>Blood Products</li>
                        <li>Clinical Service</li>
                        <li>Proficiency Testing(EQA)</li>
                        <li>Product Price List</li>
                        <li>Specialised Services</li>
                        <li>Customer Invoice Portal</li>
                        <li>User Guides - Cust Inv Portal</li>
                        <li>HC Worker - Learning Portal</li>
                    </ul>
                </div>
            </div>

            <div class="news">
                <div>
                    <h5>NEWS</h5>
                </div>

                <div>
                    <ul>
                        <li>News</li>
                        <li>Media Release</li>
                        <li>Campaigns</li>
                        <li>Events</li>
                        <li>Gaz'lam</li>

                    </ul>
                </div>

            </div>
            <div class="subscribe">
                <div>
                    <P class="to-our-news">Subscribe To Our News:</P>
                </div>

                <div>
                    <input class="enter-your-email" type="text" placeholder="Enter Your Email"><br>
                    <button Class="subscribe-button">Subscribe</button>


                </div>
                <p class="terms-of-use">By Subscribing you are confirming<br> that you have read and accept our<br> <em>Terms of Use</em></p>
            </div>
        </div>

        <div class="footer-child-two">

            <div class="social-donors-rights">
                <div class="footer-logo">
                    <h1>SOCIAL DONORS</h1>
                </div>
    
                <div class="copy-right">
                    <p>Social Donors 2011-2021</p>
                </div>
    
                <div class="terms-n-cond">
                    <p>terms & Conditions</p>
                </div>
    
                <div class="privacy">
                    <p>Privacy</p>
                </div>
    
                <div class="language">
                    <p>US English</p>
                </div>
            </div>



            <div class="socials">
                <div>
                    <img src="../../Icons/Facebook.png">
                </div>
                <div>
                    <img src="../../Icons/Twitter.png">
                </div>
                <div>
                    <img src="../../Icons/Linkedin.png">
                </div>
            </div>

        </div>

    </footer>

    </main>

    <script src="../../JavaScript/slideshow.js"></script>
    <script src="../../JavaScript/validation.js"></script>
        

</body>
</html>