<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Forgot Password</title>
    <link rel="stylesheet" href="ForgotPassword.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('./Common/header01.html'); 
        include_once('./Common/headerFrontPage(Module1).html'); 
        ?>


<section>

        <div class="content-container">
        <div class="container-fp">   
        <form action="../../public/Facade.php?action=forgotPassword" method = "POST">
            <div class="forgotPassword">
                <img style="height:50px;"src="./Asset/Forgot_Password.jpg"> 
                <h2><b>Lupa Kata Laluan?</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC"></td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userEmail" id="adminEmail"></td>
                </tr>
                <tr>
              <td>Peranan :</td>
                <td> 
                  <select name="role" id="role" style="height:40px; width:258px;>
                    <option value="">Peranan</option>
                    <option value="Pemohon">Pemohon</option>
                    <option value="Kakitangan">Kakitangan</option>
                    <option value="Admin">Admin</option>
                  </select></td>
              </tr>
            </table>

            <input type="submit" id="submit" value="HANTAR" onclick="   ">
            <a href="LoginPage.php">[  KEMBALI  ]</a>
            <br>
        </form>
        </div>
        </div>
</section>
    </div>
</body>
</html>