<?php
    require_once('requires/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
    <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <h2 style="color: white">My Profile</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a> 
            </td>
			</tr>
        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: darkblue;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td style="background-color: #ecf0f5;"> 
            
            <?php
            require_once('../db/db.php');
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM users WHERE username = '$username' ";
            $query=mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query)>=1)
		    {
		   	$userData= mysqli_fetch_assoc($query);
               //print_r($userData);exit;
            }

            $userId = $_SESSION['userId'];
            $sql = "SELECT balance FROM account_information WHERE userid = '$userId' ";
            $query=mysqli_query($conn, $sql);

            if(mysqli_num_rows($query)>=1)
            {
            $userDatas= mysqli_fetch_assoc($query);
               
            }            
            ?>
                <table align="center" width="30%" cellpadding="6"> <!-- Main Part-->
                        <tr>
                            <td>ID</td>
                            <td><input type="text" value="<?=$userData['id']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" value="<?=$userData['name']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" value="<?=$userData['email']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" value="<?=$userData['username']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" value="<?=$userData['phone']?>" readonly></td>
                        </tr>
                      
                      

                   
                         <tr>
                            <td>Balance (&dollar;)</td>
                            <td><input type="number" value="<?=$userDatas['balance']?>" readonly></td> 
                        </tr>
                        
                        
                        <tr>
                            <td colspan="2" align="right"><button><a href="edit profile.php"><b>Edit Profile<b></a></button></td>
                        </tr>

                </table>
               
            </td>  
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>

        </tr>
        


    </table>

</body>
</html>