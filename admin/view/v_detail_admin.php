<!DOCTYPE html>
<html>
	<head>
	<title>Laporan | Data Admin</title>
		<?php
		include '../include/head.php';
		?>
	</head>
	<body>
		<?php
			include '../include/navbar.php';
			include "../../koneksi/koneksi.php";	
		?>
		<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-center"><strong>Laporan Data Admin</strong></h4>
						</div>
						<div class="panel-body">
							<!--<div class="row">
								<div class="col-md-3">
									<a class="btn btn-default" href="../form/input-admin.php" role="button"><strong>Tambah Admin</strong></a>
								</div>
								<div class="col-md-5 col-md-offset-4">
									<form action="" method="get">
									    <div class="input-group">
									      	<input type="text" class="form-control" placeholder="Cari data admin..." name="cari_admin">
									      	<span class="input-group-btn">
									        	<button class="btn btn-default" type="submit">Cari !</button>
									      	</span>
									    </div><!-- /input-group 
									</form>
							  	</div><!-- /.col-lg-6 
							</div><!-- /.row -->
							<br><br>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<td class="text-center"><strong>No</strong></td>
											<td><strong>Nama</strong></td>
											<!--<td>Nama Belakang</td>-->
											<td><strong>Email</strong></td>
											<td><strong>No HP</strong></td>
											<td><strong>Username</strong></td>
											<td><strong>Password</strong></td>
										</tr>
									</thead>
									<?php
										$queryadmin=mysql_db_query($dbname,"select id_admin,nama_depan,nama_belakang, email, no_hp, username, password from tb_admin", $dbkoneksi);
										$no = 1;
										while ($data = mysql_fetch_array($queryadmin)) {
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td><?php echo $data['nama_depan']." ".$data['nama_belakang']; ?></td>
											<!--<td><?php echo $data['nama_belakang']; ?></td>-->
											<td><?php echo $data['email']; ?></td>
											<td><?php echo $data['no_hp']; ?></td>
											<td><?php echo $data['username']; ?></td>
											<td><?php echo $data['password']; ?></td>
											<td>
										</tr>
										<?php
											$no++;
										}
										?>
									</tbody>
								</table>
								<?php
									//include '../include/pagging.php';
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>