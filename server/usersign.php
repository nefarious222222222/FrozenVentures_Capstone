<?php
session_start();

$errorDiv = '';

if (!isset($_SESSION['customer'])) {
    $errorDiv .= "
    <button class='sign-button siiButton'>Sign In</button>
    <button class='sign-button suiButton'>Sign Up</button>
            ";
    
} else {
    $errorDiv .= "
    <button class='sign-button soiButton'>Sign Out</button>
            ";
}


?>