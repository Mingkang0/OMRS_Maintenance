<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>
    <link rel="stylesheet" href="StaffRegFormPage.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../Common/headerAdminView(Module1).html'); 
        ?>


<section>

        <div>
            <?php include_once('../Common/sidebarAdmin(Module1).php');?>
        </div>

        <div class="content-container">
        <div class="content">
        
        <div class="container-StaffRegForm">

                
            <form action="../../../public/Facade.php?action=registerStaffAcc" method="POST">
                <table>
                <tbody>
                    <tr>
                        <td>NO. KAD PENGENALAN  :</td>
                        <td><input type="text" name="userIC" id="userIC"></td>
                    </tr>
                    <tr>
                        <td>NAMA PENGGUNA :</td>
                        <td><input type="text" name="staffName" id="staffName"></td>
                    </tr>
                    <tr>
                        <td>JANTINA :</td>
                        <td><select style="width:400px; height:30px;" name="staffGender" id="staffGender">
                            <option disabled selected>SILA PILIH</option>
                            <option value="Lelaki">LELAKI</option>
                            <option value="Perempuan">PEREMPUAN</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>JABATAN :</td> 
                        <td><select style="width:400px; height:30px;"name="staffDepartmentName" id="staffDepartmentName">
                                <option disabled selected>SILA PILIH</option>
                                <option value="Jabatan Agama Islam Negeri Pahang">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>KATEGORI AKSES :</td>
                        <td><select style="width:400px; height:30px;" name="userType" id="userType">
                                <option disabled selected>SILA PILIH</option>
                                <option value="Kakitangan">KAKITANGAN</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>E-MEL :</td>
                        <td><input type="text" name="staffEmail" id="staffEmail"></td>
                    </tr>
                    <tr>
                        <td>NO. TELEFON  :</td>
                        <td><input type="text" name="staffPhoneNo" id="staffPhoneNo"></td>
                    </tr>
                    <tr>
                        <td>KATA LALUAN :</td>
                        <td><input type="password" name="userPassword" id="userPassword" style="width:400px; height:30px;"  ></td>
                    </tr>
                </table>
                </tbody>

                <input type="submit" id="submit" value="DAFTAR" onclik="   ">
            </form>

        </div>
        </div>
        </div>
</section>
    </div>
</body>
</html>