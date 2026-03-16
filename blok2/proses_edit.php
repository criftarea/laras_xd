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
    
    $ql = "UPDATE data_siswaa SET nama_lengkap='$nama_lengkap', tgl_lahir='$tgl_lahir', kelas='$kelas', jurusan='$jurusan', email='$email', alamat='$alamat' WHERE nis=$nis";
    $query = mysqli_query($db, $ql);

if ($query){
    header('Location: list.php');
}else{
    die('Gagal menyimpan perubahan');
}
}else{
    die("Akses dilarang...");
}
?>c 