<!DOCTYPE html>
<html>
    <head>
        <title>IF ELSE</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <h2>If Else</h2>
        <hr>
        <div class="menu">
            <ul id="navigasi">
                 <li><a href="navigasi.html">Navigasi</a></li>
                 <li><a href="form.html">Form</a></li>
                 <li><a href="table.php">Table</a>
                 </li>
              </ul>
          </div>
        <header style="text-align: center;">
        <img src="e18b8110d97843b79b436edbb004b880-removebg-preview.png"
        style="float: inherit ; width :200px ; height :200px ;"></header>
<?php
$blok = "belum";
if($blok == "belum"){
    echo "Apabila siswa belum melakukan pembayaran spp maka siswa tidak diperkenankan untuk mengikuti ujian blok";
}elseif ($blok =="sudah"){
    echo "Apabila siswa sudah melakukan pembayaran spp maka siswa dapat mengikuti ujian blok.";
}else{
    echo "percobaan";
}
              ?>
        </div>
    </body>
</html>