<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']); // Misalnya menggunakan 'user_id' sebagai identifikasi login

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
    // Ambil data dari form
    $nama_pelanggan = trim($_POST['nama_pelanggan'] ?? '');
    $nomor_plat = trim($_POST['nomor_plat'] ?? '');
    $jenis_layanan = trim($_POST['jenis_layanan'] ?? '');
    $tempat_cuci = trim($_POST['tempat_cuci'] ?? '');
    $tanggal = trim($_POST['tanggal'] ?? '');
    $jam = trim($_POST['jam'] ?? '');
    $status = 'Pending'; // status default

    // Validasi sederhana agar semua data terisi
    if ($nama_pelanggan && $nomor_plat && $jenis_layanan && $tempat_cuci && $tanggal && $jam) {
        // Siapkan query
        $sql = "INSERT INTO booking (nama_pelanggan, nomor_plat, jenis_layanan, tanggal, jam, tempat_cuci, status) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Prepare gagal: " . $conn->error);
        }

        // Bind parameter
        $stmt->bind_param("sssssss", $nama_pelanggan, $nomor_plat, $jenis_layanan, $tanggal, $jam, $tempat_cuci, $status);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "<script>
                    alert('Booking berhasil!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan saat menyimpan data: " . $stmt->error . "');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
                alert('Mohon isi semua data!');
                window.history.back();
              </script>";
    }
} else {
    // Jika bukan metode POST, redirect
    header("Location: index.html");
    exit;
}

$conn->close();
?>
