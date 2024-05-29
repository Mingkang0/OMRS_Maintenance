<?php
require_once '../../../OMRS.dataaccess/Db_Connection_Manager.php'; // Assuming you have a separate file for the database connection
require_once '../../../OMRS.dataaccess/Module5Repository.php';

// Create a new instance of Module5Repository
$db = (new Database())->connect();
$repository = new Module5Repository($db);

// Retrieve all rows for SI_ApplicantID
$applicantIDs = $repository->getAllApplicantIDs();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Form Page</title>
    <link rel="stylesheet" href="ApplicantRequirementPage.css">
    <style>
        .application-container{
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
                    <h3 style="text-align:center;">Application Detail</h3>

                    <div class="application-container">
                    <?php // Display the data
                    foreach ($applicantIDs as $applicantID) {
                        echo $applicantID . '<br>';
                        echo '<div style="margin-bottom: 20px;">';
                        echo '<a href="view.php?applicantID=' . $applicantID . '">View</a> ';
                        echo '<a href="reject.php?applicantID=' . $applicantID . '">Reject</a> ';
                        echo '<a href="accept.php?applicantID=' . $applicantID . '">Accept</a> ';
                        echo '<a href="delete.php?applicantID=' . $applicantID . '">Delete</a>';
                        echo '</div>';
                    }
                    ?>
                    </div>
                    

                </div>
            </div>
        </section>
    </div>
</body>

</html>
