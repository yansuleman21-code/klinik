<?php
include 'koneksi.php';

// Cek apakah data dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari formulir
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $poli = $_POST['poli'];
    $tgl = $_POST['tgl_kunjungan'];
    $no_hp = $_POST['no_hp']; // Ambil no hp dari form

    // Validasi sederhana
    if (empty($nik) || empty($nama) || empty($tgl) || empty($no_hp)) {
        echo "<script>alert('Semua data wajib diisi!'); window.history.back();</script>";
        exit;
    }

    // Siapkan Prepared Statement (Anti SQL Injection)
    $query = "INSERT INTO pendaftaran_online (nik, nama, no_hp, poli_tujuan, tgl_kunjungan) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($koneksi, $query)) {
        // Bind parameter (s = string)
        mysqli_stmt_bind_param($stmt, "sssss", $nik, $nama, $no_hp, $poli, $tgl);

        // Eksekusi statement
        if (mysqli_stmt_execute($stmt)) {
            // Jika berhasil
            echo "<script>
                    alert('Pendaftaran Berhasil! Silakan datang sesuai jadwal.');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            // Jika gagal eksekusi
            echo "Error: " . mysqli_error($koneksi);
        }
        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error Prepared Statement: " . mysqli_error($koneksi);
    }
} else {
    // Jika orang mencoba buka file ini langsung tanpa lewat form
    header("Location: index.php");
    exit();
}
?>