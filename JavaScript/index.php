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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        
/* styling active page */
.actv{
    background-color: red;
    color: white;
    padding:15px;
    border-radius: 25px;
    font-weight: bolder;
    list-style-type: none;
}

/* giving a header display:flex to make my content appear next to each other */
.header{
    display: flex;
    border-bottom: 5px solid red;
    padding-top: 18px;
}

/* giving my logo container margins */

.logo-container{
    display: flex;
    margin-left:20px ;
    margin-bottom: 10px;
}

/* setting the size of my logo */
.logo{
    width: 100%;
    height: 170px;
}

/* making my search bar appear on top of my navigation */
.container{
    display:flex;
    width: 100%;
    justify-content: space-between;
    flex-direction: column;
}

/* styling search bar and login/signup button appear next to each other */
.search-bar-button{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-top:5px ;
    color: red;
}

/* making a search bar container fill up the remaining space */
.search-input-container{
    display: flex;
    flex: 6;
    max-width: 1100px ;
    justify-content: center;
    margin: 0 40px;
}

/* making search input relative in order to be able to place search image on top orf a searchb bar */
.search-input{
    width: 100%;
    display: flex;
    position: relative;
}

/* making the search image absolute in oder to put it on top of the search bar */
.search-input img{
    position: absolute;
    left: 15px;
    top: 10px;
}

/* styling my search bar */
.search-bar{
    width: 100%;
    min-width: 0;
    border-radius: 175px 0px 0px 175px;
    padding: 22px 35px 22px 68px;
    border: 2.5px solid red;
    border-right: none;
    /* color: red; */
    display: flex;
    font-size: 20px;
}

/* styling the placeholder of the search bar */
.search-bar::placeholder{
    color: red;
    font-size: 20px;
    border-style: none;
}

/* styling the search button */
.search-btn{
    width: 200px;
    cursor: pointer;
    border: none;
    color: white;
    font-weight: bolder;
    font-size: large;
    border-radius: 0 175px 175px 0 ;
    background-color: red;
}

.log-in{
    background-color: red;
    border: none;
    border-radius: 45px;
    color: white;
    font-weight: 700;
    font-size: 16px;
    width: 12.5%;
    position: relative;
    min-width: 180px;
    margin: 0% 2%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.log-in h4{
    margin-bottom:0;
    margin-top: 10px;
    font-weight: bolder;
}

.log-in p{
    margin-top: 10px;
    margin-left:35px;
    
}

.log-in img{
    width: 30px;
    height: 20px;
    position: absolute;
    bottom: 15px;
    left:10%;
}

/* styling notifications */
.notifications{
    display: flex;
    width: 230px;
    max-width: 18%;
    min-width: 10%;
    height: 72px;
    justify-content: space-around;
    background-color: red;
    border-radius: 55px;
    align-items: center;
    padding: 0 10px;
    margin-right:20px ;
    overflow: hidden;
}

/* giving the dives inside notification a margin  */
.notifications div{
    margin: 5px;
}

/* giving all images under notifications class the same size */
.notifications img{
    width: 50px;
    height: 50px;
    cursor: pointer;
}

/*making alert-icon a position relative  */
.alert-icon{
    position: relative;
}

/* making a notification count */
.notification-count{
    width: 24px;
    height: 22px;
    border-radius: 25px;
    background-color:  white;
    position: absolute;
    color: black;
    text-align: center;
    padding-top: 2.5px;
    top: -10px;
    right: 0px;
}

/* making the message icon relative in order to be able to put notification count ontop of it */
.message-icon{
    position: relative;
}

/* placing message count on top of massege image by making it absolute  */
.message-count{
    position: absolute;    width: 24px;
    height: 22px;
    border-radius: 25px;
    background-color:  white;
    color: black;
    text-align: center;
    padding-top: 2.5px;
    top: -10px;
    right: -10px;
}

.dav{
    width: 95%;
    height: 100px;
    margin-top: 5px;
    background-color: rgba(255, 0, 0, 0.336);
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
}

#myBtn{
    background-color: red;
    border: none;
}

