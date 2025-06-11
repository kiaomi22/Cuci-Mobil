<?php
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
                    <a href="about.html" class="nav-item nav-link">Tentang</a>
                    <a href="service.html" class="nav-item nav-link">Layanan</a>
                    <a href="price.html" class="nav-item nav-link">Harga</a>
                    <a href="location.html" class="nav-item nav-link active">Lokasi Cuci</a>
                    <a href="cek_booking_user.php" class="nav-item nav-link">Cek Pesanan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Halaman Lain</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog</a>
                            <a href="single.php" class="dropdown-item">Detail</a>
                            <a href="team.html" class="dropdown-item">Tim Kami</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Kontak</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="location.html">Pesan Sekarang</a>
                </div>                
            </div>
        </nav>
    </div>
</div>
<!-- Navigasi Selesai -->
        
        
       
       <!-- Lokasi Mulai -->
       <div class="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header text-left">
                        <p>Titik Cuci</p>
                        <h2>Titik Cuci & Perawatan Mobil</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Cabang Utama Car Wash</h3>
                                    <p>Jalan Lada Ujung III, Rajabasa, Bandar Lampung</p>
                                    <p><strong>Hubungi:</strong>+62 857-5881-0007</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Cabang 1 Car Wash</h3>
                                    <p>Jl. Durian, Sukarame, Bandar Lampung</p>
                                    <p><strong>Hubungi:</strong>+62 812-7160-7722</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Cabang 2 Car Wash</h3>
                                    <p>Perumahan Abdi Negara, Sukabumi, Bandar Lampung</p>
                                    <p><strong>Hubungi:</strong>+62 851-5519-9375</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Cabang 3 Car Wash</h3>
                                    <p>Jl. Pulau Belitung, Sukabumi, Bandar Lampung</p>
                                    <p><strong>Hubungi:</strong>+62 822-1071-6261</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form action="proses_booking.php" method="POST">
                        <div class="control-group">
                            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama" required />
                        </div>
                        <div class="control-group">
                            <input type="text" name="nomor_plat" class="form-control" placeholder="Nomor Plat" required />
                        </div>
                        <div class="control-group">
                            <select name="jenis_layanan" class="form-control" required>
                                <option value="" disabled selected>Pilih jenis layanan</option>
                                <option value="Cuci Luar">Cuci Luar</option>
                                <option value="Cuci Dalam">Cuci Dalam</option>
                                <option value="Cuci Lengkap">Cuci Lengkap</option>
                            </select>
                        </div>
                        <div class="control-group">
                            <select name="tempat_cuci" class="form-control" required>
                                <option value="" disabled selected>Pilih Lokasi Cuci</option>
                                <option value="Cabang Utama Car Wash">Cabang Utama Car Wash</option>
                                <option value="Cabang 1 Car Wash">Cabang 1 Car Wash</option>
                                <option value="Cabang 2 Car Wash">Cabang 2 Car Wash</option>
                                <option value="Cabang 3 Car Wash">Cabang 3 Car Wash</option>
                            </select>
                        </div>
                        <div class="control-group">
                            <input type="date" name="tanggal" class="form-control" required />
                        </div>
                        <div class="control-group">
                            <input type="time" name="jam" class="form-control" required />
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Footer Start -->
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
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Tautan Populer</h2>
                        <a href="">Tentang Kami</a>
                        <a href="">Kontak Kami</a>
                        <a href="">Layanan Kami</a>
                        <a href="">Titik Layanan</a>
                        <a href="">Paket Harga</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Tautan Bermanfaat</h2>
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
    <!-- Footer End -->

    <!-- Tombol Kembali ke Atas -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
