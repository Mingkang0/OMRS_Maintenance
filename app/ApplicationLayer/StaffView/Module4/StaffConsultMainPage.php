<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasihat Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
    .custom-width {
        width: 150px; /* Adjust the width as needed */
    }
    </style>
</head>
<body>

<div class="container">

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Bil.</th>
                <th scope="col">Tarikh Aduan</th>
                <th scope="col">Status</th>
                <th scope="col">Operasi</th>
            </tr>
        </thead>

        <?php
            require_once 'ConsultationMainController.php';

            // Create an instance of the controller
            $controller = new ConsultationMainController();

            // Call the method to get the data
            $result = $controller->getConsultationData($requestId, $sortOption);

            if ($result) {
                $bil = 1;
                foreach ($result as $row) {
                    $CA_Id = $row['CA_Id'];
                    $CAdate = $row['CAdate'];
                    $CAstatus = $row['CAstatus'];

                    echo '
                    <tr>
                        <th scope="row">' . $bil . '</th>
                        <td>' . $CAdate . '</td>
                        <td>' . $CAstatus . '</td>
                        <td>';

                    echo '
                            <button class="btn btn-primary" name="details">
                                <a href="StaffConsultApplyPage.php?CA_Id=' . $CA_Id . '&Staff_Id=' . $Staff_Id . '" class="text-light">Details</a>
                            </button>';

                    $CS_Id = $row['CS_Id'];
                    $CSstatus = $row['CSstatus'];
                    $CScreated_date = $row['CScreated_date'];

                    if ($CS_Id) {
                        echo '
                            <button class="btn btn-secondary" name="details_sesi">
                                <a href="StaffConsultSessionPage.php?CS_Id=' . $CS_Id . '&Staff_Id=' . $Staff_Id . '" class="text-light">Sesi</a>
                            </button>';
                    }

                    echo '</td></tr>';

                    $bil++;
                }
            } else {
                echo '<tr><td colspan="4">No data found.</td></tr>';
            }
        ?>

    </table>

</div>

</body>
</html>
