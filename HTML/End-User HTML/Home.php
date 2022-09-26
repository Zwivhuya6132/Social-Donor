<?php
    session_start();
?>

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
        <link rel="stylesheet" href="../../Stylesheets/End-User CSS/Home.css">


        <title>Social Donors - Home</title>
    </head>

    <body>

<!-------------------------------------------------------------------------- MY HEADER STARTS HERE ---------------------------------------------------------------------------->

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

                    <div class="notifications">

                        <div class="alert-icon">
                            <img src="../../Icons/Frame 1.png" alt="">

                            <div class="notification-count">3</div>
                        </div>

                        <div class="message-icon">
                            <img src="../../Icons/ep_message.png" alt="">
                            <div class="message-count">3</div>
                        </div>

                        <div>
                            <img src="../../Profile Pictures/Ellipse 1.png" alt="">
                        </div>

                    </div>
                </div>

                <ul class="header-navigation-anchor">
                    <a href="#section-one"><li class="header-navigation">Donation Stats</li></a>
                    <a href="#section-two"><li class="header-navigation">Blood Drive</li></a>
                    <a href="#section-three"><li class="header-navigation">About I.R.O.N</li></a>
                    <a href="#section-four"><li class="header-navigation">Photo Galary</li></a>
                    <a href=""><li class="header-navigation">Where To Donate</li></a>
                </ul>

            </div>

        </header>

<!-------------------------------------------------------------------- THIS IS WHERE MY NAVIGATION WILL START ----------------------------------------------------------------->

        <nav class="navigation-container">

            <div class="navigation">

                <a href="Home.php">

                    <div class="navigation-link-container">
                        <div class="part-one">
                            <img class="home-img" src="../../Icons/ant-design_home-outlined black.png">
                        </div>
            
                        <div class="home-text">
                            <p>HOME</p>
                        </div>
                    </div>

                </a>

                <a href="../../index.php">

                    <div class="navigation-link-container">
                        <div class="part-one">
                            <img src="../../Icons/Group 1.png">
                        </div>
            
                        <div class="login-text">
                        <?php
                            if (isset($_SESSION["id"])) {
                                echo "<p>LOG-OUT</p>";
                            }
                            ?>
                            
                        </div>
                    </div>

                </a>

                <a href="profile.php">

                    <div class="navigation-link-container">
                        <div class="part-one">
                            <img src="../../Icons/User-profile.png">
                        </div>
            
                        <div class="profile-text">
                            <?php
                            if (isset($_SESSION["id"])) {
                                echo "<p>PROFILE</p>";
                            }
                            ?>
                            
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

            <section id="section-one">

                <div class="Rectangle-eight">
                    <img class="rectangle-eight-img" src="../../Images/Rectangle 8.png" alt="Image with blood types inside">
                </div>

                <div class="Stats-container">

                    <div>
                        <h1>South Africans Donation Statistics</h1>
                        <p>
                            Less than 1% of South Africans are active blood donors. A unit of blood only lasts 42 days after donation and, for this reason, it is important for blood donors to donate regularly. Donors can give blood as often as every eight weeks. Every unit of blood can save a minimum of three lives as blood is separated into red blood cells, plasma and platelets.
                        </p>

                        <p>Social Donors aims to collect 3000 units of blood per day to ensure a safe and sufficient blood supply in the health care system. This is the journey of 1 unit of donated blood.

                            There are many Social Donors blood donation centres open to the public. To find the location nearest to you, click on our map. Or you may consider motivating your employer to host a blood drive at your offices for the convenience of all staff members.</p>

                        <div class="section-one-icons">

                            <div class="section-one-icons-info">
                                <img src="../../Icons/healthicons_blood-pressure-outline.png" alt="Heart rate image">
                                <p>We check your heart rate before you can donate so that we can be sure that you are heathy and fit enough.</p>
                            </div>

                            <div class="section-one-icons-info">
                                <img src="../../Icons/Vector.png" alt="Heart rate image">
                                <p>We check your heart rate before you can donate so that we can be sure that you are heathy and fit.</p>
                            </div>

                            <div class="section-one-icons-info">
                                <img src="../../Icons/healthicons_blood-ab-n-outline.png" alt="Heart rate image">
                                <p>We check your heart rate before you can donate so that we can be sure that you are heathy and fit enough.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
<!-------------------------------------------------------------------- THIS IS WHERE THE SECOND SECTIONA START --------------------------------------------------------->

            <section id="section-two">

                <div class="section-two-container">

                    <div class="dd">
                        <h2 class="section-two-tittle"> Social Donors <em class="blood-drive">Blood Drive </em>Campaigns</h2>
                        <p class="section-two-subtittle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>

                <div class="section-two-grid">
                    <div>
                        <img src="../../Images/images (8) 1.png" alt="person standing with a blood emoji">
                        <p>48 Hours Blood drive</p>
                    </div>

                    <div>
                        <img src="../../Images/CTA_Images_Where_can_I_donate02-e1590500830834-288x300 1.png" alt="person standing with a blood emoji">
                        <p>Donation Centres</p>
                    </div>
                    <div>
                        <img src="../../Images/images 2.png" alt="person standing with a blood emoji">
                        <p>You can save 3 lives today</p>
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 64.png" alt="person standing with a blood emoji">
                        <p>Blood Donation Quizes</p>
                    </div>
                </div>

            </section>

<!-------------------------------------------------------------------- THIS IS WHERE THE THIRD SECTIONA START --------------------------------------------------------->

            <section id="section-three">

                <div class="iron-picture">
                    <img src="../../Images/Rectangle 13.png" alt="I.R.O.N. is here image">
                </div>

                <div class="iron-things">

                    <h3>I.R.O.N</h3>
                    <P>#IronThingsOut</P>
                    <p>IRON is here. Restore Iron lost while donating blood with the Iron tablets offered by Social Donors</p>
                    <button class="iron-btn">Learn More</button>
                </div>

            </section>

<!-------------------------------------------------------------------- THIS IS WHERE THE FOURTH SECTIONA START --------------------------------------------------------->

            <section id="section-four">

                <h4>PHOTO GALARY</h4>

                <div class="section-four-grid">

                    <div>
                        <img src="../../Images/Rectangle 26.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 30.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 31.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 32.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 63.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 64.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 65.png">
                    </div>

                    <div>
                        <img src="../../Images/Rectangle 69.png">
                    </div>

                </div>
                <hr>
            </section>

        </main>

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

    </body>

</html>