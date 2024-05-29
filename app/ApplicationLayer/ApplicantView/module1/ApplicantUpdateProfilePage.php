<?php

     // Start up your PHP Session
     session_start();

     $encodedData;
     $decodedApplicantData;

     //If the user is not logged in send him/her to the login form
     if(!isset($_SESSION['currentUserIC'])) {
        ?>
          <script>
              alert("Access denied !!!")        
              window.location = "../../../../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php";
          </script>
        <?php
 
     }else{
 
          // Retrieve the serialized and URL-encoded data from the URL parameter
         $encodedData = $_GET['returnProfileInfo'];
         
         // Decode the URL-encoded data and unserialize it
         $decodedApplicantData = unserialize(urldecode($encodedData));

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
    <title>Applicant Update Profile</title>
    <link rel="stylesheet" href="ApplicantUpdateProfilePage.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../../Common/header.html'); 
        ?>

<section>

        <div>
            <?php include_once('../../Common/sidebarSyazana.php');  ?>
        </div>

        <div class="content-container">
        <div class="content">  
            
        <div class="container-ApplicantUpdateProfile">  
        <form action="../../../../public/Facade.php?action=updateAppProfile" method="POST">
                <table>
                    
                    <tr>
                        <td scope="row">NO KAD PENGENALAN : </td>
                        <td><?php echo $decodedApplicantData['Applicant_IC']; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">NAMA : </td>
                        <td><?php echo $decodedApplicantData['appName']; ?></td> 
                    </tr>
                    
                    <tr>
                        <td scope="row">JANTINA : </td>
                        <td><?php echo $decodedApplicantData['appGender']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">NO. TELEFON: </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appPhoneNo" name="appPhoneNo" value="<?php echo $decodedApplicantData['appPhoneNo']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">EMAIL : </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appEmail" name="appEmail" value="<?php echo $decodedApplicantData['appEmail']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">ALAMAT : </td>
                        <td><textarea rows="4" cols="36" id="appAddress" name="appAddress"><?php echo $decodedApplicantData['appAddress']; ?></textarea></td>

                    </tr>
                    <tr>
                        <td scope="row">BANGSA: </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appRace" name="appRace" value="<?php echo $decodedApplicantData['appRace']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">WARGANEGARA: </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appNationality" name="appNationality" value="<?php echo $decodedApplicantData['appNationality']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">TARAF PENDIDIKAN : </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appEduLevel" name="appEduLevel" value="<?php echo $decodedApplicantData['appEduLevel']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">OKU Status : </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appOKUStatus" name="appOKUStatus" value="<?php echo $decodedApplicantData['appOKUStatus']; ?>"/></td>
                    </tr>
                    <tr>
                        <td scope="row">Status : </td>
                        <td><input style="height:30px; width:290px;" type="text" id="appStatus" name="appStatus" value="<?php echo $decodedApplicantData['appStatus']; ?>"/></td>
                    </tr>
                    </table>
                
                <input type="submit" id="kemaskiniBtn" value="KEMASKINI" onsubmit="  "> 
                </from>         
           
        </div> 
        </div>  
        </div>
                 
</section>
    </div>
</body>
</html>