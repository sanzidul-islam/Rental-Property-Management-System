<?php

require "dbconnect.php";



   function signup($name, $username, $password, $Rule){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (fname, username, password, rule) VALUES (?, ?, ?, ?)");
    $sql-> bind_param("ssss",$name, $username, $password, $Rule);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

function addApartment($Ap_Name,$A_Ano,$A_Size,$A_Price,$A_RM,$A_WM){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO apartment (ApartmentName,ApartmentNo,ApartmentSize,ApartmentPrice,ApartmentRm,ApartmentwashmRm) VALUES (?,?,?,?,?,?)");
 $sql-> bind_param("ssssss",$Ap_Name,$A_Ano,$A_Size,$A_Price,$A_RM,$A_WM);

$sql->execute();
$sql->close();
 $conn->close();

}
function addv($message,$user){
    $conn=connect();
    $sql = $conn->prepare('INSERT INTO chat (message,user) VALUES (?,?)');
    $sql->bind_param("ss",$message,$user);


    $sql->execute();
    $sql->close();
    $conn->close();
}
function s(){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM chat");
   
    $sql->execute();
    $result=$sql->get_result();
   return $result;
 
}




?>