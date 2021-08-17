<?php 
if(!isset($_SESSION))
{
    session_start();
}
    if(!isset($_SESSION['start'])){
        header('location: login.php');}
?>
    <ul style="list-style-type: none">
        <li><a style="color: white;" href="dashboard.php"><b>Dashboard</b></a></li>
        <li><a style="color: white;" href="profile.php"><b>My Profile</b></a></li>
        <li><a style="color: white;" href="buyproperty.php"><b>Available Property</b></a></li>
        <li><a style="color: white;" href="showallproperty.php"><b>Show All Property </b></a></li>
        <li><a style="color: white;" href="paymenthistory.php"><b>Payment History</b></a></li>
        <li><a style="color: white;" href="accountinformation.php"><b>Account Information</b></a></li>
       
    </ul>
