<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form submission
    $appName = $_POST['appName'];
    $applicantIC = $_POST['userIC'];

    // Set the session variables
    $_SESSION['appName'] = $appName;
    $_SESSION['applicantIC'] = $applicantIC;

    // Redirect to the ApplicantSubmitProofOfPayment.php page
    header('Location: ApplicantSubmitProofOfPayment.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Registration Form</title>
    <link rel="stylesheet" href="ApplicantRegFormPage.css">
    <script type="text/javascript" src="../../../../app/ApplicationLayer/ApplicantView/module1/ApplicantRegFormPage.js"></script>

</head>

<body>
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.html');
        include_once('../../Common/headerFrontPage(Module1).html');
        ?>


<section>
        <div class="content-container">
        <div class="container-registration">    
        <form id="myform" action="../../../../public/Facade.php?action=registerApplicantAcc" method="POST" onsubmit = "return registerFormValidate();">

                        <div id="error_message">
                            <!-- the error or success message pass in this div from js -->
                        </div>

                        <div class="registration">
                            <img style="height:50px;" src="../../Asset/Registration.png">
                            <h2><b>Daftar Pengguna</b></h2>
                        </div>

                        <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC"></td>

                    <td>BANGSA   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appRace" id="appRace"></td>
                </tr>
                <tr>
                    <td>NAMA:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appName" id="appName"></td>

                    <td>WARGANEGARA   :</td>
                    <td>
                        <select style="width:260px; height:40px;" name="appNationality" id="appNationality">
                            <option disabled selected>SILA PILIH</option>
                            <option value="WARGANEGARA">WARGANEGARA</option>
                            <option value="BUKAN WARGANEGARA">BUKAN WARGANEGARA</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>KATEGORI AKSES :</td>
                    <td><select style="width:260px; height:40px;" name="userType" id="userType">
                            <option disabled selected>SILA PILIH</option>
                            <option value="Pemohon">PEMOHON</option>
                        </select>
                    </td>
                    <td>TARAF PENDIDIKAN  :</td>
                    <td> 
                        <select style="width:260px; height:40px;" name="appEduLevel" id="appEduLevel">
                            <option disabled selected>SILA PILIH</option>
                            <option value="SEKOLAH RENDAH">SEKOLAH RENDAH</option>
                            <option value="SEKOLAH MENENGAH">SEKOLAH MENENGAH</option>
                            <option value="PRA-UNIVERSITI">PRA-UNIVERSITI</option>
                            <option value="UNIVERSITI">UNIVERSITI</option>
                        </select>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>JANTINA:</td>
                    <td>
                        <select style="width:260px; height:40px;" name="appGender" id="appGender">
                            <option disabled selected>SILA PILIH</option>
                            <option value="LELAKI">LELAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </td>
                    <td>OKU STATUS   :</td>
                    <td>
                        <select style="width:260px; height:40px;" name="appOKUStatus" id="appOKUStatus">
                            <option disabled selected>SILA PILIH</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td>NO. TELEFON:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appPhoneNo" id="appPhoneNo"></td>
                    <td>STATUS  :</td>
                    <td> 
                        <select style="width:260px; height:40px;" name="appStatus" id="appStatus">
                            <option disabled selected>SILA PILIH</option>
                            <option value="BERKAHWIN">BERKAHWIN</option>
                            <option value="TIDAK BERKAHWIN">TIDAK BERKAHWIN</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ALAMAT:</td>
                    <td> <textarea name="appAddress" id="appAddress" rows="5" cols="32"></textarea></td>
                </tr>
                <tr>
                    <td>E-MEL:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appEmail" id="appEmail"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN:</td>
                    <td> <input style="height:30px; width:250px;" type = "password" name="userPassword" id="userPassword"></td>
                </tr>
            </table>

            <input style="margin-left:700px;" type="submit" id="submit" value="DAFTAR" onclick = "  ">  <!--submitForm(event, 'reg-form')-->
            <a href="ApplicantLoginPage.php">[  KEMBALI  ]</a>
            <br>
        </form>
        </div>   
        </div>
                       
        </section>
    </div>


    <script>
        //bila tekan submit..reload page ni shj
        /*function submitForm(event, formId) {
          event.preventDefault(); // Prevent the default form submission

             //Get the form data
          var form = document.getElementById(formId);
           var formData = new FormData(form);

           //Create an AJAX request
                var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action, true);
            xhr.onreadystatechange = function () {
              if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
               alert('Successfully Registered');
                 //You can perform any additional actions or show a success message here

                 //Clear the form inputs if needed
                form.reset();
              }
           };

           //Send the form data
           xhr.send(formData);
         }*/
    </script>
</body>

</html>