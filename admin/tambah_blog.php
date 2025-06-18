<?php
include '../config.php'; // sesuaikan jika nama file koneksinya bukan config.php

// Proses tambah blog
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $tanggal = date('Y-m-d');

    // Upload gambar
    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_path = "uploads/" . $gambar_name;

    if (move_uploaded_file($gambar_tmp, $gambar_path)) {
        $query = "INSERT INTO blog (judul, isi, gambar, kategori, penulis, tanggal) 
                  VALUES ('$judul', '$isi', '$gambar_path', '$kategori', '$penulis', '$tanggal')";
        mysqli_query($conn, $query);
        echo "<script>alert('Artikel berhasil ditambahkan!'); window.location.href='kelola_blog.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah gambar!');</script>";
    }
}

// Proses hapus blog
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
    echo "<script>alert('Artikel berhasil dihapus!'); window.location.href='kelola_blog.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kelola Blog</title>
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
        .form-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 700px;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4640de;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3730c9;
        }
        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #4640de;
            color: white;
        }
        .btn-edit, .btn-hapus {
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
        }
        .btn-edit {
            background-color: #28a745;
            color: white;
        }
        .btn-hapus {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="booking_list.php">📋 Daftar Booking</a>
    <a href="admin_requests.php">📩 Request & Saran Pelanggan</a>
    <a href="kelola_blog.php">📝 Kelola Blog</a>
    <a href="logout.php">🔒 Logout</a>
</div>

<div class="content">
    <h1>Tambah Artikel Blog</h1>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="judul" required>

            <label>Isi:</label>
            <textarea name="isi" rows="6" required></textarea>

            <label>Gambar:</label>
            <input type="file" name="gambar" accept="image/*" required>

            <label>Kategori:</label>
            <input type="text" name="kategori" required>

            <label>Penulis:</label>
            <input type="text" name="penulis" required>

            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>

    <h2>Daftar Artikel Blog</h2>
    <table>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM blog ORDER BY tanggal DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['judul']) . "</td>
                    <td>" . htmlspecialchars($row['kategori']) . "</td>
                    <td>" . htmlspecialchars($row['penulis']) . "</td>
                    <td>" . htmlspecialchars($row['tanggal']) . "</td>
                    <td>
                        <a href='edit_blog.php?id={$row['id']}' class='btn-edit'>Edit</a>
                        <a href='kelola_blog.php?hapus={$row['id']}' class='btn-hapus' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
