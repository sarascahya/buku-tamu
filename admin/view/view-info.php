<!DOCTYPE html>
<html>
	<head>
		<title>Informasi</title>
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
							<h4 class="text-center"><strong>Informasi</strong></h4>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-3">
									<a class="btn btn-default" href="../form/input-info.php" role="button"><strong>Tambah Informasi</strong></a>
								</div>
								<div class="col-lg-5 col-lg-offset-4">
									<form action="" method="get">
									    <div class="input-group">
									      	<input type="text" class="form-control" placeholder="Cari data Informasi..." name="cari_info">
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
											<td><strong>Judul Informasi</strong></td>
											<td><strong>Isi Informasi</strong></td>
											<td><strong>Kategori Informasi</strong></td>
											<td><strong>Tanggal Posting</strong></td>
											<td><strong>Action</strong></td>
										</tr>
										
									</thead>
									<?php
										if(isset($_GET['cari_info'])){
											$value = $_GET['cari_info'];
											$queryinfo=mysql_db_query($dbname,"select id_info, judul_info, isi_info, kategori, tanggal from tb_info where judul_info LIKE '%$value%' or isi_info LIKE '%$value%' or kategori LIKE '%$value%'", $dbkoneksi);
											if(mysql_num_rows($queryinfo) == 0){
												echo "Data tidak di temukan";
												$queryinfo=mysql_db_query($dbname,"select id_info, judul_info, isi_info, kategori, tanggal from tb_info", $dbkoneksi);
											}
										} else {
											$queryinfo=mysql_db_query($dbname,"select id_info, judul_info, isi_info, kategori, tanggal from tb_info", $dbkoneksi);
										}
										$no = 1;
										while ($data = mysql_fetch_array($queryinfo)) {
									?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td><?php echo $data['judul_info']; ?></td>
											<td><?php echo $data['isi_info']; ?></td>
											<td><?php echo $data['kategori']; ?></td>
											<?php 
											 	$detail_tgl = $data['tanggal'];
											 	$tgl = explode(" ", $detail_tgl);
											?>
											<td><?php echo $tgl[0]; ?></td>
											<td>
												<a href="../form/edit-info.php?id_info=<?php echo $data['id_info']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
											 	&nbsp| &nbsp
											 	<a href="../control/delete-info.php?id_info=<?php echo $data['id_info']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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