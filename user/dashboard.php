<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: ../login.php");
    exit;
}
echo "Selamat datang User: " . $_SESSION['username'] . "<br>";
echo "<a href='../logout.php'>Logout</a><br><br>";

// Tambahkan konten sesuai kebutuhan user
echo "Ini halaman dashboard user.";
?>
