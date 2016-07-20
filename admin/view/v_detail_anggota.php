<!DOCTYPE html>
<html>
	<head>
		<title> Laporan | Data Anggota</title>
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
							<h4 class="text-center"><strong> Laporan Data Anggota</strong></h4>
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
											<td><strong>NIM</strong></td>
											<td><strong>Nama</strong></td>
											<!--<td>Nama Belakang</td>-->
											<td><strong>Jenis Kelamin</strong></td>
											<td><strong>Alamat</strong></td>
											<td><strong>Email</strong></td>
											<td><strong>No HP</strong></td>
											<td><strong>Jurusan</strong></td>
											<td><strong>Prodi</strong></td>
										</tr>
									</thead>
									<?php
										$queryanggota=mysql_db_query($dbname,"select * from detail_anggota", $dbkoneksi);
										$no = 1;
										while ($data = mysql_fetch_array($queryanggota)) {
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td><?php echo $data['nim']; ?></td>
											<td><?php echo $data['nama_depan']." ".$data['nama_belakang']; ?></td>
											<!--<td><?php echo $data['nama_belakang']; ?></td>-->
											<td class="text-center"><?php echo $data['jk']; ?></td>
											<!--<td><?php echo $data['tempat_lahir'].", ".$data['tgl_lahir']; ?></td>
											<td><?php echo $data['tgl_lahir']; ?></td>-->
											<td><?php echo $data['alamat']; ?></td>
											<td><?php echo $data['email']; ?></td>
											<td><?php echo $data['no_hp']; ?></td>
											<td><?php echo $data['nama_jurusan']; ?></td>
											<td><?php echo $data['nama_prodi']; ?></td>
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