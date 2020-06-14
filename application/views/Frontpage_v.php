<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>

<div class="container">
                    <div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">Pengisian KRS Online Serentak dimulai Tanggal 32 Februari 2018  <i class="fas fa-forward"></i> Peserta Pendadaran Diharapkan Berpakaian Rapi Serta Memakai Almamater <i class="fas fa-forward"></i> Hasil Yudisium Sudah Bisa Dilihat Dari Tadi</marquee>
                <span class="onoffswitch3-switch">PENGUMUMAN <i class="fas fa-exclamation"></i></span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">TAMPIL</span> </span>
        </span>
    </label>
</div>
</div>
    <div class="container" style="margin-top: 20px; margin-left: 37%">



      <br>
     
      <h2>Kelompok PotM Bottom</h2>

      <img class="img-profile rounded-circle" src="<?php echo base_url('assets/download/Potmbottomlogo.png')?>">
      <br>
        <div class="col-md-12">
           <br>
           <h4>Anggota :</h4>
          <ul>
           <li>Muhammad Rezzha RA | 18.01.4105 | (Ketua)</li>
           <li>Novian Andika | 18.01.4133</li>
           <li>Yokanan Prasetya A | 18.01.4123</li>
           <li>Choirul R. Hidayat | 18.01.4136</li>
         </ul>

         <h4>Final Project :</h4>
         <ul>
            <li>KRS</li>
            <li>Wisuda</li>
            <li>Yudisium</li>
            <li>Pendadaran</li>
         </ul>
         
        <h4>Presentasi :</h4>
         <ul>
            <li><a href="https://docs.google.com/presentation/d/1FZBPeGCS8M0mD_loLM8f0wbP5lF7vShbRtUU-kGEgO8/edit?usp=sharing" target="_blank"><i class="fas fa-file-powerpoint"></i> FILE PRESENTASI</li></a>
            <li><a href="https://files.catbox.moe/amlwqk.zip" target="_blank"><i class="fas fa-code"></i> FILE CODINGAN</li></a>
         </ul>
    
        </div>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>