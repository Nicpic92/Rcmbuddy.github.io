<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Save user data to database (this is a placeholder, implement actual database logic)
    // ...

    // Send confirmation email
    include 'confirmation_email.php';

    // Redirect to login page
    header("Location: ../html/login.html");
    exit();
}
?>
