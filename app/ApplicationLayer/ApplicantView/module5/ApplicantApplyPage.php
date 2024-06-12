<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Form Page</title>
    <link rel="stylesheet" href="ApplicantApplyPage.css">

    <style>
        th,
        td {
            padding: 5px;
            vertical-align: top;
            display: flex;
            margin-left: 15px;
        }

        .form-section {
            margin-bottom: 100px;
        }

        .title {
            margin-left: 200px;
            margin-bottom: 15px;
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <div>
        <!-- Header -->
        <?php include_once('../../Common/header.html'); ?>

        <section>
            <div>
                <?php include_once('../../Common/sidebar.php'); ?>
            </div>

            <div class="content-container">
                <div class="content">

                    <form action="../../../../public/Facade.php?action=apply-incentive" method="POST" enctype="multipart/form-data">

                        <table class="incentive-form">
                            <tbody>
                                <tr>
                                    <th class="title" colspan="3">BORANG PEKERJAAN SUAMI</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Jenis Pekerjaan : </th>
                                    <td>
                                        <select name="suami-jobtype" id="suami-jobtype" required>
                                            <option value="kerajaan">Kerajaan</option>
                                            <option value="swasta">Swasta</option>
                                            <option value="sendiri">Sendiri</option>
                                        </select>
                                    </td>
                                    <th>Nama Pekerjaan : </th>
                                    <td><input type="text" name="suami-jobname" id="suami-jobname" required></td>
                                    <th>Alamat Tempat Bekerja : </th>
                                    <td><textarea name="suami-jobaddress" id="suami-jobaddress" required></textarea></td>
                                    <th>Pendapatan : </th>
                                    <td><input type="number" name="suami-salary" id="suami-salary" required></td>
                                    <th>Jenis Bank : </th>
                                    <td>
                                        <select name="suami-bank" id="suami-bank" required>
                                            <option value="maybank">Maybank</option>
                                            <option value="cimb">CIMB</option>
                                            <option value="publicbank">Public Bank</option>
                                            <option value="rhb">RHB</option>
                                        </select>
                                    </td>
                                    <th>Nombor Akaun Bank : </th>
                                    <td><input type="number" name="suami-noacc" id="suami-noacc" required></td>
                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">BORANG PEKERJAAN ISTERI</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Jenis Pekerjaan : </th>
                                    <td>
                                        <select name="isteri-jobtype" id="isteri-jobtype" required>
                                            <option value="kerajaan">Kerajaan</option>
                                            <option value="swasta">Swasta</option>
                                            <option value="sendiri">Sendiri</option>
                                        </select>
                                    </td>
                                    <th>Nama Pekerjaan : </th>
                                    <td><input type="text" name="isteri-jobname" id="isteri-jobname" required></td>
                                    <th>Alamat Tempat Bekerja : </th>
                                    <td><textarea name="isteri-jobaddress" id="isteri-jobaddress" required></textarea></td>
                                    <th>Pendapatan : </th>
                                    <td><input type="number" name="isteri-salary" id="isteri-salary" required></td>
                                    <th>Jenis Bank : </th>
                                    <td>
                                        <select name="isteri-bank" id="isteri-bank" required>
                                            <option value="maybank">Maybank</option>
                                            <option value="cimb">CIMB</option>
                                            <option value="publicbank">Public Bank</option>
                                            <option value="rhb">RHB</option>
                                        </select>
                                    </td>
                                    <th>Nombor Akaun Bank : </th>
                                    <td><input type="number" name="isteri-noacc" id="isteri-noacc" required></td>
                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">BORANG MAKLUMAT SAUDARA TERDEKAT</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Nama : </th>
                                    <td><input type="text" name="cr-name" id="cr-name" required></td>
                                    <th>Nombor IC : </th>
                                    <td><input type="text" name="cr-icnum" id="cr-icnum" required maxlength="12"></td>
                                    <th>Alamat Rumah : </th>
                                    <td><textarea name="cr-address" id="cr-address" required></textarea></td>
                                    <th>Hubungan dengan Pemohon : </th>
                                    <td><input type="text" name="cr-relation" id="cr-relation" required></td>
                                    <th>Nombor Telefon : </th>
                                    <td><input type="number" name="cr-phone" id="cr-phone" required></td>

                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">DOKUMEN SOKONGAN</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Slip Gaji 1: </th>
                                    <td><input type="file" name="file1" required></td>
                                    <th>Slip Gaji 2: </th>
                                    <td><input type="file" name="file2" required></td>
                                    <th>Slip Gaji 3: </th>
                                    <td><input type="file" name="file3" required></td>
                                    <th>Surat Pengesahan Bermastautin(Jika Berkaitan) : </th>
                                    <td><input type="file" name="file4"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="button">
                            <button type="submit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById("cr-icnum").addEventListener("input", function(event) {
            // Retrieve the input value
            var inputValue = this.value;

            // Remove any non-numeric characters
            var numericInput = inputValue.replace(/\D/g, '');

            // Truncate the input to 12 characters
            var truncatedInput = numericInput.slice(0, 12);

            // Update the input field value
            this.value = truncatedInput;
        });
    </script>

</body>

</html>
