<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Departemen</title>
</head>
<body>
    <h3>Tambah Data Departemen</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Departemen</td>
                <td>
                    <select name="nama_departemen" style="width: 100%" required>
                        <option value="" selected disabled>Pilih Departemen</option>
                        <option value="Design">Design</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Management">Management</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>