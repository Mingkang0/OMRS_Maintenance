<?php
require_once '../../../OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../../../OMRS.dataaccess/Module5Repository.php';

// Create a new instance of Module5Repository
$db = (new Database())->connect();
$repository = new Module5Repository($db);

// Check if the applicantID parameter is provided in the URL
if (isset($_GET['applicantID'])) {
    $applicantID = $_GET['applicantID'];
    
    // Retrieve the applicant data from the database based on the applicantID
    $applicantData = $repository->getApplicantData($applicantID);

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urusan Insentif</title>
    <link rel="stylesheet" href="ApplicantRequirementPage.css">
    <style>
        .application-container {
            margin-top: 6%;
            margin-left: 4%;
        }
    </style>
</head>

<body>
    <div>
        <!-- Header -->
        <?php include_once('../../Common/header.html'); ?>

        <section>
            <div>
                <?php include_once('../../Common/staffsidebar.php'); ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <!-- Put Your Content Here  -->
                    <h3 style="text-align:center;">Application For Incentives</h3>
                    <?php
                    if ($applicantData) {
                        // Display the applicant data
                        echo '<h2>Applicant Information</h2>';
                        echo 'Applicant ID: ' . $applicantData['BF_ID'] . '<br>';
                        echo 'Job Type: ' . $applicantData['BF_JobType'] . '<br>';
                        echo 'Job Name: ' . $applicantData['BF_JobName'] . '<br>';
                        echo 'Job Address: ' . $applicantData['BF_JobAddress'] . '<br>';
                        echo 'Salary: ' . $applicantData['BF_Salary'] . '<br>';
                        echo 'Bank: ' . $applicantData['BF_Bank'] . '<br>';
                        echo 'Account Number: ' . $applicantData['BF_AccNumber'] . '<br>';
                
                        // Display the close relative data
                        echo '<h2>Close Relative Information</h2>';
                        echo 'Relative Name: ' . $applicantData['CRF_Name'] . '<br>';
                        echo 'Relative Relationship: ' . $applicantData['CRF_Relationship'] . '<br>';
                
                        // Display the groom form data
                        echo '<h2>Groom Form Information</h2>';
                        echo 'Groom Job Type: ' . $applicantData['GF_JobType'] . '<br>';
                        echo 'Groom Job Name: ' . $applicantData['GF_JobName'] . '<br>';
                
                        // Display the bride form data
                        echo '<h2>Bride Form Information</h2>';
                        echo 'Bride Job Type: ' . $applicantData['BF_JobType'] . '<br>';
                        echo 'Bride Job Name: ' . $applicantData['BF_JobName'] . '<br>';
                
                        // Display the supporting document files
                        echo '<h2>Supporting Documents</h2>';
                        echo 'Pay Slip 1: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip1']) . '" download>Download</a><br>';
                        echo 'Pay Slip 2: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip2']) . '" download>Download</a><br>';
                        echo 'Pay Slip 3: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip3']) . '" download>Download</a><br>';
                        echo 'Residency Letter: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_ResidencyLetter']) . '" download>Download</a><br>';
                    } else {
                        echo 'Applicant not found.';
                    }
                } else {
                    echo 'Invalid applicant ID.';
                }
                ?>
                    <div class="application-container">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function redirectToSubmittedFormPage(applicantID) {
            window.location.href = 'SubmittedFormPage.php?applicantID=' + applicantID;
        }
    </script>
</body>

</html>
