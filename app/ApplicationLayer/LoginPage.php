<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant Login</title>
  <link rel="stylesheet" href="LoginPage.css">
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
        <div class="container-login">
          <form action="../../public/Facade.php?action=loginAcc" method="post">
            <div class="logMasuk">
              <img style="height:50px;" src="./Asset/Login_Profile.jpg">
              <h2><b>Log Masuk</b></h2>
            </div>
            <table>
              <tr>
                <td>NO. KAD PENGENALAN :</td>
                <td> <input style="height:30px; width:200px;" type="text" name="userIC" id="userIC"></td>
              </tr>
              <tr>
                <td>KATA LALUAN :</td>
                <td> <input style="height:30px; width:200px;" type="password" name="userPassword" id="userPassword">
                </td>
              </tr>
              <tr>
              <td>Peranan :</td>
                <td> 
                  <select name="role" id="role" style="height:40px; width:208px;>
                    <option value="">Peranan</option>
                    <option value="Pemohon">Pemohon</option>
                    <option value="Kakitangan">Kakitangan</option>
                    <option value="Admin">Admin</option>
                  </select></td>
              </tr>
            </table>
            <input type="submit" id="submit" value="MASUK" onclik=""> <br> <br>


            <br><br>
            <div class="href-link">
              <a href="./ApplicantView/Module1/ApplicantRegFormPage.php">Daftar</a>
              <div class="verticle-line"></div>
              <a href="ForgotPasswordPage.php">Lupa Kata Laluan?</a>
            </div>
            <br>
          </form>
        </div>
      </div>
    </section>
  </div>
</body>

</html>