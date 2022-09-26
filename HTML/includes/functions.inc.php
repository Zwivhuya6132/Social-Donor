<?php

function emptyInputRegistration($Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Email, $CEmail, $Password, $CPassword) {
  $result = "";

  if (empty($Fname) || empty($Lname) || empty($IdNumber) || empty($Day) || empty($Month) || empty($Year) || empty($Gender) || empty($Race) || empty($BloodType) || empty($Street) || empty($City) || empty($Town) || empty($PostalCode) || empty($Email) || empty($CEmail) || empty($Password) || empty($CPassword)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function invalidName($Fname, $Lname) {
  $result = "";

  if (!preg_match("/^[a-zA-Z]*$/",$Fname, $Lname)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function invalidEmail($Email) {
  $result = "";

  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function emailMatch($Email, $CEmail) {
  $result = "";

  if ($Email !== $CEmail) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function passwordMatch($Password, $CPassword) {
  $result = "";

  if ($Password !== $CPassword) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function userExist($conn, $IdNumber, $Email){
  $sql = "SELECT * FROM users WHERE IdNumber = ? OR Email =?;";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../End-user HTML/registration.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $IdNumber, $Email );
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)) {
    return $row;

  }else{
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Email, $CEmail, $Password, $CPassword){
  $sql = "INSERT INTO users (Fname, Lname, IdNumber, Day, Month, Year, Gender, Race, BloodType, Street, City, Town, PostalCode, Email, CEmail, Password, CPassword) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../End-user HTML/registration.php?error=stmtfailed");
    exit();
  }

  $passHashed = password_hash($Password, PASSWORD_DEFAULT);
  $CpassHashed = password_hash($CPassword, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Email, $CEmail, $passHashed, $CpassHashed);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("Location: ../End-User HTML/Login.php?Error=none");
  exit();
}

function emptyInputLogin($Email, $Password){
  $result = "";
  if (empty($Email) || empty($Password)) {
    $result = true;
  }else {
    $result = false;
  }
  return $result;
}


function loginUser($conn, $Email, $Password) {

  $uidExists = userExist($conn, $Email, $Email);

  if ($uidExists === false) {
    header("location: ../End-user HTML/Login.php?error=emptyinput");
    exit();
  }

    $passHashed = $uidExists["Password"];
    $checkPass = password_verify($Password, $passHashed);

    if ($checkPass === false) {
      header("location: ../End-user HTML/Login.php?error=wronglogin");
      exit();
    }
    else if ($checkPass === true) {
      session_start();
      $_SESSION["id"] = $uidExists["id"];
      $_SESSION["Fname"] = $uidExists["Fname"];
      $_SESSION["Lname"] = $uidExists["Lname"];
      $_SESSION["IdNumber"] = $uidExists["IdNumber"];
      $_SESSION["Day"] = $uidExists["Day"];
      $_SESSION["Month"] = $uidExists["Month"];
      $_SESSION["Year"] = $uidExists["Year"];
      $_SESSION["Gender"] = $uidExists["Gender"];
      $_SESSION["Race"] = $uidExists["Race"];
      $_SESSION["BloodType"] = $uidExists["BloodType"];
      $_SESSION["Street"] = $uidExists["Street"];
      $_SESSION["City"] = $uidExists["City"];
      $_SESSION["Town"] = $uidExists["Town"];
      $_SESSION["PostalCode"] = $uidExists["PostalCode"];
      $_SESSION["Email"] = $uidExists["Email"];
      $_SESSION["Password"] = $uidExists["Password"];
      header("location: ../End-user HTML/Home.php");
      exit();
    }
}