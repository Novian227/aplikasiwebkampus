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
      
      <h2>Form Edit Hasil Yudisium</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('hasil_yusidium/update') ?>

              <div class="form-group">
                <label for="text">Nama :</label>
                <input type="text" name="nama" value="<?php echo $data_hasil_yusidium->nama ?>" class="form-control" placeholder="Masukkan Nama Lengkap">
                <input type="hidden" value="<?php echo $data_hasil_yusidium->id_yusidium ?>" name="id_yusidium">
              </div>

              <div class="form-group">
                <label for="time">NIM :</label>
                <input type="text" name="nim" value="<?php echo $data_hasil_yusidium->nim ?>" class="form-control" placeholder="Masukkan NIM">
              </div>

              <div class="form-group">
                <label for="text">IPK :</label>
                <input type="text" name="ipk" value="<?php echo $data_hasil_yusidium->ipk ?>" class="form-control" placeholder="Masukkan IPK">
              </div>

              <div class="form-group">
                <label for="text">Jumlah SKS :</label>
                <input type="text" name="jml_sks" value="<?php echo $data_hasil_yusidium->jml_sks ?>" class="form-control" placeholder="Masukan Jumlah SKS">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Nilai D :</label>
                <input type="text" name="jml_nilai_d" value="<?php echo $data_hasil_yusidium->jml_nilai_d ?>" class="form-control" placeholder="Masukkan Jumlah Nilai D">
              </div>

              <div class="form-group">
                <label for="text">Jumlah Nilai E :</label>
                <input type="text" name="jml_nilai_e" value="<?php echo $data_hasil_yusidium->jml_nilai_e ?>" class="form-control" placeholder="Masukkan Jumlah Nilai E">
              </div>

              <div class="form-group">
                <label for="text">Status :</label>
                <select name="status" id="status" class="form-control" value="LULUS">
                      <option value="LULUS" <?= ($data_hasil_yusidium->status == 'LULUS' ? 'selected' : '' ); ?>>LULUS</option>
                      <option value="TIDAK LULUS" <?= ($data_hasil_yusidium->status == 'TIDAK LULUS' ? 'selected' : '' ); ?>>TIDAK LULUS</option>
                </select>
              </div>

              <div class="form-group">
                <label for="text">Deskripsi :</label>
                <textarea class="form-control" id="ckeditor" name="keterangan" rows="5" cols="50" value="<?php echo $data_hasil_yusidium->keterangan ?>"><?php echo $data_hasil_yusidium->keterangan ?></textarea>
              </div>

              <br>

              <button type="submit" class="btn btn-md btn-success">Update</button>
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