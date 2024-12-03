<?php
// Menghubungkan file config dengan index
include("../koneksi.php");
session_start(); // Mulai sesi
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA KARYAWAN</title>
    <style>
        /* Membuat styling pada table */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        } 
    </style>
</head>
<body>
    <ul>
        <li><a href="../departemen/index.php">Data Departemen</a></li>
        <li><a href="karyawan/index.php">Data Karyawan</a></li>
    </ul>                                            
    <h2>Data Karyawan</h2>
    <!-- Menampilkan Notifikasi jika ada -->
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <!-- Hapus notifikasi setelah ditampilkan -->
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; 
        ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th><a href="tambah_karyawan.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $query = $db->query("SELECT * FROM karyawan");
        while ($karyawan = $query->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $karyawan['nama_karyawan'] ?></td>
            <td><?php echo $karyawan['posisi'] ?></td>
            <td><?php echo $karyawan['gaji'] ?></td>
            <td align="center">
                <a href="edit_karyawan.php?id=<?php echo $karyawan['karyawan_id'] ?>">Edit</a>
                <a onclick="return confirm('anda yakin ingin menghapus data?')" href="hapus_karyawan.php?id=<?php echo $karyawan['karyawan_id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- Menghitung jumlah baris yang ada pada table (karyawan) -->
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>