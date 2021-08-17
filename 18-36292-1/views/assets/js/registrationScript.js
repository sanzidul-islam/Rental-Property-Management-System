function validateName(name) {
    console.log(name);
    if(name.length <= 0){
        document.getElementById("nameError").innerHTML = "Name can't be empty";
        document.getElementById("name").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("nameError").innerHTML = "";
        //alert("alksjhflaos");
        return true;
    }
}
function validatePhone(phone) {
    if(phone <= 0){
        document.getElementById("phoneError").innerHTML = "Phone Number can't be empty";
        document.getElementById("phone").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("phone").style.borderColor = "";
        return true;
    }
}
function validateEmail() {
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("emailError").innerHTML = "Email can't be empty";
        document.getElementById("email").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("emailError").innerHTML = "";return true;
    }
}
function validateUsername() {
    var username = document.getElementById("username").value;
    if(username == ""){
        document.getElementById("usernameError").innerHTML = "Username can't be empty";
        document.getElementById("username").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("usernameError").innerHTML = "";return true;
    }
}
function validatePassword() {
    var password = document.getElementById("password").value;
    if(password == ""){
        document.getElementById("passwordError").innerHTML = "Password can't be empty";
        document.getElementById("password").style.borderColor = "red";
        return false;
    } 
    else if(password.length < 6) {  
        document.getElementById("passwordError").innerHTML = "Password length must be atleast 6 characters";
        document.getElementById("password").style.borderColor = "red";  
        return false;  
    }
    else if(password.length > 15) {  
        document.getElementById("passwordError").innerHTML = "Password length must not exceed 15 characters";
        document.getElementById("password").style.borderColor = "red";  
        return false;  
    }   
    else{
        document.getElementById("passwordError").innerHTML = "";
        document.getElementById("password").style.borderColor = "green";return true;
    }
}
function validateConPassword() {
    var password = document.getElementById("password").value;
    var conpassword = document.getElementById("conpassword").value;
    if(conpassword== ""){
        document.getElementById("conPasswordError").innerHTML = "Confirm Password can't be empty";
        document.getElementById("conpassword").style.borderColor = "red";
        return false;
    }

    if(password != conpassword){
        document.getElementById("conPasswordError").innerHTML = "Password and Confirm Password doesn't match";
        document.getElementById("conpassword").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("conPasswordError").innerHTML = "";
        document.getElementById("conpassword").style.borderColor = "green";return true;
    }
}

function validateBankname() {
    if(bankname.length <= 0){
        document.getElementById("banknamenameError").innerHTML = "Bank Name can't be empty";
        document.getElementById("bankname").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("banknamenameError").innerHTML = "";
        document.getElementById("bankname").style.borderColor = "";
        return true;
    }
}