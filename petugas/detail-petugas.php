<?php  
	include '../asset/header.php';
	include '../koneksi.php';

	$id_petugas = $_GET['id_petugas'];
	$sql = "SELECT * FROM petugas t WHERE id_petugas=$id_petugas";
	$res = mysqli_query($kon, $sql);
	$detail = mysqli_fetch_assoc($res);
	// var_dump($detail);
?>

<!DOCTYPE html>
</html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
	<title>Detail Petugas</title>
</head>
<body>
	<div class="col-md-10 p-5 pt2">
        <h3><strong><i class="fas fa-search"></i></strong> DETAIL PETUGAS</h3><hr>
			<table class="table table-bordered">
            	<tr>
					<td><strong>Id</strong></td>
					<td><?=$detail['id_petugas'];?></td>
				</tr>
				<tr>
					<td><strong>Nama Petugas</strong></td>
					<td><?=$detail['nama_petugas'];?></td>
				</tr>
				<tr>
					<td><strong>Alamat Petugas</strong></td>
					<td><?=$detail['alamat_petugas']?></td>
				</tr>
                <tr>
					<td><strong>No Telepon</strong></td>
					<td><?=$detail['telp']?></td>
				</tr>
				<tr>
					<td><strong>Username</strong></td>
					<td><?=$detail['username']?></td>
                </tr>
                <tr>
					<td><strong>Password</strong></td>
					<td><?=$detail['password']?></td>
                </tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index-petugas.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
