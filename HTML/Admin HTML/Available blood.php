<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Donors - Available Blood</title>

    <link rel="stylesheet" href="../../Stylesheets/General CSS/General CSS.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Header.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/Navigation.css">
    <link rel="stylesheet" href="../../Stylesheets/General CSS/footer.css">
    <link rel="stylesheet" href="../../Stylesheets/Admin CSS/Available blood.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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

                    <div class="notifications">

                        <div class="alert-icon">

                            <button id="myBtn">
                                <img src="../../Icons/Frame 1.png" alt="">
                            </button>

                            <div class="notification-count">3</div>

                            
                        </div>

                        <div class="modal" id="myModal">

                            <div class="modal-content">
                                <h1>Alerts</h1>

                                 <div class="dav">
                                    <h3>You have logged in with a new device</h3>
                                    <p>14:32</p>
                                    
                                </div>
                                <div class="dav">
                                    <h3>7 new registerer </h3>
                                    <p>Yesterday</p>
                                </div>
                                <div class="dav">
                                    <h3>A+ Blood now available</h3>
                                    <p>Yesterday</p>
                                </div>
                            </div>
                        </div>

                        <div class="message-icon">
                            <img src="../../Icons/ep_message.png" alt="">
                            <div class="message-count">3</div>
                        </div>

                        <div>
                            <img src="../../Profile Pictures/Ellipse 2.png" alt="">
                        </div>

                    </div>
            </div>

            <ul class="header-navigation-anchor">
                <a href="home.php"><li class="header-navigation">Home</li></a>
                <a href="Login.php"><li class="header-navigation" >Admin Log-In</li></a>
                <a href="Registration.php"><li class="header-navigation">Admin Registration</li></a>
                <a href="donors.php"><li class="header-navigation">Donors</li></a>
                <a href="Available blood.php"><li class="actv">Available Blood</li></a>
                <a href="Blood bank.php"><li class="header-navigation">Blood Bank</li></a>

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


            <a href="../../index.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Group 1.png">
                    </div>
        
                    <div class="login-text">
                        <p>LOG-OUT</p>
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

    <section class="section-two">

        <div class="pie-chart">
            <h1>AVAILABLE BLOOD</h1>

                <!-- <div class="circle-pie">

                </div> -->

                <canvas id="myChart" style="width:900px"> </canvas>
                <script>
                    var xValues = ["A+", "A-", "B+", "B-", "O+", "O-"];
                    var yValues = [55, 49, 44, 24, 15,45];
                    var barColors = [
                      "red",
                      "yellow",
                      "palevioletred",
                      "teal",
                      "limegreen",
                      "mediumblue",

                    ];
                    
                    new Chart("myChart", {
                      type: "pie",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {

                      }
                    });
                </script>
            </div>
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
<script src="../../JavaScript/modal.js"></script>
</body>
</html>