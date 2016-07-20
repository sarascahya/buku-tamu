<!DOCTYPE html>
<html>
	<head>
		<title>Tambah | Data Anggota</title>
		<?php
		include '../include/head.php';
		?>
	</head>
	<body>
		<?php
			include '../include/navbar.php';
			include '../../koneksi/koneksi.php';
			$data_jurusan = mysql_db_query($dbname,"select id_jurusan,nama_jurusan from tb_jurusan order by nama_jurusan asc", $dbkoneksi);
			$data_prodi = mysql_db_query($dbname,"select id_prodi,nama_prodi from tb_prodi order by nama_prodi asc", $dbkoneksi);
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Tambah Data Anggota</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/simpan-anggota.php" method="post">
								<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">NIM</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nim" placeholder="NIM" class="form-control" onkeypress="nilai='angka'; validasi(event);">
							    	</div>
							    </div>
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Depan</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nama_depan" placeholder="Nama Depan" class="form-control" onkeypress="nilai='huruftitikkoma'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Belakang</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="nama_belakang" placeholder="Nama Belakang" class="form-control" onkeypress="nilai='huruftitikkoma'; validasi(event);">
							   	 	</div>
							   	</div>

							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
		    						<div class="col-sm-8">
		    							<label class="radio-inline">
										  	<input type="radio" name="jk" value="L" checked="checked"> Laki - Laki
										</label>
										<label class="radio-inline">
										  	<input type="radio" name="jk" value="P"> Perempuan
										</label>
							    	</div>
							    </div>

							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Tempat Lahir</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" onkeypress="nilai='hurufangka'; validasi(event);">
							    	</div>
							    </div>
							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Tanggal Lahir</label>
		    						<div class="col-sm-8">
		      							<input required type="date" name="tgl_lahir" placeholder="Tgl Lahir" class="form-control" onkeypress="nilai='tanggal'; validasi(event);">

							    	</div>
							    </div>

							    <div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
		    						<div class="col-sm-8">
		    						<textarea required class="form-control" rows="3" placeholer="Alamat" name="alamat" onkeypress="nilai='hurufangka'; validasi(event);"></textarea>
							    	</div>
							    </div>

							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
		    						<div class="col-sm-8">
		      							<input required type="email" name="email" placeholder="Email" class="form-control">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">No HP</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="no_hp" placeholder="No HP" class="form-control" onkeypress="nilai='angka'; validasi(event);">
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
											  			echo "<option value='".$row['id_jurusan']."'>".$row['nama_jurusan']."</option>";
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
											  			echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
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