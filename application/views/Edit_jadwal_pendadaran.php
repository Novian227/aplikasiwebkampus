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
      
      <h2>Form Edit Pendadaran</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('jadwal_pendadaran/update') ?>

              <div class="form-group">
                <label for="text">No Pendadaran :</label>
                <input type="text" name="no_pendadaran" value="<?php echo $data_jadwal_pendadaran->no_pendadaran ?>" class="form-control" placeholder="Masukkan No. Pendadaran">
                <input type="hidden" value="<?php echo $data_jadwal_pendadaran->id_pendadaran ?>" name="id_pendadaran">
              </div>

              <div class="form-group">
                <label for="text">Hari / Tanggal :</label>
                <input type="date" name="hari_tanggal" value="<?php echo $data_jadwal_pendadaran->hari_tanggal ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="text">Ruang</label>
                 <select name="ruang" id="ruang" class="form-control" value="Stack">
                      <option value="Stack" <?= ($data_jadwal_pendadaran->ruang == 'Stack' ? 'selected' : '' ); ?>>Stack</option>
                      <option value="Folder" <?= ($data_jadwal_pendadaran->ruang == 'Folder' ? 'selected' : '' ); ?>>Folder</option>
                      <option value="Pointer" <?= ($data_jadwal_pendadaran->ruang == 'Pointer' ? 'selected' : '' ); ?>>Pointer</option>
                      <option value="Pixel" <?= ($data_jadwal_pendadaran->ruang == 'Pixel' ? 'selected' : '' ); ?>>Pixel</option>
                      <option value="Network" <?= ($data_jadwal_pendadaran->ruang == 'Network' ? 'selected' : '' ); ?>>Network</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Waktu :</label>
                <input type="time" name="waktu" value="<?php echo $data_jadwal_pendadaran->waktu ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">NPM :</label>
                <input type="text" name="npm" value="<?php echo $data_jadwal_pendadaran->npm ?>" class="form-control" placeholder="Masukkan NPM">
              </div>

              <div class="form-group">
                <label for="text">Nama :</label>
                <input type="text" name="nama" value="<?php echo $data_jadwal_pendadaran->nama ?>" class="form-control" placeholder="Masukkan Nama Lengkap">
              </div>

              <div class="form-group">
                <label for="text">Dosen Pembimbing :</label>
                <input type="text" name="dosen" value="<?php echo $data_jadwal_pendadaran->dosen ?>" class="form-control" placeholder="Masukkan Nama Dosen Pembimbing">
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