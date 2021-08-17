function validateUsername(){
    var username = document.getElementById("username").value;
    if(username == ""){
        document.getElementById("usernameError").innerHTML = "Username can't be empty!"
        //document.getElementById("usernameError").style.color = "red"
    }
    else{
        document.getElementById("usernameError").innerHTML = ""; 
    }
}function validatePassword(){
    var password = document.getElementById("password").value;
    if(password == ""){
        document.getElementById("passwordError").innerHTML = "Password can't be empty!"
        //document.getElementById("emailError").style.color = "red"
    }
    else{
        document.getElementById("passwordError").innerHTML = "";
    }
}