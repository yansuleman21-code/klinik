-- Buat Database
CREATE DATABASE IF NOT EXISTS klinik_adhyaksa;
USE klinik_adhyaksa;

-- Buat Tabel Pendaftaran
CREATE TABLE IF NOT EXISTS pendaftaran_online (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20),
    poli_tujuan VARCHAR(50) NOT NULL,
    tgl_kunjungan DATE NOT NULL,
    tgl_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
