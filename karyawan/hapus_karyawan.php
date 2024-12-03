<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    $IdKaryawan = $_GET['id'];
    
    $sql = "DELETE FROM karyawan WHERE karyawan_id=$IdKaryawan";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data karyawan berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data karyawan gagal dihapus!";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak....");
}