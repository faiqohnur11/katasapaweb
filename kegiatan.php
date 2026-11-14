<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan & Agenda - KATASAPA</title>
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

    <!-- BANNER HEADER HALAMAN -->
    <section class="page-header">
        <h1>Agenda & Kegiatan</h1>
        <p>Jadwal workshop, diskusi sastra, latihan rutin, dan pementasan teater oleh KATASAPA Purbalingga.</p>
    </section>

    <!-- KONTEN UTAMA -->
    <main class="content-container">
        
        <!-- Filter Kategori -->
        <div class="filter-kegiatan">
            <button class="filter-btn active" onclick="filterKegiatan('semua', this)">Semua</button>
            <button class="filter-btn" onclick="filterKegiatan('workshop', this)">Workshop</button>
            <button class="filter-btn" onclick="filterKegiatan('diskusi', this)">Diskusi</button>
            <button class="filter-btn" onclick="filterKegiatan('pertunjukan', this)">Pertunjukan</button>
        </div>

        <!-- Grid Kartu Kegiatan -->
        <div class="kegiatan-grid" id="kegiatanGrid">
            
            <!-- Kegiatan 1 (ID: 1) -->
            <a href="detail_kegiatan.php?id=1" class="card-kegiatan-link" data-kategori="workshop">
                <article class="card-kegiatan">
                    <div class="card-kegiatan-img" style="background-image: url('assets/img/hero_katasapa.jpg');"></div>
                    <div class="card-kegiatan-body">
                        <div class="tanggal-box">
                            <span class="tgl">25</span>
                            <span class="bln">OKT</span>
                        </div>
                        <div class="info-kegiatan">
                            <h3>Workshop Dasar Keaktoran</h3>
                            <p class="lokasi">📍 Gedung Kesenian Purbalingga</p>
                            <p class="waktu">🕒 15.30 WIB - Selesai</p>
                            <p class="deskripsi">Olah tubuh, olah vokal, dan pendalaman emosi dasar bagi anggota baru maupun umum.</p>
                            <span class="badge-kategori">Workshop</span>
                        </div>
                    </div>
                </article>
            </a>

            <!-- Kegiatan 2 (ID: 2) -->
            <a href="detail_kegiatan.php?id=2" class="card-kegiatan-link" data-kategori="diskusi">
                <article class="card-kegiatan">
                    <div class="card-kegiatan-img"></div>
                    <div class="card-kegiatan-body">
                        <div class="tanggal-box">
                            <span class="tgl">08</span>
                            <span class="bln">NOV</span>
                        </div>
                        <div class="info-kegiatan">
                            <h3>Diskusi Sastra: Menggali Makna</h3>
                            <p class="lokasi">📍 Taman Literasi Purbalingga</p>
                            <p class="waktu">🕒 19.30 WIB - Selesai</p>
                            <p class="deskripsi">Bedah puisi dan diskusi santai membedah karya-karya sastra kontemporer lokal.</p>
                            <span class="badge-kategori">Diskusi</span>
                        </div>
                    </div>
                </article>
            </a>

            <!-- Kegiatan 3 (ID: 3) -->
            <a href="detail_kegiatan.php?id=3" class="card-kegiatan-link" data-kategori="pertunjukan">
                <article class="card-kegiatan">
                    <div class="card-kegiatan-img"></div>
                    <div class="card-kegiatan-body">
                        <div class="tanggal-box">
                            <span class="tgl">20</span>
                            <span class="bln">NOV</span>
                        </div>
                        <div class="info-kegiatan">
                            <h3>Pementasan Teater "Ruang"</h3>
                            <p class="lokasi">📍 Gedung Kesenian Purbalingga</p>
                            <p class="waktu">🕒 19.00 WIB - Selesai</p>
                            <p class="deskripsi">Pementasan naskah lakon tunggal karya divisi teater KATASAPA. Terbuka untuk umum.</p>
                            <span class="badge-kategori">Pertunjukan</span>
                        </div>
                    </div>
                </article>
            </a>

            <!-- Kegiatan 4 (ID: 4) -->
            <a href="detail_kegiatan.php?id=4" class="card-kegiatan-link" data-kategori="workshop">
                <article class="card-kegiatan">
                    <div class="card-kegiatan-img"></div>
                    <div class="card-kegiatan-body">
                        <div class="tanggal-box">
                            <span class="tgl">27</span>
                            <span class="bln">NOV</span>
                        </div>
                        <div class="info-kegiatan">
                            <h3>Pelatihan Penulisan Kreatif</h3>
                            <p class="lokasi">📍 Taman Literasi Purbalingga</p>
                            <p class="waktu">🕒 15.30 WIB - Selesai</p>
                            <p class="deskripsi">Belajar menyusun kerangka cerpen dan esai sastra dari ide-ide keseharian.</p>
                            <span class="badge-kategori">Workshop</span>
                        </div>
                    </div>
                </article>
            </a>

        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <p><strong>KATASAPA</strong> © 2026 KATASAPA. Semua Hak Dilindungi.</p>
        <p>Instagram: <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">@katasapa_pbg</a></p>
    </footer>

    <!-- Script Filter Sederhana -->
    <script>
        function filterKegiatan(kategori, btn) {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter berdasarkan bungkus link kartu
            const links = document.querySelectorAll('.card-kegiatan-link');
            links.forEach(link => {
                if (kategori === 'semua' || link.getAttribute('data-kategori') === kategori) {
                    link.style.display = 'block';
                } else {
                    link.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>