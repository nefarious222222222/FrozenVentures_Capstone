<?php
include ('dbConnection.php');
session_start();

$errors = [];
$errorDiv = '';

function emailExists($conn, $email)
{
    $stmt = $conn->prepare("SELECT * FROM personal WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function usernameExists($conn, $username)
{
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function validateContactNumber($phone)
{
    return (is_numeric($phone) && strlen($phone) === 11);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password1 = $_POST["pass1"];
    $password2 = $_POST["pass2"];
    $role = "Customer";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sex = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (empty($username) || empty($password1) || empty($password2) || empty($email) || empty($phone)) {
        $errors[] = "All fields are required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is not valid";
    }

    if (emailExists($conn, $email)) {
        $errors[] = "Email already exists";
    }

    if (usernameExists($conn, $username)) {
        $errors[] = "Username already exists";
    }

    if (strlen($password1) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    if ($password1 !== $password2) {
        $errors[] = "Password does not match";
    }

    if (!validateContactNumber($phone)) {
        $errors[] = "Contact number is not valid";
    }

    if (empty($errors)) {
        $username = mysqli_real_escape_string($conn, $username);
        $passHash = password_hash($password1, PASSWORD_DEFAULT);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $phone = $_POST["phone"];

        $sql = "INSERT INTO user (username, password, role) VALUES (?, ?, ?)";
        $stmt1 = $conn->prepare($sql);
        $stmt1->bind_param('sss', $username, $password1, $role);

        if ($stmt1->execute()) {

            $user_id = $conn->insert_id;
            $_SESSION["customer"] = $user_id;

            $stmt2 = $conn->prepare("INSERT INTO personal (fname, lname, phone, email, sex, address, userID) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt2->bind_param("ssisssi", $fname, $lname, $phone, $email, $sex, $address, $user_id);

            if ($stmt2->execute()) {
                echo "<script>alert('Account successfully created!'); window.location='../pages/sign/sign-in.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error Creating Account');</script>";
                echo "<script>setTimeout(function() { window.location.href = ' ../pages/sign/sign-up.php'; }, 100);</script>";
            }
        } else {
            echo "<script>alert('Error Creating Account');</script>";
            echo "<script>setTimeout(function() { window.location.href = ' ../pages/sign/sign-up.php'; }, 100);</script>";
        }
    } else {
        $errorMessages = implode("\\n", $errors);
        echo "<script>alert('$errorMessages');</script>";
        echo "<script>setTimeout(function() { window.location.href = ' ../pages/sign/sign-up.php'; }, 100);</script>";
    }
}
?>