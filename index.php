<?php
require 'connection.php';
session_start();
$stmt = $pdo->query("SELECT * FROM games ORDER BY id DESC");
$games = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ngawi Game Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar">
  <div class="container">
    <h1 class="logo">🎮 Ngawi Game</h1>

    <div class="navbar-right">
     
      <form class="search-form" action="search.php" method="get">
        <input type="text" name="q" placeholder="Cari game..." class="search-input">
      </form>

      
      <ul class="nav-menu">
        <li><a href="pengaturan.php">Pengaturan</a></li>
        <li><a href="komunitas.php">Komunitas</a></li>
        <li><a href="koleksi.php">Koleksi</a></li>
        <li><a href="index.php" class="active">Toko</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="billboard">
  <img src="assets/images/sok.jpg" alt="Promo Ngawi Game">
  <div class="billboard-text">
    <h2>✨🌙 Promo Spesial Ramadhan ✨🌙</h2>
    <p>Dapatkan diskon hingga 0% untuk game pilihan ya cik!😹</p>
  </div>
</div>

<div class="grid-container">
  <?php foreach($games as $game): ?>
    <div class="game-card">
      <a href="game.php?id=<?= $game['id']; ?>">
        <img src="assets/images/<?= htmlspecialchars($game['gambar']); ?>" alt="<?= htmlspecialchars($game['judul']); ?>">
      </a>
      <div class="overlay">
        <h5><?= htmlspecialchars($game['judul']); ?></h5>
        <p>Rp <?= number_format($game['harga']); ?></p>
        <a href="#" class="btn add-to-cart" data-id="<?= $game['id']; ?>">Tambahkan</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>

document.querySelectorAll('.add-to-cart').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    let id = this.dataset.id;

    fetch('cart.php?add=' + id, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
      .then(response => response.json())
      .then(data => {
        document.querySelector('.cart').innerHTML = '🛒 Cart (' + data.total + ')';
      });
  });
});
</script>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <h4>Open 24/7</h4>
      <p>Beli game ori ya di Ngawi Store cik.</p>
      <p>Seru banget main game yang dibeli sini ampe keluar dikit lah yah cik😹</p>
    </div>

    <div class="footer-column">
      <h4>Tempat Mitra</h4>
      <ul>
        <li>Garut</li>
        <li>Tasikmalaya</li>
        <li>Pangandaran</li>
        <li>Bandung</li>
        <li>Los Angeles</li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>Location</h4>
      <p>Bayongbong, Garutgrad</p>
      <p>Jawa Barat, Indonesia</p>
      <p>44163</p>
    </div>

    <div class="footer-column">
      <h4>Sosok Atmin</h4>
      <img src="assets/images/fiqri.jpg.jpeg" alt="Foto Atmin">
    </div>
  </div>

  <div class="footer-bottom">
    <p>Didesain Oleh Fiqri dengan kasih serta cinta dari Tuhan yang telah memberi dan menerima rahmat untuk sekarang dan selamanya. Amen.</p>
    <div class="social-icons">
      <a href="#">Facebook</a>
      <a href="#">Twitter</a>
      <a href="#">Google+</a>
      <a href="#">RSS</a>
    </div>
  </div>
</footer>
</body>
</html>