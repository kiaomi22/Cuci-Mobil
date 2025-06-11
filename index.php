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
                    <a href="index.php" class="nav-item nav-link active">Beranda</a>
                    <a href="about.php" class="nav-item nav-link">Tentang</a>
                    <a href="layanan.php" class="nav-item nav-link">Layanan</a>
                    <a href="harga.php" class="nav-item nav-link">Harga</a>
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



<!-- Carousel Mulai -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/carousel-1.jpg" alt="Gambar">
                </div>
                <div class="carousel-text">
                    <h3>Spa & Detailing Mobil</h3>
                    <h1>Kembalikan Kilau Mobilmu</h1>
                    <p>
                        Berikan mobilmu perawatan terbaik dengan layanan cuci dan detailing premium dari kami.
                    </p>
                    <a class="btn btn-custom" href="service.html">Lihat Layanan</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/carousel-2.jpg" alt="Gambar">
                </div>
                <div class="carousel-text">
                    <h3>Perawatan Mobil Terpercaya</h3>
                    <h1>Rasakan Layanan Berkualitas</h1>
                    <p>
                        Tim ahli kami memastikan mobilmu tampak dan terasa seperti baru — luar dalam.
                    </p>
                    <a class="btn btn-custom" href="service.html">Lihat Layanan</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/carousel-3.jpg" alt="Gambar">
                </div>
                <div class="carousel-text">
                    <h3>Cuci Lengkap</h3>
                    <h1>Sempurna Luar & Dalam</h1>
                    <p>
                        Mulai dari pembersihan menyeluruh hingga waxing pelindung, kami hadirkan perawatan maksimal untuk mobilmu.
                    </p>
                    <a class="btn btn-custom" href="service.html">Lihat Layanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel Selesai -->
        

<!-- Tentang Kami Mulai -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Gambar">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header text-left">
                    <p>Tentang Kami</p>
                    <h2>Cuci dan Detailing Mobil</h2>
                </div>
                <div class="about-content">
                    <p>
                        Di Carwash, kami ahli dalam layanan cuci dan detailing mobil profesional yang dirancang untuk menjaga kendaraanmu tetap bersih luar dan dalam. Kami percaya bahwa mobil bersih bukan hanya terlihat lebih baik — tetapi juga lebih nyaman dikendarai.
                    </p>
                    <ul>
                        <li><i class="far fa-check-circle"></i>Cuci jok – Menghilangkan noda dan kotoran pada jok mobil</li>
                        <li><i class="far fa-check-circle"></i>Vakum – Pembersihan menyeluruh untuk interior bebas debu</li>
                        <li><i class="far fa-check-circle"></i>Cuci basah interior – Pembersihan menyeluruh pada permukaan interior</li>
                        <li><i class="far fa-check-circle"></i>Bersih kaca – Pembersihan tanpa gores untuk kaca bening</li>
                    </ul>
                    <a class="btn btn-custom" href="">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tentang Kami Selesai -->




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

        
        
<!-- Fakta Mulai -->
<div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">5</h3>
                        <p>Titik Layanan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-user"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">10</h3>
                        <p>Teknisi & Pekerja</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">100</h3>
                        <p>Pelanggan Puas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-check"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">250</h3>
                        <p>Proyek Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fakta Selesai -->

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
                        <h3>Cuci Basic</h3>
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
                        <a class="btn btn-custom" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <h3>Cuci Premium</h3>
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
                        <a class="btn btn-custom" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Cuci Komplet</h3>
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
                        <a class="btn btn-custom" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Harga Selesai -->

<!-- Lokasi Mulai -->
<div class="location">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-header text-left">
                    <p>Titik Cuci</p>
                    <h2>Lokasi Layanan Cuci Mobil</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                                <h3>Cabang Utama Car Wash</h3>
                                <p>Jalan Lada Ujung III, Rajabasa, Bandar Lampung</p>
                                <p><strong>Telp:</strong>+62 857-5881-0007</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                                <h3>Cabang 1 Car Wash</h3>
                                <p>Jl. Durian, Sukarame, Bandar Lampung</p>
                                <p><strong>Telp:</strong>+62 812-7160-7722</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                            <h3>Cabang 2 Car Wash</h3>
                                <p>Perumahan Abdi Negara, Sukabumi, Bandar Lampung</p>
                                <p><strong>Telp:</strong>+62 851-5519-9375</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                            <h3>Cabang 3 Car Wash</h3>
                                <p>Jl. Pulau Belitung, Sukabumi, Bandar Lampung</p>
                                <p><strong>Telp:</strong>+62 822-1071-6261</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-5">
             <div class="location-form">
             <h3>Request Cuci Mobil</h3>
            <form id="requestForm" method="post" action="request_submit.php">
            <div class="control-group">
                <input type="text" class="form-control" name="name" placeholder="Nama" required="required" />
            </div>
            <div class="control-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
            </div>
            <div class="control-group">
                <textarea class="form-control" name="description" placeholder="Keterangan" required="required"></textarea>
            </div>
            <div>
                <button class="btn btn-custom" type="button" onclick="checkLogin()">Kirim Permintaan</button>
            </div>
        </form>
    </div>
