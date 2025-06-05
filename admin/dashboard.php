<?php
include '../test_koneksi.php';  // jika file ini berada dalam folder admin

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

require '../includes/db.php';

$result = $conn->query("SELECT * FROM booking ORDER BY dibuat_pada DESC");
?>

<h2>Daftar Booking</h2>
<a href="logout.php">Logout</a>
<table border="1">
  <tr>
    <th>No</th><th>Nama</th><th>Plat</th><th>Layanan</th><th>Tanggal</th><th>Jam</th><th>Aksi</th>
  </tr>
  <?php
  $no = 1;
  while ($row = $result->fetch_assoc()):
  ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_pelanggan'] ?></td>
    <td><?= $row['nomor_plat'] ?></td>
    <td><?= $row['jenis_layanan'] ?></td>
    <td><?= $row['tanggal'] ?></td>
    <td><?= $row['jam'] ?></td>
    <td><a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a></td>
  </tr>
  <?php endwhile; ?>
</table>
