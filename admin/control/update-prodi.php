<?php
	include "../../koneksi/koneksi.php";
	$id_prodi = $_POST['id_prodi'];
	$nama_prodi = $_POST['nama_prodi'];


	$update_prodi = mysql_db_query($dbname,"update tb_prodi set nama_prodi='$nama_prodi'where id_prodi='$id_prodi' ", $dbkoneksi);
		
	if($update_prodi) {
		header ("location:../view/view-prodi.php");
	}else {
		//echo "gagal update";
		header ("location:../form/edit-prodi.php");
	}
?>