<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
echo "Selamat datang Admin: " . $_SESSION['username'] . "<br>";
echo "<a href='../logout.php'>Logout</a><br><br>";

// Contoh menampilkan data mobil
include '../koneksi.php';

$query = "SELECT * FROM mobil";
$result = mysqli_query($conn, $query);

echo "<h3>Data Mobil</h3>";
echo "<a href='mobil_add.php'>Tambah Mobil</a><br><br>";

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Nama Mobil</th><th>Jenis</th><th>Harga</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nama_mobil']."</td>";
    echo "<td>".$row['jenis_mobil']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td>
            <a href='mobil_edit.php?id=".$row['id']."'>Edit</a> |
            <a href='mobil_delete.php?id=".$row['id']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>
