<!DOCTYPE html>
<html>
	<head>
	<title>Data Admin</title>
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
							<h4 class="text-center"><strong>Data Admin</strong></h4>
						</div>
						<div class="panel-body">
							<div class="row">
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
									    </div><!-- /input-group -->
									</form>
							  	</div><!-- /.col-lg-6 -->
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
											<!--<td>Password</td>-->
											<td><strong>Action</strong></td>
										</tr>
									</thead>
									<?php
										if(isset($_GET['cari_admin'])){
											$value = $_GET['cari_admin'];
											$queryadmin=mysql_db_query($dbname,"select id_admin,nama_depan,nama_belakang, email, no_hp, username, password from tb_admin where nama_depan LIKE '%$value%'", $dbkoneksi);
											if(mysql_num_rows($queryadmin) == 0){
												echo "Data tidak di temukan";
												$queryadmin=mysql_db_query($dbname,"select id_admin,nama_depan,nama_belakang, email, no_hp, username, password from tb_admin", $dbkoneksi);
											}
										} else {
											$queryadmin=mysql_db_query($dbname,"select id_admin,nama_depan,nama_belakang, email, no_hp, username, password from tb_admin", $dbkoneksi);
										}
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
											<!--<td><?php echo $data['password']; ?></td>-->
											<td>
												<a href="../form/edit-admin.php?id_admin=<?php echo $data['id_admin']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
											 	&nbsp| &nbsp
											 	<a href="../control/delete-admin.php?id_admin=<?php echo $data['id_admin']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
											</td>
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