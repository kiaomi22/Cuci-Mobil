<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login_admin.php");
    exit;
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

// Ambil data request dari database
$sql = "SELECT * FROM carwash_request ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Request & Saran Pelanggan - Admin Cuci Mobil</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background: #f4f6f8;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
    }
    th, td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        vertical-align: top;
    }
    th {
        background-color: #4640de;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    h1 {
        margin-bottom: 20px;
        color: #333;
    }
    a.back-btn {
        display: inline-block;
        margin-bottom: 15px;
        padding: 8px 16px;
        background-color: #4640de;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 600;
    }
    a.back-btn:hover {
        background-color: #3832c2;
    }
</style>
</head>
<body>

<h1>Request & Saran Pelanggan</h1>
<a href="dashboard.php" class="back-btn">← Kembali ke Dashboard</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Pesan / Saran</th>
            <th>Tanggal Kirim</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= nl2br(htmlspecialchars($row['description'])) ?></td>
                <td><?= htmlspecialchars($row['created_at']) ?></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="5" style="text-align:center;">Belum ada data request atau saran.</td></tr>
    <?php endif; ?>
    </tbody>
</table>

</body>
</html>

<?php
$conn->close();
?>
