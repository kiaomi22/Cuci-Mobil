<?php
include 'koneksi.php'; // atau sesuaikan dengan path koneksi kamu

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID blog tidak ditemukan!";
    exit;
}

$id = (int) $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM blog WHERE id = $id");

if (!$data = mysqli_fetch_assoc($query)) {
    echo "Data blog tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($data['judul']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 30px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        img.blog-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .meta {
            font-size: 0.9em;
            color: gray;
            margin-bottom: 20px;
        }

        a.kembali {
            display: inline-block;
            margin-top: 30px;
            color: #4640de;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo htmlspecialchars($data['judul']); ?></h1>
    <div class="meta">
        Ditulis oleh <strong><?php echo htmlspecialchars($data['penulis']); ?></strong>
        | Kategori: <?php echo htmlspecialchars($data['kategori']); ?>
        | Tanggal: <?php echo date("d M Y", strtotime($data['tanggal'])); ?>
    </div>

    <img src="uploads/<?php echo htmlspecialchars($data['gambar']); ?>" alt="Gambar Blog" class="blog-image">

    <p><?php echo nl2br($data['isi']); ?></p>

    <a href="blog.php" class="kembali">← Kembali ke Daftar Blog</a>
</div>

</body>
</html>
