<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slip pendaftaran online.css">
    <title>Document</title>
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
            <article class="myForm">
            <div class="box">
                <h1>Slip Pendaftaran Perkahwinan</h1>
            </div>
            <div class="smallbox">
                <h2>Maklumat Pemohon</h2>
            </div>
            <article>
                <table id="sliponline" >
                    <tr>
                        <td class="required">Nama:</td>
                        <td><input type="text" id="nama" required></td>
                    </tr>
                    <tr>
                        <td class="required">No.K/P / No.Passport:</td>
                        <td><input type="text" id="ic" required></td>
                    </tr>
                    <tr>
                        <td class="required">Warganegara:</td>
                        <td><input type="text" id="nationality" required></td>
                    </tr>
                    <tr>
                        <td class="required">Jantina:</td>
                        <td>
                            <select id="jantina" required>
                        <option value="choose">-Pilih-</option>
                        <option value="male">Lelaki</option>
                        <option value="male">Perempuan</option>
                        </select>
                     </td>
                    </tr>
                    <tr>
                        <td class="required">Tarikh Lahir:</td>
                        <td><input type="text" id="dof"></td>
                    </tr>
                    <tr>
                        <td class="required">Anak yang ke:</td>
                        <td><input type="text" id="siblings" required></td>
                    </tr>
                        <td class="required">Alamat:</td>
                        <td><input type="text" id="address" required></td>
                    </tr>
                    <tr>
                        <td class="required">Poskod:</td>
                        <td><input
                            type="text" id="poskod" required></td>
                        </tr>
                        <tr>
                            <td class="required">Bandar:</td>
                            <td><input type="text" id="city" required></td>
                        </tr>
                        <tr>
                            <td class="required">Negeri:</td>
                            <td>
                                <select id="negeri" required>
                                    <option value="" disabled selected>-Pilih Negeri-</option>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="required">Negeri  Pemastautinan :</td>
                            <td>
                                <select id="negeri" required>
                                    <option value="" disabled selected>-Pilih Negeri-</option>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pulau Pinang">Pulau Pinang</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                    <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                    <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                                </select>
                            </td>
                        </tr>
                     <tr>
                        <td class="required">Kelulusan Akademik:</td>
                        <td>
                            <select id="academic" onchange="handleSelectChange()" required>
                                <option value="tiada">Tiada</option>
                                <option value="sekolah rendah">Sekolah Rendah</option>
                                <option value="sekolah menengah">Sekolah Menengah</option>
                                <option value="diploma">Diploma</option>
                                <option value="ijazah sarjana muda">Ijazah Sarjana Muda</option>
                                <option value="ijazah sarjana">Ijazah Sarjana</option>
                                <option value="ijazah sarjana kedoktoran">Ijazah Sarjana Kedoktoran (PhD)</option>
                                <option value="other">Other</option>
                            </select>
                            <input type="text" id="otherInput" style="display: none;" placeholder="Enter your option">
                        </td>
                     </tr> 
                     <tr>
                        <td class="required">Pekerjaan:</td>
                        <td><input type="text" id="occupation" required></td>
                    </tr>
                    <tr>
                        <td class="required">Pendapatan:</td>
                        <td><input type="number" id="salary" step="0.01" required></td>
                    </tr>
                    <tr>
                        <td class="required">No. Telefon (HP):</td>
                        <td><input type="text" id="PhoneNum" required></td>
                    </tr>
                    <tr>
                        <td class="required">Tarikh Permohonan:</td>
                        <td><input type="date" id="date1" required></td>
                    </tr>
                    <tr>
                        <td class="required">Tarikh Pendaftaran:</td>
                        <td><input type="date" id="date2" required></td>
                    </tr>
                    <tr>
                        <td class="required" class="form-row">Tandatangan:</td>
                    </tr>
                    <table>
                        <tr >
                            <canvas id="signatureCanvas" class="form-row" width="200" height="50"></canvas>
                            <button type="button" class="form-row" onclick="clearSignature()">Clear Signature</button>
                              
                        </tr>
                    </table>
                   
                </table>
            </article>
            <article>
                <div class="smallbox">
                    <h3>Maklumat Pasangan</h3>
                </div>
                <table id="sliponline">
                    <tr>
                        <td class="required">Nama:</td>
                        <td><input type="text" id="nama" required></td>
                    </tr>
                    <tr>
                        <td class="required">No.K/P / No.Passport:</td>
                        <td><input type="text" id="ic" required></td>
                    </tr>
                    <tr>
                        <td class="required">Warganegara:</td>
                        <td><input type="text" id="nationality" required></td>
                    </tr>
                    <tr>
                        <td class="required">Jantina:</td>
                        <td>
                        <select id="jantina" required>
                        <option value="choose">-Pilih-</option>
                        <option value="male">Lelaki</option>
                        <option value="male">Perempuan</option>
                        </select>
                     </td>
                    </tr>
                    <tr>
                        <td class="required">Tarikh Lahir:</td>
                        <td><input type="text" id="dof" required></td>
                    </tr>
                    <tr>
                        <td class="required">Anak yang ke:</td>
                        <td><input type="text" id="siblings" required></td>
                    </tr>
                    <tr>
                        <td class="required">Negeri  Pemastautinan :</td>
                        <td>
                            <select id="negeri" required>
                                <option value="" disabled selected>-Pilih Negeri-</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Pulau Pinang">Pulau Pinang</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                                <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                                <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                            </select>
                        </td>
                    </tr>
                    <tr >
                       
                        <td class="required" class="form-row">Tandatangan:</td>
                          
                    </tr>
                </table>
                <table>
                    <tr>
                        <canvas id="signatureCanvas" class="form-row" width="200" height="50"></canvas>
                        <button type="button" class="form-row" onclick="clearSignature()">Clear Signature</button>
                    </tr>
                </table>
            </article>
            <article>
                <div class="smallbox">
                    <h3>Maklumat Wali</h3>
                </div>
                <table id="sliponline">
                    <tr>
                        <td class="required">Nama:</td>
                        <td><input type="text" id="nama" required></td>
                    </tr>
                    <tr>
                        <td class="required">No.K/P / No.Passport:</td>
                        <td><input type="text" id="ic" required></td>
                    </tr>

                </table>
                <table>
                    <tr>
                       
                        <td class="required" class="form-row">Tandatangan:</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <canvas id="signatureCanvas" class="form-row" width="200" height="50"></canvas>
                        <button type="button" class="form-row" onclick="clearSignature()">Clear Signature</button>
                    </tr>
                </table>
            </article>
            <button  id="submit" ><a href="../module3/ApplicantVoluntaryMarriagePage.php">Back</a></button>
                <button  id="print" onclick="downloadForm(event)">Cetak</button>
        </article>
       </div>
