<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Cari Buku</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container justify-content-center">
            <span class="navbar-brand mb-0 h1">Pencarian Buku</span>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a href="index.php" type="button" class="btn btn-primary">Home</a>
        </div>

        <div class="row">
            <?php
                include 'koneksi.php';
                $cari_judul = $_GET['cari_judul'];
                $data = mysqli_query($koneksi, "SELECT * FROM t_buku WHERE judul LIKE '%$cari_judul%'");
                while ($d = mysqli_fetch_array($data)) {
            ?>
            <div class="col-3">

                <div class="card mt-4">

                    <div class="card-body">
                        <h5 class="card-title"><?= $d['judul'];?></h5>
                        <img src="cover.jpg" class="card-img mb-2" alt="...">
                        <a href="edit_buku.php?id_buku=<?= $d['id_buku'];?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="hapus_buku.php?id_buku=<?= $d['id_buku'];?>"
                            onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"
                            class="btn btn-danger btn-sm">Hapus</a>
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