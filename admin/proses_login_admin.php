<?php
session_start();

// Koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "cuci_mobil";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$user = $_POST['username'];
$pass = $_POST['password'];

// Query untuk cek username dan password di tabel admin
$sql = "SELECT * FROM admin WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    // Cek password (asumsikan password di database disimpan plaintext atau gunakan password_verify untuk hash)
    if ($pass === $row['password']) {
        // Login berhasil
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $user;
        
        header("Location: dashboard.php");
        exit;
    } else {
        // Password salah
        echo "<script>alert('Password salah!'); window.location.href='login_admin.php';</script>";
        exit;
    }
} else {
    // Username tidak ditemukan
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='login_admin.php';</script>";
    exit;
}

$stmt->close();
$conn->close();
?>
