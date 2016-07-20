<!DOCTYPE html>
<html>
	<head>
		<title>Edit | Informasi</title>
		<?php
			include '../include/head.php';
		?>
	<body>
		<?php
			include '../include/navbar.php';
			include '../../koneksi/koneksi.php';
			$id_info = $_GET['id_info'];
			$queryinfo=mysql_db_query($dbname,"select id_info, judul_info, isi_info, kategori, tanggal from tb_info where id_info=$id_info", $dbkoneksi);
			$data = mysql_fetch_array($queryinfo);
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Edit Informasi</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/update-info.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Judul Informasi</label>
		    						<div class="col-sm-8">
		    							<input type="hidden" name="id_info" value="<?php echo $data['id_info'];?>" class="form-control" >
		      							<input required type="text" name="judul_info" value="<?php echo $data['judul_info'];?>" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Isi Informasi</label>
		    						<div class="col-sm-8">
							    		<textarea required class="form-control" rows="3" name="isi_info" onkeypress="nilai='hurufangka'; validasi(event);"><?php echo $data['isi_info'];?></textarea>

							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Kategori Berita</label>
		    						<div class="col-sm-8">
		    						<?php if(!strcmp('pengumuman', $data['kategori'])){
		    							echo "<label class='radio-inline'>
										  	<input type='radio' name='kategori' value='pengumuman' checked> Pengumuman
										</label>
										<label class='radio-inline'>
										  	<input type='radio' name='kategori' value='berita'> Berita
										</label>";
		    						} else {
		    							echo "<label class='radio-inline'>
										  	<input type='radio' name='kategori' value='pengumuman'> Pengumuman
										</label>
										<label class='radio-inline'>
										  	<input type='radio' name='kategori' value='berita' checked> Berita
										</label>";
		    						}?>
		    							
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