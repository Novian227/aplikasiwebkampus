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
        <center><h1>Jadwal KRS</h1></center><br>

        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo site_url() ?>/jadwal_krs/tambah/" class="btn btn-md btn-info"> <i class="fas fa-plus"></i> Tambah</a>
        <a href="<?php echo site_url() ?>/Jadwal_krs_user" target="_blank" class="btn btn-md btn-info"> <i class="fas fa-eye"></i> View</a>
        <br>
        <br>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1; 
                foreach($data_jadwal_krs as $hasil){ 
                    ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $hasil->judul ?></td>
                        <td><?php echo tgl_indo($hasil->hari) ?></td>
                        <td><?php echo tgl_indo($hasil->akhir) ?></td>
                        <td><?php echo $hasil->prodi ?></td>
                        <td>
                            <a href="<?php echo site_url() ?>/jadwal_krs/edit/<?php echo $hasil->id_krs ?>" class="btn btn-sm btn-link"> <i class="fas fa-edit"></i></a>
                            <a onclick="deleteConfirm('<?php echo site_url('/jadwal_krs/hapus/'.$hasil->id_krs) ?>')"
                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>                    
        </div>
    </div>


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