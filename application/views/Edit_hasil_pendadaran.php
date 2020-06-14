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
      
      <h2>Form Edit Hasil Pendadaran</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('hasil_pendadaran/update') ?>

              <div class="form-group">
                <label for="text">Hari / Tanggal :</label>
                <input type="date" name="hari_tanggal" value="<?php echo $data_hasil_pendadaran->hari_tanggal ?>" class="form-control">
                <input type="hidden" value="<?php echo $data_hasil_pendadaran->id_hasilpendadaran ?>" name="id_hasilpendadaran">
              </div>

              <div class="form-group">
                <label for="time">Jam :</label>
                <input type="time" name="jam" value="<?php echo $data_hasil_pendadaran->jam ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="text">NPM :</label>
                <input type="text" name="npm" value="<?php echo $data_hasil_pendadaran->npm ?>" class="form-control" placeholder="Masukkan NIM">
              </div>

              <div class="form-group">
                <label for="text">Nilai :</label>
                <select name="nilai" id="nilai" class="form-control" value="A">
                      <option value="A" <?= ($data_hasil_pendadaran->nilai == 'A' ? 'selected' : '' ); ?>>A</option>
                      <option value="B" <?= ($data_hasil_pendadaran->nilai == 'B' ? 'selected' : '' ); ?>>B</option>
                      <option value="C" <?= ($data_hasil_pendadaran->nilai == 'C' ? 'selected' : '' ); ?>>C</option>
                      <option value="D" <?= ($data_hasil_pendadaran->nilai == 'D' ? 'selected' : '' ); ?>>D</option>
                      <option value="E" <?= ($data_hasil_pendadaran->nilai == 'E' ? 'selected' : '' ); ?>>E</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Status :</label>
                <select name="status" id="status" class="form-control" value="LULUS">
                      <option value="LULUS" <?= ($data_hasil_pendadaran->status == 'LULUS' ? 'selected' : '' ); ?>>LULUS</option>
                      <option value="TIDAK LULUS" <?= ($data_hasil_pendadaran->status == 'TIDAK LULUS' ? 'selected' : '' ); ?>>TIDAK LULUS</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Dosen Pembimbing :</label>
                <input type="text" name="dosen" value="<?php echo $data_hasil_pendadaran->dosen ?>" class="form-control" placeholder="Masukkan Nama Dosen Pembimbing">
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