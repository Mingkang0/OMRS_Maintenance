
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantReligiousOfficeOptions.css">
    <style>
        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        .table-data {
            border-collapse: collapse;
            width: 96%;
            text-align: center;
        }

        .table-data td {
            background: #FFE0F6;
            border: 1px solid #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        #button1 {
            border-radius: 9px;
            height: 28px;
            background: #6D72F1;
            color: #FFFFFF;
            border: none;
            width: 50px;
            margin-left: 20px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        #ic-num {
            border: none;
            height: 28px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
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
                <?php include_once('../../Common/sidebar.php');  ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="inner-content">
                        <h3>STATUS PERMOHONAN</h3>
                        <hr>
                        <form action="">
                            <label for="ic-number">No kad pengenalan: </label>
                            <input type="text" id="ic-num" name="ic-num">
                            <button type="submit" id="button1"><b>Cari</b></button>
                        </form>
                        <br>
                        <table class="table-data">
                            <tr>
                                <td class style="width: 50%">
                                    <p>Nama Pemohon</p>
                                </td>
                                <td style="width: 30%">
                                    <p>No Kad Pengenalan</p>
                                </td>
                                <td style="width: 20%">
                                    <p>Status</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="AppName"></p>
                                </td>
                                <td>
                                    <p id="Applicant_IC"></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>



</body>

</html>