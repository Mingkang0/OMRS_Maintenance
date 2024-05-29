<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MarriageCert.css">
    <title>Marriage Certificate and Card</title>
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
            <h1>~PENDAFTARAN PERKAHWINAN~</h1>
           </div>
           <div class="box">
           <h1>SIJIL PERKAHWINAN</h1>
           </div>
           <table id="resultsTable" border="1">
                <tr>
                    <th>No</th>
                    <th>No K/P </th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Operasi(Klik di sini untuk muat turun sijil perkahwinan)</th>
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                  
                      <td>
                      <a href="#" class="print-link">KLIK DI SINI</a>
                     </td>
                </tr>
            </table>
            <div class="pagination">
            <button id="submit" type="submit"><a href="ApplicantCheckStatusPage.php">KEMBALI</a></button>
            <button id="submit" type="submit">OKAY</button>
            </div>
</div>
</div>
</section>
</div>
<script>
  // Function to handle file download
  function downloadFile() {
    // Code to get the file URL or path
    var fileUrl = 'path/to/your/file.pdf'; // Replace with the actual file URL or path

    // Create a temporary anchor element
    var link = document.createElement('a');
    link.href = fileUrl;
    link.download = 'marriage_certificate.pdf'; // Specify the desired file name

    // Append the anchor element to the document body
    document.body.appendChild(link);

    // Trigger a click event on the anchor element
    link.click();

    // Remove the anchor element from the document body
    document.body.removeChild(link);
  }

  // Check if the file exists and show or hide the download link accordingly
  var fileExists = true; // Replace with the logic to determine if the file exists

  var downloadLink = document.querySelector('.print-link');
  if (fileExists) {
    downloadLink.style.display = 'block';
    downloadLink.addEventListener('click', downloadFile);
  } else {
    downloadLink.style.display = 'none';
  }
</script>
</body>
</html>
