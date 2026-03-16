<?php

include("koneksi.php");

if(isset($_POST['SIMPAN'])){

    $id             = $_POST['id'];
    $item_code   = $_POST['item_code'];
    $item_name      = $_POST['item_name'];
    $category          = $_POST['category'];
    $drop_off_date        = $_POST['drop_off_date'];
    $amount          = $_POST['amount'];
    $stock         = $_POST['stock'];
    $warranty         = $_POST['warranty'];

    $ql = "INSERT INTO paket (id,item_code,item_name,category,drop_off_date,amount,stock,warranty) 
    VALUE ('$id','$item_code','$item_name','$category','$drop_off_date','$amount','$stock','$warranty')";
    $query = mysqli_query($db, $ql);

if ($query){
    header('Location: list.php?status=sukses');
}else{
    header('Location: list.php?status=gagal');
}
}else{
    die("akses dilarang...");
}
?>