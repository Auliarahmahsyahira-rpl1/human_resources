<?php

include("../koneksi.php");

$IdDepartemen = $_GET['id'];

$query = $db->query("SELECT * FROM departemen WHERE departemen_id = '$IdDepartemen'");
$departemen = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Departemen</title>
</head>
<body>
    <h3>Edit Data Departemen</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="departemen_id" value="<?php echo $departemen['departemen_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Departemen</td>
                <td>
                    <select name="nama_departemen" style="width: 100%" required>
                        <option value="" disabled>Pilih Kategori</option>
                        <option value="Design" <?php echo ($departemen['nama_departemen'] == "D") ? 'selected' : ''; ?>>Design</option>
                        <option value="Engineer" <?php echo ($departemen['nama_departemen'] == "E") ? 'selected' : ''; ?>>Engineer</option>
                        <option value="Management" <?php echo ($departemen['nama_departemen'] == "M") ? 'selected' : ''; ?>>Management</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>