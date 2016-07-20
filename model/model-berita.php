<?php 
	function getPengumuman() {

		$tampil = "select * from tb_info where kategori= 'pengumuman' order by tanggal desc limit 2";

		include 'koneksi/koneksi.php';

		$querybuat = mysql_query($tampil);

		$i = 0;
		while ($row = mysql_fetch_array($querybuat)) {
			$data[$i]['judul_info']=$row['judul_info'];
			$data[$i]['isi_info']=$row['isi_info'];
			$data[$i]['kategori']=$row['kategori'];
			$data[$i]['tanggal']=$row['tanggal'];
			$i++;
		}
		return $data;
	}

	function getBerita() {

		$tampil = "select * from tb_info where kategori= 'berita' order by tanggal desc limit 2";

		include 'koneksi/koneksi.php';

		$querybuat = mysql_query($tampil);

		$i = 0;
		while ($row = mysql_fetch_array($querybuat)) {
			$data[$i]['judul_info']=$row['judul_info'];
			$data[$i]['isi_info']=$row['isi_info'];
			$data[$i]['kategori']=$row['kategori'];
			$data[$i]['tanggal']=$row['tanggal'];
			$i++;
		}
		return $data;
	}

	function getPengumumanInfo() {

		$tampil = "select * from tb_info where kategori= 'pengumuman' order by tanggal desc";

		include '../koneksi/koneksi.php';

		$querybuat = mysql_query($tampil);

		$i = 0;
		while ($row = mysql_fetch_array($querybuat)) {
			$data[$i]['judul_info']=$row['judul_info'];
			$data[$i]['isi_info']=$row['isi_info'];
			$data[$i]['kategori']=$row['kategori'];
			$data[$i]['tanggal']=$row['tanggal'];
			$i++;
		}
		return $data;
	}

	function getBeritaInfo() {

		$tampil = "select * from tb_info where kategori= 'berita' order by tanggal desc";

		include '../koneksi/koneksi.php';

		$querybuat = mysql_query($tampil);

		$i = 0;
		while ($row = mysql_fetch_array($querybuat)) {
			$data[$i]['judul_info']=$row['judul_info'];
			$data[$i]['isi_info']=$row['isi_info'];
			$data[$i]['kategori']=$row['kategori'];
			$data[$i]['tanggal']=$row['tanggal'];
			$i++;
		}
		return $data;
	}

?>