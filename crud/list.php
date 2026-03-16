<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LATIHAN CRUD</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<header style="text-align: center;">
    <h1>SMK TELKOM BANJARBARU</h1>
    <br>
    <a href="tambah.php">Tambah Data Siswa</a>
    <br>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <div class="kotak_login">
    <form action="list.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="cari">
    </form>
    <br>
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }
    ?>
    <header style="text-align: center;">
    <table>
         <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        if(isset($_GET['cari'])){
           $cari  = $_GET['cari'];
           $query = "SELECT * FROM siswa WHERE Nama like '%$cari%' OR Kelas like '%$cari%' OR Jurusan like '%$cari%'";
           }else{
            $query = "SELECT * FROM siswa";
           } 

        $query = mysqli_query($db, $query);
        while ($siswa = mysqli_fetch_array($query)){

            echo "<tr>";
            echo "<td>" . $siswa ['NIS']."</td>";
            echo "<td>" . $siswa ['Nama']."</td>";
            echo "<td>" . $siswa ['Kelas']."</td>";
            echo "<td>" . $siswa ['Jurusan']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?NIS=".$siswa['NIS']."'>EDIT</a> |";
            echo "<a href='hapus.php?NIS=".$siswa['NIS']."'>HAPUS</a>";
            echo "</td>";
        }
        ?>
    </table>
</body>
</html>