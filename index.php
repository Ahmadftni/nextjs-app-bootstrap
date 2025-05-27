<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRAMA - Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        <main>
            <h1 class="brand">SIRAMA</h1>
            
            <div class="login-container">
                <h2>Login</h2>
                <p class="subtitle">Please Sign in to continue.</p>

                <form action="process.php" method="POST">
                    <div class="input-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                        <span class="show-password">Show</span>
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                </form>

                <div class="forgot-password">
                    <a href="#">Forgot your password?</a>
                </div>

                <div class="social-login">
                    <p>or sign with</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                    </div>
                </div>

                <div class="signup-link">
                    Don't have account? <a href="#">Sign Up</a>
                </div>
            </div>
        </main>

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

    <script>
        document.querySelector('.show-password').addEventListener('click', function() {
            const passwordInput = document.querySelector('input[type="password"]');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                this.textContent = 'Show';
            }
        });
    </script>
</body>
</html>
