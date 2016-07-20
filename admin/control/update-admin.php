<?php
	include "../../koneksi/koneksi.php";
	$id_admin = $_POST['id_admin'];
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	//echo $id_admin;

	$update_admin = mysql_db_query($dbname,"update tb_admin set nama_depan='$nama_depan', nama_belakang='$nama_belakang', email='$email', no_hp='$no_hp', username='$username', password='$password' where id_admin='$id_admin' ", $dbkoneksi);
		
	if($update_admin) {
		header ("location:../view/view-admin.php");
	}else {
		//echo "gagal update";
		header ("location:../form/edit-admin.php");
	}
?>