<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html>
<head> 
    <title>PRINT</title>
</head>
<body onload="script:window.print()"></body>
<body>
<header>
    <h1>SALES DATA</h1>
    <header style="text-align: center;">
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
        
        if(isset($_GET['cari'])){
            
            $cari     = $_GET['cari'];
            $query    = "SELECT * FROM paket WHERE item_code like '%$cari%' OR item_name like '%$cari%' OR category like 
            '%$cari%' OR drop_off_date like '%$cari%' OR amount like '%$cari%' OR stock like '%$cari%' OR warranty like '%$cari%'";
        }else{
            $query    = "SELECT * FROM paket";
        }
        $query        = mysqli_query($db, $query);
        while ($paket = mysqli_fetch_array($query)) {
            
            echo "<tr>";
            echo "<td>" . $paket ['id']."</td>";
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
</body>
</html>