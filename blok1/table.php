<!DOCTYPE html>
<html lang="en">
<head>
        <title>TABLE</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <h2>Table</h2>
        <hr>
        <div class="menu">
            <ul id="navigasi">
                 <li><a href="navigasi.html">Navigasi</a></li>
                 <li><a href="form.html">Form</a></li>
                 <li><a href="contohif.php">Contoh If</a>
                 </li>
              </ul>
          </div>
        <header style="align: center;">
        <div style="max-width: 600px; margin: 3em auto"></div>
         <table border="0" width="100%"> 

<?php 
$NIS    = array("543221173","543221181","543221118","543331082","543221158", "543221085");
$nama   = array("Laras Kurniadesi","Naura Islami Ayudya Suhardi","Novi Adinda","Aulia Rahmah","Gt Qowita Celia Aurellizha", 'Seila Salsabiela');
$alamat = array("Loktabat", "Loktabat","Komet Raya","RO Ulin","Trikora", "RO Ulin");
$tempat_lahir  = array("Pelaihari","Banjarbaru","Kapuas","Banjarbaru","Banjarbaru", "Banjarbaru");
$tanggal_lahir = array("02-12-2006","28-12-2006","11-11-2007","06-02-2007","21-05-2007", "1-04-2007");
$jurusan = array("RPL","RPL","RPL","RPL","RPL","RPL");
$agama = array("Islam","Islam","Islam","Islam","Islam","Islam");
 
// hitung total array
$totalArray =count($NIS);
 
echo "<table border='2'>";
echo "<tr>";
echo "<th>NIK</th>";
echo "<th>NAMA</th>";
echo "<th>ALAMAT</th>";
echo "<th>KOTA</th>";
echo "<th>TEMPAT, TGL LAHIR</th>";
echo "<th>JURUSAN</th>";
echo "<th>AGAMA</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $totalArray; $i++) { 
  echo "<tr>";
  echo "<td>$NIS[$i]</td>";
  echo "<td>$nama[$i]</td>";
  echo "<td>$alamat[$i]</td>";
  echo "<td>$tempat_lahir[$i]</td>";
  echo "<td>$tanggal_lahir[$i]</td>";
  echo "<td>$jurusan[$i]</td>";
  echo "<td>$agama[$i]</td>";
}
echo "</table>";

?>
</table>
</body>
</html>