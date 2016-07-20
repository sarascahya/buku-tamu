<?php
	function totalAnggota(){
        include '../../koneksi/koneksi.php';

        $query = mysql_db_query($dbname,"SELECT * FROM tb_anggota",$dbkoneksi);
        
        $jml_anggota = mysql_num_rows($query);
        
        echo $jml_anggota;
    }

?>