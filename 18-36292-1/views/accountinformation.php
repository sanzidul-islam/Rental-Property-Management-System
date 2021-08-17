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
    <title>Account Information</title>
</head>
<body>
    <table  width="100%" cellpadding="10">
        <tr style="background-color: #004c87">
            <td align="center" colspan="2" >
                <h2 style="color: white">Account Information</h2>
            </td>
        </tr>
        <tr >
            <td align="right" colspan="3">
                Welcome, <a href="profile.php"><b><?php echo $_SESSION['name']; ?></b></a> <a href="../controller/logout.php">Logout</a>
            </td>
			</tr>

        <tr height=730px> <!-- Sidebar -->
            <?php
            require_once('../db/db.php');
            $userId = $_SESSION['userId'];
            $sql = "SELECT * FROM account_information WHERE userid = '$userId' ";
            $query=mysqli_query($conn, $sql);

            if(mysqli_num_rows($query)>=1)
            {
            $userData= mysqli_fetch_assoc($query);

            }

                    
            ?>


            <td width=20% style="background-color:darkblue;"><?php include_once 'requires/sidebar.php'; ?></td> 
            <td align="center" style="background-color: #ecf0f5;"> 
             <table align="center" width="30%">
                <tr> <td>Bank Name</td> <td><input type="text" value="<?=$userData['bankname']?>" readonly></td> </tr>
                <tr> <td>Account No</td> <td><input type="text" value="<?=$userData['accountno']?>" readonly></td> </tr>
                <tr> <td>Balance</td> <td><input type="text" value="<?=$userData['balance']?>" readonly></td> </tr>
                
             </table>

            </td>  <!-- Main -->

            
        <tr>
            
        </tr>
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><?php require_once('requires/footer.php');?></td>
        </tr>


    </table>

</body>
</html>