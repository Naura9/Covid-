<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/corona/asset/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/corona/asset/fontawesome/css/all.min.css">

    <title>COVID</title>
</head>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <a class="navbar-brand text-white" href="#">COVID-19 | KOTA PROBOLINGGO</a>
          <form class="form-inline my-2 my-lg-0 ml-auto"> 
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="icon ml-4">
              <h5>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
              </h5>
          </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="http://localhost/corona/index.php"><i class="fas fa-home mr-2"></i>Home</a><hr class="bg-danger">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://www.alodokter.com/virus-corona"><i class="fas fa-book mr-2"></i></i></i>About COVID-19</a><hr class="bg-danger">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://localhost/corona/pasien/index-pasien.php"><i class="fas fa-user mr-2"></i>Data Pasien</a><hr class="bg-danger">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://localhost/corona/petugas/index-petugas.php"><i class="fas fa-user-nurse mr-2"></i>Data Petugas</a><hr class="bg-danger">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://localhost/corona/home.php"><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a><hr class="bg-danger">
                </li>
            </ul>
    </div>

</body>
</html>


