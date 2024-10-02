<?php 
    include '../../../config/database.php';
    $id_kendaraan=addslashes(trim($_POST['id_kendaraan']));
    $identitas_kendaraan=ucwords(addslashes(trim($_POST["identitas_kendaraan"])));
    $merk_kendaraan=addslashes(trim($_POST["merk_kendaraan"]));
    $tahun=addslashes(trim($_POST["tahun"]));
    $spesifikasi_kendaraan=addslashes(trim($_POST["spesifikasi_kendaraan"]));
    $penanggung_jawab=addslashes(trim($_POST["penanggung_jawab"]));
    $banyaknya=addslashes(trim($_POST["banyaknya"]));
    $pengadaan=addslashes(trim($_POST["pengadaan"]));
    $keterangan=addslashes(trim($_POST["keterangan"]));

    //Query update supplier
    $sql="update inventaris_kendaraan set
    identitas_kendaraan='$identitas_kendaraan',
    merk_kendaraan='$merk_kendaraan',
    tahun='$tahun',
    spesifikasi_kendaraan='$spesifikasi_kendaraan',
    penanggung_jawab='$penanggung_jawab',
    banyaknya='$banyaknya',
    pengadaan='$pengadaan',
    keterangan='$keterangan'
    where id_kendaraan=$id_kendaraan";

    //Menjalankan query 
    if(!mysqli_query($kon,$sql)) {
        echo("Error description: " . mysqli_error($kon));
    }
    // var_dump(expression)
?>