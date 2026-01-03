<?php
require_once "classes/User.php";

$user = new User();
$hasil = $user->register($_POST['username'], $_POST['password']);

// Tentukan status
$isSuccess = ($hasil === true);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $isSuccess ? 'Registrasi Berhasil' : 'Registrasi Gagal'; ?></title>
  <link rel="stylesheet" href="assets/css/auth-message.css">
</head>
<body>

<div class="auth-box <?= $isSuccess ? 'success' : 'error'; ?>">
  
  <?php if ($isSuccess): ?>
    <h2>☕ Registrasi Berhasil</h2>
    <p>
      Akun anda sudah siap.<br>
      Silakan login untuk menikmati kopi favoritmu ☕
    </p>
    <a href="login.php">Login Sekarang</a>
  
  <?php else: ?>
    <h2>⚠️ Registrasi Gagal</h2>
    <p><?= htmlspecialchars($hasil); ?></p>
    <a href="register.php">Kembali Daftar</a>
  <?php endif; ?>

</div>

</body>
</html>
