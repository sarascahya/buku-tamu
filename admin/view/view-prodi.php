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
							<h4 class="text-center"><strong>Data Prodi</strong></h4>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-3">
									<a class="btn btn-default" href="../form/input-prodi.php" role="button"><strong>Tambah Prodi</strong></a>
								</div>
								<div class="col-lg-5 col-lg-offset-4">
									<form action="" method="get">
									    <div class="input-group">
									      	<input type="text" class="form-control" placeholder="Cari data Prodi..." name="cari_prodi">
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
											<td><strong>Nama Prodi</strong></td>
											<td><strong>Action</strong></td>
										</tr>
										
									</thead>
									<?php
										if(isset($_GET['cari_prodi'])){
											$value = $_GET['cari_prodi'];
											$queryprodi=mysql_db_query($dbname,"select id_prodi,nama_prodi from tb_prodi where nama_prodi LIKE '%$value%'", $dbkoneksi);
											if(mysql_num_rows($queryprodi) == 0){
												echo "Data tidak di temukan";
												$queryprodi=mysql_db_query($dbname,"select id_prodi,nama_prodi from tb_prodi", $dbkoneksi);
											}
										} else {
											$queryprodi=mysql_db_query($dbname,"select id_prodi,nama_prodi from tb_prodi", $dbkoneksi);
										}
										$no = 1;
										while ($data = mysql_fetch_array($queryprodi)) {
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td><?php echo $data['nama_prodi']; ?></td>
											<td>
												<a href="../form/edit-prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
											 	&nbsp| &nbsp
											 	<a href="../control/delete-prodi.php?id_prodi=<?php echo $data['id_prodi']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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