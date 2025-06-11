<?php
// Mulai sesi hanya sekali
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$is_logged_in = isset($_SESSION['user_id']);
?>

<!-- ===== Top Bar Start ===== -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.php">
                        <h1>Blynk<span>CarWash</span></h1>
                    </a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-8 col-md-12">
                <div class="row">

                    <!-- Jam Buka -->
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Jam Buka</h3>
                                <p>Senin – Jumat, 08:00–21:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Telepon</h3>
                                <p>+62 857-5881-0007</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email + Login/Logout -->
                    <div class="col-4">
                        <div class="top-bar-item d-flex align-items-center justify-content-between">
                            <div class="d-flex">
                                <div class="top-bar-icon mr-2">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email</h3>
                                    <p>blynkcarwash@gmail.com</p>
                                </div>
                            </div>
                            <?php if ($is_logged_in): ?>
                                <a href="logout.php" class="btn btn-danger btn-sm ml-3">Keluar</a>
                            <?php else: ?>
                                <a href="login.php" class="btn btn-primary btn-sm ml-3">Masuk</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===== Top Bar End ===== -->
