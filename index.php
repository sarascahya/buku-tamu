<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Buku Tamu Perpustakaan</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="bootstrap/js/validasi.js"></script>
		<?php
			include 'model/model-berita.php';
			$pengumuman = getPengumuman(); 
		  	$jum_pengumuman = count($pengumuman);
		  	$berita = getBerita();
		  	$jum_berita = count($berita);
		?>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="text-center">Buku Tamu Perpustakaan</h1>
			</div>
			<div class="alert alert-info" role="alert"><strong>Perhatian!</strong> Silahkan Masukkan Nomer Induk Mahasiswa (NIM) anda untuk mengisi buku tamu.</div>
			<form action="control/cek_masuk.php" method="post">
				<div class="row">
	  				<div class="col-md-4 col-md-offset-4">
	  					<input type="text" class="form-control" placeholder="Nomer Induk Mahasiswa" name="nim" id="nim" onkeypress="nilai='angka';validasi(event);" required><br>
							<div class="row">
	  							<div class="col-md-4 col-md-offset-4">
							 		<button type="submit" name="kirim" class="btn btn-primary btn-block">OK!</button>
							 	</div>
							</div>
	  				</div>
	  			</div>
	  		</form>
	  		<br><br><br>
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
		  			<!--<button type="button" class="btn btn-primary">Lihat lebih banyak informasi</button>-->
		  			<a class="btn btn-primary" href="view/info.php" role="button">Lihat lebih banyak informasi</a>
		  		</div>
		  	</div>
		</div>
	</body>
</html>