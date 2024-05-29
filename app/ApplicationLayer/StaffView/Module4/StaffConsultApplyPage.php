<!-- staff_consult_details_view.php -->
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
            
        <header>
            <h2 class="title-box">Maklumat Aduan</h2>
        </header>

        <label>Keterangan Aduan</label>
        <p class="form-control"><?php echo $existingCAdetails; ?></p>
    </div>

    <!-- Buttons to reject and accept the consultation request -->
    <form method="POST" action="">
        <button type="submit" name="reject" class="btn btn-danger">Ditolak</button>
        <button type="submit" name="accept" class="btn btn-success">Diterima</button>
        <input type="hidden" name="requestId" value="<?php echo $requestId; ?>">
    </form>

    <button class="btn btn-primary">
        <a href="StaffConsultMainPage.php?requestId=<?php echo $requestId; ?>" class="text-light">Kembali</a>
    </button>
</div>
</body>
</html>
