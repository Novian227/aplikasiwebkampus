<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman Jadwal Wisuda</title>
	   <?php $this->load->view("layout/head.php") ?>
    <?php $this->load->view("layout/nav.php") ?>
    <?php $this->load->view("layout/header.php") ?>
</head>
<body>
	<div class="container" style="margin-left: 20%">
	    
		<h3>Pengumuman Jadwal Wisuda</h3>
		<br>
		<br>
		

		<?php
			function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
			foreach ($data->result_array() as $i) :
				$id=$i['berita_id'];
				$judul=$i['berita_judul'];
				$image=$i['berita_image'];
				$isi=$i['berita_isi'];
		?>
		<div class="col-md-8 col-md-offset-2">
			<h4><?php echo $judul;?></h4><hr/>
			<?php echo limit_words($isi,10);?><a href="<?php echo base_url().'index.php/post_berita/view/'.$id;?>" target="_blank"> Selengkapnya ></a>
		</div>
		<br>
		<?php endforeach;?>
	</div>

<?php $this->load->view("layout/footer.php") ?>
</body>
</html>