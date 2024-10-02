<?php
    $kode_kendaraan=$_POST['kode_kendaraan'];
    include "../../../config/database.php";
    $hasil = mysqli_query ($kon,"select * from inventaris_kendaraan where kode_kendaraan='".$kode_kendaraan."' limit 1");
    $jumlah = mysqli_num_rows($hasil);

    if ($jumlah>=1){
        echo "<div class='alert alert-danger'> Kode kendaraan telah digunakan</div>";
        echo "<script>  $('#submit').prop('disabled', true); </script>";
    }else {
        echo "<div class='alert alert-success'> Kode kendaraan Tersedia</div>";
        echo "<script>  $('#submit').prop('disabled', false); </script>";
    }
?>
