<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login_admin.php");
    exit;
}

// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "cuci_mobil";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Total booking hari ini
$today = date('Y-m-d');
$query_today = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE tanggal = '$today'");
$total_today = $query_today->fetch_assoc()['total'];

// Status booking
$belum = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE status = 'Pending'")->fetch_assoc()['total'];
$proses = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE status = 'Proses'")->fetch_assoc()['total'];
$selesai = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE status = 'Selesai'")->fetch_assoc()['total'];
$batal = $conn->query("SELECT COUNT(*) AS total FROM booking WHERE status = 'Batal'")->fetch_assoc()['total'];

// Booking terbaru (5 terakhir)
$latest = $conn->query("SELECT * FROM booking ORDER BY created_at DESC LIMIT 5");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 220px;
            background-color: #4640de;
            color: white;
            min-height: 100vh;
            padding: 20px;
        }
        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 15px;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 30px;
            flex: 1;
        }
        h1 {
            color: #333;
        }
        .statistik {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 200px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .box h3 {
            margin: 0 0 10px;
            color: #4640de;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4640de;
            color: white;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        button {
            background-color: #4640de;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        select {
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="booking_list.php">📋 Daftar Booking</a>
    <a href="logout.php">🔒 Logout</a>
</div>

<div class="content">
    <h1>Selamat Datang, Admin!</h1>

    <div class="statistik">
        <div class="box">
            <h3>Total Booking Hari Ini</h3>
            <p><?= $total_today ?></p>
        </div>
        <div class="box">
            <h3>Belum Diproses</h3>
            <p><?= $belum ?></p>
        </div>
        <div class="box">
            <h3>Sedang Diproses</h3>
            <p><?= $proses ?></p>
        </div>
        <div class="box">
            <h3>Selesai</h3>
            <p><?= $selesai ?></p>
        </div>
        <div class="box">
            <h3>Batal</h3>
            <p><?= $batal ?></p>
        </div>
    </div>

    <h2>5 Booking Terbaru</h2>
    <table>
        <thead>
            <tr>
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
            <?php while ($row = $latest->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama_pelanggan']) ?></td>
                    <td><?= htmlspecialchars($row['nomor_plat']) ?></td>
                    <td><?= htmlspecialchars($row['jenis_layanan']) ?></td>
                    <td><?= htmlspecialchars($row['tempat_cuci']) ?></td>
                    <td><?= htmlspecialchars($row['tanggal']) ?></td>
                    <td><?= htmlspecialchars($row['jam']) ?></td>
                    <td><?= htmlspecialchars($row['status']) ?></td>
                    <td>
                        <form method="POST" action="ubah_status.php">
                            <input type="hidden" name="id_booking" value="<?= $row['id_booking'] ?>">
                            <select name="status">
                                <option value="Pending" <?= $row['status']=='Pending'?'selected':'' ?>>Pending</option>
                                <option value="Proses" <?= $row['status']=='Proses'?'selected':'' ?>>Proses</option>
                                <option value="Selesai" <?= $row['status']=='Selesai'?'selected':'' ?>>Selesai</option>
                                <option value="Batal" <?= $row['status']=='Batal'?'selected':'' ?>>Batal</option>
                            </select>
                            <button type="submit">Ubah</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php $conn->close(); ?>
