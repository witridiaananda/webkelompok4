<?php

include("config.php");

//chek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['simpan'])){

    //ambil data dari formulir
    $id = $_POST['id'];
    $kode = $_POST['Kode_Barang'];
    $nama = $_POST['Nama_Barang'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];
    $satuan = $_POST['Satuan'];
    $gambar = $_POST['Gambar'];

    //buat query update
    $sql = "UPDATE minimarket SET Kode_Barang='$kode', Nama_Barang='$nama', Harga='$harga', 
    Stok='$stok', Satuan='$satuan', Gambar='$gambar' Where id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query){
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: Daftar.php');
    } else {
        //kalau gagal tampilkan pesan 
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>