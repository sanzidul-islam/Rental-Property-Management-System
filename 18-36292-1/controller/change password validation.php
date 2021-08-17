<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        require_once('../db/db.php');
        $userId = $_SESSION["userId"];
        $newPassword = $_POST['newPassword'];
        if(empty($_POST['currentPassword']) && empty($_POST['newPassword']) && empty($_POST['retypePassword']))
        {
            header('location: ../views/change password.php?message=all_empty');
        }
        else if(empty($_POST['currentPassword']))
        {
            header('location: ../views/change password.php?message=empty_currentpassword');
        }
        else if(empty($_POST['newPassword']))
        {
            header('location: ../views/change password.php?message=empty_newpassword');
        }
        else if(empty($_POST['retypePassword']))
        {
            header('location: ../views/change password.php?message=empty_retypepassword');
        }
        else{
            $q1 = "UPDATE users SET password='$newPassword' WHERE id='$userId'";
		    if (mysqli_query($conn, $q1)) {
			    header('location: ../views/change password.php?message=sucessfull');
		    }
            else{
			    header('location: ../views/change password.php?message=not_exists');
		}
        }
       
        
    }
    else  
    {  
        header('location: ../views/login.php');
    }
?>