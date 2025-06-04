<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'koneksi.php';

// cek apakah method request POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ambil data inputan dan escape string
    $nama = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);

    // query insert
    $sql = "INSERT INTO booking (nama, email, deskripsi) VALUES ('$nama', '$email', '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking berhasil disimpan. Terima kasih, $nama!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Form tidak valid.";
}

$conn->close();
?>
