<?php
session_start();
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = mysqli_query($kon, $sql);

    $count = mysqli_affected_rows($kon);
    if ($count == 0) {
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_petugas'] = $data_login['id_petugas'];

        $_SESSION['nama_petugas'] = $data_login['nama_petugas'];

        header("Location: http://localhost/corona/index.php");
        
    } else {
        header("Location: http://localhost/corona/login/index.php");
    }
}
?>
