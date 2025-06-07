<?php
session_start();
include 'koneksi.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result();

        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php");
                exit;
            } else {
                $error = "Password salah";
            }
        } else {
            $error = "Username tidak ditemukan";
        }
    } else {
        $error = "Username dan password wajib diisi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Blynk CarWash</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background: url('img/car-wash-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Barlow', sans-serif;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .login-container h2 {
            text-align: center;
            color: #4640de;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="login-container">
            <h2><i class="fas fa-car"></i> Login</h2>

            <?php if ($error): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="post" action="">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                <a href="register.php" class="btn btn-link btn-block">Belum punya akun? Daftar</a>
            </form>
        </div>
    </div>
</body>
</html>
