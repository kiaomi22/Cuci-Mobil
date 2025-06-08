<?php
session_start();

// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cuci_mobil";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form (pastikan method form POST)
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$description = $conn->real_escape_string($_POST['description']);

// Validasi sederhana
if (empty($name) || empty($email) || empty($description)) {
    echo "Data tidak boleh kosong!";
    exit;
}

// Simpan data ke tabel
$sql = "INSERT INTO carwash_requests (name, email, description) VALUES ('$name', '$email', '$description')";

if ($conn->query($sql) === TRUE) {
    // Redirect atau tampil pesan sukses
    header("Location: thank_you.php"); // contoh halaman setelah submit
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
