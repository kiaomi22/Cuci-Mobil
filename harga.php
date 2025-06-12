<?php
include 'koneksi.php';
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BLYNK CAR-WASH</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<!-- Navigasi Mulai -->
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
                    <a href="harga.php" class="nav-item nav-link active">Harga</a>
                    <a href="lokasi.php" class="nav-item nav-link">Lokasi Cuci</a>
                    <a href="cek_booking_user.php" class="nav-item nav-link">Cek Pesanan</a>
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
                <a class="btn btn-custom" href="lokasi.php">Pesan Sekarang</a>
                </div>                
            </div>
        </nav>
    </div>
</div>
<!-- Navigasi Selesai -->
        
        
 <!-- Harga Mulai -->
<div class="price">
    <div class="container">
        <div class="section-header text-center">
            <p>Paket Cuci</p>
            <h2>Pilih Paket Kamu</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Cuci Luar</h3>
                        <h2><span>Rp</span><strong>75.000</strong></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Cuci Jok</li>
                            <li><i class="far fa-check-circle"></i>Vakum Kabin</li>
                            <li><i class="far fa-check-circle"></i>Cuci Luar</li>
                            <li><i class="far fa-times-circle"></i>Cuci Dalam Basah</li>
                            <li><i class="far fa-times-circle"></i>Bersih Kaca</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                         <a class="btn btn-custom" href="lokasi.php">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <h3>Cuci Dalam</h3>
                        <h2><span>Rp</span><strong>105.000</strong></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Cuci Jok</li>
                            <li><i class="far fa-check-circle"></i>Vakum Kabin</li>
                            <li><i class="far fa-check-circle"></i>Cuci Luar</li>
                            <li><i class="far fa-check-circle"></i>Cuci Dalam Basah</li>
                            <li><i class="far fa-times-circle"></i>Bersih Kaca</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                         <a class="btn btn-custom" href="lokasi.php">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Cuci Lengkap</h3>
                        <h2><span>Rp</span><strong>150.000</strong></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Cuci Jok</li>
                            <li><i class="far fa-check-circle"></i>Vakum Kabin</li>
                            <li><i class="far fa-check-circle"></i>Cuci Luar</li>
                            <li><i class="far fa-check-circle"></i>Cuci Dalam Basah</li>
                            <li><i class="far fa-check-circle"></i>Bersih Kaca</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                         <a class="btn btn-custom" href="lokasi.php">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Harga Selesai -->
        
        
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
