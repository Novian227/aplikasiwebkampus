<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>

    <div class="container" style="margin-top: 20px; margin-left: 10%">

      <br>
      <b>
      <h2>Proses Pembatalan KRS TA/ Skripsi</h2>

      <br>
        <div class="col-md-12">
           <br>
        
         <ol><h6>
            <li>Mahasiswa membawa Bukti Print out KHS / KRS</li><br/>
            <li>Print out KHS / KRS tersebut diserahkan ke bagian DAAK</li><br/>
            <li>Mahasiswa menerima bukti penerimaan berkas dari DAAK Sebagai bukti bahwa mahasiswa melakukan proses pembatalan TA / Skripsi</li><br/>
            <li>Hasil proses penghapusan bisa diambil di DAAK pada waktu yang telah ditentukan dengan membawa bukti penerimaan berkas point no 3. (waktu pengambilan disampaikan pada saat penyerahan berkas)</li><br/>
            <li>Proses penghapusan hanya bisa dilakukan jika memenuhi ketentuan akademik.</li><br/>
         </ol>
        </div>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>