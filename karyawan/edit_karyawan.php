<?php

include("../koneksi.php");

$IdKaryawan = $_GET['id'];

$query = $db->query("SELECT * FROM karyawan WHERE karyawan_id = '$IdKaryawan'");
$karyawan = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h3>Edit Data Karyawan</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="karyawan_id" value="<?php echo $karyawan['karyawan_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td>
                    <input type="text" name="nama_karyawan" value="<?php echo $karyawan['nama_karyawan']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>
                    <input type="text" name="gaji" value="<?php echo $karyawan['gaji']; ?>"required>
                </td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>
                    <select name="posisi" style="width: 100%" required>
                        <option value="" disabled>Pilih Kategori</option>
                        <option value="Frontend Developer" <?php echo ($karyawan['posisi']) ? 'selected' : ''; ?>>Frontend Developer</option>
                        <option value="Backend Developer" <?php echo ($karyawan['posisi']) ? 'selected' : ''; ?>>Backend Developer</option>
                        <option value="QA Engineer" <?php echo ($karyawan['posisi']) ? 'selected' : ''; ?>>QA Engineer</option>
                        <option value="UI/UX Designer" <?php echo ($karyawan['posisi']) ? 'selected' : ''; ?>>UI/UX Designer</option>
                        <option value="Project Manager" <?php echo ($karyawan['posisi']) ? 'selected' : ''; ?>>Project Manager</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>