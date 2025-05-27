<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic input validation
    if (empty($email) || empty($password)) {
        header("Location: index.php?error=empty_fields");
        exit();
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid_email");
        exit();
    }

    // In a real application, you would:
    // 1. Sanitize inputs
    // 2. Connect to database
    // 3. Check credentials against database
    // 4. Use password_hash() and password_verify() for password security
    
    // For demonstration purposes, we'll use a simple check
    // Replace this with actual database authentication in production
    if ($email === "toni@gmail.com" && $password === "toni12345") {
        $_SESSION['user'] = $email;
        $_SESSION['logged_in'] = true;
        
        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: index.php?error=invalid_credentials");
        exit();
    }
}

// If someone tries to access this file directly without POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}
?>
