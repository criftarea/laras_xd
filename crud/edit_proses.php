<?php

include("koneksi.php");

if(isset($_POST['SIMPAN'])){

    $NIS        = $_POST['NIS'];
    $Nama       = $_POST['Nama'];
    $Kelas      = $_POST['Kelas'];
    $Jurusan    = $_POST['Jurusan'];
    
    $ql = "UPDATE siswa SET Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan' WHERE NIS=$NIS";
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