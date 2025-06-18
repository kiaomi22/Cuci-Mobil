<?php
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blog WHERE id=$id"));
$gambar = $data['gambar'];
unlink("../uploads/$gambar"); // hapus file

mysqli_query($conn, "DELETE FROM blog WHERE id=$id");
header("Location: kelola.blog.php");
?>
