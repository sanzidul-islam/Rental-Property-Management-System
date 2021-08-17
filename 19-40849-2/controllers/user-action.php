

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 

include "../DB/dbread.php";

if(isset($_GET['username'])){
	$allSearchedUsers = searchUser($_GET['username']);
    echo "<table>
<tr>
<th> Full name</th>
<th> User name</th>
<th> Rule</th>


</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['fname']  . "</td>";
    echo "<td>" . $allSearchedUsers['username']  . "</td>";
    echo "<td>" . $allSearchedUsers['rule']  . "</td>";
    return;
  
    ?>

   <?php 
  

    

}
else{
	
	
}
?>

</body>
</html>