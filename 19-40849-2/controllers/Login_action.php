<?php
session_start();
 include "../DB/dbread.php";
$username = $password = "";
$Form_name = "";
$From_pass ="";
$flag =false;
$UpasswordEr = "";
$UNameEr ="";
$UruleEr= "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
if (empty($_POST["username"])) {
    $UNameEr = "UserName is required";
    $flag = true;
}

if (empty($_POST["password"])) {
    $UpasswordEr = "password is required";
    $flag = true;
}
if (empty($_POST["rule"])) {
    $UruleEr = "rule is required";
    $flag = true;
}

if(!$flag){
    $uname =  input($_POST["username"]);
    $pass = input($_POST["password"]);
    $rule = input($_POST["rule"]);
    if($rule=='Seller')
    {
      $result =login($uname,$pass,$rule);
      if($result){
        $_SESSION["username"]=$username;
      header("Location: ../Views/profile.php");
      }
    else
    {
    echo "Invalid Password ";}
    }
    else{
      echo "invalid rule";
    }
   
   

  }


}
function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}


?>
