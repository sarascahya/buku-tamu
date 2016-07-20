<!DOCTYPE html>
<html>
	<head>
		<title>Edit | Data Jurusan</title>
		<?php
			include '../include/head.php';
		?>
	</head>
	<body>
		<?php
			include '../include/navbar.php';
			include '../../koneksi/koneksi.php';
			$id_jurusan = $_GET['id_jurusan'];
			$queryjurusan=mysql_db_query($dbname,"select id_jurusan,nama_jurusan from tb_jurusan where id_jurusan=$id_jurusan", $dbkoneksi);
			$data = mysql_fetch_array($queryjurusan);
		?>
		<br><br><br><br>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Edit Data Jurusan</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/update-jurusan.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Jurusan</label>
		    						<div class="col-sm-8">
		    							<input type="hidden" name="id_jurusan" value="<?php echo $data['id_jurusan']; ?>">
		      							<input required type="text" name="nama_jurusan" value="<?php echo $data['nama_jurusan']; ?>" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
								    <div class="col-sm-4 col-sm-offset-5">
								      	<a class="btn btn-default" href="../view/view-jurusan.php" role="button"><strong>Batal</strong></a>
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