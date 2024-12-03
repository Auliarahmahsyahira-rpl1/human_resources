<?php
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $IdDepartemen = $_POST['departemen_id'];
    $namaDepartemen = $_POST['nama_departemen'];
    
    $sql = "INSERT INTO departemen (departemen_id, nama_departemen) VALUES ('$IdDepartemen', '$namaDepartemen')";

    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak...");
}
?>