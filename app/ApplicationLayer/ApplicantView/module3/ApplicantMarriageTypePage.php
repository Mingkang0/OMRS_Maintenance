<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="marriagetype.css">
    <title>Permohonan Perkahwinan</title>
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
    <div class="box">
    <h1>~PERMOHONAN PERKAHWINAN~</h1>
    </div>
    <div>
    <li class="smallbox"><a>JENIS PERKAHWINAN</a></li>
    <ol class="optionnikah">
    <li class="nikah"><a href="../module3/ApplicantUnauthorizedMarriagePage.php">Perkahwinan Tanpa Kebenaran</a></li>
    <li class="nikah"><a href="../module3/ApplicantVoluntaryMarriagePage.php">Perkahwinan Sukarela</a></li>
    </ol>
    <li class="smallbox"><a href="../module3/ApplicantCheckStatusPage.php">SIJIL DAN KAD NIKAH</a></li>
    </div>
    </div>

</div>
</section>
</div>
</body>
</html>