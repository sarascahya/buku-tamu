<?php
	function totalAdmin(){
        include '../../koneksi/koneksi.php';

        $query = mysql_db_query($dbname,"SELECT * FROM tb_admin",$dbkoneksi);
        
        $jml_admin = mysql_num_rows($query);
        
        echo $jml_admin;
    }

?>