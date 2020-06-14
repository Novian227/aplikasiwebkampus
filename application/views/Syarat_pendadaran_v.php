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
     
      <h2>Syarat Pendaftaran Pendadaran</h2>

      <br>
        <div class="col-md-12">
           <br>
           <h4>SYARAT PENDAFTARAN PENDADARAN</h4>
          <ul>
           <li>Pendaftaran di mulai tanggal 1 – 10 disetiap bulan</li>
           <li>S1 Minimal 138 SKS</li>
           <li>D3 Minimal 110 SKS</li>
           <li>Tidak boleh ada nilai E</li>
           <li>Nilai D tidak boleh lebih dari 25% dari total SKS</li>
         </ul>

         <h4>YANG DIKUMPULKAN SAAT PENDAFTARAN PENDADARAN</h4>
         <ol>
            <li>Formulir Pendaftaran Pendadaran Tugas Akhir/ Skripsi <b> ( melalui web: daak.amikom.ac.id, menu download)</b></li>
            <li>Bukti pembayaran pendadaran yang disahkan oleh bagian DPK (asli)</li>
            <li>Photocopy seluruh Kartu bimbingan (Termasuk yang kosong)</li>
            <li>Photocopy Kartu Tanda Mahasiswa (KTM)</li>
            <li>Print Out Transkip nilai</li>
            <li>Photocopy sertifikat seminar nasional / internasional berkaitan dengan Teknologi Informasi</li>
              <ul>
                <li>2 sertifikat bagi mahasiswa S1 Informatika</li>
                <li>1 sertifikat bagi mahasiswa S1 Sistem Informasi</li>
              </ul>
            <li>Bagi Mahasiswa Transfer wajib menyertakan photocopy Ijazah dan Transkip Nilai D3(KTM)</li>
            <li>Menginputkan pendaftaran pendadaran di <b> http://bit.ly/inputpendadaran</b></li>
            <li>Photocopy Kartu Tanda Mahasiswa (KTM)</li>
         </ol>
          <h6>INFO PENTING:</h6>
          <ol>
            <li>Jadwal Ujian bisa dilihat mulai tanggal 13 atau 15 di menu pendadaran pada dashboard mahasiswa atau di web amikom.ac.id</li>
            <li>Pengumpulan naskah 2 hari sebelum jadwal ujian dimulai</li>
          </ol>
          <h6>PENGUMUMAN BAGI YANG TELAH MELAKUKAN PENDADARAN</h6>
          <h6>Mulai bulan agustus 2018, setelah mahasiswa melakukan ujian pendadaran, bagi yang ingin meminta tanda tangan dari dosen penguji wajib menyerahkan lembar catatan revisi tugas akhir / skripsi ke dosen penguji.  <b>  lembar catatan revisi tugas akhir / skripsi diperoleh saat pelaksanaan ujian pendadaran</b></h6>
        </div>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>