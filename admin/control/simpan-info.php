<?php
	include "../../koneksi/koneksi.php";

	$judul_info = $_POST['judul_info'];
	$isi_info = $_POST['isi_info'];
	$kategori = $_POST['kategori'];

	$update_info = mysql_db_query($dbname, "insert into tb_info values (null, '$judul_info', '$isi_info', '$kategori', CURRENT_TIMESTAMP)", $dbkoneksi);
	if($update_info) {
		//echo "berhasil";
		header ("location:../view/view-info.php");
	}else {
		//echo "gagal input";
		header ("location:../form/input-info.php");
	}
?>