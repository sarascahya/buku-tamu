<!DOCTYPE html>
<html>
	<head>
		<title>Edit | Data Admin</title>
		<?php
			include '../include/head.php';
		?>
	</head>
	<body>
		<?php
			include '../../koneksi/koneksi.php';
			$id_admin = $_GET['id_admin'];
			$queryadmin=mysql_db_query($dbname,"select id_admin,nama_depan,nama_belakang, email, no_hp, username, password from tb_admin where id_admin=$id_admin", $dbkoneksi);
			$data = mysql_fetch_array($queryadmin);
			include '../include/navbar.php';
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Edit Data Admin</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/update-admin.php" method="post">
		  						<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Nama Depan</label>
		    						<div class="col-sm-8">
		    							<input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
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
		    						<label for="inputEmail3" class="col-sm-3 control-label">Username</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Password</label>
		    						<div class="col-sm-8">
		      							<input required type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control">
							   	 	</div>
							   	</div>
							    <div class="form-group">
									<div class="col-sm-4 col-sm-offset-5">
							      		<a class="btn btn-default" href="../view/view-admin.php" role="button"><strong>Batal</strong></a>
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