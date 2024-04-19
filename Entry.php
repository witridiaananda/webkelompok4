<!DOCTYPE html>
<html>
    <head>
        <title>FORMULIR ENTRY BARANG</title>
    </head>
    <body style="background:  linear-gradient(#a1c4fd, #c2e9fb);">
        <header>
            <h2>FORMULIR ENTRY BARANG</h2>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label for="Kode_Barang">Kode Barang:</label>
                    <input type="text" name="Kode_Barang" placeholder="Kode Barang"/>
                </p>
                <p>
                    <label for="Nama_Barang">Nama Barang:</label>
                    <input type="text" name="Nama_Barang" placeholder="Nama Barang"/>
                </p>
                <p>
                    <label for="Harga">Harga:</label>
                    <input type="text" name="Harga" placeholder="Harga"/>
                </p>
                <p>
                    <label for="Stok">Stok:</label>
                    <input type="text" name="Stok" placeholder="Stok"/>
                </p>
                <p>
                    <label for="Satuan">Satuan:</label>
                    <input type="text" name="Satuan" placeholder="Satuan"/>
                </p>
                <p>
                    <label for="Gambar">Gambar:</label>
                    <input type="text" name="Gambar" placeholder="Gambar"/>
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </body>
</html>