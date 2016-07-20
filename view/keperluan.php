<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Keperluan | Buku Tamu Perpustakaan</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="text-center">Buku Tamu Perpustakaan</h1>
			</div>
			<div class="alert alert-info" role="alert">Selamat Datang! <strong><?php echo $_SESSION['anggota']; ?>.</strong></div>
			<form action="../control/input_keperluan.php" method="post">
				<div class="row">
	  				<div class="col-md-4 col-md-offset-4">
		  				<select class="form-control" name="keperluan">
						  	<option value="Membaca">--Masukkan Keperluan--</option>
							<option value="Membaca">Membaca</option>
							<option value="Meminjam Buku">Meminjam Buku</option>
							<option value="Internetan">Internetan</option>
							<option value="Lain - lain">Lain - lain</option>
							<!-- nyaa :3 -->
						</select><br>
						<div class="row">
	  						<div class="col-md-4 col-md-offset-4">
						 		<button type="submit" class="btn btn-primary btn-block">OK!</button>
						 	</div>
						</div>
	  				</div>
	  			</div>
	  		</form>
		</div>
	</body>
</html>