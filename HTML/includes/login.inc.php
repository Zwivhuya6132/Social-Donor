<?php

if (isset($_POST["submit"])){

  $Email = $_POST["email"];
  $Password = $_POST["password"];

  require_once "conn.inc.php";
  require_once "functions.inc.php";

  if (emptyInputLogin($Email, $Password) !== false){
    header("location: ../End-user HTML/Login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $Email, $Password); 
  
}  else{
  header("location: ../End-user HTML/Login.php");
  exit();
}