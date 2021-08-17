function isValid(){
    var A_pname = document.forms['APForm']['A_pname'].value;
    var A_Ano = document.forms['APForm']['A_Ano'].value;
    var A_Size = document.forms['APForm']['A_Size'].value;
    var A_price = document.forms['APForm']['A_price'].value;
    var A_RM = document.forms['APForm']['A_RM'].value;
    var A_WM = document.forms['APForm']['A_WM'].value;
   
    if(A_pname === ""){
    document.getElementById('A_pnameV').innerHTML = "name empty";
    
    }
    if(A_Ano === ""){
    document.getElementById('A_AnoV').innerHTML = "Apartment No empty";
    
    }
    if(A_price === ""){
    document.getElementById('A_priceV').innerHTML = "Price empty";
    
    }
    if(A_RM === ""){
    document.getElementById('A_RMV').innerHTML = "Room no empty";
    
    }
    if(A_WM === ""){
    document.getElementById('A_WMV').innerHTML = "washroom No empty";
    
    }

    
    if(A_Size === ""){
    document.getElementById('A_SizeV').innerHTML = "Size empty";
    return false;
    }
    else{
        return true;
    }
    
    }