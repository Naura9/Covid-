<?php
    $kon=mysqli_connect("localhost", "root","","db_corona");

    if(mysqli_connect_error()){
        echo"Koneksi database gagal : " .mysqli_connect_error();
    }
?>