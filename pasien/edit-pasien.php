<?php  
	include '../koneksi.php';
	include '../asset/header.php';

	$id_pasien = $_GET['id_pasien'];
	$sql = mysqli_query($kon, "SELECT * FROM pasien WHERE id_pasien=$id_pasien");
	$query = "SELECT * FROM pasien  WHERE id_pasien=$id_pasien";
	$res = mysqli_query($kon, $query);
?>

<!DOCTYPE html>
<body>
<div class="col-md-10 p-5 pt2">
  <h5></h5>

<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><strong><i class="fas fa-pencil-ruler"></i>Edit Data Pasien</strong></h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-edit.php">
							<table class="table">
								<?php  
								while ($pasien = mysqli_fetch_assoc($sql)):
								?>
								<tr>
									<input type="hidden" name="id_pasien" value="<?php echo $pasien['id_pasien'];?>">
									<td>Nama Pasien</td>
									<td><input type="text" name="nama_pasien" value="<?php echo $pasien['nama_pasien'];?>" required></td>
								</tr>
								<tr>
									<td>Alamat Pasien</td>
									<td><input type="text" name="alamat_pasien" value="<?php echo $pasien['alamat_pasien'];?>" required></td>
								</tr>
								<tr>
									<td>Telepon</td>
									<td><input type="text" name="telp" value="<?php echo $pasien['telp'];?>" required></td>
								</tr>
								<div class="form-group">
									<label for="datepicter">Tanggal Pemeriksaan</label>
									<input type="date" name="tgl_cek" class="form-control" require>
								</div>
								<tr>
									<td>Suhu</td>
									<td><input type="text" name="suhu" value="<?php echo $pasien['suhu'];?>" required></td>
								</tr>
								<tr>
									<td>Keterangan</td>
									<td><input type="text" name="ket" value="<?php echo $pasien['ket'];?>" required></td>
								</tr>

								<?php  
								endwhile;
								?>

								<tr>
									<td class="text-left" colspan="2">
										<a href="index-pasien.php" class="btn btn-success ">Kembali</a>
									</td>
									<td><input type="submit" class="btn btn-info text-right" name="simpan" value="Simpan"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>