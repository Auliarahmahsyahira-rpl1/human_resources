<?php
include("../koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DEPARTEMEN</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<ul>
        <li><a href="departemen/index.php">Data Departemen</a></li>
        <li><a href="../karyawan/index.php">Data Karyawan</a></li>
    </ul>
    <h2>Data Departemen</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>

    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Departemen</th>
                <th><a href="tambah_departemen.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $query = $db->query("SELECT * FROM departemen");

        while ($departemen = $query->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $departemen['nama_departemen'] ?></td>
            <td align="center">
                <a href="edit_departemen.php?id=<?php echo $departemen['departemen_id'] ?>">Edit</a>
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_departemen.php?id=<?php echo $departemen['departemen_id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>