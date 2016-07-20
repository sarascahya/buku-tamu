<?php
	session_start(); //memulai session
    
    /*
        bagian ini berfungsi untuk memproses login
        secara garis besar cara kerja bagian ini adalah :
        1. Menangkap value yang di kirim kan dari form dan di simpan di variable untuk mempermudah pemanggilan
        2. Mengecek apakah ada kombinasi user dan password di database
        3. Apabila ada maka di redirect ke halaman dashboard dan bila tidak akan di kembalikan ke halaman login
    */

    include '../../koneksi/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    //pengecekan ke database
    $query = mysql_db_query($dbname,"SELECT * FROM tb_admin WHERE username = '".$username."' AND password = '".$password."'",$dbkoneksi);
    
    if(mysql_num_rows($query)>0){
        $login = true;
    }else{
        $login = false;
    }

    //echo $login;
    
    /*
        cara membaca logika di atas adalah
        1. dilakukan pengecekan apakah ada record yang sesuai di database dengan username dan password yang di inputkan
           mysql_num_rows() adalah fungsi bawaan untuk menghitung berapa record yang ada atau sesuai dengan query
        2. Apabila jumlah data lebih dari 0 maka itu artinya ada data yang cocok di isi lah variable $login menjadi true begitu juga sebaliknya.
    */

    // Pembuatan session

    /*
        session itu mirip seperti variable global yang mampu di akses selama session blm di destroy,
        namun untuk menggunkan session sebelumnya sudah harus di deklarasiakn fungsi "session_start()" pada paling atas file.
        karena pembuatan variable session hanya ada saat status $login = true maka buatkan lah percabangan.
    */

    if($login){
        $data_admin = mysql_fetch_array($query); // bagian ini untuk mengambil data pada record di database
        $_SESSION['admin'] = $data_admin['username']; // variable session dengan index user di isi dengan record rs data index ke 3 yaitu nama belakang
        
        //echo $_SESSION['admin'];
        header("location:../admin-side/dashboard.php"); //redirect ke file dashboard.php
    }else{
    	//echo "gagal login";
        header("location:../index.php"); //kembalikan ke form login karena status $login = false
    }
?>