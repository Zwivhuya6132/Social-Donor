<?php
    include_once "header.php";
?>
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

            <form method="POST" name="userRegForm" class="registration-form" action="../includes/register.inc.php">

                <h1>Registration</h1>

                <div id="errorContainer">
                <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"]== "emptyinput"){
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"]== "invalidname") {
                    echo "<p>Enter a valid name</p>";
                }
                else if ($_GET["error"]== "invalidemail") {
                    echo "<p>Enter a valid Email</p>";
                }
                else if ($_GET["error"]== "emaildontmatch") {
                    echo "<p>Emails do not match</p>";
                }
                else if ($_GET["error"]== "passwordsdontmatch") {
                    echo "<p>Passwords do not match</p>";
                }
                else if ($_GET["error"]== "idalreadyexist") {
                    echo "<p>Enter a valid name</p>";
                }
            }
            
            ?>
                </div>


                <div class="personal-details">
                    <h3>Personal Details:</h3>

                    <div class="names ">
                        <div class="first-name ">
                            <label for="fname">First Name:</label><br>
                            <input id="firstName" type="text" name="fname" placeholder="Enter your name">
                            <small class="errorMessa"> <?php  if (isset($EmptyInputs)) echo $EmptyInputs; ?></small>
                        </div>

                        <div class="last-name">
                            <label for="lname">Last Name:</label><br>
                            <input id="lastName"  type="text" name="lname" placeholder="Enter your surname">
                            <small class="errorMessa"> <?php  if (isset($LnameErr)) echo $LnameErr; ?></small>
                        </div>
                    </div>

                    <div class="single-input-container">
                        <div class="id-number">
                            <label for="idnumber">ID Number:</label>
                            <input name="idNumber" id="idNumber" type="text" placeholder="Enter your ID Number" maxlength="13">
                            <small class="errorMessa"> <?php  if (isset($IdNumberErr)) echo $IdNumberErr; ?></small>
                        </div>
                    </div>

                        <div class="date-of-birth-container">
                            <div class="date-of-birth">

                                <div class="selection">
                                    <label for="">Day:</label><br>
                                    <select name="day" id="day">
                                        <option value="">--Please Select--</option>
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
                                    <small class="errorMessa"> <?php  if (isset($DayErr)) echo $DayErr; ?></small>
                                </div>
        
                                <div class="selection">
                                    <label for="">Month:</label><br>
                                    <select id="month" name="month">
                                        <option value="">--Please Select--</option>
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
                                    <small class="errorMessa"> <?php  if (isset($MonthErr)) echo $MonthErr; ?></small>
                                </div>
        
                                <div class="selection">
                                    <label for="">Year:</label><br>
                                    <select id="year" name="year" >
                                        <option value="">--Please Select--</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2005">2005</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                    </select>
                                    <small class="errorMessa"> <?php  if (isset($YearErr)) echo $YearErr; ?></small>
        
                                </div>
                        </div>
                </div>

                <div class="type">

                    <div class="gender selection">
                        <label for="gender">Gender:</label><br>
                        <select id="gender" name="gender">
                            <option value="">--Please Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <small class="errorMessa"> <?php  if (isset($GenderErr)) echo $GenderErr; ?></small>
                    </div>

                    <div class="race selection">
                        <label for="race">Race:</label><br>
                        <select id="race" name="race">
                            <option value="">--Please Select--</option>
                            <option value="Black">Black</option>
                            <option value="White">White</option>
                            <option value="Indian">Indian</option>
                            <option value="Colored">Colored</option>
                        </select>
                        <small class="errorMessa"> <?php  if (isset($RaceErr)) echo $RaceErr; ?></small>
                    </div>

                    <div class="blood-type selection">
                        <label for="bloodtype">Blood Type</label><br>
                        <select name="bloodType" id="bloodType">
                            <option value="">--Please Select--</option>
                            <option value="I Don't Know">I don't know</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <small class="errorMessa"> <?php  if (isset($BloodTypeErr)) echo $BloodTypeErr; ?></small>
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
                            <small class="errorMessa"> <?php  if (isset($StreetErr)) echo $StreetErr; ?></small>
                        </div>
                    </div>
                </div>

                <div class="city">

                    <div class="city-selection">
                        <label for="city">Town:</label><br>
                        <input id="city" type="text" name="city" placeholder="Town">
                        <small class="errorMessa"> <?php  if (isset($TownErr)) echo $TownErr; ?></small>
                    </div>

                    <div class="city-selection">
                        <label for="town">City:</label><br>
                        <input id="town" type="text" name="town" placeholder="City">
                        <small class="errorMessa"> <?php  if (isset($CityErr)) echo $CityErr; ?></small>
                    </div>

                    <div class="city-selection">
                        <label for="PostalCode">Postal code:</label><br>
                        <input id="postalCode" type="text" name="PostalCode" placeholder="Postal Code">
                        <small class="errorMessa"> <?php  if (isset($PostalCodeErr)) echo $PostalCodeErr; ?></small>
                    </div>
                </div>

                <div class="login-details ">
                    <div>
                        <h3>Login Details:</h3>
                    </div>
                </div>

                <div class="email">

                    <div class="email-selection">
                        <label for="email">Email:</label><br>
                        <input id="email" type="text" name="email" placeholder="Enter your Email">
                        <small class="errorMessa"> <?php  if (isset($EmailErr)) echo $EmailErr; ?></small>
                    </div>

                    <div class="email-selection">
                        <label for="email">Confirm Email:</label><br>
                        <input id="cEmail" type="text" name="cEmail" placeholder="Re-enter your Email">
                        <small class="errorMessa"> <?php  if (isset($CEmailErr)) echo $CEmailErr; ?></small>
                    </div>
                </div>

                <div class="email">

                    <div class="email-selection">
                        <label for="password">Password:</label><br>
                        <div class="toggle">
                            <input id="password" type="password" name="password" placeholder="Enter your Password"  onkeyup="checkPassword(this.value)">
                            <small class="errorMessa"> <?php  if (isset($PasswordErr)) echo $PasswordErr; ?></small>
                            <span id="toggleBtn"></span>
                        </div id="passwordvalidation">
                        <ul class="passwordStrength">
                            <li id="lower">At least one lowercase character</li>
                            <li id="upper">At least one uppercase character</li>
                            <li id="number">At least one number</li>
                            <li id="special">At least one special character </li>
                            <li id="length">At least one 8 characters</li>
                        </ul>
                    </div>

                    <div class="email-selection">
                        <label for="email">Confirm Password:</label><br>
                        <input id="cPassword" type="password" name="cPassword" placeholder="Re-enter your Password">
                        <small class="errorMessa"> <?php  if (isset($CPasswordErr)) echo $CPasswordErr; ?></small>
                    </div>
                </div>

                <h6>Already have an account? <a href="Login.php"><em>LOGIN</em></a></h6>

                <div class="submit">
                    <button id="submit" type="submit" name="submit">SUBMIT</button>
                </div>

            </form>

       </section>

      

    </main>

    <script src="../../JavaScript/slideshow.js"></script>
    <script src="../../JavaScript/validation.js"></script>
    
    <?php
    include_once "footer.php";
    ?>

</body>
</html>