<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    $IdDepartemen = $_GET['id'];
    
    $sql = "DELETE FROM departemen WHERE departemen_id=$IdDepartemen";
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