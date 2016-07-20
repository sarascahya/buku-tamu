<?php
	include "../../koneksi/koneksi.php";

	$nim = $_POST['nim'];
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$jk = $_POST['jk'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$jurusan = $_POST['jurusan'];
	$prodi = $_POST['prodi'];

	/*echo $nim." jenis nim <br>";
	echo $nama_depan." nama depan <br>";
	echo $nama_belakang." nama_belakang <br>";
	echo $jk." jenis kelamin <br>";
	echo $tempat_lahir." tmpt lahir<br>";
	echo $tgl_lahir." tgl lahir<br>";
	echo $alamat." alamat<br>";
	echo $email." email<br>";
	echo $no_hp." no hp<br>";
	echo $jurusan." jurusan<br>";
	echo $prodi." prodi<br>";*/
	
	$query = "insert into tb_anggota values ('$nim', '$nama_depan', '$nama_belakang', '$jk', '$tempat_lahir', '$tgl_lahir', '$alamat', '$email', '$no_hp', '$jurusan', '$prodi')"; 

	//$query = "INSERT INTO `tb_anggota` (`nim`, `nama_depan`, `nama_belakang`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `id_jurusan`, `id_prodi`) VALUES ('$nim', '$nama_depan', '$nama_belakang', '$jk', '$tempat_lahir', '$tgl_lahir', '$alamat', '$email', '$no_hp', '$jurusan', '$prodi')";

	$update_anggota = mysql_db_query($dbname, $query, $dbkoneksi);
	if($update_anggota) {
		//echo "berhasil";
		header ("location:../view/view-anggota.php");
	}else {
		//echo "gagal input";
		header ("location:../form/input-anggota.php");
	}
?>