<?php

function connect(){
    $conn = new mysqli("localhost","root","","student");
if($conn->connect_errno){
    die("Failed To Connect");
   
}
return $conn;

}




?>