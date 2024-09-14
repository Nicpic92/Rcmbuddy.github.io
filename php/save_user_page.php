<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $username = $_SESSION['username'];

    // Save user content to database or file (this is a placeholder, implement actual save logic)
    // ...

    // Redirect back to user page
    header("Location: ../html/user_page.html");
    exit();
}
?>
