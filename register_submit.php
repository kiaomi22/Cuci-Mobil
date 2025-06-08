<?php
$koneksi = new mysqli("localhost", "root", "", "cuci_mobil");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $no_telp = $koneksi->real_escape_string($_POST['no_telp']);
    $username = $koneksi->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek username atau email sudah ada atau belum
    $cek = $koneksi->query("SELECT * FROM users WHERE username='$username' OR email='$email'");
    if ($cek->num_rows > 0) {
        echo "Username atau Email sudah terdaftar!";
        exit;
    }

    // Insert data baru
    $sql = "INSERT INTO users (nama, email, no_telp, username, password) VALUES ('$nama', '$email', '$no_telp', '$username', '$password')";
    if ($koneksi->query($sql)) {
        echo "Registrasi berhasil. Silakan login.";
        // bisa redirect ke login page
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>
