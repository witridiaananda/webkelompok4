<!DOCTYPE html>
<html>
    <head>
        <title>Rizky Mark</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body style="background:  linear-gradient(#48c6ef, #6f86d6);">
        <header align=center>
        <font size='6' face='Helvei' color='#000000'><h1>Rizky</h1>
            <h1>Mark</h1></font>
        </header>
        <br><br><br><br><br>

        <font size='5' face='Helvei' color='#grey'>Menu</font>
        <nav>
        <font size='4' face='Helvei'>
            <ul>
                <li><a href="Entry.php">Menu Entry Barang</a></li>
                <li><a href="Daftar.php">Menu Daftar Barang</a></li>
            </ul> 
        </font>
        </nav>
         
        <?php if(isset($_GET['status'])):?>
            <p>
                <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran barang berhasil";
                } else{
                    echo "Pendaftaran gagal";
                }
                ?>
            </p>
            <?php endif; ?>
    </body>
</html>