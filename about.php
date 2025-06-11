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
                    <a href="about.php" class="nav-item nav-link">Tentang</a>
                    <a href="layanan.php" class="nav-item nav-link active">Layanan</a>
                    <a href="price.html" class="nav-item nav-link">Harga</a>
                    <a href="location.html" class="nav-item nav-link">Lokasi Cuci</a>
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
        


      <!-- Layanan Mulai -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Apa yang Kami Tawarkan?</p>
            <h2>Layanan Cuci Premium</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash-1"></i>
                    <h3>Cuci Eksterior</h3>
                    <p>Kami memberikan pencucian eksterior menyeluruh untuk menghilangkan kotoran dan debu sehingga mobilmu kembali bersinar seperti baru.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash"></i>
                    <h3>Cuci Interior</h3>
                    <p>Layanan pembersihan interior kami membersihkan secara mendalam jok dan permukaan dalam mobil untuk memberikan kesegaran maksimal.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-vacuum-cleaner"></i>
                    <h3>Vakum Interior</h3>
                    <p>Kami menggunakan vakum profesional untuk menyedot debu dan kotoran dari seluruh bagian dalam mobil.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-seat"></i>
                    <h3>Cuci Jok</h3>
                    <p>Pembersihan jok secara khusus untuk menghilangkan noda dan bau, membuat mobil terasa nyaman dan bersih kembali.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-service"></i>
                    <h3>Bersih Kaca</h3>
                    <p>Pembersihan kaca tanpa gores untuk tampilan lebih jernih dan meningkatkan visibilitas saat berkendara.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-service-2"></i>
                    <h3>Cuci Basah</h3>
                    <p>Pembersihan basah menyeluruh untuk menghilangkan kotoran membandel dan memastikan hasil akhir yang bersih sempurna.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-car-wash"></i>
                    <h3>Ganti Oli</h3>
                    <p>Penggantian oli cepat dan profesional untuk menjaga performa mesin tetap optimal.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-item">
                    <i class="flaticon-brush-1"></i>
                    <h3>Perbaikan Rem</h3>
                    <p>Layanan perbaikan rem yang andal untuk memastikan keamanan kamu saat berkendara.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Layanan Selesai -->

        
        
<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimoni</p>
            <h2>Apa kata pelanggan kami</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Fajar Pratama</h3>
                    <h4>Cuci Lengkap</h4>
                    <p>
                        Layanan luar biasa! Mobil saya belum pernah sebersih ini. Pasti akan kembali lagi.
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Siti Aulia</h3>
                    <h4>Cuci Dalam</h4>
                    <p>
                        Staf ramah, pembersihan cepat, dan hasil memuaskan. Sangat direkomendasikan!
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Rizky Hidayat</h3>
                    <h4>Cuci Lengkap</h4>
                    <p>
                        Paketnya terjangkau dan hasil sangat rapi. Saya coba paket premium dan benar-benar worth it!
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Putri Anggraini</h3>
                    <h4>Cuci Luar</h4>
                    <p>
                        Booking sangat mudah, dan hasilnya melebihi ekspektasi. Sangat puas!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
    
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
