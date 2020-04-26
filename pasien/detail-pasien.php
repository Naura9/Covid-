<?php  
include '../asset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];
$sql = "SELECT * FROM pasien p WHERE id_pasien=$id_pasien";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<title>Detail Pasien</title>
</head>

<body>
    <div class="col-md-10 p-5 pt2">
      <h3><strong><i class="fas fa-search"></i> DETAIL</strong></h3><hr>
<head>
<body>
	<table class="table table-bordered">
		<tr>
			<td><strong>Id</strong></td>
			<td><?=$detail['id_pasien'];?></td>
		</tr>
		<tr>
			<td><strong>Nama Pasien</strong></td>
			<td><?=$detail['nama_pasien'];?></td>
		</tr>
		<tr>
			<td><strong>Alamat Pasien</strong></td>
			<td><?=$detail['alamat_pasien']?></td>
		</tr>
		<tr>
			<td><strong>No Telepon</strong></td>
			<td><?=$detail['telp']?></td>
		</tr>
		<tr>
			<td><strong>Tanggal Pengecekan</strong></td>
			<td><?=date('d F Y', strtotime($detail['tgl_cek']))?></td>
		</tr>
		<tr>
			<td><strong>Suhu</strong></td>
			<td><?=$detail['suhu']?></td>
		</tr>
		<tr>
			<td><strong>Keterangan</strong></td>
			<td><?=$detail['ket']?></td>
		</tr>
		<tr>
			<td class="text-rigth" colspan="2">
				<a href="index-pasien.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>
