<?php

include("koneksi.php");

if(isset($_POST['SIMPAN'])){

    $Nama       = $_POST['Nama'];
    $Kelas      = $_POST['Kelas'];
    $Jurusan    = $_POST['Jurusan'];
    
    $ql = "INSERT INTO siswa (Nama,Kelas,Jurusan) VALUE ('$Nama','$Kelas','$Jurusan')";
    $query = mysqli_query($db, $ql);

if ($query){
    header('Location: list.php?status=sukses');
}else{
    header('Location: list.php?status=gagal');
}
}else{
    die("akses dilarang...");
}
?>