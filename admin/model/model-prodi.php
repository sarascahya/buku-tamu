<?php
	function totalProdi(){
        include '../../koneksi/koneksi.php';

        $query = mysql_db_query($dbname,"SELECT * FROM tb_prodi",$dbkoneksi);
        
        $jml_prodi = mysql_num_rows($query);
        
        echo $jml_prodi;
    }

?>