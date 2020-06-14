<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

    <div class="container" style="margin-top: 80px">

      <?php $this->load->view("layout/breadcrumb.php") ?>
      <br>
      <h2>Form Tambah Pendadaran</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('jadwal_pendadaran/simpan') ?>

              <div class="form-group">
                <label for="text">No Pendadaran :</label>
                <input type="text" name="no_pendadaran" class="form-control" placeholder="Masukkan No. Pendadaran" required oninvalid="this.setCustomValidity('Tolong masukkan nomor pendadaran !')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">Hari / Tanggal :</label>
                <input type="date" name="hari_tanggal" class="form-control"  required oninvalid="this.setCustomValidity('Masukkan Tanggal Pendadaran !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">Ruang :</label><br>
                  <select name="ruang" id="ruang" class="form-control">
                    <option value="Stack">Stack</option>
                    <option value="Folder">Folder</option>
                    <option value="Pointer">Pointer</option>
                    <option value="Pixel">Pixel</option>
                    <option value="Network">Network</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="text">Waktu :</label>
                <input type="time" name="waktu" class="form-control"  required oninvalid="this.setCustomValidity('Masukkan Jam Pendadaran !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">NPM :</label>
                <input type="text" name="npm" class="form-control" placeholder="Masukkan NIM (XX.XX.XXXX)"  required oninvalid="this.setCustomValidity('Masukkan NIM !')"
 oninput="setCustomValidity('')">
              </div>

               <div class="form-group">
                <label for="text">Nama :</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap"  required oninvalid="this.setCustomValidity('Masukkan Nama !')"
 oninput="setCustomValidity('')">
              </div>

               <div class="form-group">
                <label for="text">Dosen :</label>
                <input type="text" name="dosen" class="form-control" placeholder="Masukkan Nama Dosen Pembimbing"  required oninvalid="this.setCustomValidity('Masukkan Nama Dosen Pembimbing')"
 oninput="setCustomValidity('')">
              </div>


              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>