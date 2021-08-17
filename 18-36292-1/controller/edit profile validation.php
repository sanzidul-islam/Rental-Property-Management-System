<?php
    require_once('../views/requires/header.php');
    if(isset($_POST['submit'])){
        require_once('../db/db.php');
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $userId = $_SESSION['userId'];
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['phone'])){
            header('location: ../views/edit profile.php?message=all_empty');
        }
        else if(empty($_POST['name']))
        {
            header('location: ../views/edit profile.php?message=empty_name');
        }        
        else if(empty($_POST['email']))
        {
            header('location: ../views/edit profile.php?message=empty_email');
        }
        else if(empty($_POST['phone']))
        {
            header('location: ../views/edit profile.php?message=empty_phone');
        }

        else{
            $q1 = "UPDATE users SET name='$name', email='$email', phone='$phone', username ='$username'  WHERE id='$userId'";
            if (mysqli_query($conn, $q1)) {
            
                header('location: ../views/edit profile.php?message=sucessfull');
            }
            else{
                header('location: ../views/edit profile.php?message=not_exists');
            }
        }
        
    }
    else  
    {  
        header('location: ../views/login.php');
    } 
?>