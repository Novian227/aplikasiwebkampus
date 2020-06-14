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
      <div class="card-header">
          <a href="<?php echo site_url('Frontpage/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
      </div>

      <br>
     
      <h2>Surat Keterangan Lulus</h2>

      <br>
        <div class="col-md-12">
           <br>
           <h4>PERMOHONAN SKL</h4>
           <h6>SKL adalah surat keterangan lulus. mahasiswa bisa mendapatkan SKL jika sudah dinyatakan lulus yudisium. SKL bisa diambil selang satu hari setelah permohonan (1x24jam ). syarat pengambilan dengan menunjukkan KTM yang berlaku.
Form ini hanya bisa diisi menggunakan email student amikom. contoh: xxxx@students.amikom.ac.id</h6>
           <h6>jika ada hal yang belum jelas, bisa langsung menghubungi DAAK 0274-884201 ext 103 pada jam kerja</h6><br>


         <h4>CARA MENDAPATKAN SKL</h4>
         <ol>
            <li>Silahkan mengisi data di link : <a href="bit.ly/permohonanSKL">bit.ly/permohonanSKL</a></li>
            <li>Sebelum mengisi, pastikan anda menggunakan email students.amikom.ac.id</li>
            <li>Isi dengan lengkap seluruh data di form tersebut</li>
            <li>SKL bisa diambil di DAAK gedung 4 setelah 1 hari penginputan</li><br>
            <br>
            <br>
            <br>
            <h6>Yogyakarta, 06 Juli 2019<h6><br>
            <br>
            <h6>DAAK</h6>
         </ol>
        </div>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>