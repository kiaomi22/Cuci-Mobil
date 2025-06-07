<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login_admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_booking = $_POST['id_booking'] ?? null;
    $status = $_POST['status'] ?? null;

    if (!$id_booking || !$status) {
        die("Data tidak lengkap.");
    }

    // Koneksi database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "cuci_mobil";

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Prepare query update status
    $sql = "UPDATE booking SET status = ? WHERE id_booking = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare gagal: " . $conn->error);
    }

    $stmt->bind_param("si", $status, $id_booking);

    if ($stmt->execute()) {
        // Kalau mau kasih notifikasi pop-up dan redirect
        echo "<script>
                alert('Status booking berhasil diubah.');
                window.location.href = 'booking_list.php';
              </script>";
    } else {
        echo "Error saat mengubah status: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Kalau diakses langsung tanpa POST
    header("Location: booking_list.php");
    exit;
}
?>
