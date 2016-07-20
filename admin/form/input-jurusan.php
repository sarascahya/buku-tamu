<!DOCTYPE html>
<html>
	<head>
		<title>Tambah | Data Jurusan</title>
		<?php
			include '../include/head.php';
		?>
	</head>
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
							<h4 class="text-center"><strong>Tambah Data Jurusan</strong></h4>
						</div>
						<div class="panel-body">	
							<form class="form-horizontal" action="../control/simpan-jurusan.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Jurusan</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Jurusan" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
								    <div class="col-sm-4 col-sm-offset-5">
								      	<a class="btn btn-default" href="../view/view-jurusan.php" role="button"><strong>Batal</strong></a>
								      	<button type="submit" name="kirim" id="kirim" class="btn btn-default"><strong>Simpan</strong></button>
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