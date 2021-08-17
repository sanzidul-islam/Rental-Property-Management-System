
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
    <title>Document</title>
    <style>
        #a1{
            background-color: rgb(255, 0, 0);
           
        }
    </style>
  
</head>

<body >

<?php
include "../controllers/includes/header.php";
?>

<a id="a1" href="Logout.php">LOG OUT</a>

<?php
include "../controllers/includes/sidebar_links.php";
?>



<?php require "../controllers/includes/footer.php"; ?>

</body>
</html>