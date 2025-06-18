<?php
include '../koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];

if (!empty($_FILES['gambar']['name'])) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../img/" . $gambar);

    $query = "UPDATE blog SET judul='$judul', isi='$isi', gambar='$gambar', kategori='$kategori', penulis='$penulis' WHERE id=$id";
} else {
    $query = "UPDATE blog SET judul='$judul', isi='$isi', kategori='$kategori', penulis='$penulis' WHERE id=$id";
}

if (mysqli_query($conn, $query)) {
    header("Location: kelola.blog.php"); 
    exit;
} else {
    echo "Gagal mengupdate blog: " . mysqli_error($conn);
}
?>
