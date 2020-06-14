<?php 
	$b=$data->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $b['berita_judul'];?></title>
	    <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>
	<div class="container" style="margin-left: 20%">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<?php echo $b['berita_isi'];?>
			<a href="<?php echo base_url().'assets/images/'.$b['berita_image'];?>">[<i class="fas fa-file-pdf" target="_blank"></i> PDF]</a>
			
		</div>
		
	</div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>