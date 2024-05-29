<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="StaffManageReligiousInfo.css">
    <script>
        function showAlert() {
            alert("Succesfull edited!");
        }
    </script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }


        .table-info {
            width: 770px;
            margin-left: 30px;
            width: 90%;
            border: none;
        }

        .table-data {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 10px;
            padding-right: 10px;
            text-align: center;
        }

        .inner-content {
            margin-left: 30px;
            margin-top: 40px;
        }

        .table-info2 {
            border-collapse: collapse;
            width: 96%;
            text-align: center;

        }

        .table-info2 td {
            border: 1px solid #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        #paid {
            width: 260px;
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #alamat {
            width: 400px;
            height: 40px;
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #tarikhMula {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #tarikhTamat {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #tempat {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #masaMula {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #masaTamat {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #pegawai {
            width: 300px;
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #noTel {
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
        }

        #catatan {
            width: 350px;
            background: #FFE0F6;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border: none;
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
            width: 70px;
            float: right;
            margin-right: 100px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .icon {
            width: 15px;
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
                            <table class="table-info">
                                <tr>
                                    <td>
                                        <label for="paid">PAID</label>
                                    </td>
                                    <td>
                                        <select id="paid" name="paid" required>
                                            <option value="">Select an office</option>
                                            <option value="JAIPTermerloh">JAIP Termerloh</option>
                                            <option value="JAIPPekan">JAIP Pekan</option>
                                            <option value="JAIPKuantan">JAIP Kuantan</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tarikhMula">Tarikh Mula:</label>
                                    </td>
                                    <td>
                                        <input type="date" name="tarikhMula" id="tarikhMula">
                                    </td>
                                    <td>
                                        <label for="tarikhTamat">Tarikh Tamat:</label>
                                    </td>
                                    <td>
                                        <input type="date" name="tarikhTamat" id="tarikhTamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tempat">Tempat:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="tempat" name="tempat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="alamat">Alamat:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="alamat" name="alamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="masaMula">Masa mula:</label>
                                    </td>
                                    <td>
                                        <input type="time" name="masaMula" id="masaMula">
                                    </td>
                                    <td>
                                        <label for="masaTamat">Masa Tamat:</label>
                                    </td>
                                    <td>
                                        <input type="time" name="masaTamat" id="masaTamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="pegawai">Pegawai dihubungi:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="pegawai" name="pegawai">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="noTel">No telefon:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="noTel" name="noTel">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="catatan">Catatan</label></td>
                                    <td>
                                        <input type="text" id="catatan" name="catatan">
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <button type="submit" id="button1" onclick="showAlert()">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


</body>

</html>