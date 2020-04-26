<?php 
	include '../koneksi.php';
	include '../asset/header.php';

	$sql = "SELECT * FROM petugas";
	$res = mysqli_query($kon, $sql);
	$petugas = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$petugas[] = $data;
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
    <title>Petugas</title>
</head>

<body>
    <div class="col-md-10 p-5">
        <h3><strong><i class="fas fa-user-nurse mr-2"></i>DATA PETUGAS</strong></h3><hr>
        	<div class="card-body pt-0">
				<table class="table table-default table-hover table-bordered">
				  <thead>
				    <tr>
						<th scope="col">No</th>
						<th scope="col">Nama Petugas</th>
						<th scope="col">Alamat Petugas</th>
						<th scope="col">Aksi</th>
				    </tr>
				   </thead>

				   	<?php  
				  		$no = 1;
				  		foreach ($petugas as $t) {
					?>

				  	<tr>
					  	<th scope="row"><?=$no?></th>
				      	<td><?=$t['nama_petugas']?></td>
						<td><?=$t['alamat_petugas']?></td>
						<td>
				      		<a href="detail-petugas.php?id_petugas=<?= $t['id_petugas'];?>" class="badge badge-success">Detail</a>
				      	</td>
					</tr>
					
				    <?php
				    	$no++;
				  	}
				  	?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
