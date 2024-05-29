<?php

include '../../../OMRS.dataaccess/Module2Repository.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantReligiousOfficeOptions.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        .table-info {
            width: 90%;
            border: none;
        }

        #ic-num {
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
        }

        #button1 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            margin-left: 20px;
            width: 50px;
        }

        #line {
            margin-right: 30px;
        }

        #form1 {
            margin-left: 20px;
        }

        #button2 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            width: 100px;
            float: right;
            margin-right: 80px;
        }
    </style>
</head>

<body>
    <script src="../module2/ApplicantReligiousOfficeOptions.js"></script>
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.html');
        ?>


        <section>

            <div>
                <?php include_once('../../Common/sidebar.php');  ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="inner-content">
                        <h3>Permohonan Berkahwin</h3>
                        <hr id="line">
                        <form action="../../../../public/Facade.php?action=PartnerInfo" id="form1">
                            <label for="ic-num">No kad pengenalan pasangan :</label>
                            <input type="text" id="ic-num" name="ic-num">
                            <button type="submit" id="button1"><b>Cari</b></button>
                        </form>
                        <br>
                        <h5>Berikut merupakan maklumat berkaitan pasangan :-</h5>
                        <br>
                        <table class="table-info">
                            <tr>
                                <td><strong>Kad Pengenalan</strong></td>
                                <td id="PartnerIC">:</td>
                                <td><strong>Alamat Tempat Tinggal</strong></td>
                                <td id="PartnerAddress">:</td>
                            </tr>
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td id="PartnerName">:</td>
                            </tr>
                            <tr>
                                <td><strong>Tarikh Lahir</strong></td>
                                <td id="PartnerBirthDate">:</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td id="PartnerEmail">:</td>
                                <td><strong>Pekerjaan</strong></td>
                                <td id="PartnerJob">:</td>
                            </tr>
                            <tr>
                                <td><strong>Jantina</strong></td>
                                <td id="PartnerSex">:</td>
                                <td><strong>No Telefon (Bimbit)</strong></td>
                                <td id="PartnerPhoneNo">:</td>
                            </tr>
                            <tr>
                                <td><strong>Bangsa</strong></td>
                                <td id="PartnerRace">:</td>
                            </tr>
                            <tr>
                                <td><strong>Umur</strong></td>
                                <td id="PartnerAge">:</td>
                            </tr>
                        </table>
                        <br><br>
                        <a href="../../ApplicantView/module2/ApplicantUpdateMarriageInfoPage.php">
                            <button type="button" id="button2">Seterusnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>




</body>

</html>