<?php 
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $IdDepartemen = $_POST['departemen_id'];
    $namaDepartemen = $_POST['nama_departemen'];
    
    $sql = "UPDATE departemen SET 
    nama_departemen='$namaDepartemen'
    WHERE departemen_id=$IdDepartemen";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data departemen berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data departemen gagal di perbarui";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak...");
}
?>