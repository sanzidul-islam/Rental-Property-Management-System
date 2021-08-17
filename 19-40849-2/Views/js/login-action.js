function isValid(){
    var user = document.forms['LForm']['username'].value;
    var pass = document.forms['LForm']['password'].value;
    var rule = document.forms['LForm']['rule'].value;
   
    if(user === ""){
    document.getElementById('usernameV').innerHTML = "userempty";
    
    }
    if(pass === ""){
    document.getElementById('passwordV').innerHTML = "pass empty";
    
    }

    
    if(rule === ""){
    document.getElementById('ruleV').innerHTML = "rule empty";
    return false;
    }
    else{
        return true;
    }
    
    }