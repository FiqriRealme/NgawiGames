<?php
require 'connection.php';
session_start();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM games WHERE id = ?");
$stmt->execute([$id]);
$game = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($game['judul']); ?> - Detail</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar">
  <div class="container">
    <h1 class="logo">🎮 Hutagalung Game</h1>
    <a class="cart" href="cart.php">🛒 Cart (<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</a>
  </div>
</nav>

<div class="detail-container">
  <div class="cover">
    <img src="assets/images/<?= htmlspecialchars($game['gambar']); ?>" alt="<?= htmlspecialchars($game['judul']); ?>">
  </div>
  <div class="info">
    <h2><?= htmlspecialchars($game['judul']); ?></h2>
    <p><strong>Genre:</strong> <?= htmlspecialchars($game['genre']); ?></p>
    <p><strong>Harga:</strong> Rp <?= number_format($game['harga']); ?></p>
    <p><?= nl2br(htmlspecialchars($game['deskripsi'])); ?></p>
    <a href="cart.php?add=<?= $game['id']; ?>" class="btn">Add to Cart</a>
  </div>
</div>
</body>
</html>