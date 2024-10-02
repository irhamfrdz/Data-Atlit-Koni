<?php 
    include '../../../config/database.php';
    $id_atlit=addslashes(trim($_POST['id_atlit']));
    $nama_atlit=ucwords(addslashes(trim($_POST['nama_atlit'])));
    $jenis_kelamin=addslashes(trim($_POST['jenis_kelamin']));
    $no_hp=addslashes(trim($_POST['no_hp']));
    $cabang_olahraga=addslashes(trim($_POST['cabang_olahraga']));
    $ttl=addslashes(trim($_POST['ttl']));
    $nik=addslashes(trim($_POST['nik']));
    $kartu_keluarga=addslashes(trim($_POST['kartu_keluarga']));
    $alamat=addslashes(trim($_POST['alamat']));
    $prestasi=addslashes(trim($_POST['prestasi']));


    $sql="update from atlit set
    nama_atlit='$nama_atlit',
    jenis_kelamin='$jenis_kelamin',
    no_hp='$no_hp',
    cabang_olahraga='$cabang_olahraga',
    ttl='$ttl',
    nik='$nik',
    kartu_keluarga='$kartu_keluarga',
    alamat='$alamat',
    prestasi='$prestasi'
    where id_atlit=$id_atlit";

        if(!mysqli_query($kon,$sql)) {
            echo("Error description: " . mysqli_error($kon));
        }

?>