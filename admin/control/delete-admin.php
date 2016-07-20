<?php
	include '../../koneksi/koneksi.php';
	$id_admin = $_GET['id_admin'];
	$queryadmin=mysql_db_query($dbname,"delete from tb_admin where id_admin=$id_admin", $dbkoneksi);
	if ($queryadmin) {
		echo "Sukses";
		header ("location:../view/view-admin.php");
	} else {
		echo "gagal ni yee";
		header ("location:../view/view-admin.php");
	}
?>