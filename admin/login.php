<?php
session_start();
require '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = hash('sha256', $_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Username admin" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>
