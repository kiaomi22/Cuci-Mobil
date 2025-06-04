<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

require '../includes/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM booking WHERE id=$id");
}
header("Location: dashboard.php");
?>
