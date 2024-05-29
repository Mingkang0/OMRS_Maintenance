<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZKahwin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
</head>

<body>
    <?php include "../app/view/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 50px;">
                            <div style="margin-top: 30px; margin-left: 10px;">
                                <form class="row g-3" action="../../../ezkahwin/index.php" method="POST">
                                    <div class="mb-3 row" style="margin-top: 10px;">
                                        
                                        <div class="col-sm-10">
                                            <select class="form-select" id="CSstatus" name="CSstatus" aria-label="Default select example">
                                                <option selected>Perlu sesi tambahan?</option>
                                                <option value="1">Ya</option>
                                                <option value="2">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="CSdate" class="col-sm-2 col-form-label">Tarikh Janji Temu</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="CSdate">
                                        </div>
                                        <label for="CStime" class="col-sm-2 col-form-label">Masa Janji Temu</label>
                                        <div class="col-sm-10">
                                            <input type="time" class="form-control" id="CStime" name="CStime">
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-danger" onclick="../a omrs project/app/ApplicationLayer/StaffView/Module4/StaffConsultMainPage.php">HANTAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>