<?php
	include "../../koneksi/koneksi.php";
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$update_admin = mysql_db_query($dbname, "insert into tb_admin values ('null', '$nama_depan', '$nama_belakang', '$email', '$no_hp', '$username', '$password')", $dbkoneksi);
	if($update_admin) {
		header ("location:../view/view-admin.php");
	}else {
		//echo "gagal input";
		header ("location:../form/input-admin.php");
	}
?>