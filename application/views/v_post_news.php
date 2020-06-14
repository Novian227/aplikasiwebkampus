<!DOCTYPE html>
<html>
<head>
	<title>Posting Pengumuman Wisuda</title>
	    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>
	<div class="container" style="margin-left: 20%">
		<div class="col-md-8 col-md-offset-2">
			<h2>Posting Pengumuman Wisuda</h2><hr/>
			<form action="<?php echo base_url().'index.php/post_berita/simpan_post'?>" method="post" enctype="multipart/form-data">
	            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required/><br/>
	            <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
	            <input name="filefoto" type="file" accept="application/pdf" /><br>
	            <br>
	            <button class="btn btn-info btn-lg" type="submit">Submit</button>
            </form>
		</div>
		
	</div>
	<br>
	

<?php $this->load->view("layout/footer.php") ?>
	<script type="text/javascript">
	  $(function () {
	    CKEDITOR.replace('ckeditor');
	  });
	</script>
</body>
</html>