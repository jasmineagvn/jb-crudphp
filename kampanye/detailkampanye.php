<?php
include_once 'kampanyeData.php';

$id = $_GET['id'] ?? null;
$campaign = null;

foreach ($campaigns as $c) {
    if ($c['id'] === $id) {
        $campaign = $c;
        break;
    }
}

if (!$campaign) {
    echo "<p>Kampanye tidak ditemukan.</p>";
    exit;
}

$progress = min(($campaign['collected'] / $campaign['target']) * 100, 100);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($campaign['title']) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <!-- Gambar utama dan judul -->
    <div class="text-center">
        <img src="<?= $campaign['image'] ?>" alt="<?= htmlspecialchars($campaign['title']) ?>" class="main-img" />
        <h1 class="title"><?= $campaign['title'] ?></h1>
        <div class="amount">
            Rp<?= number_format($campaign['collected'], 0, ',', '.') ?>
            <span class="target">dari Rp<?= number_format($campaign['target'], 0, ',', '.') ?></span>
        </div>
        <div class="progress-bar">
            <div class="progress-fill" style="width: <?= $progress ?>%"></div>
        </div>
        <p class="days-left"><?= $campaign['daysLeft'] ?> Hari</p>
    </div>

    <!-- Cerita -->
    <div class="story">
        <h2>Cerita</h2>
        <?php if (!empty($campaign['storyImages'])): ?>
            <div class="story-images">
                <?php foreach ($campaign['storyImages'] as $img): ?>
                    <img src="<?= $img ?>" alt="Cerita" class="story-img" />
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <p class="description"><?= nl2br($campaign['description']) ?></p>
    </div>

    <!-- Donasi -->
    <div class="donation">
        <h2>Cara Berdonasi</h2>
        <div class="donation-box">
            <p class="bold">Donasi dapat ditransferkan melalui :</p>
            <div class="donation-info">
                <img src="/icons/logoBCA.png" alt="BCA" class="bank-logo" />
                <div>
                    <p class="account-number"><?= $campaign['bankAccount']['number'] ?></p>
                    <p class="account-name">a.n <?= $campaign['bankAccount']['accountName'] ?></p>
                    <p class="unique-code">Kode Unik : “<?= $campaign['bankAccount']['uniqueCode'] ?>”</p>
                    <p class="instruction">Tambahkan kode unik di akhir nominal donasi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigasi -->
    <div class="navigation">
        <a href="/kampanye.php" class="back-button">←</a>
        <a href="/donasiumum.php" class="donate-button">Donasi Sekarang Yuk!</a>
    </div>
</div>
</body>
</html>