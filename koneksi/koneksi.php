<?php
 $dbserver ="localhost";
 $dbusername = "root";
 $dbpassword = "12345";
 $dbname = "perpustakaan";

 $dbkoneksi = mysql_connect($dbserver, $dbusername, $dbpassword) or die(mysql_error()."Gagal koneksi server mysql");
 mysql_select_db($dbname) or die(mysql_error()."Gagal koneksi database");
?>