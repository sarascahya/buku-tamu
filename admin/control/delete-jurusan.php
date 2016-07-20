<?php
	include '../../koneksi/koneksi.php';
	$id_jurusan = $_GET['id_jurusan'];
	$queryjurusan=mysql_db_query($dbname,"delete from tb_jurusan where id_jurusan=$id_jurusan", $dbkoneksi);
	if ($queryjurusan) {
		echo "Sukses";
		header ("location:../view/view-jurusan.php");
	} else {
		echo "gagal ni yee";
		header ("location:../view/view-jurusan.php");
	}
?>