<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    // Validasi sederhana
    if ($username && $password && $email) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hash);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $error = "Gagal daftar, coba lagi.";
        }
    } else {
        $error = "Isi semua field!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Daftar - Blynk CarWash</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar</h2>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-success">Daftar</button>
            <a href="login.php" class="btn btn-link">Login</a>
        </form>
    </div>
</body>
</html>
