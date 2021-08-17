<?php
include "../DB/dbinsert.php";
$name = $UName = $Rule = $Password = "";
$nameEr = $UNameEr = $RuleEr = $PasswordEr = '';
$valid = false;
$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
        
    if (empty($_POST["fname"])) {

        $nameEr = "Full Name is required";
        $valid = true;
    }

    if (empty($_POST["rule"])) {

        $RuleEr = "Rule need to be specify";
        $valid = true;
    }



    if (empty($_POST["username"])) {
        $UNameEr = "User Name is required";
        $valid = true;
    }

    if (empty($_POST["password"])) {
        $PasswordEr = "Password is required";
        $valid = true;
    }

    if (!$valid) {
        $username = input($_POST["username"]);
        $password  = input($_POST["password"]);
        $name = input($_POST["fname"]);
        $Rule = input($_POST["rule"]);
        
       $result = signup($name, $username, $password, $Rule);
      
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