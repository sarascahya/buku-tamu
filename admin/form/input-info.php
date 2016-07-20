<!DOCTYPE html>
<html>
	<head>
		<title>Tambah | Informasi</title>
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
							<h4 class="text-center"><strong>Tambah Informasi</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/simpan-info.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Judul Informasi</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="judul_info" placeholder="Judul Informasi" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Isi Informasi</label>
		    						<div class="col-sm-8">
							    		<textarea required class="form-control" rows="3" placeholer="Isi Informasi" name="isi_info" onkeypress="nilai='hurufangka'; validasi(event);"></textarea>

							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Kategori Informasi</label>
		    						<div class="col-sm-8">
		    							<label class="radio-inline">
										  	<input type="radio" name="kategori" value="pengumuman" checked="checked"> Pengumuman
										</label>
										<label class="radio-inline">
										  	<input type="radio" name="kategori" value="berita"> Berita
										</label>
							    	</div>
							    </div>
							    <div class="form-group">
								    <div class="col-sm-4 col-sm-offset-5">
								      	<a class="btn btn-default" href="../view/view-info.php" role="button"><strong>Batal</strong></a>
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