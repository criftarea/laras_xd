<?php

include("koneksi.php");

if(isset($_POST['SIMPAN'])){

    $id                   = $_POST['id'];
    $item_code            = $_POST['item_code'];
    $item_name            = $_POST['item_name'];
    $category             = $_POST['category'];
    $drop_off_date        = $_POST['drop_off_date'];
    $amount               = $_POST['amount'];
    $stock                = $_POST['stock'];
    $warranty             = $_POST['warranty'];
    
    $ql = "UPDATE paket SET item_code='$item_code', item_name='$item_name', category='$category', drop_off_date='$drop_off_date', amount='$amount', stock='$stock',  warranty=$warranty WHERE id=$id";
    $query = mysqli_query($db, $ql);

if ($query){
    header('Location: list.php');
}else{
    die('Gagal menyimpan perubahan');
}
}else{
    die("Akses dilarang...");
}
?>c 