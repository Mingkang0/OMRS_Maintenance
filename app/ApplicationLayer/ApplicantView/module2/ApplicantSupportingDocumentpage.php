<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="">
    <style>
        .inner-content {
            margin-left: 20px;
            margin-top: 20px;
        }

        .table-info {
            border: none;
            background: #FEF5FF;
            border-radius: 10px;
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
            margin-right: 80px;
        }

        .inner-content2 {
            margin-left: 40px;
            border: none;
            margin-right: 40px;
        }

        .inner-content3 {
            border: none;
        }

        #state1 {
            color: red;
        }

        .table-data {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        .table-data td {
            border: 2px solid azure;
        }

        .doc {
            float: left;
            padding-left: 30px;
            margin-top: 10px;
            font-size: 19px;
            color: #000000;
        }

        .icon {
            width: 40px;
            cursor: pointer;
        }

        .icon2 {
            width: 40px
        }

        #text {
            color: #FFFFFF;
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
                        <h4>DOKUMEN</h4>
                        <hr id="line">
                    </div>
                    <div class="inner-content2">
                        <table class="inner-content3">
                            <tr>
                                <td>
                                    <p><b>NAME</b></p>
                                </td>
                                <td>
                                    <p>&nbsp;&nbsp;:&nbsp;RAMZAN BIN MOHD RUSHDI</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>USER ID</b></p>
                                </td>
                                <td>
                                    <p>&nbsp;&nbsp;:&nbsp;A020917</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <p id="state1">Pemohon perlu melengkapkan borang ini dengan <br>memuat naik semua dokumen yang diperlukan</p>
                        <table class="table-data">
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                </td>
                                <td style="width: 85px;">
                                    <p>Cetak</p>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <p>Muat Naik</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <p class=" doc">BORANG PERMOHONAN KAHWIN</p>
                                </td>
                                <td>

                                </td>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <a href="path/to/download/Borang Permohonan Kahwn.pdf" download>
                                        <img class="icon2" src="../../Common/printIcon.png" alt="Download Slip Permohonan">
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td style=" background-color:#FFE0F6; border-radius: 25px">
                                    <label for="file-upload-1" class="upload-label">
                                        <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                    </label>
                                </td>
                                <td style="width: 100px;">
                                    <input id="file-upload-1" type="file" style="display: none;">
                                    <span id="file-name-1"></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <p class=" doc">AKUAN PEMASTAUTINAN</p>
                                </td>
                                <td>

                                </td>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <a href="path/to/download/Akuan Permastautinan.pdf" download>
                                        <img class="icon2" src="../../Common/printIcon.png" alt="Download Slip Permohonan">
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td style=" background-color:#FFE0F6; border-radius: 25px">
                                    <label for="file-upload-2" class="upload-label">
                                        <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                    </label>
                                </td>
                                <td>
                                    <input id="file-upload-2" type="file" style="display: none;">
                                    <span id="file-name-2"></span>
                                </td>

                            </tr>
                            <tr>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <p class=" doc">PERSETUJUAN DAN WAKALHAH WALI</p>
                                </td>
                                <td>

                                </td>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <a href="path/to/download/Persetujuan dan Wakalah Wali.pdf" download>
                                        <img class="icon2" src="../../Common/printIcon.png" alt="Download Slip Permohonan">
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td style=" background-color:#FFE0F6; border-radius: 25px">
                                    <label for="file-upload-3" class="upload-label">
                                        <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                    </label>
                                </td>
                                <td>
                                    <input id="file-upload-3" type="file" style="display: none;">
                                    <span id="file-name-3"></span>
                                </td>

                            </tr>
                            <tr>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <p class=" doc">BORANG HIV</p>
                                </td>
                                <td>

                                </td>
                                <td style="background-color:#FFE0F6;  border-radius: 25px">
                                    <a href="path/to/download/Borang HIV.pdf" download>
                                        <img class="icon2" src="../../Common/printIcon.png" alt="Download Slip Permohonan">
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td style=" background-color:#FFE0F6; border-radius: 25px">
                                    <label for="file-upload-4" class="upload-label">
                                        <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                    </label>
                                </td>
                                <td>
                                    <input id="file-upload-4" type="file" style="display: none;">
                                    <span id="file-name-4"></span>
                                </td>

                            </tr>
                            <tr>
                                <td style="background-color:#FFE0F6; border-radius: 25px">
                                    <p class=" doc">DOKUMEN SOKONGAN</p>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                </td>
                                <td style=" background-color:#FFE0F6; border-radius: 25px">
                                    <label for="file-upload-5" class="upload-label">
                                        <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                    </label>
                                </td>
                                <td>
                                    <input id="file-upload-5" type="file" style="display: none;">
                                    <span id="file-name-5"></span>
                                </td>

                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById("file-upload-1").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-1").textContent = file.name;
        });
        document.getElementById("file-upload-2").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-2").textContent = file.name;
        });
        document.getElementById("file-upload-3").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-3").textContent = file.name;
        });
        document.getElementById("file-upload-4").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-4").textContent = file.name;
        });
        document.getElementById("file-upload-5").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-5").textContent = file.name;
        });
    </script>

</body>

</html>