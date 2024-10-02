<?php
    include '../../../config/database.php';
    $id_atlit=$_POST['id_atlit'];
    mysqli_query($kon,"delete from atlit where id_atlit='$id_atlit'");
   
?>