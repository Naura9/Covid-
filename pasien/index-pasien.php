<?php 
	include '../koneksi.php';
	include '../asset/header.php';

	$sql = "SELECT * FROM pasien";
	$res = mysqli_query($kon, $sql);
	$pasien = array();
	while ($data = mysqli_fetch_assoc($res)) {
		$pasien[] = $data;
	}
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<link rel="stylesheet" href="fontawesome/css/all.min.css">

		<title>Pasien</title>
	</head>
	  
  	<body>
        <div class="col-md-10 p-5">
            <h3><strong><i class="fas fa-user mr-2"></i>DATA PASIEN</strong></h3><hr>
        <div class="card-body pt-0">
        <a href="http://localhost/corona/pasien/tambah-pasien.php">
        <button type="button" class="btn btn-outline-info"><i class="fas fa-plus p"> Tambah Data Pasien</i></button></a>

		<table class="table table-default table-hover table-bordered">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Suhu</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<?php  
			$no = 1;
			foreach ($pasien as $p) {?>
			<tr>
				<th scope="row"><?=$no?></th>
				<td><?=$p['nama_pasien']?></td>
				<td><?=$p['alamat_pasien']?></td>
                <td><?=$p['suhu']?></td>
				<td>
					<a href="detail-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-success">Detail</a>
					<a href="edit-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-warning">Edit</a>
					<a href="hapus-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-danger">Hapus</a>
	     	    </td>
			</tr>
			<?php
				$no++;
				}
		    ?>
			</table>
			</div>
			</div>
	</body>
</html>
