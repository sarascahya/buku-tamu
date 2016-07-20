<!DOCTYPE html>
<html>
	<head>
	<title>Laporan | Data Respon</title>
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
							<h4 class="text-center"><strong>Laporan Data Respon</strong></h4>
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
											<td><strong>Tanggal</strong></td>
											<td><strong>Puas</strong></td>
											<td><strong>Cukup Puas</strong></td>
											<td><strong>Tidak Puas</strong></td>
										</tr>
									</thead>
									<?php
										$queryrespon=mysql_db_query($dbname,"select * from tb_respon", $dbkoneksi);
										$no = 1;
										while ($data = mysql_fetch_array($queryrespon)) {
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td><?php echo $data['tgl']; ?></td>
											<td><?php echo $data['puas']; ?></td>
											<td><?php echo $data['cukup']; ?></td>
											<td><?php echo $data['tidak_puas']; ?></td>
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