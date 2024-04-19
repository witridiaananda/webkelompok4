<?php

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $kode = $_POST['Kode_Barang'];
    $nama = $_POST['Nama_Barang'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];
    $satuan = $_POST['Satuan'];
    $gambar = $_POST['Gambar'];


    // buat query
    $sql = "INSERT INTO  minimarket (Kode_Barang, Nama_Barang, Harga, Stok, Satuan, Gambar)
    VALUE ('$kode', '$nama', '$harga', '$stok', '$satuan', '$gambar')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status =  sukses
        header('Location: Beranda.php?status=sukses');
    } else {
        // kalau berhasil alihkan ke halaman index.php dengan status =  gagal
        header('Location: Beranda.php?status=gagal');
    }
} else{
    die("Akses dilarang...");
}
?>