<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<?php
			include '../include/head.php'
		?>
	</head>
	<body>
		<?php
			include '../../koneksi/koneksi.php';
			include '../include/navbar.php';
			include '../model/model-anggota.php';
			include '../model/model-admin.php';
			include '../model/model-jurusan.php';
			include '../model/model-prodi.php';
		?>
		<br><br><br><br>	
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-center">Halo, <?php echo $_SESSION['admin'];?></h1>
			</div>
			<div class="row"> <!--Tampilan Panel Statistik-->
				<!--Anggota-->
				<div class="col-md-3">
					<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h3 class="panel-title text-center"><strong>Anggota</strong></h3>
					  	</div>
					  	<div class="panel-body text-justify">
					   		Jumlah Anggota : <?php totalAnggota();?>
					  	</div>
					</div>
				</div>
				<!-- End Anggota-->
				<!--Admin-->
				<div class="col-md-3">
					<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h3 class="panel-title text-center"><strong>Admin</strong></h3>
					  	</div>
					  	<div class="panel-body text-justify">
					   		Jumlah Admin : <?php totalAdmin();?>
					  	</div>
					</div>
				</div>
				<!-- End Admin-->
				<!-- Jurusan -->
				<div class="col-md-3">
					<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h3 class="panel-title text-center"><strong>Jurusan</strong></h3>
					  	</div>
					  	<div class="panel-body text-justify">
					  		Jumlah Jurusan : <?php totalJurusan();?>
					  	</div>
					</div>
				</div>
				<!-- End Jurusan -->
				<!-- Prodi -->
				<div class="col-md-3">
					<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h3 class="panel-title text-center"><strong>Prodi</strong></h3>
					  	</div>
					  	<div class="panel-body text-justify">
					  		Jumlah Prodi : <?php totalProdi();?>
					  	</div>
					</div>
				</div>
				<!-- End Prodi -->
			</div><!-- End Tampilan Panel Statistik-->
			<!--5 pengunjung terakhir-->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						    <h3 class="panel-title text-center"><strong>Kunjungan Terakhir</strong></h3>
						</div>
						<div class="panel-body text-justify">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<td class="text-center"><strong>No</strong></td>
											<td><strong>Tanggal Masuk</strong></td>
											<td><strong>Jam Masuk</strong></td>
											<td><strong>Tanggal Keluar</strong></td>
											<td><strong>Jam Keluar</strong></td>
											<td><strong>NIM</strong></td>
											<td><strong>Nama</strong></td>
											<!--<td>Nama Belakang</td>-->
											<td><strong>Jurusan</strong></td>
											<td><strong>Prodi</strong></td>
											<td><strong>Keperluan</strong></td>
										</tr>
									</thead>
										<?php
											$queryanggota=mysql_db_query($dbname,"select * from detail_kunjungan order by tgl_keluar desc limit 5", $dbkoneksi);
										
										$no = 1;
										while ($data = mysql_fetch_array($queryanggota)) {
										?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<?php 
											 	$detail_tgl = $data['tgl_masuk'];
											 	$tgl_masuk = explode(" ", $detail_tgl);
											?>
											<td><?php echo $tgl_masuk[0]; ?></td>
											<td><?php echo $tgl_masuk[1]; ?></td>
											<?php 
											 	$detail_tgl = $data['tgl_keluar'];
											 	$tgl_keluar = explode(" ", $detail_tgl);
											?>
											<td><?php echo $tgl_keluar[0]; ?></td>
											<td><?php echo $tgl_keluar[1]; ?></td>
											<td><?php echo $data['nim']; ?></td>
											<td><?php echo $data['nama_depan']." ".$data['nama_belakang']; ?></td>
											<!--<td><?php echo $data['nama_belakang']; ?></td>-->
											<td><?php echo $data['nama_jurusan']; ?></td>
											<td><?php echo $data['nama_prodi']; ?></td>
											<td><?php echo $data['keperluan']; ?></td>
										</tr>
										<?php
											$no++;
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- End container-fluid-->
	</body>
</html>