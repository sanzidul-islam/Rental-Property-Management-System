

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



	$searchApartments = searchUser($_GET['usname']);
    echo "<table>
<tr>
<th>Apartment name</th>
<th>Apartment  No.</th>
<th>Apartment Size</th>
<th>Apartment Price</th>
<th>Apartment Room number</th>
<th>Apartment wahroom number</th>

</tr>";

    echo "<tr>";
    echo "<td>" . $searchApartments['ApartmentName']  . "</td>";
    echo "<td>" . $searchApartments['ApartmentNo']  . "</td>";
    echo "<td>" . $searchApartments['ApartmentSize'] . "</td>";
    echo "<td>" . $searchApartments['ApartmentPrice'] . "</td>";
    echo "<td>" . $searchApartments['ApartmentRm'] . "</td>";
    echo "<td>" . $searchApartments['ApartmentwashmRm'] . "</td>";
    echo "<td>" ;

  echo "</tr>";
    return;


?>
<script >
                  function myFunction(val,user_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET","../controllers/change.php?status="+val+"&user_id="+user_id,true);
      xhttp.send();
       }
              </script>
</body>
</html>