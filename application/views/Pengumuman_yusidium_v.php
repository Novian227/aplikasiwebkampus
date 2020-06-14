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
      <b>
      <h2>Pengumuman Yudisium</h2>

      <br>
        <div class="col-md-12">
          
           
           <h6>Diumumkan kepada Mahasiswa Universitas AMIKOM Yogyakarta, mulai bulan Mei 2017 proses pendaftaran Yudisium dilakukan secara online dengan alur sebagai berikut:</h6><br/>
           <h6>Pendaftaran Yudisium dilayani setiap bulan tanggal 1 sampai 5 (Jika ada perubahan akan diinformasikan diinfo kampus).</h6>
         <ol><h6>
            <li>Login di <a href="amikom.ac.id">amikom.ac.id</a> ( masuk Dashboard Mahasiswa masing-masing)</a></li>
            <li>Pilih menu Yudisium</li>
            <li>Cek data TA/Skripsi. Jika judul TA/Skripsi ada revisi maka lakukan perubahan dalam Bahasa Infonesia dan Bahasa Inggris.<br/> (Judul TA/Skripsi dicetak ditranskrip nilai akhir jadi mohon ditulis dengan benar)</li>
            <li>Pilih Simpan</li>
            <li>Pilih Menu Cetak Berita Acara Yudisium.</li>
            <li>Pengumuman Yudisium sementara (Hasil Transkrip Nilai) akan diumumkan oleh Jurusan/ Prodi di Papan informasi Jurusan Unit 2 lantai 1 setiap tanggal 15.</li>
            <li>Mahasiswa mengambil transkrip nilai di DAAK.m</li>
            <li>Mahasiswa melakukan kroscek nilai berdasarkan pengumuman yudisium sementara di DAAK Unit 4 Lantai 1 setiap tanggal 15 sampai<br/> tanggal 17.
              <ul>
                <li>Nilai tidak sesuai yang tertera antara KHS atau transkrip nilai dengan hasil transkrip saat yudisium</li>
                <li>Nilai matakuliah yang telah ditempuh belum keluar/ kosong</li>
                <li>Penghapusan matakuliah hanya diperbolehkan untuk:</li>
                  <ul>
                    <li>Matakuliah bukan wajib</li>
                    <li>Matakuliah yang tercantum double dengan kode yang berbeda</li>
                    <li>Matakuliah yang setara tetapi beda kode dan nama matakuliah</li>
                    <li>Formulir penghapusan matakuliah dapat didownload dari <a href="amikom.ac.id">amikom.ac.id</a> menu Download</li>
                    <li>Formulir penghapusan matakuliah diserahkan ke DAAK setelah di ACC oleh KaProdi.</li>
                  </li>
              </ul>
            </li><br>
            <li>Mahasiswa yang telah dinyatakan lulus pada pengumuman yudisium sementara atau yang sudah melakukan kroscek nilai wajib menyerahkan berita Acara Yudisium beserta syarat dan lampirannya ke DAAK, Unit 4 lantai 1 setiap tanggal 20 sampai tanggal 22.</li>
            <li>Pengumuman Yudisium final akan diumumkan oleh DAAK di <a href="amikom.ac.id">amikom.ac.id</a> setiap tanggal 25 (diinfo kampus dan menu Akademik).</li>
            <li>Mahasiswa yang sudah dinyatakan lulus Yudisium final, dapat mengajukan surat keterangan lulus sementara di DAAK.</li>
            <li>Mahasiswa yang dinyatakan lulus pada yudisium final yang berhak mengikuti wisuda</li><br>
            <br>
            <br>
            <br>
         </ol></h6>
         <h6>Yogyakarta, 06 Juli 2019<h6><br>
            <br>
            <h6>DAAK</h6>
        </div>
        
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>