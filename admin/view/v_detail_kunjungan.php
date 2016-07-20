<!DOCTYPE html>
<html>
	<head>
		<title> Laporan | Kunjungan</title>
		<?php
		include "../include/head.php";
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
							<h4 class="text-center"><strong> Laporan Data Kunjungan</strong></h4>
						</div>
						<div class="panel-body">
							<!--<div class="row">
								<div class="col-lg-5 col-lg-offset-7">
								<form action="" method="get">
								    <div class="input-group">
								      	<input type="text" class="form-control" placeholder="Cari data anggota..." name="cari_anggota">
								      	<span class="input-group-btn">
								        	<button class="btn btn-default" type="submit" value="cari">Cari !</button>
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
										$queryanggota=mysql_db_query($dbname,"select * from detail_kunjungan order by tgl_keluar desc", $dbkoneksi);
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