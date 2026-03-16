<?php

 $server = "localhost";
 $user = "root";
 $password = "";
 $nama_database = "biodata_toystory";

 $db = mysqli_connect($server, $user, $password, $nama_database);

 if (!$db){
    die ("Gagal Terhubung ke Database :" . mysqli_connect_error());
}
?>