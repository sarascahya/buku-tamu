<!DOCTYPE html>
<html>
	<head>
		<title>Tambah | Data Prodi</title>
		<?php
			include '../include/head.php';
		?>
	<body>
		<?php
			include '../include/navbar.php';
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Tambah Data Prodi</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/simpan-prodi.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Prodi</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nama_prodi" placeholder="Nama Prodi" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
								    <div class="col-sm-4 col-sm-offset-5">
								      	<a class="btn btn-default" href="../view/view-prodi.php" role="button"><strong>Batal</strong></a>
								      	<button type="submit" name="kirim" class="btn btn-default"><strong>Simpan</strong></button>
								    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>