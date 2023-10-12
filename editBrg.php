<?php
require_once 'Database.php';
$db = new Database();

$id = $_GET['id'];
$hasil = $db->produk($id);

while ($row = $hasil->fetch_assoc()) {
	$nama = $row['nmbrg'];
	$hrg = $row['hrg'];
	$jml = $row['stok'];
	$ket = $row['ket'];
	$foto = $row['foto'];
	$almt = $row['almt'];
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<title>Registrasi</title>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<h1>Form Edit Barang</h1>
				<form action="updBrg.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="l1" class="form-label">ID</label>
						<input type="text" class="form-control" id="id" name="tid" value="<?= $id; ?>" readonly>
					</div>
					<div class="mb-3">
						<label for="l2" class="form-label">Nama barang</label>
						<input type="text" class="form-control" id="nama" name="tnama" value="<?= $nama; ?>">
					</div>
					<div class="mb-3">
						<label for="l3" class="form-label">Harga</label>
						<input type="text" class="form-control" id="hrg" name="thrg" value="<?= $hrg; ?>">
					</div>
					<div class="mb-3">
						<label for="l4" class="form-label">Jml Stok</label>
						<input type="text" class="form-control" id="jml" name="tjml" value="<?= $jml; ?>">
					</div>
					<div class="mb-3">
						<label for="l5" class="form-label">keterangan</label>
						<input type="text" class="form-control" id="ket" name="tket" value="<?= $ket ?>">
					</div>
					<div class="mb-3">
						<label for="l6" class="form-label">Gambar</label>
						<input type="file" class="form-control" id="foto" name="foto">
						<input type='hidden' name='foto_lama' value="<?= $foto; ?>">
						<img src="img/<?php echo $foto; ?>" width="150px" height="120px" />
						<input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
					</div>
					<div class="mb-3">
						<label for="l5" class="form-label">Alamat</label>
						<input type="text" class="form-control" id="almt" name="talmt" value="<?= $almt; ?>">
					</div>
					<div class="mb-3">
						<!-- <input type="button" value="" name="submit"> -->
						<button class="btn btn-primary" type="submit" name="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>