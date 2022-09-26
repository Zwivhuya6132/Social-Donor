<?php
   if(isset($_POST["submit"])){

    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $IdNumber = $_POST['idNumber'];
    $Day = $_POST['day'];
    $Month = $_POST['month'];
    $Year = $_POST['year'];
    $Gender = $_POST['gender'];
    $Race = $_POST['race'];
    $BloodType = $_POST['bloodType'];
    $Street = $_POST['street'];
    $City = $_POST['city'];
    $Town = $_POST['town'];
    $PostalCode = $_POST['PostalCode'];
    $Email = $_POST['email'];
    $CEmail = $_POST['cEmail'];
    $Password = $_POST['password'];
    $CPassword = $_POST['cPassword'];


    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegistration($Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Email, $CEmail, $Password, $CPassword) !== false){
      header("location: ../End-user HTML/registration.php?error=emptyinput");
      exit();
    }

    if (invalidName($Fname, $Lname) !== false){
      header("location: ../End-user HTML/registration.php?error=invalidname");
      exit();
    }

    if (invalidEmail($Email) !== false){
      header("location: ../End-user HTML/registration.php?error=invalidemail");
      exit();
    }

    if (emailMatch($Email, $CEmail) !== false){
      header("location: ../End-user HTML/registration.php?error=emaildontmatch");
      exit();
    }

    if (passwordMatch($Password, $CPassword) !== false){
      header("location: ../End-user HTML/registration.php?error=passwordsdontmatch");
      exit();
    }

    if (userExist($conn, $IdNumber, $Email ) !== false){
      header("location: ../End-user HTML/registration.php?error=idalreadyexist");
      exit();
    }

    createUser($conn, $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Email, $CEmail, $Password, $CPassword);

   }else{
    header("location: ../End-user HTML/registration.php");
   }