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
      <br>
      <h2>Form Tambah Hasil Pendadaran</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('hasil_pendadaran/simpan') ?>

              <div class="form-group">
                <label for="text">Hari / Tanggal :</label>
                <input type="date" name="hari_tanggal" class="form-control" required oninvalid="this.setCustomValidity('Masukkan Data yang Benar euy!!')">
              </div>

              <div class="form-group">
                <label for="text">Jam :</label>
                <input type="time" name="jam" class="form-control" required oninvalid="this.setCustomValidity('Masukkan Data yang Benar euy!!')">
              </div>

              <div class="form-group">
                <label for="text">NPM :</label>
                <input type="text" name="npm" class="form-control" placeholder="Masukkan NIM (XX.XX.XXXX)" required oninvalid="this.setCustomValidity('Masukkan Data yang Benar euy!!')">
              </div>

              <div class="form-group">
                <label for="text">Nilai :</label>
                <select name="nilai" id="nilai" class="form-control">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Status :</label>
                <select name="status" id="status" class="form-control">
                    <option value="LULUS">LULUS</option>
                    <option value="TIDAK LULUS">TIDAK LULUS</option>
                </select>
              </div>

               <div class="form-group">
                <label for="text">Dosen :</label>
                <input type="text" name="dosen" class="form-control" placeholder="Masukkan Nama Dosen Pembimbing" required oninvalid="this.setCustomValidity('Masukkan Data yang Benar euy!!')">
              </div>

              <br>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>