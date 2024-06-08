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
              window.location = "../../../../app/ApplicationLayer/LoginPage.php";
          </script>
        <?php
 
     }else{
 
          // Retrieve the serialized and URL-encoded data from the URL parameter
         $encodedData = $_GET['returnProfileInfo'];
         
         // Decode the URL-encoded data and unserialize it
         $decodedApplicantData = unserialize(urldecode($encodedData));

         //Sidebar Active path
         $_SESSION['route'] = 'change-password';
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Change Password</title>
    <link rel="stylesheet" href="StaffChangePasswordPage.css">
    <script type="text/javascript" src="../../../../app/ApplicationLayer/StaffView/module1/StaffChangePasswordPage.js"></script>

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

        <div class="container-cp">
        <form action = "../../../../public/Facade.php?action=staffChangePassword" id="myform" onsubmit = "return changePasswordFormValidate();" method="post">
        <div id="error_message">
        <!-- the error or success message pass in this div from js -->  
        </div>
            <div class="changePassword">
                <img style="height:50px;"src="../../Asset/Change_Password.png"> 
                <h2><b>Tukar Kata Laluan</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC" value="<?php echo $_SESSION['currentUserIC']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>KATA LALUAN BAHARU:</td>
                    <td> <input style="height:30px; width:250px;" type = "password" name="userPassword" id="userPassword"></td>
                </tr>
                <tr>
                    <td>ULANG KATA LALUAN:</td>
                    <td> <input style="height:30px; width:250px;" type = "password" name="newPassword" id="newPassword"></td>
                </tr>
            </table>

            <input type="submit" id="submit" value="TUKAR KATA LALUAN" style="height:30px; width:175px;" onclick="   ">
            <br>
        </form>
        </div>
        </div>
</section>
    </div>
</body>
</html>