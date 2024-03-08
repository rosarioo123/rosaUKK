<?php
// Pastikan Anda memiliki koneksi ke database yang sesuai
// Memeriksa apakah ID peminjaman diberikan dalam URL
if (isset($_GET['id'])) {
    // Ambil ID peminjaman dari URL
    $id_peminjaman = $_GET['id'];
    
    // Perbarui status peminjaman menjadi "dikembalikan"
    $query = mysqli_query($koneksi, "UPDATE peminjaman SET status_peminjaman='dikembalikan' WHERE id_peminjaman=$id_peminjaman");
    
    // Memeriksa apakah query berhasil dieksekusi
    if ($query) {
        // Jika berhasil, arahkan kembali ke laporan peminjaman
        header("Location: index.php?page=laporan");
        exit();
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Gagal melakukan pengembalian buku.";
    }
} else {
    // Jika ID peminjaman tidak diberikan dalam URL, tampilkan pesan kesalahan
    echo "ID peminjaman tidak diberikan.";
}
?>
