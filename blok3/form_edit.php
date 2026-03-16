<?php
include("koneksi.php");

if(!isset($_GET['id'])){
    header('location:list.php');
}

$id = $_GET['id'];
$ql = "SELECT * FROM paket WHERE id=$id";
$query = mysqli_query ($db, $ql);
$paket = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT</title>
    <link rel="stylesheet" type="text/css"href="style4.css">
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
                                <a href="index.php" >Home</a>
                            </li>
                           <li>
                            <a href="list.php" class="active">Data</a>
                         </li>
                         <li>
                            <a href="form_edit.php" >Add Data</a>
                         </li>
                         <li>
                         <a href="https://www.instagram.com/lllaaras/">Contact</a>
                         </li>
                         <li>
                         <a href="login.php">LogOut</a>
                         </li>
                        </ul>
                     </nav>
                 </header>
    <form method="POST" action="proses_edit.php">
    <div class="kotak_login">
        <table>
            Item code
             <br>
             <input type="hidden" name="id" value="<?php echo $paket['id']?>"/> 
            <input type="number" name="item_code" value="<?php echo $paket['item_code']?>"/> 
             <br><br>
            Item name
             <br>
             <input type="text" class="form_login" name="item_name" value="<?php echo $paket['item_name']?>" placeholder="Enter name">
             <br>
             <label> 
            Category
             </label>
             <br><select name="category"><br>
             <option value=""></option>
             <option value="Convenience goods">Convenience goods</option>
             <option value="Shopping goods">Shopping goods</option>
             <option value="Specialty goods">Specialty goods</option>
             <type class="form_login" placeholder="category"></type></select>
             <br><br>
            Drop-off date<br>
             <input type="date" class="form_login" name="drop_off_date" value="<?php echo $paket['drop_off_date']?>" placeholder="Enter Date">
             <br>
            Amount<br>
            <input type="number" class="form_login" name="amount" value="<?php echo $paket['amount']?>" placeholder="Enter Amount">
             <br>
            Stock
             <br>
             <input type="number" class="form_login" name="stock" value="<?php echo $paket['stock']?>" placeholder="Enter Stock"> 
             <br><br>
            Warranty
            </label>
             <br><select name="warranty"><br>
             <option value=""></option>
             <option value="1">1 years</option>
             <option value="2">2 years</option>
             <option value="3">3 years</option>
             <option value="5">5 years</option>
             <option value="10">10 years</option>
             <type class="form_login" placeholder="warranty"></type></select>
             <br><br>
             <br>
             <input type="submit" class="sign-btn" name="SIMPAN" value="SUBMIT">
             <br><br>
            </form>
        </table>
    </body>
</html>