<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Status Booking | Blynk Car Wash</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; max-width: 600px; margin: auto; background-color: #f2f4f7; }
        form { margin-bottom: 30px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input, button { font-size: 16px; padding: 10px; width: 100%; box-sizing: border-box; margin-bottom: 10px; }
        button { cursor: pointer; background-color: #4640de; color: white; border: none; border-radius: 5px; }
        button:hover { background-color: #3730a3; }
        .result-box { border: 1px solid #ccc; padding: 20px; border-radius: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .status { font-weight: bold; padding: 5px 10px; border-radius: 5px; display: inline-block; }
        .status.Pending { background-color: orange; color: white; }
        .status.Proses { background-color: #007BFF; color: white; }
        .status.Selesai { background-color: green; color: white; }
        .status.Batal { background-color: red; color: white; }
        p.error { color: red; font-weight: bold; }
    </style>
</head>
<body>

<h2>Cek Status Booking</h2>
<form method="POST" action="">
    <label for="nama_pelanggan">Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Contoh: Jihan" required>

    <label for="nomor_plat">Nomor Plat Kendaraan:</label>
    <input type="text" name="nomor_plat" id="nomor_plat" placeholder="Contoh: B1234XYZ" required>

    <button type="submit">Cek Status</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama_pelanggan']);
    $plat = strtoupper(trim($_POST['nomor_plat']));

    $stmt = $conn->prepare("SELECT * FROM booking WHERE nama_pelanggan = ? AND nomor_plat = ? ORDER BY tanggal DESC, jam DESC");
    $stmt->bind_param("ss", $nama, $plat);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<div class="result-box">';
        echo "<h3>Hasil Booking untuk <em>$nama</em> - <em>$plat</em></h3>";

        while ($row = $result->fetch_assoc()) {
            $tgl = date("d M Y", strtotime($row['tanggal']));
            $jam = date("H:i", strtotime($row['jam']));
            $status = htmlspecialchars($row['status']);

            echo "<p><strong>Jenis Layanan:</strong> " . htmlspecialchars($row['jenis_layanan']) . "</p>";
            echo "<p><strong>Tanggal & Jam:</strong> $tgl, $jam</p>";
            echo "<p class='status $status'><strong>Status:</strong> $status</p>";
            echo "<hr>";
        }

        echo '</div>';
    } else {
        echo '<p class="error">Data booking tidak ditemukan. Pastikan nama dan plat sesuai.</p>';
    }
}
?>

</body>
</html>
