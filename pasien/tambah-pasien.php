<?php
include '../koneksi.php';
include '../asset/header.php';
$query = mysqli_query($kon, "SELECT * FROM suhu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<title>Tambah Data Pasien</title>
</head>

<body>
    <div class="col-md-7 p-1 pl-5">
    	<div class="card-body">
			<div class="container">
				<div class="row mt-4">
					<div class="col-md">
					<center>
					<div class="card" style="width: 100%;">
					<div class="card-header" style="width: 100%;">
					<h2 class="card-title"><i class="fas fa-plus-square"></i> Tambah Data Pasien </h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<div class="form-group text-left font-weight-bold">
								<label for="nama_pasien">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Lengkap">
								<hr class="bg-secondary">
							</div>						
							<div class="form-group text-left font-weight-bold">
								<label for="alamat_pasien">Alamat</label>
								<input type="text" class="form-control" name="alamat_pasien"id="alamat_pasien" placeholder="Masukkan Alamat Pasien">
								<small class="form-text text-left text-muted">Contoh: Jl. Ahmad Yani</small>
								<hr class="bg-secondary">
							</div>
							<div class="form-group text-left font-weight-bold">
								<label for="telp">No.Telepon</label>
								<input type="text" class="form-control" name="telp"id="telp" placeholder="Masukkan No.Telepon">
								<small class="form-text text-left text-muted">Contoh: 0852-7482-9418</small>
								<hr class="bg-secondary">
							</div>
							<div class="form-group text-left font-weight-bold">
								<label for="datepicter">Tanggal Pemeriksaan</label>
								<input type="date" name="tgl_cek" class="form-control" required>
								<hr class="bg-secondary">
							</div>
							<div class="form-group text-left font-weight-bold">
								<label for="suhu">Suhu</label>
								<input type="text" class="form-control" name="suhu"id="suhu" placeholder="Masukkan Suhu Pasien"> 
								<hr class="bg-secondary">
							</div>
							<div class="form-group text-left font-weight-bold">
								<label for="ket">Keterangan</label>
								<input type="text" class="form-control" name="ket"id="ket" placeholder="Masukkan Keterangan"> 
							</div>

							<tr>
								<td class="text-rigth" colspan="2">
									<a href="http://localhost/corona/pasien/index-pasien.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>
								</td>
								</tr>
								
							<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