/* The modal background*/
.modal{
    display: none;
    position: fixed;
    z-index: 200;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
}

/* modal content */
.modal-content{
    background-color: rgba(255, 192, 203, 0.795);
    border: 3px solid red;
    width: 45%;
    padding: 10px 20px;
    border-radius: 10px;
    color: aliceblue;
    font-weight: bold;
    position: relative;
    right: -25%;
}

.modal-content h1{
    text-align: center;
}

/* modal content */
/* .login-form{
    margin: auto;
    position: relative;
    overflow-y: scroll;

} */

/* styling the login container */
.log-in-button{
    display: flex;
    flex: 1;
    margin-right: 20px;
}

/* styling the login button */
.log-in{
    background-color: red;
    border: none;
    border-radius: 45px;
    color: white;
    font-weight: 700;
    font-size: 16px;
    height: 72px;
    width: 267px;
}

.navigation-container{
    display: flex;
    height: 75px;
    justify-content: center;
    background-color: rgba(255, 0, 0, 0.336);
    
}

.navigation{
    width: 700px;
    display: flex;
    background-color: red;
    justify-content: space-between;
    padding: 10px 25px;
    color: white;
    height: fit-content;
    z-index: 100;
}

.navigation a{
    color: white;
}

.part-one{
    text-align: center;
    cursor: pointer;
    color: white;
}

.home-img{
    width: 45px;
    height: 45px;
}

/* styling the navigation anchor and making it apear side by side */
.header-navigation-anchor{
    display:flex;
    justify-content: space-between;
    margin-right: 25px;
    margin-bottom: 2px;
}

/* styling the navigation list */
.header-navigation{
    list-style-type: none;
    font-weight: 700;
    padding: 20px;
}

/* giving the anchor a font color */
.header-navigation a,
.header-navigation{
    color: rgb(229, 15, 15);
}

/* styling the anchor when you hover on it */
.header-navigation-anchor a :hover{
    background-color: red;
    color: white;
    padding:15px;
    border-radius: 25px;
}

#zz{
    position:absolute;
}

        /* ging the body a default style */
body{
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    text-align: justify;
}

/* making all anchor tags not to have a text decoration */
a{
    text-decoration: none;
}

/* making all the buttons cursor pointer */
button{
    cursor: pointer;
}

