<?php 
    include '../../../config/database.php';

    $kode_supplier=addslashes(trim($_POST["kode_supplier"]));
    $nama_supplier=ucwords(addslashes(trim($_POST["nama_supplier"])));
    $no_telp=addslashes(trim($_POST["no_telp"]));
    $email=addslashes(trim($_POST["email"]));
    $alamat=addslashes(trim($_POST["alamat"]));
    $ttl=addslashes(trim($_POST["ttl"]));
    $status=addslashes(trim($_POST["status"]));

    //Query input menginput data kedalam tabel supplier
    $sql="insert into supplier (kode_supplier,nama_supplier,no_telp,email,alamat_supplier,ttl,status) values
    ('$kode_supplier','$nama_supplier','$no_telp','$email','$alamat','$ttl','$status')";

    //Mengeksekusi query 
    mysqli_query($kon,$sql);
?>