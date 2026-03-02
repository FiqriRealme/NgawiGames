<?php
session_start();
require 'connection.php';

$games = [];
$total = 0;

if (!empty($_SESSION['cart'])) {
    $ids = implode(',', array_keys($_SESSION['cart']));
    $stmt = $pdo->query("SELECT * FROM games WHERE id IN ($ids)");
    $games = $stmt->fetchAll();

    foreach ($games as $game) {
        $total += $game['harga'] * $_SESSION['cart'][$game['id']];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="assets/css/checkout.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎮 Ngawi Game</a>
    <a class="btn btn-outline-light" href="cart.php">
      🛒 Cart (<?= !empty($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0 ?>)
    </a>
  </div>
</nav>

<div class="container mt-4">
    <h2>💳 Checkout</h2>
    <?php if (empty($games)): ?>
        <p>Keranjang kosong, silakan pilih game dulu.</p>
        <a href="index.php" class="btn btn-primary">Kembali ke Store</a>
    <?php else: ?>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Judul Game</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($games as $game): ?>
                <tr>
                    <td><?= htmlspecialchars($game['judul']); ?></td>
                    <td><?= $_SESSION['cart'][$game['id']] ?></td>
                    <td>Rp <?= number_format($game['harga']); ?></td>
                    <td>Rp <?= number_format($game['harga'] * $_SESSION['cart'][$game['id']]); ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td><strong>Rp <?= number_format($total); ?></strong></td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Tambah Game Lagi</a>
        <a href="success.php" class="btn btn-success">Bayar Sekarang</a>
    <?php endif; ?>
</div>
</body>
</html>