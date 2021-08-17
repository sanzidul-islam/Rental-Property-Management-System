<?php
// session_start();
// if(!isset($_SESSION["usname"]))
// {
//     header("Location: ./Login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/user-action.js"></script>
    <title>Document</title>
    <style>
      form {
            background-color: rgb(102, 179, 255);
            width: 400px;
            margin: 45px 500px;
            font-size: 20px; 
        }
    </style>
</head>
<body >


<div >
<form action="../controllers/user-action.php" method="GET" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>Details</legend>
        <label for="username">User Name :</label>
        <input type="text" id="username" name="username" >

        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"></div>
</form>

</div>

</fieldset>
<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?username=" +pform.usname.value);
      xhttp.send();
       }
              </script>


</body>
</html>