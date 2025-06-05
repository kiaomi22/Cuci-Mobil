<?php
include 'koneksi.php';  // koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pelanggan = $conn->real_escape_string($_POST['nama_pelanggan']);
    $nomor_plat = $conn->real_escape_string($_POST['nomor_plat']);
    $jenis_layanan = $conn->real_escape_string($_POST['jenis_layanan']);
    $tanggal = $conn->real_escape_string($_POST['tanggal']);
    $jam = $conn->real_escape_string($_POST['jam']);

    // ID_ADMIN dibiarkan NULL karena booking belum ditangani admin
    $sql = "INSERT INTO booking (ID_ADMIN, NAMA_PELANGGAN, NOMOR_PLAT, JENIS_LAYANAN, TANGGAL, JAM, STATUS) 
            VALUES (NULL, '$nama_pelanggan', '$nomor_plat', '$jenis_layanan', '$tanggal', '$jam', 'menunggu')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Booking berhasil disimpan!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "Metode bukan POST.";
}
?>
