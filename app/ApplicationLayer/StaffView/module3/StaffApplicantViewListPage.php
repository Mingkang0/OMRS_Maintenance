<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ApplicantViewList.css">
    <title>Applicant List</title>
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
            <form action="../../../../public/index.php?action=applystatus" method="post" id="myForm"></form>
            <div class="box">
            <h1>~URUSAN NIKAH~</h1>
           </div>
           <div class="box">
           <h1>Senarai Pemohon</h1>
           </div>
           <table id="resultsTable" border="1">
                <tr>
                    <th>No</th>
                    <th>No K/P </th>
                    <th>Nama Pemohon</th>
                    <th>Nama Pasangan</th>
                    <th>Status</th>
                    
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                    <td> </td>
                      
                </tr>
            </table>
            <div class="pagination">
            <button id="submit" type="submit">OKAY</button>
            <button id="submit" type="submit"><a href="StaffApplicantInformationPage.php">SETERUSNYA</a></button>
            </div>
</div>
</div>
</section>
</div>
</body>
</html>