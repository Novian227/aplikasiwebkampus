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
        <center><h1>Jadwal Pendadaran AMIKOM</h1></center><br>

        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo site_url() ?>/jadwal_pendadaran/tambah/" class="btn btn-md btn-info"> <i class="fas fa-plus"></i> Tambah</a>
        <a href="<?php echo site_url() ?>/Jadwal_pendadaran_user" target="_blank" class="btn btn-md btn-info"> <i class="fas fa-eye"></i> View</a>
        <a href="<?php echo site_url() ?>/jadwal_pendadaran/exportCSV/" class="btn btn-md btn-info"> <i class="fas fa-file-csv"></i> Export to CSV</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>No Pendadaran</th>
                    <th style="width: 12%">Hari / Tanggal</th>
                    <th>Ruang</th>
                    <th>Waktu</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Dosen Pembimbing</th>
                    <th style="width: 10%">Options</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1; 
                foreach($data_jadwal_pendadaran as $hasil){ 
                    ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $hasil->no_pendadaran ?></td>
                        <td><?php echo $hasil->hari_tanggal ?></td>
                        <td><?php echo $hasil->ruang ?></td>
                        <td><?php echo $hasil->waktu ?></td>
                        <td><?php echo $hasil->npm ?></td>
                        <td><?php echo $hasil->nama ?></td>
                        <td><?php echo $hasil->dosen ?></td>
                        <td>
                            <a href="<?php echo site_url() ?>/jadwal_pendadaran/edit/<?php echo $hasil->id_pendadaran ?>" class="btn btn-sm btn-link"> <i class="fas fa-edit"></i></a>
                            <a onclick="deleteConfirm('<?php echo site_url('/jadwal_pendadaran/hapus/'.$hasil->id_pendadaran) ?>')"
                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>


            <b>
                <h5 style="margin-left: 20px;">Keterangan :</h5>
                <ol>
                    <li>Naskah Skripsi (Rangkap 3) dikumpulkan 2 hari sebelum jadwal Ujian Pendadaran, di Gedung Unit IV
                    bagian pelayanan DAAK</li>
                    <li>Peserta Ujian Diwajibkan memakai jas almamater, dasi, kemeja putih dan bawahan hitam</li>
                    <li>Membawa KRS yang mencantumkan Mata Kuliah Tugas Akhir,dan KTM yang berlaku.</li>
                    <li>Tempat Pelaksanaan Ujian Tugas Akhir di Kampus Universitas AMIKOM Yogyakarta Gedung Unit II, Lantai 2
                    Ruang Pixel, Network, Stack, Folder, dan Pointer,</li>
                    <li>Mahasiswa harus sudah mempersiapkan komputer sendiri sebelum ujian dimulai, termasuk hardware
                    dan software yang dipakai</li>
                    <li>Untuk kelancaran pelaksanaan Ujian Tugas Akhir. Mahasiswa diwajibkan untuk menyiapkan sendiri : CPU, Mouse,
                    Keyboard, Kabel Power, Kabel VGA dan segala Keperluan Pendukung Yang Berkaitan dengan Tugas Akhir.</li>
                    <li>Bagi mahasiswa yang berhalangan hadir pada waktu yang telah dijadwalkan dimohon untuk konfirmasi ke DAAK
                    maksimal sehari sebelum hari pelaksanaan ujian.</li>
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
    
    <script>
var oTable = $('#processing').DataTable({
    "columnDefs": [
        { "targets": [1,2,3], "searchable": false }
    ]
});
</script>
    <?php $this->load->view("layout/footer.php") ?>
</body>
</html>