</div>

        
        </div>
    </div>
</div>
<!-- Lokasi Selesai -->



<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Kenali Tim Kami</p>
            <h2>Insinyur & Pekerja Kami</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.png" alt="Foto Tim">
                    </div>
                    <div class="team-text">
                        <h2>Aleea Carisa</h2>
                        <p>Teknisi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.png" alt="Foto Tim">
                    </div>
                    <div class="team-text">
                        <h2>Febby Yolanda</h2>
                        <p>Teknisi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.png" alt="Foto Tim">
                    </div>
                    <div class="team-text">
                        <h2>Nur Aila Zahra</h2>
                        <p>Pekerja</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.png" alt="Foto Tim">
                    </div>
                    <div class="team-text">
                        <h2>Zaskia Jihan Nabila</h2>
                        <p>Pekerja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

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
                    <h4>Cuci Kompleks</h4>
                    <p>
                        Layanan luar biasa! Mobil saya belum pernah sebersih ini. Pasti akan kembali lagi.
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Siti Aulia</h3>
                    <h4>Cuci Premium</h4>
                    <p>
                        Staf ramah, pembersihan cepat, dan hasil memuaskan. Sangat direkomendasikan!
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Rizky Hidayat</h3>
                    <h4>Cuci Kompleks</h4>
                    <p>
                        Paketnya terjangkau dan hasil sangat rapi. Saya coba paket premium dan benar-benar worth it!
                    </p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" alt="Foto">
                <div class="testimonial-text">
                    <h3>Putri Anggraini</h3>
                    <h4>Cuci Dasar</h4>
                    <p>
                        Booking sangat mudah, dan hasilnya melebihi ekspektasi. Sangat puas!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Blog Kami</p>
            <h2>Berita & Artikel Terbaru</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Gambar">
                        <div class="meta-date">
                            <span>01</span>
                            <strong>Jun</strong>
                            <span>2025</span>
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">5 Alasan Kenapa Mobil Harus Sering Dicuci</a></h3>
                        <p>
                            Mencuci mobil secara rutin menjaga kualitas cat, mencegah karat, dan meningkatkan keselamatan berkendara. Yuk cari tahu kenapa ini penting!
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-folder"></i><a href="">Perawatan Mobil</a></p>
                        <p><i class="fa fa-comments"></i><a href="">12 Komentar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Gambar">
                        <div class="meta-date">
                            <span>15</span>
                            <strong>Mei</strong>
                            <span>2025</span>
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Cara Memilih Paket Cuci yang Tepat</a></h3>
                        <p>
                            Dari paket dasar hingga kompleks, tiap layanan punya manfaat berbeda. Simak panduan memilih paket sesuai kondisi mobil dan budget kamu!
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-folder"></i><a href="">Tips</a></p>
                        <p><i class="fa fa-comments"></i><a href="">8 Komentar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.jpg" alt="Gambar">
                        <div class="meta-date">
                            <span>22</span>
                            <strong>Apr</strong>
                            <span>2025</span>
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="#">Pentingnya Membersihkan Interior Mobil</a></h3>
                        <p>
                            Interior yang bersih bikin udara lebih sehat dan bikin nyaman saat berkendara. Simak kenapa layanan pembersih basah kami jadi solusi terbaik!
                        </p>
                    </div>
                    <div class="blog-meta">
                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                        <p><i class="fa fa-folder"></i><a href="">Interior</a></p>
                        <p><i class="fa fa-comments"></i><a href="">5 Komentar</a></p>
                    </div>
                </div>
            </div>
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

    <script>
        function checkLogin() {
            var isLoggedIn = <?php echo json_encode($is_logged_in); ?>;

            if (isLoggedIn) {
                document.getElementById("requestForm").submit();
            } else {
                alert("Silakan login terlebih dahulu untuk mengirim permintaan.");
                window.location.href = "login.php"; // Ganti dengan path login kamu
            }
        }
    </script>


    </body>
</html>
