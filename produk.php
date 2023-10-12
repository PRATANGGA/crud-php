<!DOCTPE html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
					<img src="img/furniture kelompok.png" alt="" width="300px" height="60px" style="margin-left: 30px;">
					<ul class="navbar-nav" style="margin-right: 100px;">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="produk.php">Produk</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="listproduk.php">List Produk</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<?php
			require_once 'Database.php';
			$db = new Database();
			$hasil = $db->produkAll();
			echo "<a href='addBrg.php' class='btn btn-success text-white' style='float:right; margin-top:20px; margin-bottom:20px; background-color:#5DA600'>Tambah Data</a>";
			if ($hasil->num_rows > 0) {
				echo "<table class='table text-center' style='border:1px solid'>
		   <thead style='background-color:#5DA600; color:white'>
			<tr>					
			<th style='border:1px solid' scope='col'>ID</th>
			<th style='border:1px solid' scope='col'>Nama</th>
			<th style='border:1px solid' scope='col'>Harga</th>
			<th style='border:1px solid' scope='col'>Stok</th>
			<th style='border:1px solid' scope='col'>Keterangan</th>
			<th style='border:1px solid' scope='col'>Alamat</th>
			<th style='border:1px solid' scope='col'>Foto</th>
			<th style='border:1px solid' scope='col'>Edit</th>
			<th style='border:1px solid' scope='col'>Hapus</th>
			</tr>
		    </thead>
		    <tbody>";
				while ($row = $hasil->fetch_assoc()) {
					$teks = "<tr>";
					$teks .= "<td style='border:1px solid'>" . $row["id"] . "</td>";
					$teks .= "<td style='border:1px solid'>" . $row["nmbrg"] . "</td>";
					$teks .= "<td style='border:1px solid'>" . $row["hrg"] . "</td>";
					$teks .= "<td style='border:1px solid'>" . $row["stok"] . "</td>";
					$teks .= "<td style='border:1px solid'>" . $row["ket"] . "</td>";
					$teks .= "<td style='border:1px solid'>" . $row["almt"] . "</td>";
					$teks .= "<td style='border:1px solid'><img src='img/" . $row["foto"] . "' style='width:100px;height:100px;'></img></td>";
					$teks .= "<td style='border:1px solid'><a href='editBrg.php?id=" . htmlentities($row["id"]) . "'>Edit</a></td>";
					$teks .= "<td style='border:1px solid'><a href='delBrg.php?id=" . htmlentities($row["id"]) . "'>Hapus</a></td>";
					$teks .= "</tr>";
					echo $teks;
				}
				echo "</tbody>
			      </table>";
			} else {
				echo "jml rec: 0 ";
			}
			//$conn->close();

			?>

		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	</body>

	</html>