  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(180deg,rgba(105, 9, 128, 0.9) 10%,#5b14b6 100%);">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/index.php/Frontpage')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="<?php echo base_url('assets/download/logo_amikom_full_color.png')?>">
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi D3</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/index.php/Frontpage')?>">
          <i class="fab fa-xbox"></i>
          <span>Introduction</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <br>

      <!-- Heading -->
      <div class="sidebar-heading">
        Our Works
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-pied-piper"></i>
          <span>Pendadaran</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('/index.php/Jadwal_pendadaran')?>">Jadwal Pendadaran</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Hasil_pendadaran')?>">Hasil Pendadaran</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Syarat_pendadaran')?>">Syarat Pendadaran</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-user-graduate"></i>
          <span>Wisuda</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('/index.php/Wisuda')?>">Info Wisuda</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/post_berita')?>">Posting Pengumuman <br>Wisuda</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/post_berita/lists')?>">Pengumuman Wisuda</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-gavel"></i>
          <span>Yudisium</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('/index.php/Pengumuman_yusidium')?>">Pengumuman Yudisium</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Syarat_pengumpulan')?>">Syarat Pengumpulan <br>Berkas Yudisium</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Hasil_yusidium')?>">Hasil Yudisium</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Surat_keterangan_lulus')?>">Surat Keterangan Lulus</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <i class="fas fa-sticky-note"></i>
          <span>KRS</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('/index.php/Jadwal_krs')?>">Jadwal KRS D3TI</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Prosedur_pembatalan_krs')?>">Prosedur Pembatalan<br>KRS / Skripsi</a>
            <a class="collapse-item" href="<?php echo base_url('/index.php/Syarat_cetak')?>">Prosedur dan Syarat <br> Cetak KRS Online</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>