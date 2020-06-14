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
     
      <h2>WISUDA UNIVERSITAS AMIKOM YOGYAKARTA</h2>

      <img src="<?php echo base_url('assets/download/wisuda.jpg')?>">
      <br>
        <div class="col-md-12">
           <br>
           <h4>SELAMAT DATANG WEB WISUDA UNIVERSITAS AMIKOM</h4>
         <h4>----------------------------------</h4>
         <legend>Pengumuman Wisuda</legend>
         <ul>
          <li><a href="http://wisuda.amikom.ac.id/files/Daftar_Profesi_dan_Keahlian-1ok.pdf">Daftar Profesi dan Keahlian</a></li>
          <li><a href="http://wisuda.amikom.ac.id/files/001-Pendaftaran_Wisuda_Periode_Ke_72_Universitas_AMIKOM_Yogyakarta.pdf">Pendaftaran Wisuda Universitas AMIKOM Yogyakarta</a></li>
          <li><a href="http://wisuda.amikom.ac.id/files/Buku_Sumbangan_Wisuda_Periode_72.xlsx">Update Buku Sumbangan Wisuda</a></li>
        </ul>



        </div>
        <br>
        <br>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>