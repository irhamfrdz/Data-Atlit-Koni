<?php 
    include '../../../config/database.php';

    $id=addslashes(trim($_POST['id']));
    $lokasi=ucwords(addslashes(trim($_POST['lokasi'])));
    $nama_barang=addslashes(trim($_POST['nama_barang']));
    $merk_spesifikasi=addslashes(trim($_POST['merk_spesifikasi']));
    $banyaknya=addslashes(trim($_POST['banyaknya']));
    $pengadaan=addslashes(trim($_POST['pengadaan']));
    $keterangan=addslashes(trim($_POST['keterangan']));
    $foto=addslashes(trim($_POST['foto']));

    $ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif');
    $foto = $_FILES['foto']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        //Upload foto
        move_uploaded_file($file_tmp, '../foto/'.$foto);
   
        $sql="insert into inventaris_barang (id,lokasi,nama_barang,merk_spesifikasi,banyaknya,pengadaan,keterangan,foto) values
        ('B$id','$lokasi','$nama_barang','$merk_spesifikasi','$banyaknya','$pengadaan','$keterangan','$foto')";

    }else {
        $sql="insert into inventaris_barang (id,lokasi,nama_barang,merk_spesifikasi,banyaknya,pengadaan,keterangan) values
        ('B$id','$lokasi','$nama_barang','$merk_spesifikasi','$banyaknya','$pengadaan','$keterangan')";
    }



    mysqli_query($kon,$sql);
  
?>