<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>

    <div class="container" style="margin-top: 80px">
      <?php $this->load->view("layout/breadcrumb.php") ?>
      
      <h2>Form Edit Jadwal KRS</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('jadwal_krs/update') ?>

              <div class="form-group">
                <label for="text">Judul :</label>
                <input type="text" name="judul" value="<?php echo $data_jadwal_krs->judul ?>" class="form-control" placeholder="Masukkan Judul">
                <input type="hidden" value="<?php echo $data_jadwal_krs->id_krs ?>" name="id_krs">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Mulai :</label>
                <input type="date" name="hari" value="<?php echo $data_jadwal_krs->hari ?>" class="form-control">
              </div>
              
            <div class="form-group">
                <label for="text">Tanggal Berakhir :</label>
                <input type="date" name="akhir" value="<?php echo $data_jadwal_krs->akhir ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="text">Prodi</label>
                 <select name="prodi" id="prodi" class="form-control" value="D3 Teknik Informatika">
                      <option value="D3 Teknik Informatika" <?= ($data_jadwal_krs->prodi == 'D3 Teknik Informatika' ? 'selected' : '' ); ?>>D3 Teknik Informatika</option>
                </select>
              </div>

              <br>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>