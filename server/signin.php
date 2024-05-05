<?php
include_once('dbConnection.php');
session_start();
$errorDiv = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
            if (strcasecmp($row['role'], 'Distributor') == 0) {
                header("Location: ../pages/seller.php");
                exit();
            } elseif (strcasecmp($row['role'], 'Retailer') == 0) {
                $_SESSION['retailer'] = $username;
                header("Location: ../pages/seller.php");
                exit();
            } elseif (strcasecmp($row['role'], 'Customer') == 0) {
                $_SESSION['customer'] = $username;
                header("Location: ../../index.php");
                exit();
            } else {
                $errorDiv .= "
                <div class='failed-message'>
                    <h2>Failed to Sign In</h2>
                    <p>Sorry, the login credentials you entered are incorrect.</p>
                    <button onclick='closeFail()'>Okay</button>
                </div>
                ";
            }
    } else {
        $errorDiv .= "
        <div class='failed-message'>
            <h2>Failed to Sign In</h2>
            <p>Sorry, the login credentials you entered are incorrect.</p>
            <button onclick='closeFail()'>Okay</button>
        </div>
        ";
    }
    $conn->close();
}
?>