<?php

include("koneksi.php");

if(isset($_GET['NIS'])){
    $NIS     =$_GET['NIS'];

    $sql     ="DELETE FROM siswa WHERE NIS=$NIS";
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