</div>
</section>
</div>
<script>
    function handleSelectChange() {
    var selectOption = document.getElementById("academic");
    var otherInput = document.getElementById("otherInput");
    
    if (selectOption.value === "other") {
      otherInput.style.display = "block";
    } else {
      otherInput.style.display = "none";
    }
  }
  var canvas = document.getElementById("signatureCanvas");
  var ctx = canvas.getContext("2d");
  var isDrawing = false;

  canvas.addEventListener("mousedown", startDrawing);
  canvas.addEventListener("mousemove", draw);
  canvas.addEventListener("mouseup", stopDrawing);

  function startDrawing(e) {
    isDrawing = true;
    draw(e);
  }

  function draw(e) {
    if (!isDrawing) return;
    
    var rect = canvas.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;

    ctx.lineTo(x, y);
    ctx.stroke();
  }

  function stopDrawing() {
    isDrawing = false;
  }

  function clearSignature() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
  function downloadForm(event) {
    event.preventDefault();

    var form = document.getElementById('myForm');
    var formData = new FormData(form);
    
    var fileContent = '';

    for (var pair of formData.entries()) {
      fileContent += pair[0] + ': ' + pair[1] + '\n';
    }

    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(fileContent));
    element.setAttribute('download', 'form.txt');

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
  }
    </script>
</body>
</html>