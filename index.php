<?php
include 'koneksi.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include 'header.php';
include 'menu.php'; 
include 'footer.php';
?>