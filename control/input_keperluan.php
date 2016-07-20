<?php
	session_start();

	include '../koneksi/koneksi.php';

	$keperluan = $_POST['keperluan'];
	$nim = $_SESSION['nim'];

	//echo $nim;
	//echo $keperluan;
	$query = "INSERT INTO `tb_masuk` (`id_masuk`, `nim`, `tgl_masuk`, `keperluan`, `status`) VALUES ('null', '$nim', CURRENT_TIMESTAMP, '$keperluan', 1)";
	mysql_db_query($dbname, $query, $dbkoneksi);

	header("location:../index.php");
?>