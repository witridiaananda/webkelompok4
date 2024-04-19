<?php

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum
if( !isset($_GET['id'])){

header('Location: Daftar.php');
}

    $id = $_GET['id'];
    
    // buat query
    $sql = "SELECT * FROM Minimarket WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    //apakah query simpan berhasil?
    if(mysqli_num_rows($query) < 1) {
        die("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FORMULIR EDIT SISWA  | SMA N 7 Solok Selatan</title>
    </head>
    <body style="background:url(img/s.jpg)">
        <header>
            <h2>Formulir Edit Siswa</h2>
        </header>

        <form action="proses-edit.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
                <p>
                    <label for="Kode_Barang">Kode Barang:</label>
                    <input type="text" name="Kode_Barang" placeholder="Kode_Barang" value="<?php echo $siswa['Kode_Barang']?>"/>
                </p>
                <p>
                    <label for="Nama_Barang">Nama Barang:</label>
                    <input type="text" name="Nama_Barang" placeholder="Nama_Barang" value="<?php echo $siswa['Nama_Barang']?>"/>
                </p>
                <p>
                    <label for="Harga">Harga:</label>
                    <input type="text" name="Harga" placeholder="Harga" value="<?php echo $siswa['Harga']?>"/>
                </p>
                <p>
                    <label for="Stok">Stok:</label>
                    <input type="text" name="Stok" placeholder="Stok" value="<?php echo $siswa['Stok']?>"/>
                </p>
                <p>
                    <label for="Satuan">Satuan:</label>
                    <input type="text" name="Satuan" placeholder="Satuan" value="<?php echo $siswa['Satuan']?>"/>
                </p>
                <p>
                    <label for="Gambar">Gambar:</label>
                    <input type="text" name="Gambar" placeholder="Gambar" value="<?php echo $siswa['Gambar']?>"/>
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>
            </fieldset>
        </form>
    </body>
</html>