<?php
	include '../../koneksi/koneksi.php';
	$nim = $_GET['nim'];
	$queryanggota=mysql_db_query($dbname,"delete from tb_anggota where nim=$nim", $dbkoneksi);
	if ($queryanggota) {
		echo "Sukses";
		header ("location:../view/view-anggota.php");
	} else {
		echo "gagal ni yee";
		header ("location:../view/view-anggota.php");
	}
?>