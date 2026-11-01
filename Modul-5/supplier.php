<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Master Supplier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #2b78a8;
            margin: 0;
        }

        .btn-tambah {
            background-color: #70ad47;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
            text-align: left;
        }

        th {
            background-color: #d9edf7;
            color: #31708f;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-edit {
            background-color: #ed7d31;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
            margin-right: 5px;
        }

        .btn-hapus {
            background-color: #c00000;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="header-container">
        <h2>Data Master Supplier</h2>
        <a href="tambah_supplier.php" class="btn-tambah">Tambah Data</a>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 50px;">No</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th style="width: 160px;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY id ASC");

            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['nama']); ?></td>
                        <td><?= htmlspecialchars($row['telp']); ?></td>
                        <td><?= htmlspecialchars($row['alamat']); ?></td>
                        <td>
                            <a href="edit_supplier.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus_supplier.php?id=<?= $row['id']; ?>" class="btn-hapus"
                                onclick="return confirm('Anda yakin akan menghapus supplier ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data supplier.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>