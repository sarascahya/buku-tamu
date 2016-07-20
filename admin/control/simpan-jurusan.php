<?php
	include "../../koneksi/koneksi.php";
	$nama_jurusan = $_POST['nama_jurusan'];
	$update_jurusan = mysql_db_query($dbname, "insert into tb_jurusan values (null, '$nama_jurusan')", $dbkoneksi);
	if($update_jurusan) {
		header ("location:../view/view-jurusan.php");
	}else {
	//echo "gagal input";
		header ("location:../form/input-jurusan.php");
	}
?>