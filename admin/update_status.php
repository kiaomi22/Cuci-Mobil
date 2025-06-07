<?php
session_start();

// Pastikan user admin sudah login (optional)
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

$host = "localhost";
$username = "root";
$password = "";
$database = "cuci_mobil";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (!isset($_POST['booking_id']) || !isset($_POST['status'])) {
    die('Data tidak lengkap.');
}

$booking_id = $_POST['booking_id'];
$status_baru = $_POST['status'];

$sql = "UPDATE booking SET status = ? WHERE id_booking = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare gagal: " . $conn->error);
}

$stmt->bind_param("si", $status_baru, $booking_id);

if ($stmt->execute()) {
    echo "<script>
        alert('Status booking berhasil diubah!');
        window.location.href = 'booking_list.php';
    </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
