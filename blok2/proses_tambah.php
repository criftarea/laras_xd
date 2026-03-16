<?php

include("koneksi.php");

if(isset($_POST['SIMPAN'])){

    $nis            = $_POST['nis'];
    $nama_lengkap   = $_POST['nama_lengkap'];
    $tgl_lahir      = $_POST['tgl_lahir'];
    $kelas          = $_POST['kelas'];
    $jurusan        = $_POST['jurusan'];
    $email          = $_POST['email'];
    $alamat         = $_POST['alamat'];

    $ql = "INSERT INTO data_siswaa (nis,nama_lengkap,tgl_lahir,kelas,jurusan,email,alamat) VALUE ('$nis','$nama_lengkap','$tgl_lahir','$kelas','$jurusan','$email','$alamat')";
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