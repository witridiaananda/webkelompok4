<?php

$conn = mysqli_connect("localhost", "root", "", "UAS");

$result = mysqli_query($conn, "SELECT * FROM minimarket");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>aftar Barang Lanjutan</title>
    </head>
    <body style="background:  linear-gradient(#80FFDB, #64DFDF, #48BFE3, #5390D9, #5E60CE);">
        <h1>Daftar Barang Lanjutan</h1>

        <table border="1" cellpadding="10" callspacing="0">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Gambar</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row ["Kode_Barang"]; ?></td>
                <td><?= $row ["Nama_Barang"]; ?></td>
                <td><?= $row ["Harga"]; ?></td>
                <td><?= $row ["Stok"]; ?></td>
                <td><?= $row ["Satuan"]; ?></td>
                <td><img src="img/<?=$row["Gambar"]; ?>" width="100" ></td>
                
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>