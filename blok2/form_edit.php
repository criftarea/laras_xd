<?php
include("koneksi.php");

if(!isset($_GET['nis'])){
    header('location:list.php');
}

$nis = $_GET['nis'];

$ql = "SELECT * FROM data_siswaa WHERE nis=$nis";
$query = mysqli_query ($db, $ql);
$data_siswa = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT</title>
    <link rel="stylesheet" type="text/css"href="style4.css">
</head>
<body>
<div class="menu">
            <ul id="navigasi">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="#">Blok 2</a>
                   <ul>
                         <li><a href="list.php">Data</a></li>
                          <li><a href="form_tambah.php">Add Data</a></li>
                     </ul></div>
<header style="text-align: center;">
<h2>STUDENT'S FORM EDIT</h2>
    <form method="POST" action="proses_edit.php">
    <div class="kotak_login">
        <table>
            <br>
            Full name<br>
            <input type="hidden" name="nis" value="<?php echo $data_siswa['nis']?>"/> 
            <input type="text" name="nama_lengkap" value="<?php echo $data_siswa['nama_lengkap']?>"/> 
            <br><br>
            Date of birth<br>
            <input type="date" name="tgl_lahir" value="<?php echo $data_siswa['tgl_lahir']?>"/> 
            <br><br>
            Kelas<br>
            <input type="radio" name="kelas" value="X">X
            <input type="radio" name="kelas" value="XI">XI
            <input type="radio" name="kelas" value="XII">XII
            <br><br>
            <label>Major</label><br>
             <select name="jurusan">
                <option value="Teknik Jaringan Akses Telekomunikasi">Teknik Jaringan Akses Telekomunikasi</option>
                <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Animasi">Animasi</option>
             <type class="form_login" placeholder="jurusan"></type></select>
            <br><br>
            Email<br>
            <input type="text" name="email" value="<?php echo $data_siswa['email']?>"/>
            <br><br>
            Address<br>
            <input type="text area" name="alamat" value="<?php echo $data_siswa['alamat']?>"/>
            <br><br>
            <input type="submit" value="SUBMIT" class="tombol_login" name="SIMPAN" value="SUBMIT">
            <br>
            </form>
        </table>
    </body>
</html>