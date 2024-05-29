<?php
include 'DB_Connection_Manager.php';
include 'ConsultationMainController.php';

// Retrieve the Request_Id from the query parameter
$requestId = $_GET['requestId'];

// Sanitize the input or use prepared statements to prevent SQL injection
$requestId = mysqli_real_escape_string($con, $requestId);

// Fetch information from the database based on the Request_Id
$sql = "SELECT ApplicantInfo.appName, ApplicantInfo.appPhoneNo, ApplicantInfo.appEmail, ApplicantInfo.appEduLevel,
               PartnerInfo.PartnerIC, PartnerInfo.PartnerName
        FROM Marriage_Request_Info
        INNER JOIN ApplicantInfo ON Marriage_Request_Info.Applicant_IC = ApplicantInfo.Applicant_IC
        INNER JOIN PartnerInfo ON Marriage_Request_Info.Partner_Id = PartnerInfo.Partner_Id
        WHERE Marriage_Request_Info.Request_Id = '$requestId'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Extract the retrieved information
$existingAppName = $row['appName'];
$existingAppPhoneNo = $row['appPhoneNo'];
$existingAppEmail = $row['appEmail'];
$existingAppEduLevel = $row['appEduLevel'];
$existingPartnerIC = $row['PartnerIC'];
$existingPartnerName = $row['PartnerName'];

if (isset($_POST['submit'])) {
    // Handle form submission
} elseif (isset($_POST['save'])) {
    // Handle form submission
} elseif (isset($_POST['cancel'])) {
    // Handle form submission
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nasihat Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="mb-3">

            <!-- user details retrieve from database -->
            <header>
                <h2 class="title-box">Maklumat Pengadu</h2>
            </header>

            <div class="mb-3">
                <table>
                    <label>Nama Pengadu</label>
                    <p class="form-control">
                        <?php echo $existingAppName; ?>
                    </p>

                    <label>No. K/P / No. Passport</label>
                    <p class="form-control">
                        <?php echo $existingAppIC; ?>
                    </p>

                    <label>No. Telefon </label>
                    <p class="form-control">
                        <?php echo $existingAppPhoneNo; ?>
                    </p>

                    <label>Email</label>
                    <p class="form-control">
                        <?php echo $existingAppEmail; ?>
                    </p>

                    <!-- Tahap Pendidikan -->
                    <label>Tahap Pendidikan</label>
                    <p class="form-control">
                        <?php echo $existingAppEduLevel; ?>
                    </p>
                </table>
            </div>

            <header>
                <h2 class="title-box">Maklumat Pasangan</h2>
            </header>

            <table>
                <label>No. K/P / No. Passport</label>
                <p class="form-control">
                    <?php echo $existingPartnerIC; ?>
                </p>
                <label>Nama Pasangan</label>
                <p class="form-control">
                    <?php echo $existingPartnerName; ?>
                </p>
            </table>

            <header>
                <h2 class="title-box">Maklumat Aduan</h2>
            </header>

            <!-- ----------user fill consultation application details------------ -->

            <label>Keterangan Aduan</label>
            <textarea class="form-control" placeholder="Sila isi sini" name="CAdetails"></textarea>
        </div>

        <button type="submit" class="btn btn-danger" name="cancel">Batal</button>
        <button type="submit" class="btn btn-primary" name="save">Simpan</button>
        <button type="submit" class="btn btn-success" name="submit">Hantar</button>
    </form>
</div>
</body>
</html>
