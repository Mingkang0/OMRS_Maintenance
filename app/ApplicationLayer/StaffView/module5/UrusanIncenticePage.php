<?php
require_once '../../../OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../../../OMRS.dataaccess/Module5Repository.php';

// Create a new instance of Module5Repository
$db = (new Database())->connect();
$repository = new Module5Repository($db);

// Retrieve all rows for SI_ApplicantID
$applicantIDs = $repository->getAllApplicantIDs();

// Handle accept or reject actions
if (isset($_GET['action']) && isset($_GET['applicantID'])) {
    $action = $_GET['action'];
    $applicantID = $_GET['applicantID'];

    if ($action === 'accept') {
        $repository->updateStatus($applicantID, 'accepted');
    } elseif ($action === 'reject') {
        $repository->updateStatus($applicantID, 'rejected');
    }

    // Redirect back to the main page
    header('Location: UrusanIncenticePage.php');
    exit();
}
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

                    <div class="application-container">
                        <?php // Display the data
                        foreach ($applicantIDs as $applicantID) {
                            echo $applicantID . '<br>';
                            echo '<div style="margin-bottom: 20px;">';
                            echo '<a href="ViewApplicant.php?applicantID=' . $applicantID . '">View</a> ';
                            echo '<a href="UrusanIncenticePage.php?action=reject&applicantID=' . $applicantID . '">Reject</a> ';
                            echo '<a href="UrusanIncenticePage.php?action=accept&applicantID=' . $applicantID . '">Accept</a> ';
                            echo '<a href="delete.php?applicantID=' . $applicantID . '">Delete</a>';
                            echo '</div>';
                        }
                        ?>
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
