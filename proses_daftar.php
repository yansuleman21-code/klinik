<?php
include 'koneksi.php';

// Cek apakah data dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari formulir
    $nik = htmlspecialchars($_POST['nik']);
    $nama = htmlspecialchars($_POST['nama']);
    $poli = htmlspecialchars($_POST['poli']);
    $tgl = htmlspecialchars($_POST['tgl_kunjungan']);
    $no_hp = "";

    // Siapkan perintah SQL (Query)
    $query = "INSERT INTO pendaftaran_online (nik, nama, no_hp, poli_tujuan, tgl_kunjungan) 
              VALUES ('$nik', '$nama', '$no_hp', '$poli', '$tgl')";

    // Jalankan perintah simpan
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, tampilkan pesan dan kembali ke halaman utama
        echo "<script>
                alert('Pendaftaran Berhasil! Silakan datang sesuai jadwal.');
                window.location.href = 'index.php';
              </script>";
    } else {
        // Jika gagal
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika orang mencoba buka file ini langsung tanpa lewat form
    header("Location: index.php");
    exit();
}
?>