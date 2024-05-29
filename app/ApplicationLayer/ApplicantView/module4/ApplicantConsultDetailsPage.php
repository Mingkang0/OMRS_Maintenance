<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nasihat Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="mb-3">
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

                <label>No. Telefon</label>
                <p class="form-control">
                    <?php echo $existingAppPhoneNo; ?> 
                </p>

                <label>Email</label>
                <p class="form-control">
                    <?php echo $existingAppEmail; ?>
                </p>

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

        <label>Keterangan Aduan</label>
        <p class="form-control"><?php echo $existingCAdetails; ?></p>
    </div>
    <button class="btn btn-primary">
        <a href="ApplicantCosultMainPage.php?requestId=<?php echo $requestId; ?>" class="text-light">Kembali</a>
    </button>
</div>
</body>
</html>
