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
                        <a href="contact.php" class="nav-item nav-link active">Kontak</a>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-custom" href="location.php">Pesan Sekarang</a>
                    </div>                
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigasi Selesai -->
        
        
    <!-- Kontak Mulai -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Hubungi Kami</p>
                <h2>Kontak untuk pertanyaan apa pun</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <h2>Informasi Kontak Cepat</h2>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Jam Operasional</h3>
                                <p>Senin - Jumat, 8:00 - 9:00</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Telepon</h3>
                                <p>+62 857-5881-0007</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Email</h3>
                                <p>blynkcarwash@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                   <div id="success"></div>
<form id="waForm">
    <div class="control-group">
        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required />
    </div>
    <div class="control-group">
        <input type="email" class="form-control" id="email" placeholder="Email Anda" required />
    </div>
    <div class="control-group">
        <input type="text" class="form-control" id="subject" placeholder="Subjek Pertanyaan" required />
    </div>
    <div class="control-group">
        <textarea class="form-control" id="message" placeholder="Tulis Pertanyaan Anda" required rows="8" style="resize: vertical;"></textarea>
    </div>
    <div>
        <button class="btn btn-custom" id="submitBtn" type="submit">Kirim via WhatsApp</button>
    </div>
</form>
                    
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2623130179118!2d105.23589637479635!3d-5.376916894601972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db001afdbd35%3A0x5af9156d26914f4d!2sKost%20Hanifa!5e0!3m2!1sid!2sid!4v1749059518891!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak Selesai -->

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
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Menu Navigasi</h2>
                        <a href="index.html">Beranda</a>
                        <a href="about.html">Tentang</a>
                        <a href="service.html">Layanan</a>
                        <a href="price.html">Harga</a>
                        <a href="location.html">Lokasi Cuci</a>
                        <a href="cek_booking_user.php">Cek Pesanan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Halaman Lain</h2>
                        <a href="blog.html">Blog</a>
                        <a href="single.php">Detail</a>
                        <a href="team.html">Tim Kami</a>
                        <a href="contact.html">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Selesai -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

  
<!-- WA Script -->
   <script>
    document.getElementById('waForm').addEventListener('submit', function(e) {
        e.preventDefault();

        <?php if (!isset($_SESSION['username'])): ?>
            alert("Silakan login terlebih dahulu untuk mengirim pesan.");
            return;
        <?php endif; ?>

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !subject || !message) {
            alert("Mohon isi semua kolom terlebih dahulu.");
            return;
        }

        const phoneNumber = "6285758810007";
        const rawMessage = 
            "Formulir Kontak - Blynk Carwash\n\n" +
            "Nama: " + name + "\n" +
            "Email: " + email + "\n" +
            "Subjek: " + subject + "\n" +
            "Pesan: " + message + "\n\n" +
            "Terima kasih!";

        const whatsappMessage = encodeURIComponent(rawMessage);
        const waUrl = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(waUrl, '_blank');
    });
</script>
</body>
</html>

