<?php
    /*
        bagian ini hanya berisi perintah untuk menghancurkan session dan meredirect ke file index
    */
    session_start();

    session_destroy();
    header("location:../index.php");
?>