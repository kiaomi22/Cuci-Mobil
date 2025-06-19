<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$tanggal = date('Y-m-d'); // Tambahkan tanggal hari ini

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp, "../uploads/$gambar");

// Tambahkan tanggal ke query
mysqli_query($conn, "INSERT INTO blog (judul, isi, gambar, kategori, penulis, tanggal) 
    VALUES ('$judul', '$isi', '$gambar', '$kategori', '$penulis', '$tanggal')");

header("Location: kelola.blog.php");
?>
