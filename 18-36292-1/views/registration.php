<?php
	$error=$nameError=$emailError=$phoneError=$passwordError=$conPasswordError=$usernameError=$sucess=$userTypeError=$banknamenameError=$accountnoError=$balanceError="";
	if(isset($_GET['message'])){
		if($_GET['message'] == 'sucess'){
			$sucess='Registration Sucessfull';
		}
		else if($_GET['message'] == 'all_empty'){
			$nameError='Name empty!';
			$emailError='Email empty!';
			$phoneError='Phone Number empty!';
			$passwordError='Password empty!';
			$conPasswordError='Confirm Password empty!';
			$userTypeError='Register As empty!';
			$usernameError='Username empty!';
			$banknamenameError = "Bankname empty!";
			$accountnoError = "Account no empty!";
			$balanceError = "Balance empty!";
		}
		else if($_GET['message'] == 'empty_name'){
			$nameError='Name empty!';
		}
		else if($_GET['message'] == 'empty_email'){
			$emailError='Email empty!';
		}
		else if($_GET['message'] == 'empty_phone'){
			$phoneError='User Name empty!';
		}
		else if($_GET['message'] == 'empty_password'){
			$passwordError='Password empty!';
		}
		else if($_GET['message'] == 'empty_conpassword'){
			$conPasswordError='Confirm Password empty!';
		}

		else if($_GET['message'] == 'empty_registerAs'){
			$userTypeError='Register As empty!';
		}
		else if($_GET['message'] == 'password_missmatch'){
			$conPasswordError='Confirm Password does not match!';
		}
		else if($_GET['message'] == 'empty_username'){
			$usernameError='Username empty!';
		}
		elseif ($_GET['message'] == 'empty_bankname') {
			$banknamenameError = "Bankname empty!";
		}
		elseif ($_GET['message'] == 'empty_accountno') {
			$accountnoError = "Account no empty!";
		}
		elseif ($_GET['message'] == 'empty_balance') {
			$balanceError = "Balance empty!";
		}
		else if($_GET['message'] == 'failed'){
			$error='Please Try Again!';
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
    <title>Registration</title>
</head>
<body style="background-color: lightblue;">
	<table align="center">
		<th colspan="2"><h2>Registration</h2></th>
	<form action="../controller/registartionValidation.php" method="POST" enctype=multipart/form-data>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" onblur="return validateName(this.value)" onkeyup="return validateName(this.value)"> 
				<span id="nameError"><?=$nameError?></span></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="phone" id="phone" onblur="return validatePhone(this.value)" onkeyup="return validatePhone(this.value)"> <span id="phoneError"><?=$phoneError?></span></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" id="email" placeholder="sample@example.com" onblur="return emailExists(this.value)"> <span id="emailError"><?=$emailError?></span></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" id="username" onblur="return validateUsername()" onkeyup="return validateUsername()"> <span id="usernameError"><?=$usernameError?></span></td>
		</tr>

		<tr>
			<td>New Password</td>
			<td><input type="password" name="password" id="password" onblur="return validatePassword()" onkeyup=" return validatePassword()"> <span id="passwordError"><?=$passwordError?></span></td>
		</tr>
				
        <tr>
			<td>Confirm Password</td>
			<td><input type="password" name="conpassword" id="conpassword" onblur="return validateConPassword()" onkeyup=" return validateConPassword()"> <span id="conPasswordError"><?=$conPasswordError?></span></td>
		</tr>
		<tr>
			<td>Bankname</td>
			<td><input type="text" name="bankname" id="bankname" onblur="return validateBankname()" onkeyup="return validatebankname()"> <span id="banknamenameError"><?=$banknamenameError?></span></td>
		</tr>
		<tr>
			<td>AccountNo</td>
			<td><input type="text" name="accountno" id="accountno" onblur="return validateAccountno()" onkeyup="return validateaccountno()"> <span id="accountnoError"><?=$accountnoError?></span></td>
		</tr>
		<tr>
			<td>Balance</td>
			<td><input type="text" name="balance" id="balance" onblur="return validateBalance()" onkeyup="return validatebalance()"> <span id="balanceError"><?=$balanceError?></span></td>
		</tr>

        <tr>
			<td>Register as</td>
			<td>
				<input type="radio" name="userType" value="Admin">Admin
				<input type="radio" name="userType" value="Buyer">Buyer
				<input type="radio" name="userType" value="Seller">Seller
				<input type="radio" name="userType" value="Tenant">Tenant
				<span id="userTypeError"><?=$userTypeError?></span>
			</td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" id="reset" class="registerbtn"></td>
			<td><input type="submit" name="submit" id="submit" class="registerbtn" value="Register"></td>
		</tr>
	</form>
	</table>
	<script type="text/javascript" src="assets/js/registrationScript.js"></script>
</body>
</html>