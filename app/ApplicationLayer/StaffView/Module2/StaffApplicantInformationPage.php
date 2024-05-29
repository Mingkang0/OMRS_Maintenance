<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="StaffManageReligiousInfo.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .table-data {
            border-collapse: collapse;
            width: 96%;
            border: none;
            height: 100px;
        }

        .table-data td {
            border: none;
        }
        .inner-content{
            margin-left: 30px;
            margin-top: 20px;
        }
        #line {
            margin-right: 30px;
            border: 1px solid #000000;
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
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.html');
        ?>


        <section>

            <div>
            <?php include_once('../../Common/staffsidebar.php');  ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="inner-content">
                        <h2>Maklumat Pemohon</h2>
                        <hr id="line">
                        <table class="table-data">
                            <tr>
                                <td>
                                    <p><b>No Permohonan</b></p>
                                </td>
                                <td>
                                    <p id="#">:BTG1P/2022-00729</p>
                                </td>
                                <td>
                                    <p><b>Alamat tempat tinggal</b></p>
                                </td>
                                <td>
                                    <p id="#">:No 16,Taman murni</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Siri taklimat</b></p>
                                </td>
                                <td>
                                    <p id="#">:BTG/0023/2023</p>
                                </td>
                                <td>
                                    <p><b>Poskod</b></p>
                                </td>
                                <td>
                                    <p id="#">:26600</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>No kad pengenalan</b></p>
                                </td>
                                <td>
                                    <p id="#">:970917-06-1123</p>
                                </td>
                                <td>
                                    <p><b>Daerah</b></p>
                                </td>
                                <td>
                                    <p id="#">:Inderapura</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Nama</b></p>
                                </td>
                                <td>
                                    <p id="#">:Ali Bin Alex</p>
                                </td>
                                <td>
                                    <p><b>Pekerjaan</b></p>
                                </td>
                                <td>
                                    <p id="#">:Pengawal kesihatan</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Jantina</b></p>
                                </td>
                                <td>
                                    <p id="#">:Lelaki</p>
                                </td>
                                <td>
                                    <p><b>No telefon(bimbit)</b></p>
                                </td>
                                <td>
                                    <p id="#">:013-34325467</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Bangsa</b></p>
                                </td>
                                <td>
                                    <p id="#">:Dayak</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Umur</b></p>
                                </td>
                                <td>
                                    <p id="#">:26</p>
                                </td>
                            </tr>
                        </table>
                        <a href="../Module2/StaffListOfMarriageCourseApplicantPage.php">
                            <button type="button" id="button2">Kembali</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>