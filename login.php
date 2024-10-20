<?php
session_start();
require 'database/db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['username'] = $user['username'];  
        header('Location: dasboard.php');  
        exit();
    } else {
        $_SESSION['error'] = "Username atau password salah!";
        header('Location: login.php');  
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Polinela</title>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="images/logo/Logo-Polinela-New-300x287.png" alt="Polinela Logo" class="logo">
            <h2>Informasi Terkait Polinela</h2>
            <p>Masukan username dan password yang benar</p>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="..........." required>
                    <span class="eye-icon" onclick="togglePassword()">
                        <img src="https://img.icons8.com/ios-filled/50/000000/visible.png" alt="Show/Hide Password" id="eyeIcon">
                    </span>
                </div>
                <?php
                if (isset($_SESSION['error'])) {
                    echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']); 
                }
                ?>
                <button type="submit" class="login-btn">Masuk</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/invisible.png';  
            } else {
                passwordInput.type = 'password';
                eyeIcon.src = 'https://img.icons8.com/ios-filled/50/000000/visible.png'; 
            }
        }
    </script>
</body>
</html>
