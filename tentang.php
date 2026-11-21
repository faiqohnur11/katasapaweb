<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - KATASAPA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .page-banner {
            background: linear-gradient(135deg, rgba(25,27,25,0.9), rgba(54,58,54,0.85)), url('assets/img/hero.jpg') center/cover no-repeat;
            padding: 4.5rem 5%;
            text-align: center;
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
            margin-top: 0.5rem;
            max-width: 680px;
            margin-inline: auto;
        }

        .sejarah-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 2.5rem;
            padding: 4rem 5%;
            align-items: center;
        }
        .sejarah-grid img {
            width: 100%;
            border-radius: 8px;
            border: 1px solid #4B4F4B;
            object-fit: cover;
        }
        .sejarah-text h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #FFFFFF;
            margin-bottom: 1rem;
            border-left: 3px solid #696969;
            padding-left: 12px;
        }
        .sejarah-text p {
            color: #C0C4C4;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            text-align: justify;
        }

        .vmt-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            padding: 0 5% 4rem 5%;
        }
        .vmt-card {
            background-color: #272927;
            border: 1px solid #363A36;
            padding: 2rem;
            border-radius: 8px;
        }
        .vmt-card h4 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: #FFFFFF;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #4B4F4B;
        }
        .vmt-card p,
        .vmt-card li {
            font-size: 0.85rem;
            color: #C0C4C4;
            margin-bottom: 0.6rem;
        }
        .vmt-card ol {
            padding-left: 1.2rem;
        }
        .kontak-item {
            margin-bottom: 1rem;
        }
        .kontak-item strong {
            display: block;
            color: #FFFFFF;
            font-size: 0.85rem;
        }
        .kontak-item span {
            color: #8D8E8E;
            font-size: 0.8rem;
        }

        .quote-full {
            padding: 0 5% 4rem 5%;
        }

        @media (max-width: 900px) {
            .sejarah-grid,
            .vmt-grid {
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
                <li><a href="tentang.php" class="active">Tentang Kami</a></li>
                <li><a href="kegiatan.php">Kegiatan</a></li>
                <li><a href="karya.php">Karya</a></li>
                <li><a href="dokumentasi.php">Dokumentasi</a></li>
            </ul>
        </nav>
        <div class="nav-btn">
            <a href="admin/login_user.php" class="btn-login">Login</a>
        </div>
    </header>

    <section class="page-banner">
        <h2>Tentang KATASAPA</h2>
        <p>Sejak 2016, kami hadir sebagai ruang bagi mereka yang percaya bahwa seni dan sastra adalah cara untuk memahami hidup dan merawat kemanusiaan.</p>
    </section>

    <section class="sejarah-grid">
        <img src="assets/img/profil.jpg" alt="Profil Anggota KATASAPA">
        <div class="sejarah-text">
            <h3>Sejarah</h3>
            <p>KATASAPA (Komunitas Teater dan Sastra Perwira) berdiri pada tahun 2016 di Purbalingga, berawal dari sekelompok pemuda yang memiliki kegemaran berteater dan menulis.</p>
            <p>Berangkat dari ruang-ruang diskusi sederhana, KATASAPA kini menjadi ruang berkarya, belajar, dan berbagi bagi siapa saja yang mencintai teater, puisi, prosa, dan kebudayaan lokal di Purbalingga.</p>
        </div>
    </section>

    <section class="vmt-grid">
        <div class="vmt-card">
            <h4>Visi</h4>
            <p>Menjadi komunitas yang berkontribusi dalam pengembangan seni, sastra, dan literasi di masyarakat Purbalingga dan sekitarnya.</p>
        </div>
        <div class="vmt-card">
            <h4>Misi</h4>
            <ol>
                <li>Menyelenggarakan kegiatan seni dan sastra yang edukatif dan inklusif.</li>
                <li>Membina dan memfasilitasi anggota dalam berkarya serta berproses kreatif.</li>
                <li>Memperluas jejaring dan kolaborasi lintas komunitas maupun institusi.</li>
            </ol>
        </div>
        <div class="vmt-card">
            <h4>Kontak</h4>
            <div class="kontak-item">
                <strong>Instagram</strong>
                <span>@katasapa_pbg</span>
            </div>
            <div class="kontak-item">
                <strong>Email</strong>
                <span>katasapapbg@gmail.com</span>
            </div>
            <div class="kontak-item">
                <strong>Lokasi</strong>
                <span>Purbalingga, Jawa Tengah</span>
            </div>
        </div>
    </section>

    <section class="quote-full">
        <div class="quote-card">
            <p>"Seni dan sastra bukan hanya tentang keindahan, tetapi juga tentang keberanian untuk menyuarakan yang tak terlihat."</p>
            <span>— KATASAPA</span>
        </div>
    </section>

    <footer>
        <p><strong>KATASAPA</strong> &copy; 2026 KATASAPA. Semua Hak Dilindungi.</p>
        <p>Instagram: @katasapa_pbg</p>
    </footer>

</body>
</html>