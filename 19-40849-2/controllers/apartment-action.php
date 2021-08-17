<?php

include "../DB/dbinsert.php";

$A_nameEr = $A_WMEr = $A_RMEr = $A_AnoEr = $A_SizeEr=  $A_priceEr = $A_Id = $Ap_noEr = '';
$flag = false;
$successMesg = $errorMesg = "";
$A_Name = $A_RM = $A_WM = $A_Ano = $A_Size =$A_Price = $Ap_Name   = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST["A_pname"])) {
        $A_nameEr = " Apartment Name required";
        $flag = true;
    }

    if (empty($_POST["A_Ano"])) {
        $Ap_noEr = " Apartment No required";
        $flag = true;
    }
    if (empty($_POST["A_Size"])) {
        $A_SizeEr = " Apartment Size required";
        $flag = true;
    }
   
    if (empty($_POST["A_price"])) {
        $A_priceEr = "Price must be required";
        $flag = true;
    }
    if (empty($_POST["A_RM"])) {
        $A_RMEr = "Apartment Room number required";
        $flag = true;
    }
    if (empty($_POST["A_WM"])) {
        $A_WMEr = "Apartment Washroom number required";
        $flag = true;
    }

    if (!$flag) {
        
   
    $A_Ano = input($_POST["A_Ano"]);
    $A_Size = input($_POST["A_Size"]);
    $A_Price = input($_POST["A_price"]);
    $A_RM = input($_POST["A_RM"]);
    $A_WM = input($_POST["A_WM"]);
    $Ap_Name = input($_POST["A_pname"]); //Apartment NAme

        $result=addApartment($Ap_Name,$A_Ano,$A_Size,$A_Price,$A_RM,$A_WM);

        if ($result) {
            $successMesg = "  Saved";
        } else {
            $errorMesg = "Error While saving";
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
function write($value)
{
    $fileName = "../Views/apartment.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "../Views/apartment.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}

?>