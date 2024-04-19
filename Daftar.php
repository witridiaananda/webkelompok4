<?php 

include("config.php");
//tombol cari ditekan
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Barang</title>
    </head>

    <body style="background:  linear-gradient(#4facfe, #00f2fe);">
        <header align=left>
            
            <h2>Daftar Barang</h3>
        </header>

        <nav>
        <a href="Entry.php">[+]Tambah Data</a>
        </nav>
        <br>
        <table border="">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM minimarket";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$siswa['Kode_Barang']."</td>";
                    echo "<td>".$siswa['Nama_Barang']."</td>";
                    echo "<td>".$siswa['Harga']."</td>";
                    echo "<td>".$siswa['Stok']."</td>";
                    echo "<td>".$siswa['Satuan']."</td>";
                    echo "<td>".$siswa['Gambar']."</td>";

                    echo "<td>";
                    echo "<a href='from-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="coba.php">Mau Lihat Gambarnya</a>
    </body>
</html>