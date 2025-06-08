<?php
// config koneksi database
$host = "localhost";
$username = "root";      // sesuaikan dengan user db kamu
$password = "";          // sesuaikan password db
$dbname = "cuci_mobil"; // ganti dengan nama database kamu

// buat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil data dari form POST dan amankan
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$description = $conn->real_escape_string($_POST['description']);

// query insert
$sql = "INSERT INTO carwash_request (name, email, description) VALUES ('$name', '$email', '$description')";

if ($conn->query($sql) === TRUE) {
    // jika sukses, tampilkan alert dan redirect
    echo "<script>
            alert('Pesan berhasil dikirim!');
            window.location.href = 'index.php';
          </script>";
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
