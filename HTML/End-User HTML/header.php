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


    <title>Social Donors - Registration</title>

    <style>
        .errorMessa{
        margin:  0;
        display: block;
        color:red;
        border-radius: 5px ;
        font-size: 14px;
        }

        #errorContainer{
        width: 35%;
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