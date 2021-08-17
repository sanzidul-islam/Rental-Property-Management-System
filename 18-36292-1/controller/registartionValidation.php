<?php
    if (!isset($_POST['submit'])) {
        header('location: ../views/registration.php');
    }
    else{
        require_once('../db/db.php');
        //decalration
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
         $bankname = $_POST['bankname'];
          $accountno= $_POST['accountno'];
           $balance = $_POST['balance'];
       
        $type = $_POST['userType'];

        //empty check
        if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['password']) && empty($_POST['cpassword']) && empty($_POST['userType'])&& empty($_POST['username'])&& empty($_POST['bankname'])&& empty($_POST['accountno']) && empty($_POST['balance'])){
            header('location: ../views/registration.php?message=all_empty');
        }
        else if (empty($_POST['name'])){
            header('location: ../views/registration.php?message=empty_name');
        }
        else if (empty($_POST['email'])){
            header('location: ../views/registration.php?message=empty_email');
        }
        else if (empty($_POST['phone'])){
            header('location: ../views/registration.php?message=empty_phone');
        
        }
        else if (empty($_POST['password'])){
            header('location: ../views/registration.php?message=empty_password');
        }
        else if (empty($_POST['conpassword'])){
            header('location: ../views/registration.php?message=empty_conpassword');
        }
        else if (empty($_POST['username'])){
            header('location: ../views/registration.php?message=empty_username');
        }
        else if (empty($_POST['userType'])){
            header('location: ../views/registration.php?message=empty_registerAs');
        }
        else if ($_POST['password'] != $_POST['conpassword']){
            header('location: ../views/registration.php?message=password_missmatch');
        }
        else if (empty($_POST['bankname'])) {
            header('location: ../views/registration.php?message=empty_bankname');
        }
        else if (empty($_POST['accountno'])) {
            header('location: ../views/registration.php?message=empty_accountno');
        }
        else if (empty($_POST['balance'])){
            header('location: ../views/registration.php?message=empty_balance');
        }
        //data validation and input
        else{
            
            $q1 = "INSERT INTO users (name, username,password, email,phone,type) VALUES ('$name','$username','$password','$email', '$phone', '$type')";
            if (mysqli_query($conn, $q1)) {
					$last_insert_id = mysqli_insert_id($conn);
                     $q2 = "INSERT INTO account_information(bankname, accountno,balance, userid) VALUES ('$bankname','$accountno','$balance','$last_insert_id')";
                    if(mysqli_query($conn, $q2)){
                     $status = 1;
                    }
                    else{
                        $status = 0;
                    }
                }
				
                
                else{
					$status = 0;
                    //print_r($status);exit;
				}
   		 	    

            if($status = 1){ 
                header('location: ../views/login.php?message=sucess');  
            }   
            else  
            {  
                header('location: ../views/registration.php?message=failed');
            } 
        }

    }
?>