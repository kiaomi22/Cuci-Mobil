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

// Ambil data booking dari database
$sql = "SELECT * FROM booking ORDER BY tanggal DESC, jam DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Bookingan User - Admin Cuci Mobil</title>
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
    }
    th {
        background-color: #4640de;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    button {
        background-color: #4640de;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #3832c2;
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

<h1>Daftar Bookingan User</h1>
<a href="dashboard.php" class="back-btn">← Kembali ke Dashboard</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Nomor Plat</th>
            <th>Jenis Layanan</th>
            <th>Tempat Cuci </th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id_booking']) ?></td>
                <td><?= htmlspecialchars($row['nama_pelanggan']) ?></td>
                <td><?= htmlspecialchars($row['nomor_plat']) ?></td>
                <td><?= htmlspecialchars($row['jenis_layanan']) ?></td>
                <td><?= htmlspecialchars($row['tempat_cuci']) ?></td>
                <td><?= htmlspecialchars($row['tanggal']) ?></td>
                <td><?= htmlspecialchars($row['jam']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td>
                    <form method="POST" action="ubah_status.php" style="margin:0;">
                        <input type="hidden" name="id_booking" value="<?= $row['id_booking'] ?>">
                        <select name="status" required>
                            <option value="Pending" <?= $row['status']=='Pending' ? 'selected' : '' ?>>Pending</option>
                            <option value="Proses" <?= $row['status']=='Proses' ? 'selected' : '' ?>>Proses</option>
                            <option value="Selesai" <?= $row['status']=='Selesai' ? 'selected' : '' ?>>Selesai</option>
                            <option value="Batal" <?= $row['status']=='Batal' ? 'selected' : '' ?>>Batal</option>
                        </select>
                        <button type="submit">Ubah</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="8" style="text-align:center;">Belum ada data booking.</td></tr>
    <?php endif; ?>
    </tbody>
</table>

</body>
</html>

<?php
$conn->close();
?>
