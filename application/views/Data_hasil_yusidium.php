<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
    <?php $this->load->view("layout/modal.php") ?>
    <?php $this->load->view("layout/scrolltop.php") ?>
</head>
<body>

    <div class="container-fluid" style="margin-top: 80px">
        <center><h1>Hasil Yudisium AMIKOM</h1></center><br>

        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo site_url() ?>/hasil_yusidium/tambah/" class="btn btn-md btn-info"> <i class="fas fa-plus"></i> Tambah</a>
        <a href="<?php echo site_url() ?>/Hasil_yusidium_user" target="_blank" class="btn btn-md btn-info"> <i class="fas fa-eye"></i> View</a>
        <a href="<?php echo site_url() ?>/hasil_yusidium/exportCSV/" class="btn btn-md btn-info"> <i class="fas fa-file-csv"></i> Export to CSV</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>IPK</th>
                    <th>Jml SKS</th>
                    <th>Jml Nilai D</th>
                    <th>Jml Nilai E</th>
                    <th>Status</th>
                    <th style="width: 20px">Keterangan</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_hasil_yusidium as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->nama ?></td>
                    <td><?php echo $hasil->nim ?></td>
                    <td><?php echo $hasil->ipk ?></td>
                    <td><?php echo $hasil->jml_sks ?></td>
                    <td><?php echo $hasil->jml_nilai_d ?></td>
                    <td><?php echo $hasil->jml_nilai_e ?></td>
                    <td><?php echo $hasil->status ?></td>
                    <td><?php echo $hasil->keterangan ?></td>
                    <td>
                        <a href="<?php echo site_url() ?>/hasil_yusidium/edit/<?php echo $hasil->id_yusidium ?>" class="btn btn-sm btn-link"> <i class="fas fa-edit"></i></a>
                        <a onclick="deleteConfirm('<?php echo site_url('/hasil_yusidium/hapus/'.$hasil->id_yusidium) ?>')"
                        href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>


<b>
    <h5 style="margin-left: 20px;">Keterangan :</h5>
    <ol>
        <li> Peserta Yudisium diwajibkan mengambil transkrip nilai di Pelayanan Direktorat Administrasi Akademik dan Kemahasiswaan Gedung Unit IV,
 mulai tanggal 15 November 2019 sampai dengan tanggal 18 November 2019</li>
        <li> Untuk cekkros nilai langsung kebagian Direktorat Administrasi Akademik dan Kemahasiswaan di Gedung Unit IV,
 mulai tanggal 15 November 2019 sampai dengan tanggal 18 November 2019.</li>
        <li>Peserta Yudisium yang sudah dinyatakan LULUS pada Pengumuman Hasil Yudisium Sementara (Tahap-1),
 Wajib menyerahkan Berita Acara Yudisium beserta lampiran syarat-syaratnya di Pelayanan Direktorat Administrasi Akademik dan Kemahasiswaan Gedung Unit IV,
 mulai tanggal 20 November 2019 sampai dengan 22 November 2019.</li>
        <li>TJika Peserta Yudisium tidak memenuhi point 3 diatas, maka pada Pengumuman Final Yudisium (Tahap-2) tanggal 25 November 2019 secara otomatis TIDAK LULUS.</li>
    </ol>
    <br>
        <p style="margin-left: 20px;">Yogyakarta, 11 Januari 2018
            <br>
Ketua Program Studi S1 Informatika
                <br>
                    <br>
                        <br>

Sudarmawan MT
                        </p>
                    </b>


        </div>

    </div>

<script type="text/javascript" src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>

<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
<?php $this->load->view("layout/footer.php") ?>
</body>
</html>