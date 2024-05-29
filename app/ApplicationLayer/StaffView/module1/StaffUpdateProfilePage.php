<?php

     // Start up your PHP Session
     session_start();

     $encodedData;
     $decodedStaffData;

     //If the user is not logged in send him/her to the login form
     if(!isset($_SESSION['currentUserIC'])) {
        ?>
          <script>
              alert("Access denied !!!")        
              window.location = "../../../../app/ApplicationLayer/StaffView/module1/StaffLoginPage.php";
          </script>
        <?php
 
     }else{
 
          // Retrieve the serialized and URL-encoded data from the URL parameter
         $encodedData = $_GET['returnProfileInfo'];
         
         // Decode the URL-encoded data and unserialize it
         $decodedStaffData = unserialize(urldecode($encodedData));

         //Sidebar Active path
         $_SESSION['route'] = 'editProfile';
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Update Profile</title>
    <link rel="stylesheet" href="StaffUpdateProfilePage.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../../Common/header.html'); 
        ?>

<section>

        <div>
            <?php include_once('../../Common/sidebarStaffSyazana.php');  ?>
        </div>

        <div class="content-container">
        <div class="content">  
            
        <div class="container-StaffUpdateProfile">

        <form action="../../../../public/Facade.php?action=updateStaffProfile" method="POST">
                <table>
                    <tbody>
                    <tr>
                        <td scope="row">NO KAD PENGENALAN : </td>
                        <td><?php echo $decodedStaffData['Staff_Id']; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">NAMA : </td>
                        <td><?php echo $decodedStaffData['staffName']; ?></td> 
                    </tr>
                    
                    <tr>
                        <td scope="row">JANTINA : </td>
                        <td><?php echo $decodedStaffData['staffGender']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">NO. TELEFON: </td>
                        <td><input type="text" id="staffPhoneNo" name="staffPhoneNo" value="<?php echo $decodedStaffData['staffPhoneNo']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">EMAIL : </td>
                        <td><input type="text" id="staffEmail" name="staffEmail" value="<?php echo $decodedStaffData['staffEmail']; ?>"/></td>
                    </tr>
                    </table>
                </tbody>

                <input type="submit" id="kemaskiniBtn" value="KEMASKINI" onsubmit="  "> 
                </from>
                
                
        </div> 
        </div>  
        </div>
                 
</section>
    </div>
</body>
</html>