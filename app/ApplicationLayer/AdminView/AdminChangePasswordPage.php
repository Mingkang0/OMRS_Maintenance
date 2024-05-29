<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Change Password</title>
    <link rel="stylesheet" href="AdminChangePasswordPage.css">
    <script type="text/javascript" src="../../../app/ApplicationLayer/AdminView/AdminChangePasswordPage.js"></script>

</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../Common/headerAdminView(Module1).html'); 
        include_once('../Common/headerFrontPage(Module1).html'); 
        ?>


<section>

        <div class="content-container">
        <div class="container-cp">
        <form action = "../../../app/ApplicationLayer/AdminView/AdminLoginPage.php" id="myform" onsubmit = "return changePasswordFormValidate();">
        
        <div id="error_message">
        <!-- the error or success message pass in this div from js -->  
        </div>
            
            <div class="changePassword">
                <img style="height:50px;"src="../Asset/Change_Password.png"> 
                <h2><b>Tukar Kata Laluan</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN BAHARU:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userPassword" id="userPassword"></td>
                </tr>
                <tr>
                    <td>ULANAG KATA LALUAN:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="newPassword" id="newPassword"></td>
                </tr>
            </table>

            <input type="submit" id="submit" value="TUKAR KATA LALUAN" onclick="   ">
            <a href="AdminLoginPage.php">[  KEMBALI  ]</a>
            <br>
        </form>
        </div>
        </div>
</section>
    </div>
</body>
</html>