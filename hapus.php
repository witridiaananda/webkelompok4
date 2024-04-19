<?php

include("config.php");

if( isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM minimarket WHERE id=$id";
    $query = mysqli_query($db,$sql);

    if($query){
        header('Location: Daftar.php');
    }else{
        die("Gagal dihapus....");
    }
}else{
    die("Akses dilarang...");
}
?>
