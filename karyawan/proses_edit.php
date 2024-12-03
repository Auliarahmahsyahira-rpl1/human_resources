<?php 
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $IdKaryawan = $_POST['karyawan_id'];
    $namaKaryawan = $_POST['nama_karyawan'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $sql = "UPDATE karyawan SET 
    nama_karyawan='$namaKaryawan',
    posisi='$posisi',
    gaji='$gaji'
    WHERE karyawan_id=$IdKaryawan";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Karyawan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data karyawan gagal di perbarui";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak...");
}
?>