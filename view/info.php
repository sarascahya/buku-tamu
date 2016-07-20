<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Informasi Perpustakaan</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../bootstrap/js/validasi.js"></script>
		<?php
			include '../model/model-berita.php';
			$pengumuman = getPengumumanInfo(); 
		  	$jum_pengumuman = count($pengumuman);
		  	$berita = getBeritaInfo();
		  	$jum_berita = count($berita);
		?>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="text-center">Informasi Di Perpustakaan</h1>
			</div>
			<div class="row">
		  		<div class="col-md-6">
		  			<h3 class="text-center">Pengumuman</h3>
		  			<?php 
		  				for ($i=0; $i<$jum_pengumuman; $i++) { 
		  			?>
			  			<blockquote>
						  	<h4 class="text-info"><?php echo $pengumuman[$i]['judul_info'];?></h4>
						  	<footer>
						  		<?php 
									$detail_tgl = $pengumuman[$i]['tanggal'];
									$tgl = explode(" ", $detail_tgl);
								?>
						  		<cite title="Source Title">Diposting pada <?php echo $tgl[0];?></cite> 
						  		<br>
						  		<?php echo $pengumuman[$i]['isi_info'];?>
						  	</footer>
						</blockquote>
					<?php
						}
					?>
		  		</div>
		  		<div class="col-md-6">
		  			<h3 class="text-center">Berita</h3>
		  			<?php 
		  				for ($i=0; $i<$jum_berita; $i++) { 
		  			?>
			  			<blockquote>
						  	<h4 class="text-info"><?php echo $berita[$i]['judul_info'];?></h4>
						  	<footer>
						  		<?php 
									$detail_tgl = $berita[$i]['tanggal'];
									$tgl = explode(" ", $detail_tgl);
								?>
						  		<cite title="Source Title">Diposting pada <?php echo $tgl[0];?></cite> 
						  		<br>
						  		<?php echo $berita[$i]['isi_info'];?>
						  	</footer>
						</blockquote>
					<?php
						}
					?>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col-md-12">
		  			<a class="btn btn-primary" href="../index.php" role="button">Kembali ke buku tamu</a>
		  		</div>
		  	</div>
		</div>
	</body>
</html>