<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM blog WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>
    <style>
        body { font-family: Arial; background: #f2f4f7; margin: 0; display: flex; }
        .sidebar {
            width: 220px; background-color: #4640de; color: white;
            min-height: 100vh; padding: 20px;
        }
        .sidebar a {
            color: white; text-decoration: none;
            display: block; margin-bottom: 15px;
        }
        .content {
            flex: 1; padding: 30px;
        }
        .form-container {
            background: white; padding: 20px;
            border-radius: 10px; max-width: 700px;
        }
        input[type="text"], textarea, input[type="file"] {
            width: 100%; padding: 10px; margin: 10px 0 20px;
            border: 1px solid #ccc; border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4640de; color: white;
            padding: 10px 20px; border: none;
            border-radius: 5px; cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3a37c9;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="booking_list.php">📋 Daftar Booking</a>
    <a href="admin_requests.php">📩 Request & Saran</a>
    <a href="kelola_blog.php">📝 Kelola Blog</a>
    <a href="logout.php">🔒 Logout</a>
</div>

<div class="content">
    <h1>Edit Blog</h1>
    <div class="form-container">
        <form action="proses_edit_blog.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <label>Judul:</label>
            <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required>

            <label>Isi:</label>
            <textarea name="isi" rows="5" required><?= htmlspecialchars($data['isi']) ?></textarea>

            <label>Ganti Gambar:</label>
            <input type="file" name="gambar">

            <label>Kategori:</label>
            <input type="text" name="kategori" value="<?= htmlspecialchars($data['kategori']) ?>" required>

            <label>Penulis:</label>
            <input type="text" name="penulis" value="<?= htmlspecialchars($data['penulis']) ?>" required>

            <input type="submit" value="Update Blog">
        </form>
    </div>
</div>

</body>
</html>
