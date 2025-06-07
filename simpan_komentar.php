<?php
include 'koneksi.php'; // koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $pesan = $_POST['pesan'] ?? '';

    if (!empty($nama) && !empty($pesan)) {
        $stmt = $conn->prepare("INSERT INTO komentar (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $pesan);
        $stmt->execute();
        header("Location: single.php"); // arahkan ke PHP yang nampilin komentar
        exit(); // penting untuk mencegah eksekusi lanjut
    } else {
        echo "Nama dan Pesan wajib diisi!";
    }
}
?>
