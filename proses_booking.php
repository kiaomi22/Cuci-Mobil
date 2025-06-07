<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "blynkcarwash";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama_pelanggan'];
$plat = $_POST['nomor_plat'];
$layanan = $_POST['jenis_layanan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

// Simpan ke database
$sql = "INSERT INTO booking (nama_pelanggan, nomor_plat, jenis_layanan, tanggal, jam)
        VALUES ('$nama', '$plat', '$layanan', '$tanggal', '$jam')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking berhasil!'); window.location.href='booking.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
