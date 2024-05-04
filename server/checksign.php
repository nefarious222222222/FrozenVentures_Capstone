<?php
session_start();

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('You need to sign in an admin account!');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../../index.php'; }, 100);</script>";
    exit;
}
?>