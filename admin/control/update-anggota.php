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

	
	$update_anggota = mysql_db_query($dbname, "update tb_anggota set nama_depan='$nama_depan', nama_belakang='$nama_belakang',
	 jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', no_hp='$no_hp', 
	 id_jurusan='$jurusan', id_prodi='$prodi' where nim='$nim' ", $dbkoneksi);
		
			if($update_anggota) {
				header ("location:../view/view-anggota.php");
			}else {
				//echo "gagal update";
				header ("location:../form/edit-anggota.php");
			}
?>