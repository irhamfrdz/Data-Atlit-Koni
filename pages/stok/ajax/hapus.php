<?php
    include '../../../config/database.php';
    $id=$_POST['id'];
    mysqli_query($kon,"delete from inventaris_barang where id='$id'");
   
?>