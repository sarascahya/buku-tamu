<?php
	include "../../koneksi/koneksi.php";

	$id_info = $_POST['id_info'];
	$judul_info = $_POST['judul_info'];
	$isi_info = $_POST['isi_info'];
	$kategori = $_POST['kategori'];

	/*echo $id_info."<br>";
	echo $judul_info."<br>";
	echo $isi_info."<br>";
	echo $kategori."<br>";*/

	//$query = UPDATE `tb_info` SET `judul_info` = `$judul_info`, `isi_info` = '$isi_info', `kategori` = '$kategori', `tanggal` = 'CURRENT_TIMESTAMP' WHERE `tb_info`.`id_info` = `$id_info`;

	$update_info = mysql_db_query($dbname, "update tb_info set judul_info = '$judul_info', isi_info='$isi_info', kategori='$kategori' where id_info='$id_info'", $dbkoneksi);
	if($update_info) {
		echo "berhasil";
		header ("location:../view/view-info.php");
	}else {
		echo "gagal input";
		header ("location:../form/edit-info.php");
	}
?>