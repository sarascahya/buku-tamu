<?php
	include "../../koneksi/koneksi.php";

	$nama_prodi = $_POST['nama_prodi'];

	$update_prodi = mysql_db_query($dbname, "insert into tb_prodi values ('null', '$nama_prodi')", $dbkoneksi);
	if($update_prodi) {
		header ("location:../view/view-prodi.php");
	}else {
		//echo "gagal input";
		header ("location:../form/input-prodi.php");
	}
?>