<?php
     session_start();
     if($_SESSION['status']!="login"){
        header("Location:login.php?belum_login");
     }
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
                        <li><a href="login.php">LogOut</a></li>
                    </div>
<header style="text-align: center;">
    <h1>Welcome <?php echo $_SESSION['username'];?>! <br> you have successfully logged in.
</h1>
</body>
</html>