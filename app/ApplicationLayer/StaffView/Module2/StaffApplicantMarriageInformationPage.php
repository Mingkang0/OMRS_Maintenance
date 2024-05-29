<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="">
    <script>
        function A(){
            alert("Permohon telah lulus");
        }
        function B(){
            alert("Permohon telah gagal");
        }
    </script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .inner-content {
            margin-left: 20px;
            margin-top: 20px;
        }

        .table-info {
            border: none;
            background: #FEF5FF;
            border-radius: 10px;
            width: 98%;
        }

        .header-title {
            background: #FFE0F6;
            border-radius: 10px;
            padding-left: 10px;
            

        }

        #line {
            margin-right: 30px;
            border: 1px solid #000000;
        }

        #button1 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            width: 70px;
            float: right;
            margin-right: 30px;
        }
        #button2 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            width: 70px;
            float: right;
            margin-right: 30px;
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
                        <h4>PERKAHWINAN</h4>
                        <hr id="line">
                        <div class=inner-double-content>
                            <form action="">
                                <table class="table-info">
                                    <div class="header-title">
                                        <tr>
                                            <td colspan="4" class="header-title">MAKLUMAT PEMOHON</td>
                                        </tr>
                                    </div>
                                    <tr>
                                        <td><p>Nama</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Tarikh Lahir</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Umur</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No Kad Pengenalan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Jantina</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Email</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Bangsa</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Alamat</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>No.Telefon(Bimbit)</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No.Telefon(Rumah)</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Taraf Pendidikan</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Jawatan/Pekerjaan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Pendapatan</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Alamat Tempat Kerja</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>No.Telefon(Pejabat)</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No.Sijil Pra-Perkahwinan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <div class="header-title">
                                        <tr>
                                            <td colspan="4" class="header-title">MAKLUMAT PASANGAN</td>
                                        </tr>
                                    </div>
                                    <tr>
                                        <td><p>Nama</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Tarikh Lahir</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Umur</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No Kad Pengenalan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Jantina</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Email</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Bangsa</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Alamat</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>No.Telefon(Bimbit)</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No.Telefon(Rumah)</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Taraf Pendidikan</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Jawatan/Pekerjaan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Pendapatan</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Alamat Tempat Kerja</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>No.Telefon(Pejabat)</p></td>
                                        <td><p>:</p></td>
                                        <td><p>No.Sijil Pra-Perkahwinan</p></td>
                                        <td><p>:</p></td>
                                    </tr>
                                </table>
                                <button type="submit" id="button1" onclick="A()"><b>Terima</b></button> <button type="submit" id="button2" onclick="B()"><b>Tolak</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>