<?php
session_start();


session_destroy();

echo "<script>alert('Successfully Signed Out!');</script>";
echo "<script>setTimeout(function() { window.location.href = ' ../pages/sign/sign-in.php'; }, 100);</script>";
exit();
?>