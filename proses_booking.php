<?php
<<<<<<< HEAD
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
=======
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
>>>>>>> da0b24520dbcb441a05f501e1770cad3f68bf50f
?>
