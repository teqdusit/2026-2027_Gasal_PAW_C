<?php
include 'koneksi.php';

// Proses simpan data saat tombol Simpan diklik
if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    $query = mysqli_query($koneksi, "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')");

    if ($query) {
        header("Location: supplier.php");
        exit();
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Master Supplier Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }

        h2 {
            color: #2b78a8;
            margin-bottom: 30px;
            font-weight: normal;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            width: 100px;
            font-weight: bold;
            text-align: right;
            padding-right: 20px;
        }

        .form-group input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
        }

        .form-group input[name="nama"] {
            width: 350px;
        }

        .form-group input[name="telp"],
        .form-group input[name="alamat"] {
            width: 250px;
        }

        .button-group {
            margin-left: 120px;
            margin-top: 20px;
        }

        .btn-simpan {
            background-color: #70ad47;
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 5px;
        }

        .btn-batal {
            background-color: #c00000;
            color: white;
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <h2>Tambah Data Master Supplier Baru</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama" required>
        </div>

        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" id="telp" name="telp" placeholder="telp" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="alamat" required>
        </div>

        <div class="button-group">
            <button type="submit" name="simpan" class="btn-simpan">Simpan</button>
            <a href="supplier.php" class="btn-batal">Batal</a>
        </div>
    </form>

</body>

</html>