/* making all thye buttons hover */
button:hover{
    opacity: 0.6;
    transition: 0.5s;
}

                /* styling the footer container and making it red */
        .footer{
            background-color: red;
            color: white;
            margin-top:20px;
            padding: 0px 60px;
        }

        /* making children of footer-child-one apper net to each othe */
        .footer-child-one{
            display: flex;
            justify-content: space-between;

        }

        /* styling all the h5 on the footer */
        .footer h5{
            font-size: 20px;
            font-weight: bolder;
        }

        /* styling the footer list */
        .footer ul{
            list-style-type: none;
            padding: 0px;
        }

        /* giving space to the <li> on the footer */
        .footer li{
            padding: 5px 0px;
        }

        /* making footer-child-two childern appear next to each othe */
        .footer-child-two{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* styling the copyright content */
        .social-donors-rights{
            display: flex;
            align-items: center;
            width: 75%;
            justify-content: space-between;
        }

        /* ging to-our-news a margin */
        .to-our-news{
            margin-top: 35px;
            margin-bottom: 40px;
        }

        /* styling the footer email part */
        .enter-your-email{
            background-color: rgb(218, 207, 207);
            border: none;
            padding: 15px;
            width: 190px;
        }

        /* styling the subscribe button */
        .subscribe-button{
            margin-top: 30px;
            background-color:   rgba(75, 0, 0, 0.911);
            border: none;
            height: 45px;
            width: 225px;
            color: white;
            font-weight: bolder;
            font-size: large;
        }

        /* changing the font of terms-of-use smaller */
        .terms-of-use{
            font-size: smaller;
        }

        /* styling the social media containers */
        .socials{
            display: flex;
            width: 10%;
            justify-content: space-between;
            align-items: center;

        }
            .registration-text{
            color: black;
            }

            .section-one{
            margin: 65px 65px 0px 65px ;
            position: relative;
            }

            .slideshow-container{
            max-width: 100%;
            position: relative;
            margin: auto;
            }



            .slideshow-container img{
            width: 100%;
            height: 400px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            /* position: absolute; */
            text-align: center;  
            transition: background-color 0.6s ease;
            }

            .dot-holder{
                position: absolute;
                bottom: 50px;
                left: 50%;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
            }

            /*----------------------------------------------------------------------- THIS IS A FORM SECTION STYLES------------------------------- */
            .toggle{
            position:relative;
            }

            #toggleBtn{
            position: absolute;
            right: 6px;
            top:3.5px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            #toggleBtn::before{
            content: '\f06e';
            font-family: fontAwesome;
            }

            #toggleBtn.hide::before{
            content: '\f070';
            font-family: fontAwesome;
            }



            .passwordStrength{
            padding: 10px 0;
            margin-top: 5px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            border-radius: 8px;
            background-color: rgba(255, 0, 0, 0.062);
            }

            .passwordStrength li{
            list-style-type: none;
            transition: 0.5s;

            }

            .passwordStrength li.valid{
            color: rgba(0, 0, 0, 0.664)
            }

            .passwordStrength li.valid::before{
            content: '\f00c';
            font-family: fontAwesome;
            color: #0f0;
            }

            .passwordStrength li::before{
            content: '\f192';
            width: 20px;
            height: 10px;
            font-family: fontAwesome;
            display: inline-flex;
            }

            .errorMess{
            color: red;
            visibility: hidden;
            }
            .section-two{
            display: flex;
            justify-content: center;
            }

            .registration-form{
            background-color: rgba(255, 0, 0, 0.336);
            border: 2px solid red;
            width: 55%;
            min-width: 600px;
            padding: 15px 0;
            border-radius: 25px;
            position: relative;
            }

            .registration-form h1{
            text-align: center;
            }

            h6{
            position: absolute;
            right: 3%;
            bottom: 243px;
            font-size: 0.6em;
            }

            em{
            color: black;
            font-weight: bolder;
            }

            .personal-details h3{
            margin: 15px 35px ;
            padding-bottom: 0;
            }

            .names{
            display: flex;
            justify-content: space-evenly;

            }

            .first-name,
            .last-name,
            .email-selection{
            width: 44.5%;
            margin-bottom: 15px;
            }

            .single-input-container{
            display: flex;
            justify-content: space-evenly;
            }

            .names input{
            width: 100%;
            border-radius: 25px;
            border: 2px solid rgb(87, 86, 86);
            padding: 6px;
            }

            .id-number,
            .street{
            margin-bottom: 15px;
            width: 92.53%;
            
            }

            .id-number input,
            .street input{
            width: 100%;
            padding: 7px;
            border-radius: 25px;
            border: 2px solid rgb(87, 86, 86);
            display:block;
            }

            .date-of-birth,
            .type,
            .city{
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
            }

            .selection{
            width: 28%;
            margin-left: 20px;
            }

            .date-of-birth select,
            .city input,
            .type select{
            width: 100%;
            border-radius: 25px;
            border: 2px solid rgb(87, 86, 86);
            padding: 7px;
            }

            .city-selection{
            width: 25%;
            }

            .email{
            display: flex;
            justify-content: space-evenly;
            
            }


            .email input{
            border-radius: 25px;
            border: 2px solid rgb(87, 86, 86);
            padding: 7px;
            width: 100%;
            }

            .submit{
            display: flex;
            justify-content: center;
            margin-top: 30px ;
            }

            .submit button,
            .login-btn button{
            padding: 10px 25px;
            color: white;
            background-color: red;
            font-weight: bolder;
            font-size: 20px;
            border-radius:25px;
            border: none;

            }

            .success input{
            border: 2px solid black;
            }

            .error input{
            border: 2px solid rgb(228, 28, 22);
            }
    </style>


    <title>Social Donors - Registration</title>
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
                        <img src="../../Icons/Registration.png">
                    </div>
        
                    <div class="registration-text">
                        <p>REGISTRATION</p>
                    </div>
                </div>

            </a>

            <a href="Login.php">

                <div class="navigation-link-container">
                    <div class="part-one">
                        <img src="../../Icons/Log-in.png">
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

            <form class="registration-form" action="connection.php" method="POST" name="userRegForm">

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
                            <input name="idNumber" id="idNumber" type="text" placeholder="Enter your ID Number" maxlength="13">
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
                        <select id="race" name="race">
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
                        <input id="cEmail" type="text" name="cEmail" placeholder="Re-enter your Email">
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
                        <input id="cPassword" type="password" name="cPassword" placeholder="Re-enter your Password">
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
    <script>
        let Fname = document.getElementById('firstName');
