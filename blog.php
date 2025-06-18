<?php
include 'koneksi.php';
require_once 'header.php';

// Ambil data dari tabel blog
$query = "SELECT * FROM blog ORDER BY tanggal DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BLYNK CAR-WASH | Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navigasi -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link">Beranda</a>
                    <a href="about.php" class="nav-item nav-link">Tentang</a>
                    <a href="layanan.php" class="nav-item nav-link">Layanan</a>
                    <a href="harga.php" class="nav-item nav-link">Harga</a>
                    <a href="lokasi.php" class="nav-item nav-link">Lokasi Cuci</a>
                    <a href="cek_booking_user.php" class="nav-item nav-link">Cek Pesanan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Halaman Lain</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Blog</a>
                            <a href="single.php" class="dropdown-item">Detail</a>
                            <a href="team.php" class="dropdown-item">Tim Kami</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Kontak</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="lokasi.php">Pesan Sekarang</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navigasi Selesai -->

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Blog Kami</p>
            <h2>Berita & Artikel Terbaru</h2>
        </div>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/<?php echo htmlspecialchars($row['gambar']); ?>" alt="Gambar" class="img-fluid">
                            <div class="meta-date">
                                <span><?php echo date("d", strtotime($row['tanggal'])); ?></span>
                                <strong><?php echo date("M", strtotime($row['tanggal'])); ?></strong>
                                <span><?php echo date("Y", strtotime($row['tanggal'])); ?></span>
                            </div>
                        </div>
                        <div class="blog-text">
                            <h3><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['judul']); ?></a></h3>
                            <p><?php echo substr(strip_tags($row['isi']), 0, 100); ?>...</p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i> <?php echo htmlspecialchars($row['penulis'] ?? 'Admin'); ?></p>
                            <p><i class="fa fa-folder"></i> <?php echo htmlspecialchars($row['kategori'] ?? 'Umum'); ?></p>
                            <p><i class="fa fa-comments"></i> 0 Komentar</p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Blog End -->

 <!-- Footer Mulai -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Hubungi Kami</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Jalan Lada Ujung III, Rajabasa, Bandar Lampung</p>
                    <p><i class="fa fa-phone-alt"></i>+62 857-5881-0007</p>
                    <p><i class="fa fa-envelope"></i>blynkcarwash@gmail.com</p>
                    <div class="footer-social">
                        <a class="btn" href="https://x.com/blynkcarwash"><i class="fab fa-twitter"></i></a>
                        <a class="btn" href="https://www.facebook.com/blynkcarwash"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn" href="https://www.youtube.com/blynkcarwash"><i class="fab fa-youtube"></i></a>
                        <a class="btn" href="https://www.instagram.com/blynkcarwash"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Tautan Populer</h2>
                    <a href="">Tentang Kami</a>
                    <a href="">Hubungi Kami</a>
                    <a href="">Layanan Kami</a>
                    <a href="">Titik Layanan</a>
                    <a href="">Paket Harga</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Tautan Berguna</h2>
                    <a href="">Syarat Penggunaan</a>
                    <a href="">Kebijakan Privasi</a>
                    <a href="">Cookies</a>
                    <a href="">Bantuan</a>
                    <a href="">FAQ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>&copy; <a href="#">BLYNK CAR-WASH</a>, Hak Cipta Dilindungi. Desain oleh <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
</div>
<!-- Footer Selesai -->


<!-- Tombol Kembali ke Atas -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<!-- Pustaka JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<!-- File Javascript Kontak -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Javascript Template -->
<script src="js/main.js"></script>

    </body>
</html>

</body>
</html>
