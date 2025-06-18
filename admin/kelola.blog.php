<?php include '../koneksi.php'; ?>

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
            flex: 1;
            padding: 40px;
        }

        h1, h2 {
            color: #333;
        }

        .form-container, .blog-list {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4640de;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3730c9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        img {
            max-width: 100px;
            border-radius: 6px;
        }

        a.btn {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            margin-right: 5px;
        }

        .edit-btn {
            background: #ffb703;
            color: white;
        }

        .delete-btn {
            background: #d90429;
            color: white;
        }

        .edit-btn:hover, .delete-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="booking_list.php">📋 Daftar Booking</a>
    <a href="admin_requests.php">📩 Request & Saran</a>
    <a href="kelola.blog.php">📝 Kelola Blog</a>
    <a href="logout.php">🔒 Logout</a>
</div>

<div class="content">
    <h1>Tambah Blog</h1>
    <div class="form-container">
        <form action="proses_tambah_blog.php" method="post" enctype="multipart/form-data">
            <label>Judul:</label>
            <input type="text" name="judul" required>

            <label>Isi:</label>
            <textarea name="isi" rows="5" required></textarea>

            <label>Gambar:</label>
            <input type="file" name="gambar" accept="image/*" required>

            <label>Kategori:</label>
            <input type="text" name="kategori" required>

            <label>Penulis:</label>
            <input type="text" name="penulis" required>

            <label>Tanggal:</label>
            <input type="date" name="tanggal" required>

            <input type="submit" value="Tambah Artikel">
        </form>
    </div>

    <h2>Daftar Blog</h2>
    <div class="blog-list">
        <table>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>
                        <td>{$row['judul']}</td>
                        <td>{$row['kategori']}</td>
                        <td>{$row['penulis']}</td>
                        <td><img src='../uploads/{$row['gambar']}' alt='Gambar'></td>
                        <td>
                            <a class='btn edit-btn' href='edit_blog.php?id={$row['id']}'>Edit</a>
                            <a class='btn delete-btn' href='hapus_blog.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus blog ini?')\">Hapus</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
