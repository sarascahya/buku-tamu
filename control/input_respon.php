<?php
	session_start();

	include '../koneksi/koneksi.php';

	$nim = $_SESSION['nim'];
	$respon = $_POST['respon'];

	$query_masuk = mysql_db_query($dbname,"select * from tb_masuk where nim = $nim and status = 1", $dbkoneksi);
	$data_masuk = mysql_fetch_array($query_masuk);

	$id_masuk = $data_masuk['id_masuk'];

	//membuat waktu hari ini
	$tahun = date('Y');
	$bulan = date('m');
	$tgl = date('d');

	//menyatukan waktu untuk dikirim ke database
	$hari_ini = $tahun."-".$bulan."-".$tgl;

	/*echo "Hari ini : ".$hari_ini."<br>";
	echo "Id Masuk : ".$id_masuk."<br>";
	echo "respon : ".$respon."<br>";
	echo "nim : ".$nim."<br>";*/

	//cek tgl yang ada di tabel respon yang sesuai dengan tgl hari ini
	$query_respon = mysql_db_query($dbname, "select * from tb_respon where tgl = '$hari_ini'", $dbkoneksi);

	//cek jika tanggal hari ini belum ada
	if (mysql_num_rows($query_respon) == 0) {
		//membuat record baru di tabel respon dengan mengisi tabel hari ini
		mysql_db_query($dbname, "insert into tb_respon values('$hari_ini', 0, 0, 0)", $dbkoneksi);
	}

	//select respon yang diisi tadi yang sesuai dengan tanggal hari ini di tabel respon
	$query_jml_respon = mysql_db_query($dbname, "SELECT $respon FROM `tb_respon` WHERE tb_respon.tgl = '$hari_ini'", $dbkoneksi);
		
	//menghitung jumlah respon yang diselect tadi, mengambil data dari database tipenya string
	$str_jml_respon = mysql_fetch_row($query_jml_respon);

	//konversi string ke int
	$int_jml_respon = intval($str_jml_respon[0]);
	//echo "Jumlah respon sebelumnya : ".$int_jml_respon;
		
	//menambahkan jumlah respon sebelumnya dengan 1
	$total_respon = $int_jml_respon + 1;
	//echo "Jumlah respon setelah diisi : ".$total_respon;
		
	//mengupdate tabel respon sesuai respon yang dipilih
	mysql_db_query($dbname, "UPDATE `tb_respon` SET `$respon` = $total_respon WHERE `tb_respon`.`tgl` = '$hari_ini'", $dbkoneksi);
			
	//merubah status di tabel masuk
	mysql_db_query($dbname, "update tb_masuk set status = 0 where id_masuk = '$id_masuk'", $dbkoneksi);

	//mengisi tabel keluar
	mysql_db_query($dbname, "insert into tb_keluar values ('null', '$id_masuk', CURRENT_TIMESTAMP)", $dbkoneksi);
		
	//echo "sukses";
	header("location:../index.php");	
?>