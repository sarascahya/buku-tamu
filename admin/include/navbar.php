<?php
session_start();
 if (!isset($_SESSION['admin'])) {
 	header("location:../index.php");
 }
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<!-- Judul Page -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../admin-side/dashboard.php"><span class="glyphicon glyphicon-home"></span>&nbsp Dashboard</a>
		</div>
		<!-- Navbar -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- Navbar left-->
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link"></span>&nbsp Anggota <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/view-anggota.php">&nbsp<span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Tampilkan Anggota</a></li>
						<li><a href="../form/input-anggota.php">&nbsp<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp Tambah Anggota</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link"></span>&nbsp Jurusan <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/view-jurusan.php">&nbsp<span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Tampilkan Jurusan</a></li>
						<li><a href="../form/input-jurusan.php">&nbsp<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp Tambah Jurusan</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link"></span>&nbsp Prodi <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/view-prodi.php">&nbsp<span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Tampilkan Prodi</a></li>
						<li><a href="../form/view-prodi.php">&nbsp<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp Tambah Prodi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-lock"></span>&nbsp Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/view-admin.php">&nbsp<span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Tampilkan Admin</a></li>
						<li><a href="../form/input-admin.php">&nbsp<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp Tambah Admin</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-lock"></span>&nbsp Informasi <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/view-info.php">&nbsp<span class="glyphicon glyphicon-list-alt"></span>&nbsp&nbsp Tampilkan Informasi</a></li>
						<li><a href="../form/input-info.php">&nbsp<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp Tambah Informasi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span>&nbsp Laporan <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../view/v_detail_anggota.php">&nbsp<span class="glyphicons glyphicons-house-fire"></span>&nbsp&nbsp Anggota</a></li>
						<li><a href="../view/v_detail_admin.php">&nbsp<span class=""></span>&nbsp&nbsp Admin</a></li>
						<li><a href="../view/v_detail_kunjungan.php">&nbsp<span class=""></span>&nbsp&nbsp Kunjungan</a></li>
						<li><a href="../view/v_detail_respon.php">&nbsp<span class=""></span>&nbsp&nbsp Respon</a></li>
					</ul>
				</li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats"></span>&nbsp Statistik <span class="caret"></span></a>
					<ul class="dropdown-menu">
					   	<li><a href="#">&nbsp<span class=""></span>&nbsp&nbsp Semua Kunjungan</a></li>
					    <li><a href="#">&nbsp<span class=""></span>&nbsp&nbsp Kunjungan Terakhir</a></li>
					    <li><a href="#">&nbsp<span class=""></span>&nbsp&nbsp Kunjungan Tersering</a></li>
					    <li><a href="#">&nbsp<span class=""></span>&nbsp&nbsp Respon Pengunjung</a></li>
					</ul>
				</li>-->
			</ul>
			<!-- Navbar right -->      
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp<strong><?php echo $_SESSION['admin'];?></strong> &nbsp<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../control/cek_logout.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-off"></span>&nbsp&nbsp Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>