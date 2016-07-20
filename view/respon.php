<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Respon | Buku Tamu Perpustakaan</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1 class="text-center">Buku Tamu Perpustakaan</h1>
			</div>
			<div class="alert alert-info" role="alert">Terima kasih sudah berkunjung! <strong><?php echo $_SESSION['anggota']; ?>.</strong></div>
			<form action="../control/input_respon.php" method="post" class="text-center">
				<div class="row">
	  				<div class="col-md-6 col-md-offset-3">
	  				<h4>Bagaimana respon anda terhadap pelayanan kami ?</h4>
		  				<label class="radio-inline">
							<input type="radio" name="respon" id="puas" value="puas" checked="checked"> Puas
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="respon" id="cukup" value="cukup"> Cukup Puas
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="respon" id="tidak_puas" value="tidak_puas"> Tidak Puas
						</label><br><br>
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