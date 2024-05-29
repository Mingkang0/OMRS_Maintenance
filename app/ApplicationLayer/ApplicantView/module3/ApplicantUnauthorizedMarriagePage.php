<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nikah tanpa kebenaran.css">
    <title>Jenis Perkahwinan</title>
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
    <form action="../../../../public/Facade.php?action=voluntarymarriage" method="post" id="myForm"></form>
    <div class="box">
        <h1>~PERMOHONAN PERKAHWINAN~</h1>
        </div>
        <div class="smallbox">
            <h2>Perkahwinan Tanpa kebenaran</h2>
        </div>
        <table id="tanpakebenaran">
            <tr class="file-input-container">
                <td>Salinan Kad Pengenalan Pemohon Dan Pasangan:</td>
                <td><input type="file" id="ic"></td>
            </tr>
            <tr class="file-input-container">
                <td>Salinan Passport Pemohon Dan Pasangan:</td>
                <td><input type="file" id="passport"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Perakuan Nikah Tanpa Kebenaran (Asal Dan Salinan):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Akuan Pemastautinan (Sekiranya Alamat Kad Pengenalan Berbeza Dengan Alamat Semasa):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Akuan Sumpah Berkanun (Pesuruhjaya Sumpah Muslim Sahaja) (Bagi Pemohon Yang Tiada Pengesahan Perjalanan):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr >
                <td>Bukti Pembayaran(resit):</td>
                <td><input type="file" id="surat"></td>
            </tr>
        </table>
        <button type="submit" id="button1" onclick="submitForm(event, myForm)">Hantar</button>
            <button type="submit" id="button2" ><a href="../module3/ApplicantCheckStatusPage.php">Seterusnya</a></button>
</div>
    </div>
</section>
</div>
<script>
  function submitForm(event, myForm) {
    event.preventDefault(); // Prevent the default form submission

    // Get the form data
    var form = document.getElementById(myForm);
    var formData = new FormData(form);

    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open(form.method, form.action, true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        alert('Form Submitted');
        // You can perform any additional actions or show a success message here

        // Clear the form inputs if needed
        form.reset();
      }
    };

    // Send the form data
    xhr.send(formData);
  }
</script>
</body>
</html>