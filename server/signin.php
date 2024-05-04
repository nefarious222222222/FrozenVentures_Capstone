<?php
//start session
session_start();

$errorDiv = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $users = ["Admin", "Seller", "Customer"];
    $pass = ["Admin123", "Seller123", "Customer123"];
    $roles = ["admin", "seller", "customer"];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $key = array_search($username, $users);

    if ($key !== false) {
        if ($pass[$key] === $password) {
            $role = $roles[$key];
            if ($role === "admin") {
                $_SESSION["admin"] = $role;
                header("Location: ../admin/admin.php");
                exit();
            } elseif ($role === "seller") {
                $_SESSION["seller"] = $role;
                header("Location: ../pages/seller.php");
                exit();
            } elseif ($role === "customer") {
                $_SESSION["customer"] = $role;
                header("Location: ../../index.php");
                exit();
            }
        } else {

            $errorDiv .= "
            <div class='failed-message'>
                <h2>Failed to Sign In</h2>
                <p>
                Sorry, the login credentials you entered are incorrect.
                </p>
                <button onclick = 'closeFail()'>Okay</button>
            </div>
            ";
        }
    } else {

        $errorDiv .= "
        <div class='failed-message'>
            <h2>Failed to Sign In</h2>
            <p>
            Sorry, the login credentials you entered are incorrect.
            </p>
            <button onclick = 'closeFail()'>Okay</button>
        </div>
        ";
    }

}
?>