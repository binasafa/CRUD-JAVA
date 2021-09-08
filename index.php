<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Bina</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<nav class="navbar navbar-light bg-light">
	<div class="container justify-content-center">
		<span class="navbar-brand mb-0 h1">Daftar Buku</span>
	</div>
	</nav>

	<div class="container mt-3">
		<div class="d-flex justify-content-between">
		<a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a>
		<form action="cari_buku.php" class="form-inline" method="get">
			<input class="form-control mr-sm-2" name="cari_judul" type="search" placeholder="Cari Judul Buku" aria-label="Search">
			<input class="btn btn-outline-success my-2 my-sm-0" name="cari" value="Cari" type="submit">
		</form>
		</div>

		<div class="row">
			<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi, "SELECT * FROM t_buku");
				while ($d = mysqli_fetch_array($data)) {

			?>

			<div class="col-3">
					<div class="card mt-4">
						<div class="card-body">
						<h5 class="card-title"><?= $d['judul'];?></h5>
						<img src="cover.jpg" class="card-img mb-2" alt="...">
						<a href="edit_buku.php?id_buku=<?= $d['id_buku'];?>" class="btn btn-secondary btn-sm">Edit</a>
						<a href="hapus_buku.php?id_buku=<?= $d['id_buku'];?>"
						onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
						</div>
					</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>