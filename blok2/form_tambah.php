<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>
    <link rel="stylesheet" type="text/css"href="style3.css">
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
<h2>STUDENT'S FORM</h2>
    <form method="POST" action="proses_tambah.php">
    <div class="kotak_login">
        <form>  
            NIS<br>
            <input type="text" class="form_login" name="nis" value=""placeholder="Enter NIS"> 
            <br><br>
            Name<br>
            <input type="text" class="form_login" name="nama_lengkap" value=""placeholder="Enter Full Name"> 
            <br><br>
            Date of birth<br>
            <input type="date" class="form_login" name="tgl_lahir" value="">
            <br><br>
            <label>Class</label>
            <br>
            <input type="radio" name="kelas" value="X">X
            <input type="radio" name="kelas" value="XI">XI
            <input type="radio" name="kelas" value="XII">XII
            <br><br>
            <br><label>Major</label>
             <br><select name="jurusan"><br>
             <option value=""></option>
                <option value="Teknik Jaringan Akses Telekomunikasi">Teknik Jaringan Akses Telekomunikasi</option>
                <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Animasi">Animasi</option>
             <type class="form_login" placeholder="jurusan"></type></select>
             <br><br>
            <br>Email<br>
            <input type="text" class="form_login" name="email" value=""placeholder="Enter Email"> 
            <br><br>
            Address<br>
            <input type="text area" class="form_login" name="alamat" value=""placeholder="Enter Address"> 
            <br>
            <br>
            <input type="submit" class="tombol_login" name="SIMPAN" value="SUBMIT">
            <br><br>
</body>
</html>