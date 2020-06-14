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
      <h2>Form Tambah Hasil Yudisium</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('hasil_yusidium/simpan') ?>

              <div class="form-group">
                <label for="text">Nama :</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">NIM :</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM (XX.XX.XXXX)" required oninvalid="this.setCustomValidity('Masukkan NIM !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">IPK :</label>
                <input type="text" name="ipk" class="form-control" placeholder="Masukkan Nilai IPK" required oninvalid="this.setCustomValidity('Masukkan IPK !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">Jumlah SKS :</label>
                <input type="text" name="jml_sks" class="form-control" placeholder="Masukkan Jumlah SKS Dari Semester 1 - 6" required oninvalid="this.setCustomValidity('Masukkan Jumlah SKS !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Nilai D :</label>
                <input type="text" name="jml_nilai_d" class="form-control"  placeholder="Masukkan Jumlah Nilai yang D" required oninvalid="this.setCustomValidity('Masukkan Jumlah Nilai D !!')"
 oninput="setCustomValidity('')">
              </div>

               <div class="form-group">
                <label for="text">Jumlah Nilai E :</label>
                <input type="text" name="jml_nilai_e" class="form-control" placeholder="Masukkan Jumlah Nilai yang E" required oninvalid="this.setCustomValidity('Masukkan Jumlah Nilai E !!')"
 oninput="setCustomValidity('')">
              </div>

              <div class="form-group">
                <label for="text">Status :</label>
                <select name="status" id="status" class="form-control">
                    <option value="LULUS">LULUS</option>
                    <option value="TIDAK LULUS">TIDAK LULUS</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Deskripsi :</label>
         <textarea class="form-control" id="ckeditor" name="keterangan" rows="5" cols="50" placeholder="....." required></textarea>
              </div>


              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<?php $this->load->view("layout/footer.php") ?>
	<script type="text/javascript">
	  $(function () {
	    CKEDITOR.replace('ckeditor');
	  });
	</script>
</body>
</html>