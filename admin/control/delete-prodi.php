<?php
	include '../../koneksi/koneksi.php';
	$id_prodi = $_GET['id_prodi'];
	$queryprodi=mysql_db_query($dbname,"delete from tb_prodi where id_prodi=$id_prodi", $dbkoneksi);
	if ($queryprodi) {
		echo "Sukses";
		header ("location:../view/view-prodi.php");
	} else {
		echo "gagal ni yee";
		header ("location:../view/view-prodi.php");
	}
?>