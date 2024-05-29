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
    <button class="btn btn-primary my-5"><a href="applyformpage.php?requestId=<?php echo $requestId; ?>" class="text-light">Baru</a></button>

    <!-- Sort Options -->
    <div class="mb-3">
        <label for="sortOptions" class="form-label">Sort by:</label>
        <select class="form-select form-select-sm custom-width" id="sortOptions" onchange="sortTable(this.value)">
            <option value="latest" <?php if ($sortOption == 'latest') echo 'selected'; ?>>Latest</option>
            <option value="earliest" <?php if ($sortOption == 'earliest') echo 'selected'; ?>>Earliest</option>
        </select>
    </div>


    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Bil.</th>
                <th scope="col">Tarikh Aduan</th>
                <th scope="col">Status</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Operasi</th>
                <th scope="col">Status</th>
                <th scope="col">Tarikh Sesi</th>
                <th scope="col">Operasi Sesi</th>
            </tr>
        </thead>

        <?php
            require 'ConsultationMainController.php';

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
                    $CAdetails = $row['CAdetails'];
                    $CS_Id = $row['CS_Id'];
                    $CSstatus = $row['CSstatus'];
                    $CScreated_date = $row['CScreated_date'];

                    echo '
                    <tr>
                        <th scope="row">' . $bil . '</th>
                        <td>' . $CAdate . '</td>
                        <td>' . $CAstatus . '</td>
                        <td>' . $CAdetails . '</td>
                        <td>';

                    if ($CAstatus == 'Belum Hantar') {
                        echo '
                            <button class="btn btn-primary" name="update">
                                <a href="ApplicantConsultUpdatePage.php?updateid=' . $CA_Id . '&requestId=' . $requestId . '" class="text-light">Update</a>
                            </button>';
                    } else {
                        echo '
                            <button class="btn btn-primary" name="details">
                                <a href="ApplicantConsultDetailsPage.php?detailsid=' . $CA_Id . '&requestId=' . $requestId . '" class="text-light">Detail</a>
                            </button>';
                    }

                    echo '
                            <button class="btn btn-danger" name="delete">
                                <a href="delete.php?deleteid=' . $CA_Id . '&requestId=' . $requestId . '" class="text-light">Padam</a>
                            </button>
                        </td>
                        <td>' . $CSstatus . '</td>
                        <td>' . $CScreated_date . '</td>
                        <td>';

                    if ($CSstatus == 'Diterima') {
                        echo '
                            <button class="btn btn-secondary" name="details_sesi">
                                <a href="ApplicantConsultSessionPage.php?csid=' . $CS_Id . '&requestId=' . $requestId . '" class="text-light">Detail Sesi</a>
                            </button>
                            
                            ';
                    } else {
                        echo 'N/A';
                    }

                    echo '</td></tr>';

                    $bil++;
                }
            } else {
                echo '<tr><td colspan="8">No data found.</td></tr>';
            }
        ?>


    </table>

</div>

<script>
    function sortTable(sortOption) {
        var requestId = "<?php echo $requestId; ?>";
        var url = "ApplicantConsultMainPage.php?requestId=" + requestId + "&sort=" + sortOption;
        location.href = url;
    }
</script>

</body>
</html>
