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
      <h2>Form Tambah Jadwal KRS</h2>
      <br>
        <div class="col-md-12">
            <?php echo form_open('jadwal_krs/simpan') ?>

              <div class="form-group">
                <label for="text">Judul :</label><br>
                  <select name="judul" id="judul" class="form-control">
                    <option value="Jadwal Pengisian KRS Ganjil TA.2018/2019 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2018/2019 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2018/2019 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2018/2019 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Ganjil TA.2019/2020 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2019/2020 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2019/2020 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2019/2020 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Ganjil TA.2020/2021 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2020/2021 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2020/2021 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2020/2021 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Ganjil TA.2021/2022 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2021/2022 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2021/2022 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2021/2022 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Ganjil TA.2022/2023 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2022/2023 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2022/2023 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2022/2023 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Ganjil TA.2023/2024 Untuk Prodi D3 TI">Jadwal Pengisian KRS Ganjil TA.2023/2024 Untuk Prodi D3 TI</option>
                    <option value="Jadwal Pengisian KRS Genap TA.2023/2024 Untuk Prodi D3 TI">Jadwal Pengisian KRS Genap TA.2023/2024 Untuk Prodi D3 TI</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="text">Tanggal Mulai :</label>
                <input type="date" name="hari" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label for="text">Tanggal Berakhir :</label>
                <input type="date" name="akhir" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="text">Prodi :</label><br>
                  <select name="prodi" id="prodi" class="form-control">
                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                  </select>
              </div>

              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>