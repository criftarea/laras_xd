<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html>
<head> 
    <title>CETAK</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body onload="script:window.print()">
<div class="menu">
            <ul id="navigasi">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="#">Blok 2</a>
                   <ul>
                         <li><a href="list.php">Data</a></li>
                          <li><a href="form_tambah.php">Add Data</a></li>
                   </ul>
                <li><a href="cetak.php">Cetak</a></li>
                <li><a href="excel.php">Excel</a></li>
                     </div>
<header style="text-align: center;">
<h1>STUDENT'S DATA</h1>
<br>
    <div class="kotak_login">
    <form action="list.php" method="get" class="cari">
    <input class="gedeincari" type="text" name="cari">
    <input class="gedein" type="submit" value="Search">
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
           <th>ID</th>
           <th>NIS</th>
           <th>Nama Lengkap</th>
           <th>Tanggal Lahir</th>
           <th>Kelas</th>
           <th>Jurusan</th>
           <th>Email</th>
           <th>Alamat</th>
           <th>Aksi</th>
        </tr>
</div>
        <?php
        
        if(isset($_GET['cari'])){
            $cari     = $_GET['cari'];
            $query    = "SELECT * FROM data_siswaa WHERE nama_lengkap like '%$cari%' OR tgl_lahir like '%$cari%' OR kelas like '%$cari%' OR jurusan like '%$cari%' OR email like '%$cari%' OR alamat like '%$cari%'";
        }else{
            $query    = "SELECT * FROM data_siswaa";
        }
        $query        = mysqli_query($db, $query);
        while ($data_siswa = mysqli_fetch_array($query)) {

            echo "<tr>";
            echo "<td>" . $data_siswa ['id']."</td>";
            echo "<td>" . $data_siswa ['nis']."</td>";
            echo "<td>" . $data_siswa ['nama_lengkap']."</td>";
            echo "<td>" . $data_siswa ['tgl_lahir']."</td>";
            echo "<td>" . $data_siswa['kelas']."</td>";
            echo "<td>" . $data_siswa ['jurusan']."</td>";
            echo "<td>" . $data_siswa ['email']."</td>";
            echo "<td>" . $data_siswa ['alamat']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?id=". $data_siswa['id']. "'>EDIT</a> |";
            echo "<a href='hapus.php?id=". $data_siswa['id']. "'>HAPUS</a> |";
            echo "</td>";
        }
        ?>
        </table>
</body>
</html>