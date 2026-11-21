<?php
include 'config/database.php';

$db = new Database();

$filter = isset($_GET['kategori']) ? strtolower(trim($_GET['kategori'])) : 'semua';

if ($filter === 'foto' || $filter === 'video') {
    if ($filter === 'foto') {
        $rows = $db->sql("SELECT * FROM dokumentasi WHERE LOWER(kategori_dokumentasi) = 'foto' ORDER BY tanggal_kegiatan DESC, id_dokumentasi DESC");
    } else {
        $rows = $db->sql("SELECT * FROM dokumentasi WHERE LOWER(kategori_dokumentasi) = 'video' ORDER BY tanggal_kegiatan DESC, id_dokumentasi DESC");
    }
} else {
    $filter = 'semua';
    $rows = $db->sql("SELECT * FROM dokumentasi ORDER BY tanggal_kegiatan DESC, id_dokumentasi DESC");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi - KATASAPA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .page-banner {
            background: linear-gradient(135deg, rgba(25,27,25,0.9), rgba(54,58,54,0.85)), url('assets/img/hero.jpg') center/cover no-repeat;
            padding: 4rem 5%;
            border-bottom: 2px solid #363A36;
        }
        .page-banner h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #FFFFFF;
        }
        .page-banner p {
            color: #8D8E8E;
            font-size: 0.9rem;
            margin-top: 0.3rem;
        }

        .doc-container {
            padding: 3rem 5% 5rem 5%;
        }
        .filter-bar {
            display: flex;
            gap: 0.8rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .filter-btn {
            padding: 0.45rem 1.3rem;
            border-radius: 20px;
            font-size: 0.85rem;
            background-color: #272927;
            color: #C0C4C4;
            border: 1px solid #363A36;
            transition: all 0.3s ease;
        }
        .filter-btn:hover,
        .filter-btn.active {
            background-color: #4B4F4B;
            color: #FFFFFF;
            border-color: #8D8E8E;
        }

        .doc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
        .doc-card {
            background-color: #272927;
            border: 1px solid #363A36;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .doc-card:hover {
            transform: translateY(-4px);
            border-color: #696969;
        }
        .doc-media {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
            background-color: #191B19;
        }
        .doc-info {
            padding: 1.2rem;
        }
        .doc-info h4 {
            color: #FFFFFF;
            font-size: 0.98rem;
            margin-bottom: 0.35rem;
        }
        .doc-info span {
            color: #8D8E8E;
            font-size: 0.75rem;
        }

        @media (max-width: 900px) {
            .doc-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .doc-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="logo-container">
            <img src="assets/img/logo_katasapa.jpg" alt="Logo Katasapa" class="logo-img">
            <div class="logo-text">
                <h1>KATASAPA</h1>
                <p>Komunitas Teater dan Sastra Perwira</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="karya.php">Karya</a></li>
                <li><a href="dokumentasi.php" class="active">Dokumentasi</a></li>
            </ul>
        </nav>
        <div class="nav-btn">
            <a href="admin/login_user.php" class="btn-login">Login</a>
        </div>
    </header>

    <section class="page-banner">
        <h2>Dokumentasi</h2>
        <p>Jejak kegiatan kami dalam bentuk foto dan video pementasan maupun diskusi.</p>
    </section>

    <main class="doc-container">
        <div class="filter-bar">
            <a href="dokumentasi.php?kategori=semua" class="filter-btn <?= $filter === 'semua' ? 'active' : '' ?>">Semua</a>
            <a href="dokumentasi.php?kategori=foto" class="filter-btn <?= $filter === 'foto' ? 'active' : '' ?>">Foto</a>
            <a href="dokumentasi.php?kategori=video" class="filter-btn <?= $filter === 'video' ? 'active' : '' ?>">Video</a>
        </div>

        <div class="doc-grid">
            <?php if (!empty($rows)): ?>
                <?php foreach ($rows as $row): ?>
                    <?php
                    $mediaRaw = trim($row['file_media']);
                    if (strpos($mediaRaw, 'assets/') === 0 || strpos($mediaRaw, 'uploads/') === 0) {
                        $mediaSrc = $mediaRaw;
                    } else {
                        $mediaSrc = "uploads/dokumentasi/" . $mediaRaw;
                    }
                    ?>
                    <div class="doc-card">
                        <?php if (strtolower($row['kategori_dokumentasi']) === 'video'): ?>
                            <video class="doc-media" controls>
                                <source src="<?= htmlspecialchars($mediaSrc); ?>" type="video/mp4">
                            </video>
                        <?php else: ?>
                            <img src="<?= htmlspecialchars($mediaSrc); ?>" alt="<?= htmlspecialchars($row['judul_dokumentasi']); ?>" class="doc-media">
                        <?php endif; ?>
                        <div class="doc-info">
                            <h4><?= htmlspecialchars($row['judul_dokumentasi']); ?></h4>
                            <span><?= date('d M Y', strtotime($row['tanggal_kegiatan'])); ?> &bull; <?= htmlspecialchars($row['kategori_dokumentasi']); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="color: #8D8E8E;">Belum ada data dokumentasi yang diunggah.</p>
            <?php endif; ?>
        </div>
    </main>

    <footer>
        <p><strong>KATASAPA</strong> &copy; 2026 KATASAPA. Semua Hak Dilindungi.</p>
        <p>Instagram: @katasapa_pbg</p>
    </footer>

</body>
</html>