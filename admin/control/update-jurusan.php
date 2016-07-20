<?php
	include "../../koneksi/koneksi.php";
	$id_jurusan = $_POST['id_jurusan'];
	$nama_jurusan = $_POST['nama_jurusan'];


	$update_jurusan = mysql_db_query($dbname,"update tb_jurusan set nama_jurusan='$nama_jurusan'where id_jurusan='$id_jurusan' ", $dbkoneksi);
		
	if($update_jurusan) {
		header ("location:../view/view-jurusan.php");
	}else {
		//echo "gagal update";
		header ("location:../form/edit-jurusan.php");
	}
?>