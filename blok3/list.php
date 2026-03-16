<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LIST</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
</head>
<body>
<header>
                        <a class="navbar-brand" href="♡">
                        <img src="logo.gif" alt="logo" width="70" height="70"></a>
                        <div class="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <nav class="nav-bar">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                           <li>
                            <a href="list.php" class="active">Data</a>
                         </li>
                         <li>
                            <a href="form_tambah.php">Add Data</a>
                         </li>
                         <li>
                         <a href="cetak.php">Print</a>
                         </li>
                         <li>
                         <a href="login.php">LogOut</a>
                         </li>
                        </ul>
                     </nav>
                 </header><script>
                    hamburger = document.querySelector(".hamburger");
                    hamburger.onclick = function(){
                        navBar = document.querySelector(".nav-bar");
                        navBar.classList.toggle("active");
                    }
                    </script></body>
                 <br><br>
    <br>
    <form action="list.php" method="get" class="cari">
    <input class="gedeincari" type="text" name="cari" placeholder="Input..." required>
    <input class="gedein" type="submit" value="Search">
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }
    ?>
    <table>
         <table border="1">
        <tr>
            <th>No</th>
            <th>Item code</th>
            <th>Item name</th>
            <th>Category</th>
            <th>Drop off date</th>
            <th>Amount</th>
            <th>Stock</th>
            <th>Warranty</th>
            <th>Action</th>

        </tr>
</div>
        <?php
        $no = 0;
        if(isset($_GET['cari'])){
            $cari     = $_GET['cari'];
            $query    = "SELECT * FROM paket WHERE item_code like '%$cari%' OR item_name like '%$cari%' OR category like 
            '%$cari%' OR drop_off_date like '%$cari%' OR amount like '%$cari%' OR stock like '%$cari%' OR warranty like '%$cari%'";
        }else{
            $query    = "SELECT * FROM paket";
        }
        $query        = mysqli_query($db, $query);
        while ($paket = mysqli_fetch_array($query)) {
            $no++;
            echo "<tr>";
            echo "<td>" . $no."</td>";
            echo "<td>" . $paket ['item_code']."</td>";
            echo "<td>" . $paket ['item_name']."</td>";
            echo "<td>" . $paket ['category']."</td>";
            echo "<td>" . $paket['drop_off_date']."</td>";
            echo "<td>" . $paket ['amount']."</td>";
            echo "<td>" . $paket ['stock']."</td>";
            echo "<td>" . $paket ['warranty']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?id=". $paket['id']. "'>📝</a> ";
            echo "<a href='delete.php?id=". $paket['id']. "'>🗑️</a> ";
            echo "</td>";
        }
        ?>
    </table>
    
</html>