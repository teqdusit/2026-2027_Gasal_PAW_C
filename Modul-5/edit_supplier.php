<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data supplier berdasarkan ID untuk ditampilkan di form
$query = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

// Jika ID tidak ditemukan, kembalikan ke halaman supplier
if (!$data) {
    header("Location: supplier.php");
    exit();
}

// Proses perbarui data saat tombol Update diklik
if (isset($_POST['update'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    $update_query = mysqli_query($koneksi, "UPDATE supplier SET nama = '$nama', telp = '$telp', alamat = '$alamat' WHERE id = '$id'");

    if ($update_query) {
        header("Location: supplier.php");
        exit();
    } else {
        echo "<script>alert('Gagal mengupdate data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Master Supplier</title>
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

        .btn-update {
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

    <h2>Edit Data Master Supplier</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
        </div>

        <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" id="telp" name="telp" value="<?= htmlspecialchars($data['telp']); ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="<?= htmlspecialchars($data['alamat']); ?>" required>
        </div>

        <div class="button-group">
            <button type="submit" name="update" class="btn-update">Update</button>
            <a href="supplier.php" class="btn-batal">Batal</a>
        </div>
    </form>

</body>

</html>