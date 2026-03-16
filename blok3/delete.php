<?php

include("koneksi.php");

if(isset($_GET['id'])){
    $id     =$_GET['id'];

    $sql     ="DELETE FROM paket WHERE id=$id";
    $query   =mysqli_query($db, $sql);

    if($query){
        header('Location: list.php');
    } else {
        die("Gagal Menghapus...");
    }
} else {
    die("Akses Dilarang...");
}
?>