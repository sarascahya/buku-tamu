<!DOCTYPE html>
<html>
	<head>
	<title>Tambah | Data Admin</title>
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
							<h4 class="text-center"><strong>Tambah Data Admin</strong></h4>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="../control/simpan-admin.php" method="post">
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
		    						<label for="inputEmail3" class="col-sm-3 control-label">Username</label>
		    						<div class="col-sm-8">
		      							<input required type="text" name="username" placeholder="Username" class="form-control">
							   	 	</div>
							   	</div>
							   	<div class="form-group">
		    						<label for="inputEmail3" class="col-sm-3 control-label">Password</label>
		    						<div class="col-sm-8">
		      							<input required type="password" name="password" placeholder="Password" class="form-control">
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