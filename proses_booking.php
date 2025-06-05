<?php
include 'koneksi.php';  // Ganti dari test_koneksi.php ke koneksi.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nomor_plat = $_POST['nomor_plat'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    // Status default saat booking
    $status = "menunggu";

    // Query simpan ke database
    $sql = "INSERT INTO booking (NAMA_PELANGGAN, NOMOR_PLAT, JENIS_LAYANAN, TANGGAL, JAM, STATUS)
            VALUES ('$nama_pelanggan', '$nomor_plat', '$jenis_layanan', '$tanggal', '$jam', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking berhasil disimpan!";
        // redirect atau tampilkan pesan sukses
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Metode bukan POST.";
}
?>
