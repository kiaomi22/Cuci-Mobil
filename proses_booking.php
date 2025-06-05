file_put_contents("log.txt", json_encode($_SERVER) . "\n", FILE_APPEND);

<?php
include 'test_koneksi.php';  // jika file ini di folder utama

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "POST berhasil!<br>";
    print_r($_POST);
} else {
    echo "Metode bukan POST.";
}
