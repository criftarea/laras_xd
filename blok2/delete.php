<?php

include("koneksi.php");

if(isset($_GET['nis'])){
    $nis     =$_GET['nis'];

    $sql     ="DELETE FROM data_siswaa WHERE nis=$nis";
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