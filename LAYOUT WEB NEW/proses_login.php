<?php
session_start();
require_once "classes/User.php";

$user = new User();
$data = $user->login($_POST['username'], $_POST['password']);

if ($data) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    header("Location: index.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Gagal</title>
  <link rel="stylesheet" href="assets/css/auth-message.css">
</head>
<body>

<div class="auth-box error">
  <h2>☕ Login Gagal</h2>
  <p>Username atau password salah.<br>Silakan coba lagi.</p>
  <a href="login.php">Coba Login</a>
</div>

</body>
</html>
