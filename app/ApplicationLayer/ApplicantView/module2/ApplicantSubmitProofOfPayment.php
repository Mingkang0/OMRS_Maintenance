<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantReligiousOfficeOptions.css">
    <script>
        function showAlert() {
            alert("Payment sucessfull!");
        }
        
    </script>
    <style>
        table,
        th,
        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        .price {
            color: red;
            font-style: italic;
        }

        #proofPayment {
            float: right;
            text-align: center;
            margin-right: 120px;
        }

        #payment-title {
            float: left;
        }

        .icon {
            width: 70px;
        }

        #button1 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            width: 70px;
            float: right;
            margin-top: 20px;

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
                <?php include_once('../../Common/sidebar.php'); ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="inner-content">
                        <h3>MAKLUMAT PEMOHON</h3>
                        <table>
                            <tr>
                                <td>
                                    <p>NAME</p>
                                </td>
                                <td class="data-user">
                                    <p id="user-name">&nbsp;&nbsp;&nbsp;&nbsp;: </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>IC NUMBER</p>
                                </td>
                                <td class="data-user">
                                    <p id="user-ic">&nbsp;&nbsp;&nbsp;&nbsp;: </p>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h5><b>Terma dan Peraturan:-</b></h5>
                        <p>1. Yuran yang dikenakan ke atas pemohon adalah sebanyak <span class="price">RM 120.00</span></p>
                        <p>2. Jika pemohon didapati lewat menjelaskan yuran,pemohon akan dikenakan denda sebanyak <span class="price">RM 60.00</span></p>
                        <p>3. Yuran tidak akan dikembalikan kepada pemohon jika pemohon tidak hadir ke kursus tanpa maklum</p>
                        <h3>ANJURAN :</h3>
                        <p id="office"></p>
                        <h3>TEMPAT DAN TARIKH :</h3>
                        <p id="venue"></p>
                        <p id="date"></p>
                        <div id="proofPayment">
                            <form action="">
                                <label for="file-upload-3" class="upload-label">
                                    <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                                </label>
                                <div>
                                    <input id="file-upload-3" type="file" style="display: none;">
                                    <span id="file-name-3"></span>
                                </div>
                                <button type="submit" id="button1" onclick="showAlert()"><b>Simpan</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById("file-upload-3").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-3").textContent = file.name;
        });
        // Assign the values to the corresponding HTML elements using PHP variables
        document.getElementById("office").textContent = '<?php echo $_GET["office"]; ?>';
        document.getElementById("venue").textContent = '<?php echo $_GET["venue"]; ?>';
        document.getElementById("date").textContent = '<?php echo $_GET["date"]; ?>';
    </script>
</body>

</html>