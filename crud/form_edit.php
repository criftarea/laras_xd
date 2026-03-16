<?php
include("koneksi.php");

if(!isset($_GET['NIS'])){
    header('location:list.php');
}

$NIS = $_GET['NIS'];

$ql = "SELECT * FROM siswa WHERE NIS=$NIS";
$query = mysqli_query ($db, $ql);
$siswa = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA SISWA</title>
    <link rel="stylesheet" type="text/css"href="style4.css">
</head>
<body>
<header style="text-align: center;">
<h2>SMK TELKOM BANJARBARU</h2>
    <a href="index.php">Kembali</a>
    <form method="POST" action="edit_proses1.php">
    <div class="kotak_login">
        <table>
            Nama<br>
            <input type="hidden" name="NIS" value="<?php echo $siswa['NIS']?>"/> 
            <input type="text" name="Nama" value="<?php echo $siswa['Nama']?>"/> 
            <br>
            <br>
            Kelas<br>
            <input type="text" name="Kelas" value="<?php echo $siswa['Kelas']?>"/> 
            <br>
            <br>
            Jurusan<br>
            <input type="text" name="Jurusan" value="<?php echo $siswa['Jurusan']?>"/>
            <br><br><br>
            <input type="submit" value="SIMPAN" class="tombol_login" name="SIMPAN" value="SIMPAN">
            <br>
            </form>
        </table>
    </body>
</html>