<!DOCTYPE html>
<html>
	<head>
		<title>Edit | Data Anggota</title>
		<?php
			include '../include/head.php';	
		?>
	</head>
	<body>
		<?php
			include '../include/navbar.php';
			include '../../koneksi/koneksi.php';
			$nim = $_GET['nim'];
			$queryanggota=mysql_db_query($dbname,"select nim,nama_depan,nama_belakang, jk, tempat_lahir, tgl_lahir, alamat, email, no_hp, id_jurusan, id_prodi from tb_anggota where nim=$nim", $dbkoneksi);
			$data = mysql_fetch_array($queryanggota);
			$data_jurusan = mysql_db_query($dbname,"select id_jurusan,nama_jurusan from tb_jurusan order by nama_jurusan asc", $dbkoneksi);
			$data_prodi = mysql_db_query($dbname,"select id_prodi,nama_prodi from tb_prodi order by nama_prodi asc", $dbkoneksi);
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Edit Data Anggota</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/update-anggota.php" method="post">
								<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">NIM</label>
		    						<div class="col-sm-8">
		      							<input disabled="disabled" type="text" name="nim" value="<?php echo $data['nim']; ?>" class="form-control">
							   	 	</div>
							   	</div>
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Depan</label>
		    						<div class="col-sm-8">
		    							<input type="hidden" name="nim" value="<?php echo $data['nim']; ?>" class="form-control">
		      							<input required type="text" name="nama_depan" value="<?php echo $data['nama_depan']; ?>" class="form-control" onkeypress="nilai='huruftitikkoma'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Belakang</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nama_belakang" value="<?php echo $data['nama_belakang']; ?>" class="form-control" onkeypress="nilai='huruftitikkoma'; validasi(event);">
							   	 	</div>
							   	</div>
								<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
		    						<div class="col-sm-8">
		    						<?php if(!strcmp('L', $data['jk'])){
		    							echo "<label class='radio-inline'>
										  	<input type='radio' name='jk' value='L' checked> Laki - Laki
										</label>
										<label class='radio-inline'>
										  	<input type='radio' name='jk' value='P'> Perempuan
										</label>";
		    						} else {
		    							echo "<label class='radio-inline'>
										  	<input type='radio' name='jk' value='L'> Laki - Laki
										</label>
										<label class='radio-inline'>
										  	<input type='radio' name='jk' value='P' checked> Perempuan
										</label>";
		    						}?>
		    							
							    	</div>
							    </div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Tempat Lahir</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
		    						<div class="col-sm-8">
		      							<input required type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" class="form-control" onkeypress="nilai='tanggal'; validasi(event);">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
	    							<label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
	    						<div class="col-sm-8">
	    							<textarea required class="form-control" rows="3" name="alamat" onkeypress="nilai='hurufangka'; validasi(event);"><?php echo $data['alamat']; ?></textarea>
						    	</div>
						    	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
		    						<div class="col-sm-8">
		      							<input required type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">No HP</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" class="form-control" onkeypress="nilai='angka'; validasi(event);">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
	    						<label for="inputEmail3" class="col-sm-3 control-label">Jurusan</label>
	    						<div class="col-sm-8">
	    							<select class="form-control" name="jurusan">
										  <option value="1">--- Pilih Jurusan ---</option>
										  <?php
										  	if (mysql_num_rows($data_jurusan) != 0) {
										  		while ($row = mysql_fetch_assoc($data_jurusan)) {
													if(strcmp($row['id_jurusan'], $data['id_jurusan'])){
										  				echo "<option value='".$row['id_jurusan']."'>".$row['nama_jurusan']."</option>";
										  			} else {
										  				echo "<option selected='selected' value='".$row['id_jurusan']."'>".$row['nama_jurusan']."</option>";	
										  			}
										  		}
										  	}
										  ?>
									</select>
						   	 	</div>
						   	</div>
						   	<div class="form-group">
	    						<label for="inputEmail3" class="col-sm-3 control-label">Prodi</label>
	    						<div class="col-sm-8">
	    							<select class="form-control" name="prodi">
										  <option value="1">--- Pilih Prodi ---</option>
										  <?php
										  	if (mysql_num_rows($data_prodi) != 0) {
										  		while ($row = mysql_fetch_assoc($data_prodi)) {
										  			if (strcmp($row['id_prodi'], $data['id_prodi'])) {
										  				echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
										  			} else {
										  				echo "<option selected='selected' value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
										  			}
										  		}
										  	}
										  ?>
									</select>
						   	 	</div>
						   	</div>
							    <div class="form-group">
								    <div class="col-sm-4 col-sm-offset-5">
								      	<a class="btn btn-default" href="../view/view-anggota.php" role="button"><strong>Batal</strong></a>
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