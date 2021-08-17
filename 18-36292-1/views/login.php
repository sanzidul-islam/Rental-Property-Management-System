<?php
    $usernameError=$passwordError=$error="";
    if (isset($_GET['message'])) {
        if ($_GET['message'] == "both_empty") {
            $usernameError="Empty username!";
            $passwordError= "Empty Password!";
        }
        if ($_GET['message'] == "invalid_user") {
            $error = "Invalid username or Password!";
        }
        if($_GET['message'] == "empty_username"){
            $usernameError= "Empty username!";
        } 
        else if($_GET['message'] == "empty_password"){
            $passwordError= "Empty Password!";
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body style="background-color:teal;">
    <form id="loginForm" method="POST" action="../controller/loginCheck.php">
            
                    <table align="center">
                        <th colspan="2">Login to your Account</th>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="username" name="username" onblur="validateUsername()" onkeyup="validateUsername()"> <span id="usernameError" style="color:red;"><?=$usernameError?></span></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="password" name="password" onblur="validatePassword()" onkeyup="validatePassword()"> <span id="passwordError" style="color:red;"><?=$passwordError?></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="rememberMe"></td>
                            <td>Remeber me</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Login" class="registerbtn"></td>
                            <td>Don't have an account? <a href="registration.php">Register Here</td>
                            <td><span id="error"><?=$error?></span></td>
                        </tr>
                </table>
           
        
        
    </form>
    <script type="text/javascript" src="assets/js/loginScript.js"></script>
</body>
</html>