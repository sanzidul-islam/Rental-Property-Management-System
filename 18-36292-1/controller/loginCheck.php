<?php
//session_start();
if(isset($_POST['submit'])){
    require_once('../db/db.php');
   
//declaration
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    
//Validation
    if (empty($username) && empty($password)) {
        header ('location: ../views/login.php?message=both_empty');
    }
    else if($username == ""){
        header ('location: ../views/login.php?message=empty_username'); //Redirecting to Login Page because of empty Username
    }
    else if(empty($password)){
        header ('location: ../views/login.php?message=empty_password'); //Redirecting to Login Page because of empty Password
    }

    else {
        function fetchNameById($conn, $userId)
        {
            $userId = trim($userId);
            $q1 = "SELECT name FROM users WHERE id='$userId'";
            $result = mysqli_query($conn, $q1);
            $datas = mysqli_fetch_assoc($result);
            //print_r($datas);exit;
            return $datas['name'];
        }
        function fetchNameByUsername($conn, $username)
        {
            $username = trim($username);
            $q1 = "SELECT username FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $q1);
            $datas = mysqli_fetch_assoc($result);
            //print_r($datas);exit;
            return $datas['username'];
        }
        $sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $query=mysqli_query($conn, $sql);

        if(mysqli_num_rows($query)>=1)
		{
		   	$user= mysqli_fetch_assoc($query);
            //print_r($user);exit;
            session_start();
            $_SESSION['start'] = 'true';
            $_SESSION['userId'] = $user['id'];
            $_SESSION['name'] = fetchNameById($conn,$user['id']);
            $_SESSION['username'] = fetchNameByUsername($conn,$user['username']);
            //print_r($_SESSION);exit;  
            header ('location: ../views/dashboard.php');
        }
        else{
            header ('location: ../views/login.php?message=invalid_user'); 
    }
        
    }
}

else{
    //exit;
    header('location: ../views/login.php');
}


?>