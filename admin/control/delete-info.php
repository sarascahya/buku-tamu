<?php
	include '../../koneksi/koneksi.php';
	$id_info = $_GET['id_info'];
	$queryinfo=mysql_db_query($dbname,"delete from tb_info where id_info=$id_info", $dbkoneksi);
	if ($queryinfo) {
		echo "Sukses";
		header ("location:../view/view-info.php");
	} else {
		echo "gagal ni yee";
		header ("location:../view/view-info.php");
	}
?>