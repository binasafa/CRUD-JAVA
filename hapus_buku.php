<?php
include 'koneksi.php';
$id_buku = $_GET['id_buku'];
mysqli_query($koneksi, "DELETE FROM t_buku WHERE id_buku='$id_buku'");
header('location:index.php');
?>