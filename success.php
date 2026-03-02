<?php
session_start();
$_SESSION['cart'] = []; 

// Redirect otomatis ke halaman awal setelah 3 detik
header("Refresh:3; url=index.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="assets/css/succsess.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎮 AMBATUKAM!!!</a>
  </div>
</nav>

<div class="container">
    <div class="success-icon">✅</div>
    <h2 class="fade-in">Pembayaran Berhasil!</h2>
    <p class="fade-in-delay">Terima kasih telah membeli game di Hutagalung Game Store.<br>
       Anda akan diarahkan kembali ke halaman utama...</p>
</div>
</body>
</html>