let Lname = document.getElementById('lastName');
let IdNumber = document.getElementById('idNumber');
let Day = document.getElementById('day');
let Month = document.getElementById('month');
let Year = document.getElementById('year');
let Gender = document.getElementById('gender');
let Race = document.getElementById('race');
let BloodType = document.getElementById('bloodType');
let StreetAdd = document.getElementById('streetAdd');
let City = document.getElementById('city');
let Town = document.getElementById('town');
let PostalCode = document.getElementById('postalCode');
let Email = document.getElementById('email');
let CEmail = document.getElementById('cEmail');
let password = document.getElementById('password');
let CPassword = document.getElementById('cPassword');
let toggleBtn = document.getElementById('toggleBtn');
let lowerCase = document.getElementById('lower');
let upperCase = document.getElementById('upper');
let digit = document.getElementById('number');
let specialChar = document.getElementById('special');
let minLength = document.getElementById('length');
let errorMess = "This field is required *";



function validateInput(){
  //check if First Name is empty
  if(Fname.value.trim()===""){
    onError(Fname,errorMess);
  }else{
    onSuccess(Fname);
  }

  //check if last Name is empty
  if(Lname.value.trim()===""){
    onError(Lname,errorMess);
  }else{
    onSuccess(Lname);
  }

  //check if ID Number is empty
  if(IdNumber.value.trim()===""){
    onError(IdNumber,errorMess);
  }else if(!isValidId(IdNumber.value.trim())){
    onError(IdNumber,'Please enter a valid SA ID number');
  }else{
    onSuccess(IdNumber);
  }

  //check if day is selected
  if (Day.value==""){
    onError(Day,errorMess);
    Day.style.border= "2px solid rgb(228, 28, 22)";
  }else{
    onSuccess(Day);
    Day.style.border= "2px solid black";
  }

    //check if month is selected
    if (Month.value==""){
      onError(Month,errorMess);
      Month.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(Month);
      Month.style.border= "2px solid black";
    }

  //check if Year is selected
  if (Year.value==""){
    onError(Year,errorMess);
    Year.style.border= "2px solid rgb(228, 28, 22)";
  }else{
    onSuccess(Year);
    Year.style.border= "2px solid black";
  }

    //check if Gender is selected
    if (Gender.value==""){
      onError(Gender,errorMess);
      Gender.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(Gender);
      Gender.style.border= "2px solid black";
    }

      //check if Race is selected
  if (Race.value==""){
    onError(Race,errorMess);
    Race.style.border= "2px solid rgb(228, 28, 22) ";
  }else{
    onSuccess(Race);
    Race.style.border= "2px solid black";
  }

    //check if Blood Type is selected
    if (BloodType.value==""){
      onError(BloodType,errorMess);
      BloodType.style.border= "2px solid rgb(228, 28, 22)";
    }else{
      onSuccess(BloodType);
      BloodType.style.border= "2px solid black";
    }

  //check if Street Address is empty
  if(StreetAdd.value.trim()===""){
    onError(StreetAdd,errorMess);
  }else{
    onSuccess(StreetAdd);
  }

  //check if City is empty
  if(City.value.trim()===""){
    onError(City,errorMess);
  }else{
    onSuccess(City);
  }

  //check if Town is empty
  if(Town.value.trim()===""){
    onError(Town,errorMess);
  }else{
    onSuccess(Town);
  }

  //check if Postal Code is empty
  if(PostalCode.value.trim()===""){
    onError(PostalCode,errorMess);
  }else{
    onSuccess(PostalCode);
  }

  //check if Email is empty
  if(Email.value.trim()===""){
    onError(Email,errorMess);

  }else{
    onSuccess(Email);
  }

  //check if Confirm Email is empty
  if(CEmail.value.trim()===""){
    onError(CEmail,errorMess);

  }else if(Email.value.trim()!==CEmail.value.trim()){
    onError(CEmail,"Email do not match");
  }else{
    onSuccess(CEmail);
  }

  //check if password is empty
  if(password.value.trim()===""){
    onError(password,errorMess);

  } else{
    onSuccess(password);
  }

    //check if confirm password match with password
    if(CPassword.value.trim()===""){
      onError(CPassword,errorMess);
    }else if(password.value.trim()!==CPassword.value.trim()){
      onError(CPassword,"Password do not match")
    }else{
      onSuccess(CPassword);
    }
}

