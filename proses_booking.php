<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cuci_mobil";

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form dikirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form dengan proteksi dasar (trim)
    $nama_pelanggan = trim($_POST['nama_pelanggan'] ?? '');
    $nomor_plat = trim($_POST['nomor_plat'] ?? '');
    $jenis_layanan = trim($_POST['jenis_layanan'] ?? '');
    $tanggal = trim($_POST['tanggal'] ?? '');
    $jam = trim($_POST['jam'] ?? '');

    // Validasi sederhana agar data tidak kosong (opsional)
    if ($nama_pelanggan && $nomor_plat && $jenis_layanan && $tanggal && $jam) {
        $sql = "INSERT INTO booking (nama_pelanggan, nomor_plat, jenis_layanan, tanggal, jam) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Prepare gagal: " . $conn->error);
        }

        $stmt->bind_param("sssss", $nama_pelanggan, $nomor_plat, $jenis_layanan, $tanggal, $jam);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Booking berhasil!');
                    window.location.href = 'index.html';
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "<script>
                alert('Mohon isi semua data!');
                window.history.back();
              </script>";
    }
} else {
    // Kalau bukan POST langsung redirect ke halaman booking/form
    header("Location: index.html");
    exit;
}

$conn->close();
?>
