<?php
include 'koneksi.php';

// Pastikan ada ID yang dikirim melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel supplier berdasarkan ID
    $query = mysqli_query($koneksi, "DELETE FROM supplier WHERE id = '$id'");

    if ($query) {
        // Jika berhasil hapus, kembalikan ke halaman daftar supplier
        header("Location: supplier.php");
        exit();
    } else {
        // Jika gagal (misal karena terikat relasi Foreign Key)
        echo "<script>
                alert('Gagal menghapus data! Data supplier ini mungkin masih digunakan di tabel lain.');
                window.location.href='supplier.php';
              </script>";
    }
} else {
    // Jika tidak ada parameter ID di URL
    header("Location: supplier.php");
    exit();
}
?>