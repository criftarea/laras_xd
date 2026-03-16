<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LIST</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
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
            <th>Name</th>
            <th>Date of birth</th>
            <th>Class</th>
            <th>Major</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Action</th>
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
        while ($data_siswaa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $data_siswaa ['id']."</td>";
            echo "<td>" . $data_siswaa ['nis']."</td>";
            echo "<td>" . $data_siswaa ['nama_lengkap']."</td>";
            echo "<td>" . $data_siswaa ['tgl_lahir']."</td>";
            echo "<td>" . $data_siswaa['kelas']."</td>";
            echo "<td>" . $data_siswaa ['jurusan']."</td>";
            echo "<td>" . $data_siswaa ['email']."</td>";
            echo "<td>" . $data_siswaa ['alamat']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?nis=". $data_siswaa['nis']. "'>EDIT</a> |";
            echo "<a href='delete.php?nis=". $data_siswaa['nis']. "'>DELETE</a> |";
            echo "</td>";
        }
        ?>
    </table>
</body>
</html>