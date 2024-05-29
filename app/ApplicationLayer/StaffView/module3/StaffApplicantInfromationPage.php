<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ApplicantInformation.css">
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
           <h1>Maklumat Pemohon</h1>
           </div>
           <div>
               
                <label for="icNumber" class="">No K/P Pemohon:</label>
                <input type="text" id="icNumber" placeholder="xxxxxx-xx-xxxx" required>
                
                <button type="submit" id="submit"><a href="#">Semak</a></button>

            </div>
           <table id="resultsTable" border="1">
                <tr>
                    <th>No</th>
                    <th>No K/P </th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Senarai Semak</th>
                    <th>Operasi(masukkan sijil dah kad perkahwinan)</th>
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <select>
                    <option value="" disabled selected>Select Option</option>
                    <option value="approve">Approve</option>
                    <option value="reject">Reject</option>
                       </select>
                    </td>
                    <td></td>
                    <td>
                        <a href="StaffApplicantDocPage.php" class="print-link">KLIK DI SINI</a>
                      </td>
                      <td>
                        <input type="file" id="MarriageCert">
                     </td>
                </tr>
            </table>
            <div class="pagination">
            <button id="submit" type="submit"><a href="StaffApplicantViewListPage.php">KEMABALI</a></button>
            <button id="submit" type="submit">HANTAR</button>
            </div>
</div>
</div>
</section>
</div>
<script>
    // Function to handle file upload
    document.getElementById('MarriageCert').addEventListener('change', function(event) {
        var file = event.target.files[0]; // Get the uploaded file

        // Code to upload the file to the server (you can customize this based on your requirements)
        // For example, you can use AJAX to send the file to the server

        // Assuming the file is uploaded successfully, display the download link
        var downloadLink = document.querySelector('.print-link');
        downloadLink.style.display = 'inline-block';
        downloadLink.href = URL.createObjectURL(file);
        downloadLink.download = file.name;
    });
</script>
</body>
</html>