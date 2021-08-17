<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        form {
            background-color: rgb(102, 179, 255);
            width: 400px;
            margin: 45px 40px;
            font-size: 20px; 
        }
    </style>
    <script src="js/apartment.js"></script>
    <title>Document</title>
    
</head>
<body style="background-color:antiquewhite ">
<?php
include "../controllers/apartment-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<div class="apartment-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="APForm">
<h2 > Appartment DETAILS</h2>

        <legend> Apartment Details</legend>
        <label for="A_pname"> Apartment name</label>
        <input type="text" name="A_pname">  <span id="A_pnameV" style="color: red;"> * <?php echo $A_nameEr ?></span> <br>
        <label for="A_Ano">Apartment  No.</label>
        <input type="text" name="A_Ano">  <span id="A_AnoV" style="color: red;"> * <?php echo $Ap_noEr ?></span> <br>
        <label for="A_Size">Apartment Size</label>
        <input type="text" name="A_Size">  <span id="A_SizeV" style="color: red;"> * <?php echo $A_SizeEr ?></span> <br>
        <label for="A_price">Apartment Price</label>
        <input type="number" name="A_price">  <span id="A_priceV" style="color: red;"> * <?php echo $A_priceEr ?></span> <br>
        <label for="A_RM">Apartment Room number</label>
        <input type="number" name="A_RM">  <span id="A_RMV" style="color: red;"> * <?php echo $A_RMEr ?></span> <br>
        <label for="A_WM">Apartment wahroom number</label>
        <input type="number" name="A_WM">  <span id="A_WMV" style="color: red;"> * <?php echo $A_WMEr ?></span> <br>
    </fieldset>
    <input type="submit"  name="submit" value="Submit"> <br> <br>

</form>
</div>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>