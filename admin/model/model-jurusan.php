<?php
	function totalJurusan(){
        include '../../koneksi/koneksi.php';

        $query = mysql_db_query($dbname,"SELECT * FROM tb_jurusan",$dbkoneksi);
        
        $jml_jurusan = mysql_num_rows($query);
        
        echo $jml_jurusan;
    }

?>