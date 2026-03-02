<?php
require 'connection.php'; 


$q = isset($_GET['q']) ? trim($_GET['q']) : '';

$games = [];
if ($q !== '') {
    
    $stmt = $pdo->prepare("SELECT * FROM games WHERE judul LIKE :keyword ORDER BY judul ASC");
    $stmt->execute(['keyword' => "%$q%"]);
    $games = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="assets/css/search.css">
</head>
<body>


<nav class="navbar">
  <div class="container">
    <h1 class="logo">🎮 Ngawi Game</h1>

    <div class="navbar-right">
      <form class="search-form" action="search.php" method="get">
        <input type="text" name="q" placeholder="Cari game..." class="search-input"
               value="<?= htmlspecialchars($q) ?>">
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


<div class="container">
    <h2 class="search-title">🔍 Hasil Pencarian: <?= htmlspecialchars($q) ?></h2>
    <?php if (empty($games)): ?>
        <p class="no-result">Tidak ada game ditemukan.</p>
        <a href="index.php" class="btn btn-warning">Kembali ke Store</a>
    <?php else: ?>
        <div class="search-results">
            <?php foreach ($games as $game): ?>
            <div class="card">
                <img src="assets/images/<?= !empty($game['gambar']) ? htmlspecialchars($game['gambar']) : 'default.jpg'; ?>" 
                     class="card-img-top" 
                     alt="<?= htmlspecialchars($game['judul']); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($game['judul']); ?></h5>
                    <p class="card-text">Rp <?= number_format($game['harga']); ?></p>
                    <a href="cart.php?add=<?= $game['id']; ?>" class="btn btn-warning">Tambahkan</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>