<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik Pratama Adhyaksa</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <img src="assets/img/logo.png" alt="Logo" onerror="this.style.display='none';">
                    Klinik Pratama Adhyaksa
                </a>
                <div class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="#berita">Berita</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#" class="cta-btn">Daftar Online</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <h1>Selamat Datang</h1>
            <div class="hero-strip">
                Pelayanan Kesehatan Terbaik untuk Keluarga Besar Adhyaksa dan Masyarakat.
            </div>
            <br>
            <button class="cta-btn" style="border:none; cursor:pointer; font-size:1rem; margin-top:20px;">
                Daftar Sekarang <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <!-- Layanan Preview -->
    <section class="services" id="layanan">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-user-md service-icon"></i>
                    <h3>Poli Umum</h3>
                    <p>Pelayanan medis dasar dan rujukan.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tooth service-icon"></i>
                    <h3>Poli Gigi</h3>
                    <p>Perawatan kesehatan gigi dan mulut.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-baby service-icon"></i>
                    <h3>Poli KIA</h3>
                    <p>Kesehatan Ibu dan Anak.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-flask service-icon"></i>
                    <h3>Laboratorium</h3>
                    <p>Fasilitas laboratorium lengkap untuk menunjang diagnosa medis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section class="services" id="program" style="background-color: #f0f4f8;">
        <div class="container">
            <h2>Program Unggulan</h2>
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-heartbeat service-icon"></i>
                    <h3>Medical Check-up</h3>
                    <p>Pemeriksaan kesehatan menyeluruh secara berkala.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-home service-icon"></i>
                    <h3>Home Care</h3>
                    <p>Layanan kunjungan dokter dan perawat ke rumah Anda.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-syringe service-icon"></i>
                    <h3>Vaksinasi</h3>
                    <p>Program imunisasi lengkap untuk anak dan dewasa.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-child service-icon"></i>
                    <h3>Senam Hamil</h3>
                    <p>Kelas senam khusus untuk ibu hamil yang sehat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="services" id="berita">
        <div class="container">
            <h2>Berita Terkini</h2>
            <div class="service-grid">
                <div class="service-card">
                    <div
                        style="background:#eee; height:150px; border-radius:10px; margin-bottom:15px; display:flex; align-items:center; justify-content:center;">
                        <i class="fas fa-image fa-2x" style="color:#ccc;"></i>
                    </div>
                    <h3>Penyuluhan Kesehatan Gigi</h3>
                    <p style="font-size:0.9rem; color:#666;">12 Desember 2025</p>
                    <p>Kegiatan penyuluhan kesehatan gigi untuk anak-anak sekolah dasar.</p>
                </div>
                <div class="service-card">
                    <div
                        style="background:#eee; height:150px; border-radius:10px; margin-bottom:15px; display:flex; align-items:center; justify-content:center;">
                        <i class="fas fa-image fa-2x" style="color:#ccc;"></i>
                    </div>
                    <h3>Jadwal Dokter Baru</h3>
                    <p style="font-size:0.9rem; color:#666;">10 Desember 2025</p>
                    <p>Informasi perubahan jadwal praktik dokter klinik pratama.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="profil">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>
                        <img src="assets/img/logo.png" alt="Logo"
                            style="height: 30px; filter: brightness(0) invert(1);">
                        Klinik Pratama Adhyaksa
                    </h3>
                    <p class="footer-contact">
                        Jl. Contoh No. 123, Kelurahan Sehat,<br>
                        Kecamatan Bahagia, Kota Harapan<br>
                        (Contoh Alamat)
                    </p>
                    <p class="footer-contact"><i class="fas fa-phone"></i> 0812-3456-7890</p>
                    <p class="footer-contact"><i class="fab fa-whatsapp"></i> 0812-3456-7890</p>
                </div>
                <div class="footer-col">
                    <h3>Layanan</h3>
                    <ul class="footer-links">
                        <li><a href="#layanan">Poli Umum</a></li>
                        <li><a href="#layanan">Poli Gigi</a></li>
                        <li><a href="#layanan">Poli KIA</a></li>
                        <li><a href="#layanan">Khitan</a></li>
                        <li><a href="#layanan">Laboratorium</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Program</h3>
                    <ul class="footer-links">
                        <li><a href="#program">Medical Check-up</a></li>
                        <li><a href="#program">Home Care</a></li>
                        <li><a href="#program">Vaksinasi</a></li>
                        <li><a href="#program">Senam Kehamilan</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Pembayaran & Info</h3>
                    <p>Menerima Pembayaran:</p>
                    <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                        <i class="fas fa-money-bill-wave fa-2x"></i>
                        <i class="fas fa-credit-card fa-2x"></i>
                        <i class="fas fa-qrcode fa-2x"></i>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 Klinik Pratama Adhyaksa. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Modal Form -->
    <div id="modalDaftar" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 style="text-align:center; color:#0056b3; margin-bottom:20px;">Form Pendaftaran</h2>

            <form action="proses_daftar.php" method="POST">
                <div class="form-group">
                    <label>Nomor Induk Kependudukan (NIK)</label>
                    <input type="number" name="nik" required placeholder="Contoh: 7501..." autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" required placeholder="Nama Sesuai KTP">
                </div>
                <div class="form-group">
                    <label>Poli Tujuan</label>
                    <select name="poli">
                        <option value="Umum">Poli Umum</option>
                        <option value="Gigi">Poli Gigi</option>
                        <option value="KIA">Poli KIA (Ibu & Anak)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Kunjungan</label>
                    <input type="date" name="tgl_kunjungan" required>
                </div>
                <button type="submit" class="btn-submit">KIRIM PENDAFTARAN</button>
            </form>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>