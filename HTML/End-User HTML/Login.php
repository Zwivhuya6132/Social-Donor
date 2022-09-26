<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../Stylesheets/General CSS/General CSS.css">
    <link rel="stylesheet" href="../../Stylesheets/index head.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Navigation.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/footer.css">
    <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Registration.css">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Social Donors - Registration</title>
    <style>
        #errorContainer{
        width: 45%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: larg;
        font-weight: 700;
        border-radius: 25px;
        background-color: red;
        margin: auto;
        }
    </style>
</head>

<body>

    <header class="header">
            
        <a href="../../index.php">

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

                <div class="log-in">
                            
                    <h4>Become a Donor</h4>
                    <p>0800 119 031</p>
                    <img src="../../Icons/download (1).png">

                </div>
            </div>

            <ul class="header-navigation-anchor">
                <a href="../../index.php#section-one"><li class="header-navigation">Donation Stats</li></a>
                <a href="../../index.php#section-two"><li class="header-navigation">Blood Drive</li></a>
                <a href="../../index.php#section-three"><li class="header-navigation">About I.R.O.N</li></a>
                <a href="../../index.php#section-four"><li class="header-navigation">Photo Galary</li></a>
                <a href=""><li class="header-navigation">Where To Donate</li></a>
            </ul>

        </div>

    </header>

<!-------------------------------------------------------------------- THIS IS WHERE MY NAVIGATION WILL START ----------------------------------------------------------------->

    <nav class="navigation-container">

        <div class="navigation">

            <a href="../../index.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img class="home-img" src="../../Icons/ant-design_home-outlined.png">
                    </div>
        
                    <div class="home-text">
                        <p>HOME</p>
                    </div>
                </div>

            </a>

            <a href="Registration.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/ic_baseline-app-registration.png">
                    </div>
        
                    <div class="registration-text">
                        <p>REGISTRATION</p>
                    </div>
                </div>

            </a>

            <a href="Log-In.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/gg_log-in.png">
                    </div>
        
                    <div class="login-text">
                        <p>LOG-IN</p>
                    </div>
                </div>

            </a>
            
            <a href="../Admin HTML/Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Dashboard.png">
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

            <form class="login-form" method="POST" name="userLogForm" action="../includes/login.inc.php">

                <div>
                    <h1>Login</h1>
                </div>

                <div id="errorContainer">
                <?php
                if (isset($_GET["error"])) {

                if ($_GET["error"]== "emptyinput"){
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"]== "wronglogin") {
                    echo "<p>Incorrect Credentials</p>";
                }
            }
            
            ?>
                </div>

                <div class="login-details">
                    <div class="input-holder">
                        <label for="email">Username:</label><br>
                        <input type="text" name="email" placeholder="Email/ID Number">
                    </div>
    
                    <div class="input-holder toggle">
                        <label for="password">Password:</label><br>
                        <input id="password" type="password" name="password" placeholder="Password">
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