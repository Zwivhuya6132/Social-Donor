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
    <link rel="stylesheet" href="../../Stylesheets/Admin CSS/Registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Social Donors - Admin Registration</title>
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

            </div>

            <ul class="header-navigation-anchor">
                <a href="home.php"><li class="header-navigation">Home</li></a>
                <a href="Login.php"><li class="header-navigation" >Admin Log-In</li></a>
                <a href="Registration.php"><li class="actv">Admin Registration</li></a>
                <a href="donors.php"><li class="header-navigation">Donors</li></a>
                <a href="Available blood.php"><li class="header-navigation">Available Blood</li></a>
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

        <form class="registration-form" name="adminForm" action="#" method="POST">

            <h1>Registration</h1>

            <div class="personal-details">
                <h3>Personal Details:</h3>

                <div class="names ">
                    <div class="first-name ">
                        <label for="fname">First Name:</label><br>
                        <input id="firstName" type="text" name="fname" placeholder="Enter your name">
                        <small class="errorMess">Error Massage</small>
                    </div>

                    <div class="last-name">
                        <label for="lname">Last Name:</label><br>
                        <input id="lastName"  type="text" name="lname" placeholder="Enter your surname">
                        <small class="errorMess">Error Massage</small>
                    </div>
                </div>

                <div class="single-input-container">
                    <div class="id-number">
                        <label for="idnumber">ID Number:</label>
                        <input id="idNumber" type="text" placeholder="Enter your ID Number" maxlength="13">
                        <small class="errorMess">Error Massage</small>
                    </div>
                </div>

                    <div class="date-of-birth-container">
                        <div class="date-of-birth">

                            <div class="selection">
                                <label for="">Day:</label><br>
                                <select name="day" id="day">
                                    <option disabled selected value="">--Please Select--</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <small class="errorMess">Error Massage</small>
                            </div>
    
                            <div class="selection">
                                <label for="">Month:</label><br>
                                <select id="month" name="month">
                                    <option disabled selected value="">--Please Select--</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="JUly">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <small class="errorMess">Error Massage</small>
                            </div>
    
                            <div class="selection">
                                <label for="">Year:</label><br>
                                <select id="year" name="year" >
                                    <option disabled selected value="">--Please Select--</option>
                                    <option value="1">1976</option>
                                    <option value="2">1977</option>
                                    <option value="3">1978</option>
                                    <option value="4">1979</option>
                                    <option value="5">1980</option>
                                    <option value="6">1981</option>
                                    <option value="7">1982</option>
                                    <option value="8">1983</option>
                                    <option value="9">1984</option>
                                    <option value="10">1985</option>
                                    <option value="11">1986</option>
                                    <option value="12">1987</option>
                                    <option value="13">1988</option>
                                    <option value="14">1989</option>
                                    <option value="15">1990</option>
                                    <option value="16">1991</option>
                                    <option value="17">1992</option>
                                    <option value="18">1993</option>
                                    <option value="19">1994</option>
                                    <option value="20">1995</option>
                                    <option value="21">1996</option>
                                    <option value="22">1997</option>
                                    <option value="23">1998</option>
                                    <option value="24">1999</option>
                                    <option value="25">2000</option>
                                    <option value="26">2001</option>
                                    <option value="27">2002</option>
                                    <option value="28">2003</option>
                                    <option value="29">2005</option>
                                    <option value="30">2005</option>
                                    <option value="31">2006</option>
                                </select>
                                <small class="errorMess">Error Massage</small>
    
                            </div>
                    </div>
            </div>

            <div class="type">

                <div class="gender selection">
                    <label for="gender">Gender:</label><br>
                    <select id="gender" name="gender">
                        <option disabled selected value="">--Please Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <small class="errorMess">Error Massage</small>
                </div>

                <div class="race selection">
                    <label for="race">Race:</label><br>
                    <select id="race">
                        <option disabled selected value="">--Please Select--</option>
                        <option value="Black">Black</option>
                        <option value="White">White</option>
                        <option value="Indian">Indian</option>
                        <option value="Colored">Colored</option>
                    </select>
                    <small class="errorMess">Error Massage</small>
                </div>

                <div class="blood-type selection">
                    <label for="bloodtype">Blood Type</label><br>
                    <select name="bloodType" id="bloodType">
                        <option disabled selected value="">--Please Select--</option>
                        <option value="IDontKnow">I don't know</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <small class="errorMess">Error Massage</small>
                </div>

            </div>

            <div class="address">
                <div>
                    <h3>Address:</h3>
                </div>

                <div class="single-input-container">
                    <div class="street">
                        <label for="street">Street Adress</label><br>
                        <input id="streetAdd" type="text" name="street" placeholder="Enter your street address">
                        <small class="errorMess">Error Massage</small>
                    </div>
                </div>
            </div>

            <div class="city">

                <div class="city-selection">
                    <label for="city">City:</label><br>
                    <input id="city" type="text" name="city" placeholder="City">
                    <small class="errorMess">Error Massage</small>
                </div>

                <div class="city-selection">
                    <label for="town">Town:</label><br>
                    <input id="town" type="text" name="town" placeholder="Town">
                    <small class="errorMess">Error Massage</small>
                </div>

                <div class="city-selection">
                    <label for="PostalCode">Postal code:</label><br>
                    <input id="postalCode" type="text" name="PostalCode" placeholder="Postal Code">
                    <small class="errorMess">Error Massage</small>
                </div>
            </div>

            <div class="login-details ">
                <div>
                    <h3>Login Details:</h3>
                </div>
            </div>

            <div class="email">

                <div class="email-selection"
                    <label for="email">Email:</label><br>
                    <input id="email" type="text" name="email" placeholder="Enter your Email">
                    <small class="errorMess">Error Massage</small>
                </div>

                <div class="email-selection">
                    <label for="email">Confirm Email:</label><br>
                    <input id="cEmail" type="text" name="email" placeholder="Re-enter your Email">
                    <small class="errorMess">Error Massage</small>
                </div>
            </div>

            <div class="email">

                <div class="email-selection">
                    <label for="password">Password:</label><br>
                    <div class="toggle">
                        <input id="password" type="password" name="password" placeholder="Enter your Password"  onkeyup="checkPassword(this.value)">
                        <small class="errorMess">Error Massage</small>
                        <span id="toggleBtn"></span>
                    </div id="passwordvalidation">
                    <ul class="passwordStrength">
                        <li id="lower">At least one lower character</li>
                        <li id="upper">At least one upper character</li>
                        <li id="number">At least one number</li>
                        <li id="special">At least one special character </li>
                        <li id="length">At least one 8 characters</li>
                    </ul>
                </div>

                <div class="email-selection">
                    <label for="email">Confirm Password:</label><br>
                    <input id="cPassword" type="password" name="email" placeholder="Re-enter your Password">
                    <small class="errorMess">Error Massage</small>
                </div>
            </div>

            <h6>Already have an account? <a href="Login.php"><em>LOGIN</em></a></h6>

            <div class="submit">
                <button id="submit" type="submit" name="submit">SUBMIT</button>
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