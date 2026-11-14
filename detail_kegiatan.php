<?php
// Contoh data array sementara (Nanti bisa diganti dengan koneksi database MySQL/PDO)
$daftar_kegiatan = [
    1 => [
        'judul' => 'Workshop Dasar Keaktoran',
        'kategori' => 'Workshop',
        'tanggal' => '25 Oktober 2026',
        'waktu' => '15.30 WIB - Selesai',
        'lokasi' => 'Gedung Kesenian Purbalingga',
        'penulis' => 'Bowo Leksono (Ketua Teater KATASAPA)',
        'gambar' => 'assets/img/hero_katasapa.jpg',
        'deskripsi' => 'Workshop Dasar Keaktoran adalah program latihan intensif yang dirancang khusus bagi anggota baru maupun umum yang ingin mengenal dasar-dasar seni peran di atas panggung. Dalam sesi ini, peserta akan mempelajari teknik olah tubuh untuk kelenturan, latihan olah vokal agar artikulasi lebih jelas, serta teknik pendalaman emosi dasar agar mampu menghidupkan karakter yang diperankan.'
    ],
    2 => [
        'judul' => 'Diskusi Sastra: Menggali Makna',
        'kategori' => 'Diskusi',
        'tanggal' => '08 November 2026',
        'waktu' => '19.30 WIB - Selesai',
        'lokasi' => 'Taman Literasi Purbalingga',
        'penulis' => 'Siti Aminah (Divisi Sastra KATASAPA)',
        'gambar' => 'assets/img/hero_katasapa.jpg', // Bisa diganti gambar lain
        'deskripsi' => 'Diskusi santai namun mendalam membedah struktur estetika puisi dan karya sastra kontemporer karya penulis lokal. Acara ini terbuka bagi siapa saja yang gemar membaca, menulis, ataupun mengapresiasi karya sastra daerah.'
    ],
    3 => [
        'judul' => 'Pementasan Teater "Ruang"',
        'kategori' => 'Pertunjukan',
        'tanggal' => '20 November 2026',
        'waktu' => '19.00 WIB - Selesai',
        'lokasi' => 'Gedung Kesenian Purbalingga',
        'penulis' => 'Tim Produksi Lakon KATASAPA',
        'gambar' => 'assets/img/hero_katasapa.jpg',
        'deskripsi' => 'Pementasan naskah lakon tunggal bertajuk "Ruang" yang mengangkat kisah tentang batas-batas ruang batin manusia dalam menghadapi kesunyian kota modern. Pementasan perdana oleh divisi teater KATASAPA.'
    ],
    4 => [
        'judul' => 'Pelatihan Penulisan Kreatif',
        'kategori' => 'Workshop',
        'tanggal' => '27 November 2026',
        'waktu' => '15.30 WIB - Selesai',
        'lokasi' => 'Taman Literasi Purbalingga',
        'penulis' => 'Ahmad Fauzi (Penyair & Sastrawan)',
        'gambar' => 'assets/img/hero_katasapa.jpg',
        'deskripsi' => 'Pelatihan intensif bagaimana meracik ide-ide sederhana dari keseharian menjadi sebuah cerpen yang berdaya gugah, serta teknik dasar penyusunan esai sastra.'
    ]
];

// Ambil ID dari URL (contoh: detail_kegiatan.php?id=1)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Cek apakah data kegiatan dengan ID tersebut ada
$kegiatan = isset($daftar_kegiatan[$id]) ? $daftar_kegiatan[$id] : null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $kegiatan ? $kegiatan['judul'] : 'Kegiatan Tidak Ditemukan'; ?> - KATASAPA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="halaman-kegiatan">

    <!-- HEADER / NAVBAR -->
    <header class="navbar">
        <div class="logo-container">
            <img src="assets/img/logo_katasapa.jpg" alt="Logo Katasapa" class="logo-img" onerror="this.style.display='none'">
            <div>
                <h1 class="logo-text">KATASAPA</h1>
                <p class="logo-subtext">Komunitas Teater dan Sastra Perwira</p>
            </div>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="kegiatan.php" class="active">Kegiatan</a></li>
                <li><a href="karya.php">Karya</a></li>
                <li><a href="dokumentasi.php">Dokumentasi</a></li>
            </ul>
        </nav>
        <a href="login.php" class="btn-login">Login</a>
    </header>

    <!-- KONTEN DETAIL KEGIATAN -->
    <main class="content-container detail-main">
        <div class="back-link">
            <a href="kegiatan.php">← Kembali ke Daftar Kegiatan</a>
        </div>

        <?php if ($kegiatan): ?>
            <article class="detail-card">
                <!-- Gambar Utama Sesuai Kegiatan -->
                <div class="detail-img-container" style="background-image: url('<?php echo $kegiatan['gambar']; ?>');">
                    <span class="badge-kategori"><?php echo $kegiatan['kategori']; ?></span>
                </div>

                <div class="detail-body">
                    <h1 class="detail-judul"><?php echo $kegiatan['judul']; ?></h1>
                    
                    <div class="meta-info-grid">
                        <div class="meta-item">
                            <span class="meta-label">📅 Tanggal</span>
                            <span class="meta-val"><?php echo $kegiatan['tanggal']; ?></span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">🕒 Waktu</span>
                            <span class="meta-val"><?php echo $kegiatan['waktu']; ?></span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">📍 Lokasi</span>
                            <span class="meta-val"><?php echo $kegiatan['lokasi']; ?></span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">✍️ Penulis / Pemateri</span>
                            <span class="meta-val"><?php echo $kegiatan['penulis']; ?></span>
                        </div>
                    </div>

                    <div class="detail-deskripsi-section">
                        <h3>Deskripsi Kegiatan</h3>
                        <p><?php echo nl2br($kegiatan['deskripsi']); ?></p>
                    </div>
                </div>
            </article>
        <?php else: ?>
            <div class="error-not-found">
                <h2>Maaf, kegiatan tidak ditemukan.</h2>
                <p>Kegiatan yang Anda cari mungkin sudah dihapus atau tautan tidak valid.</p>
                <a href="kegiatan.php" class="filter-btn" style="display:inline-block; margin-top:15px; text-decoration:none;">Kembali ke Kegiatan</a>
            </div>
        <?php endif; ?>
    </main>

    <!-- FOOTER -->
    <footer>
        <p><strong>KATASAPA</strong> © 2026 KATASAPA. Semua Hak Dilindungi.</p>
        <p>Instagram: <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">@katasapa_pbg</a></p>
    </footer>

</body>
</html>