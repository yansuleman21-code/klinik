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
                    <img src="assets/img/logoklinik.png" alt="Logo" onerror="this.style.display='none';">
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
    <section class="hero" id="beranda"
        style="background: linear-gradient(rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.05)), url('assets/img/hero-background.jpg'); background-size: cover; background-position: center bottom; height:auto; min-height:90vh; padding-top:250px;">
        <div class="container" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap;">
            <div class="hero-content" style="flex:1; padding-right:20px; max-width:600px;">
                <h1
                    style="font-size: 2.5rem; color: var(--primary-color); line-height: 1.3; text-shadow: 2px 2px 4px rgba(255,255,255,0.8);">
                    KLINIK PRATAMA ADHYAKSA <br>
                    <span
                        style="font-size: 1.8rem; color: #333; text-shadow: 1px 1px 3px rgba(255,255,255,0.8);">KEJAKSAAN
                        NEGERI <br> KABUPATEN GORONTALO</span>
                </h1>
                <p style="font-size: 1.1rem; margin-top: 15px; color: #555;">
                    "Layanan medis profesional & terpercaya untuk keluarga Anda."
                </p>
                <button class="cta-btn" onclick="document.getElementById('modalDaftar').style.display='block'"
                    style="border:none; cursor:pointer; font-size:1rem; margin-top:30px;">
                    Daftar Sekarang <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div class="hero-image" style="flex:1; display:flex; justify-content:flex-end; align-items:flex-end;">
                <img src="assets/img/kajari_full.jpg" alt="Kepala Kejaksaan Negeri"
                    style="max-height:80vh; max-width:100%; object-fit:contain; filter:drop-shadow(5px 5px 15px rgba(0,0,0,0.2));">
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="profile" class="profile-section">
        <div class="container">
            <div class="profile-content">

                <div class="profile-text">
                    <h2>Tentang Kami</h2>
                    <p>
                        Klinik Pratama Adhyaksa adalah penyedia layanan kesehatan modern yang berdiri sejak tahun 2021
                        dan
                        telah terakreditasi "Paripurna". Kami hadir untuk memberikan pelayanan medis yang aman, cepat,
                        dan
                        terintegrasi dengan teknologi terkini. Dengan tim profesional dan fasilitas lengkap, kami
                        berkomitmen menjadi mitra kesehatan terbaik Anda dan keluarga.
                    </p>
                    <blockquote class="quote-box">
                        "Layanan medis profesional & terpercaya untuk keluarga Anda."
                    </blockquote>
                    <blockquote class="quote-box primary">
                        "Kami melayani dengan pendekatan holistik dan dukungan teknologi modern."
                    </blockquote>
                </div>
            </div>

            <div class="visi-misi-grid">
                <div class="visi-misi-card">
                    <h3>Visi</h3>
                    <p>Menjadi pusat layanan kesehatan pilihan utama yang mengedepankan kualitas dan kepedulian.</p>
                </div>
                <div class="visi-misi-card misi">
                    <h3>Misi</h3>
                    <ul class="misi-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Memberikan pelayanan medis berkualitas tinggi
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mengutamakan kenyamanan dan keselamatan pasien
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mendorong inovasi teknologi kesehatan berkelanjutan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="services" id="layanan">
        <div class="container">
            <h2>Layanan Unggulan</h2>
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-truck-medical service-icon"></i>
                    <h3>UGD Rawat Jalan</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-microscope service-icon"></i>
                    <h3>USG Abdomen</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-heartbeat service-icon"></i>
                    <h3>Prolanis</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-baby-carriage service-icon"></i>
                    <h3>Posyandu</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-user-nurse service-icon"></i>
                    <h3>Posbindu</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-syringe service-icon"></i>
                    <h3>Pelayanan Imunisasi</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-lungs-virus service-icon"></i>
                    <h3>Skrining HIV & TBC</h3>

                </div>
                <div class="service-card">
                    <i class="fas fa-female service-icon"></i>
                    <h3>Pelayanan IVA Test</h3>

                </div>
            </div>
        </div>
    </section>

    <!-- Tenaga Kesehatan Section -->
    <section class="services" id="tenaga-medis" style="background-color: #f0fdf4;">
        <div class="container">
            <h2>Tenaga Kesehatan Kami</h2>
            <div class="service-grid">
                <!-- Dokter 1 -->
                <div class="medis-card">
                    <div class="medis-photo">
                        <i class="fas fa-user-md fa-3x" style="color:white;"></i>
                    </div>
                    <h3>dr. Annisa S. Puspa</h3>
                    <p style="color:#006039; font-weight:600;">Dokter Umum</p>
                </div>
                <!-- Dokter 2 -->
                <div class="medis-card">
                    <div class="medis-photo">
                        <i class="fas fa-user-md fa-3x" style="color:white;"></i>
                    </div>
                    <h3>dr. Muhamad Arief</h3>
                    <p style="color:#006039; font-weight:600;">Dokter Umum</p>
                </div>
                <!-- Dokter 3 -->
                <div class="medis-card">
                    <div class="medis-photo">
                        <i class="fas fa-tooth fa-3x" style="color:white;"></i>
                    </div>
                    <h3>drg. Devy N. Tilolango</h3>
                    <p style="color:#006039; font-weight:600;">Dokter Gigi</p>
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
                        <img src="assets/img/logoklinik.png" alt="Logo" style="height: 40px; margin-right: 10px;">
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
                    <label>Nomor HP / WhatsApp</label>
                    <input type="number" name="no_hp" required placeholder="Contoh: 0812..." autocomplete="off">
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