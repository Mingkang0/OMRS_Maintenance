<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="AdminLoginPage.css">
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
        <div class="container-login"> 
        <form action ="../../../public/Facade.php?action=loginAdminAcc" method="post">
            <div class="logMasuk">  
                <img style="height:50px;"src="../Asset/Login_StaffProfile.png">
                <h2><b>Log Masuk Kakitangan</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN  :</td>
                    <td> <input style="height:30px; width:200px;" type = "text" name="userIC" id="userIC"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN :</td>
                    <td> <input style="height:30px; width:200px;" type = "password" name="userPassword" id="userPassword"></td>
                </tr>
            </table>
            <input type="submit" id="submit" value="MASUK" onclik="   "> <br> <br> <br>

            <div class="href-link">
                <a href="AdminChangePasswordPage.php" >Tukar Kata Laluan </a>
                <div class="verticle-line"></div>
                <a href="AdminForgotPasswordPage.php">Lupa Kata Laluan?</a>
            </div>
            <br>
        </form>
        </div>
        </div>
</section>
    </div>
</body>
</html>