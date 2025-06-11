<?php
include 'koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    echo "<script>
        alert('Silakan login untuk mengakses halaman ini.');
        window.location.href = 'login.php';
    </script>";
    exit();
}

require_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cek Status Booking | BLYNK CAR-WASH</title>
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
                        <a href="cek_booking_user.php" class="nav-item nav-link active">Cek Pesanan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Halaman Lain</a>
                            <div class="dropdown-menu">
                                <a href="blog.php" class="dropdown-item">Blog</a>
                                <a href="single.php" class="dropdown-item">Detail</a>
                                <a href="team.php" class="dropdown-item">Tim Kami</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Kontak</a>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-custom" href="location.php">Pesan Sekarang</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2 class="mb-0">Cek Status Booking</h2>
                        </div>
                        <div class="card-body">
                            <!-- Form input nama dan plat -->
                            <form method="POST" action="">
                                <div class="form-group mb-3">
                                    <label for="nama_pelanggan">Nama Pelanggan:</label>
                                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="Contoh: Jihan" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nomor_plat">Nomor Plat Kendaraan:</label>
                                    <input type="text" name="nomor_plat" id="nomor_plat" class="form-control" placeholder="Contoh: B1234XYZ" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Cek Status</button>
                            </form>
    
                            <!-- PHP logic dan hasil -->
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $nama = trim($_POST['nama_pelanggan']);
                                $plat = strtoupper(trim($_POST['nomor_plat']));
    
                                $stmt = $conn->prepare("SELECT * FROM booking WHERE nama_pelanggan = ? AND nomor_plat = ? ORDER BY tanggal DESC, jam DESC");
                                $stmt->bind_param("ss", $nama, $plat);
                                $stmt->execute();
                                $result = $stmt->get_result();
    
                                if ($result->num_rows > 0) {
                                    echo "<div class='mt-4'>";
                                    echo "<h5 class='mb-3'>Hasil Booking untuk <em>" . htmlspecialchars($nama) . "</em> - <em>" . htmlspecialchars($plat) . "</em></h5>";
    
                                    while ($row = $result->fetch_assoc()) {
                                        $tgl = date("d M Y", strtotime($row['tanggal']));
                                        $jam = date("H:i", strtotime($row['jam']));
                                        $status = htmlspecialchars($row['status']);
    
                                        echo "<div class='border rounded p-3 mb-3 bg-light'>";
                                        echo "<p><strong>Jenis Layanan:</strong> " . htmlspecialchars($row['jenis_layanan']) . "</p>";
                                        echo "<p><strong>Tanggal & Jam:</strong> $tgl, $jam</p>";
                                        echo "<p><strong>Tempat Cuci:</strong> " . htmlspecialchars($row['tempat_cuci']) . "</p>";
                                        echo "<p><strong>Status:</strong> <span class='badge bg-info text-dark'>$status</span></p>";
                                        echo "</div>";
                                    }
    
                                    echo "</div>";
                                } else {
                                    echo "<div class='mt-4 alert alert-warning'>Data booking tidak ditemukan. Pastikan nama dan plat sesuai.</div>";
                                }
    
                                $stmt->close();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
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
            <p>© <a href="#">BLYNK CAR-WASH</a>, Hak Cipta Dilindungi. Desain oleh <a href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
