<?php 
include "dbconnect.php";
 function login($username,$password,$rule){
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM user WHERE username = ? and password = ? and rule = ?");
    $sql->bind_param("sss", $username,$password,$rule);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;

}
function searchUser($usname){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM user WHERE username = ?");
    $sql->bind_param("s",$usname);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}
?>