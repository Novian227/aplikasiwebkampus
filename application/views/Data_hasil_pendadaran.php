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
        <center><h1>Hasil Pendadaran AMIKOM</h1></center><br>

        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo site_url() ?>/hasil_pendadaran/tambah/" class="btn btn-md btn-info"> <i class="fas fa-plus"></i> Tambah</a>
        <a href="<?php echo site_url() ?>/Hasil_pendadaran_user" target="_blank" class="btn btn-md btn-info"> <i class="fas fa-eye"></i> View</a>
        <a href="<?php echo site_url() ?>/hasil_pendadaran/exportCSV/" class="btn btn-md btn-info"> <i class="fas fa-file-csv"></i> Export to CSV</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Hari / Tanggal</th>
                    <th>Jam</th>
                    <th>NPM</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Dosen Pembimbing</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_hasil_pendadaran as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->hari_tanggal ?></td>
                    <td><?php echo $hasil->jam ?></td>
                    <td><?php echo $hasil->npm ?></td>
                    <td><?php echo $hasil->nilai ?></td>
                    <td><?php echo $hasil->status ?></td>
                    <td><?php echo $hasil->dosen ?></td>
                    <td>
                        <a href="<?php echo site_url() ?>/hasil_pendadaran/edit/<?php echo $hasil->id_hasilpendadaran ?>" class="btn btn-sm btn-link"> <i class="fas fa-edit"></i></a>
                        <a onclick="deleteConfirm('<?php echo site_url('/hasil_pendadaran/hapus/'.$hasil->id_hasilpendadaran) ?>')"
                        href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>

<br>

    <ol>
        <li>Bagi peserta ujian yang belum LULUS, diharapkan konfirmasi ke DAAK gedung unit 4 lantai 1.</li>
        <li>Lihat pengumunan proses yudisium terbaru pada web dan papan informasi Prodi</li>
        <li>Bagi mahasiswa yang sudah dinyatakan lulus pendadaran harap segera melakukan revisi dan pengesahan naskah ke dekan fakultas diberi batas waktu
maksimal 1 minggu setelah pendadaran</li>
       
    </ol>
    <br>
        <p style="margin-left: 20px;">Yogyakarta, 11 Januari 2018
            <br>
Ketua Program Studi D3 Teknik Informatika
                <br>
                    <br>
                        <br>

Melwin Syafrizal, S.Kom
                        </p>
                    


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