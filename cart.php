<?php
session_start();
require 'connection.php';

// Tambah game ke cart
if (isset($_GET['add'])) {
    $id = (int)$_GET['add'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++; // tambah quantity
    } else {
        $_SESSION['cart'][$id] = 1; // pertama kali masuk
    }

    // Bedakan AJAX vs normal
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        echo json_encode(['total' => array_sum($_SESSION['cart'])]);
        exit;
    } else {
        header("Location: cart.php");
        exit;
    }
}


// Hapus game dari cart
if (isset($_GET['remove'])) {
    $id = (int)$_GET['remove'];
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: cart.php");
    exit;
}

// Ambil data game dari cart
$games = [];
$subtotal = 0;
$ppn = 0;
$total = 0;

if (!empty($_SESSION['cart'])) {
    $ids = implode(',', array_keys($_SESSION['cart']));
    $stmt = $pdo->query("SELECT * FROM games WHERE id IN ($ids)");
    $games = $stmt->fetchAll();

    // Hitung subtotal
    foreach ($games as $game) {
        $subtotal += $game['harga'] * $_SESSION['cart'][$game['id']];
    }
    $ppn = $subtotal * 0.10; // PPN 10%
    $total = $subtotal + $ppn;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎮 Ngawi Game</a>
    <a class="btn btn-outline-light" href="cart.php">
      🛒 Cart (<?= isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0 ?>)
    </a>
  </div>
</nav>

<div class="cart-container">
  <!-- Daftar item -->
  <div class="cart-items">
    <?php if (empty($games)): ?>
      <p>Keranjang masih kosong.</p>
      <a href="index.php" class="btn btn-primary">Kembali ke Store</a>
    <?php else: ?>
      <?php foreach($games as $game): ?>
        <div class="cart-item">
          <img src="assets/images/<?= htmlspecialchars($game['gambar']); ?>" alt="<?= htmlspecialchars($game['judul']); ?>">
          <div class="cart-item-info">
            <h5><?= htmlspecialchars($game['judul']); ?></h5>
            <p>Rp <?= number_format($game['harga']); ?></p>
          </div>
          <span class="qty">Qty: <?= $_SESSION['cart'][$game['id']] ?></span>
          <a href="cart.php?remove=<?= $game['id']; ?>" class="remove-btn">Hapus</a>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Ringkasan order -->
  <div class="order-summary">
    <h4>Ringkasan Order</h4>
    <p><span>Subtotal</span><span>Rp <?= number_format($subtotal); ?></span></p>
    <p><span>PPN (10%)</span><span>Rp <?= number_format($ppn); ?></span></p>
    <p class="total"><span>Total</span><span>Rp <?= number_format($total); ?></span></p>
    <?php if (!empty($games)): ?>
      <a href="checkout.php" class="checkout-btn">Checkout</a>
      <a href="index.php" class="belanja-btn">Belanja Lagi</a>
    <?php endif; ?>

  </div>
</div>
</body>
</html>