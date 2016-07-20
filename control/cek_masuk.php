<?php
	session_start();

	include '../koneksi/koneksi.php';

	$nim = $_POST['nim'];
	
	$anggota = mysql_db_query($dbname,"select * from tb_anggota where nim = $nim", $dbkoneksi);

	$masuk = mysql_db_query($dbname,"select * from tb_masuk where nim = $nim and status = 1", $dbkoneksi);
	//$data_anggota = mysql_fetch_array($anggota);
	//$data_masuk = mysql_fetch_array($masuk);

		$cek_anggota = mysql_num_rows($anggota);

		if($cek_anggota>0){
			//mengambil data dari database
			$data_anggota = mysql_fetch_array($anggota);

			//memasukan data ke variable session
			$_SESSION['nim'] = $data_anggota['nim'];
			$_SESSION['anggota'] = $data_anggota['nama_depan'];

			//menghitung data yang ada di tabale masuk sesuai dengan nim
			$cek_masuk = mysql_num_rows($masuk);


			//bagian cek masuk
			if($cek_masuk>0){
				header("location:../view/respon.php");
			} else {
				header("location:../view/keperluan.php");
			}

		} else {
			header("location:../view/gagal_input.php");
		}
?>