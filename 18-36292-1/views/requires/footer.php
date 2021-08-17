<?php 
if(!isset($_SESSION))
{
    session_start();
}
    if(!isset($_SESSION['start'])){
        header('location: login.php');}
?>
<center>Copyright &copy; <b>Nilhan Sarwar</b> 2021-<?=date("Y");?></center>