<?php 
    include '../../../config/database.php';
    $id_kendaraan=addslashes(trim($_POST['id_kendaraan']));
    $kode_kendaraan=addslashes(trim($_POST['kode_kendaraan']));
    $identitas_kendaraan=ucwords(addslashes(trim($_POST['identitas_kendaraan'])));
    $merk_kendaraan=addslashes(trim($_POST['merk_kendaraan']));
    $tahun=addslashes(trim($_POST['tahun']));
    $spesifikasi_kendaraan=addslashes(trim($_POST['spesifikasi_kendaraan']));
    $penanggung_jawab=addslashes(trim($_POST['penanggung_jawab']));
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
        move_uploaded_file($file_tmp, '../foto/'.$foto);
        $sql="insert into inventaris_kendaraan (id_kendaraan,kode_kendaraan,identitas_kendaraan,merk_kendaraan,tahun,spesifikasi_kendaraan,penanggung_jawab,banyaknya,pengadaan,keterangan,foto) values
        ('$id_kendaraan','$kode_kendaraan','$identitas_kendaraan','$merk_kendaraan','$tahun','$spesifikasi_kendaraan','$penanggung_jawab','$banyaknya','$pengadaan','$keterangan','$foto')";
    
    }else {
        $sql="insert into inventaris_kendaraan (id_kendaraan,kode_kendaraan,identitas_kendaraan,merk_kendaraan,tahun,spesifikasi_kendaraan,penanggung_jawab,banyaknya,pengadaan,keterangan) values
        ($id_kendaraan,'$kode_kendaraan','$identitas_kendaraan','$merk_kendaraan','$tahun','$spesifikasi_kendaraan','$penanggung_jawab','$banyaknya','$pengadaan','$keterangan')";

 
}
mysqli_query($kon,$sql);
  
?>