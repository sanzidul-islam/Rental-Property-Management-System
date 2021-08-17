<?php
    require_once('requires/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Buy Property</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                
                <h2 style="color: white">Available Property</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: darkblue;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td style="background-color: #ecf0f5;" align="center">
                
                <form action method="POST">
                    <input type="search" placeholder="Search..." name="searchProperty">
                    <input type="submit" name="submit" value="Search">
                    <input type="reset" name="reset" value="Reset">
                    <input type="submit" name="seeAll" value="Show All">
                    
                </form> 
               <table  align="center" cellpadding="10">
                <th>Owner</th>
                <th>Location</th>
                <th>Price</th>
                
                
                
            </td>
           <?php
           if(isset($_POST['submit']))
           {
            $searchProperty = $_POST['searchProperty'];   
            
            //Search by Owner Name
            require_once('../db/db.php');
                
                    $sql = "SELECT * FROM properties WHERE owner = '$searchProperty' ";
                    $query=mysqli_query($conn, $sql);   

                while ($userData= mysqli_fetch_assoc($query)) {?>
                    <tr align="center" cellpadding="10">
                        <td><?=$userData['owner']?></td>
                        <td><?=$userData['location']?></td> 
                        <td><?=$userData['price']?></td>
                    </tr>
                        
                       <?php }  
              }  
            //Show All Properties
            else if(isset($_POST['seeAll'])){ 
                require_once('../db/db.php');
                $sql = "SELECT * FROM properties";
                $query=mysqli_query($conn, $sql);   

                while ($userData= mysqli_fetch_assoc($query)) {?>
                    <tr align="center" cellpadding="10">
                        <td><?=$userData['owner']?></td>
                        <td><?=$userData['location']?></td> 
                        <td><?=$userData['price']?></td>
                    </tr>
                        
                       <?php }  
              }  ?> 
              
          

          </table>
           
           

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>