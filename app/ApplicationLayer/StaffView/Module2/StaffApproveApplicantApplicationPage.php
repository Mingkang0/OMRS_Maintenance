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
            text-align: center;
            
        }

        .table-data td {
            background: #FFE0F6;
            border: 1px solid #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        #ic-num {
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            width: 300px;
            height: 30px;
        }
        #button1 {
            border-radius: 9px;
            height: 28px;
            background: #6D72F1;
            color: #FFFFFF;
            border: none;
            width: 60px;
            margin-right: 420px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
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
                        <form action="">
                            <label for="ic-num">No kad pengenalan:</label><br>
                            <input type="text" id="ic-num" name="ic-num">
                            <button type="button" id="button1">Cari</button>
                        </form>
                        <br>
                        <br>
                        <table class="table-data">
                            <tr>
                                <td>
                                    <p><b>Nama Pemohon</b></p>
                                </td>
                                <td>
                                    <p><b>No kad pengenalan</b></p>
                                </td>
                                <td>
                                    <p><b>Status</b></p>
                                </td>
                                <td>
                                    <p><b>Operasi</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="#"></p>
                                </td>
                                <td>
                                    <p id="#"></p>
                                </td>
                                <td>
                                    <p id="#"></p>
                                </td>
                                <td>
                                    <p><a href="">BUAT KELULUSAN</a></p>

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