document.getElementById('submit')
.addEventListener('click',(event)=>{
  event.preventDefault();
  validateInput();
});

function onSuccess(input){
  let parent = input.parentElement;
  let messageEle = parent.querySelector('small');
  messageEle.style.visibility = "hidden";
  messageEle.innerText ="";
  parent.classList.remove('error')
  parent.classList.add('success');
}
function onError(input,message){
  let parent = input.parentElement;
  let messageEle = parent.querySelector('small');
  messageEle.style.visibility = "visible";
  messageEle.innerText = message;
  parent.classList.add('error')
  parent.classList.remove('success');

}

function isValidId(IdNumber){
  return /^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(( |-)(\d{4})( |-)(\d{3})|(\d{7}))/.test(IdNumber);
}

function isValidEmail(email){
  return (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email));
}

function checkPassword(data){
  //Java Script regularexpression pattern
  const lower = new RegExp('(?=.*[a-z])');
  const upper = new RegExp('(?=.*[A-Z])');
  const number = new RegExp('(?=.*[0-9])');
  const special = new RegExp('(?=.*[!@#\$%\^&\*])');
  const length = new RegExp('(?=.{8,})');

  //Lowercase Validation check
  if (lower.test(data)){
    lowerCase.classList.add('valid');
  }else{
    lowerCase.classList.remove('valid');
  }

  //uppercase Validation check
  if (upper.test(data)){
    upperCase.classList.add('valid');
  }else{
    upperCase.classList.remove('valid');
  }

  //number Validation check
  if (number.test(data)){
    digit.classList.add('valid');
  }else{
    digit.classList.remove('valid');
  }

  //Special Character Validation check
  if (special.test(data)){
    specialChar.classList.add('valid');
  }else{
    specialChar.classList.remove('valid');
  }

  //Length Validation check
  if (length.test(data)){
    minLength.classList.add('valid');
  }else{
    minLength.classList.remove('valid');
  }
        
  
};

//Show Hide Password
toggleBtn.onclick = function(){
  
  if (password.type === 'password'){
    password.setAttribute('type', 'text');
    toggleBtn.classList.add('hide');
  } else{
    password.setAttribute('type', 'password');
    toggleBtn.classList.remove('hide');
  }
};

    </script>
        

</body>
</html>