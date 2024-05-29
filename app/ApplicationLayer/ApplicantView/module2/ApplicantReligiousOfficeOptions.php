<?php

require_once '../../../OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../../../Controller/StaffManageMarriageCourseRequestController.php';
require_once '../../../OMRS.dataaccess/Module2Repository.php';

$db = (new Database())->connect();

$module2Repository = new Module2Repository($db);
$StaffManageMarriageCourseRequestController = new StaffManageMarriageCourseRequestController($module2Repository);

// Check if the form is submitted
if (isset($_POST['office'])) {
    $selectedOffice = $_POST['office'];
    $marriageCourseData = $StaffManageMarriageCourseRequestController->getMarriageCourseDataByOffice($selectedOffice);
} else {
    // Retrieve all marriage course data
    $marriageCourseData = $StaffManageMarriageCourseRequestController->getMarriageCourseData();
}
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
        .table-data-title {
            border: 2px solid black;
            text-align: center;
        }

        .header-title {
            background-color: aqua;
        }

        #button1 {
            border-radius: 9px;
            height: 28px;
            background-color: blue;
            color: aliceblue;
            border: none;
            width: 50px;
            margin-left: 20px;
        }

        #office {
            width: 200px;
        }
    </style>
</head>

<body>
    <div>
        <?php
        include_once('../../Common/header.html');
        ?>

        <section>
            <div>
                <?php include_once('../../Common/sidebar.php');  ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div id="search-box">
                        <form action="" method="post">
                            <label for="office">Pilih tempat:</label><br>
                            <select id="office" name="office" required>
                                <option value="">Select an office</option>
                                <option value="JAIPTermerloh">JAIP Termerloh</option>
                                <option value="JAIPPekan">JAIP Pekan</option>
                                <option value="JAIPKuantan">JAIP Kuantan</option>
                                <!-- Add more options as needed -->
                            </select>
                            <button type="submit" id="button1">Cari</button>
                        </form>
                    </div>
                    <br>
                    <br>
                    <div>
                        <table class="table-info">
                            <tr class="header-title">
                                <td class="table-data-title">Bil</td>
                                <td class="table-data-title">Anjuran</td>
                                <td class="table-data-title">Tempat</td>
                                <td class="table-data-title">Tarikh</td>
                                <td class="table-data-title">Kapasiti Peserta</td>
                                <td class="table-data-title">Kekosongan</td>
                                <td class="table-data-title">Daftar Penyertaan</td>
                            </tr>
                            <?php
                            $rowNumber = 1;
                            foreach ($marriageCourseData as $course) : ?>
                                <tr>
                                    <td class="table-data"><?php echo $rowNumber ?></td>
                                    <td class="table-data"><?php echo $course['office']; ?></td>
                                    <td class="table-data"><?php echo $course['Venue']; ?></td>
                                    <td class="table-data"><?php echo $course['Date']; ?></td>
                                    <td class="table-data"><?php echo $course['Capacity']; ?></td>
                                    <td class="table-data"><?php echo $course['Vacancy']; ?></td>
                                    <td class="table-data">
                                        <p><a href="../module2/ApplicantSubmitProofOfPayment.php?office=<?php echo urlencode($course['office']); ?>&venue=<?php echo urlencode($course['Venue']); ?>&date=<?php echo urlencode($course['Date']); ?>">Daftar Sekarang</a></p>
                                    </td>

                                </tr>
                                <?php
                                $rowNumber++; // Increment the row number
                                ?>
                            <?php endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>