<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRAMA - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .dashboard-container {
            padding: 20px;
        }
        .welcome-message {
            margin-bottom: 20px;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">SIRAMA</div>
            <div class="search-icon">
                <i class="fas fa-search"></i>
            </div>
        </header>

        <div class="dashboard-container">
            <h1>Welcome to Dashboard</h1>
            <div class="welcome-message">
                <p>You are logged in as: <?php echo htmlspecialchars($_SESSION['user']); ?></p>
            </div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>

        <nav class="bottom-nav">
            <a href="#" class="nav-item active">
                <i class="fas fa-home"></i>
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-fire"></i>
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-pen"></i>
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-bell"></i>
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-user"></i>
            </a>
        </nav>
    </div>
</body>
</html>
