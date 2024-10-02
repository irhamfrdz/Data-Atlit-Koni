<?php 
    include '../../../config/database.php';
    $id_barang=addslashes(trim($_POST['id_barang']));
    $kode_barang=addslashes(trim($_POST['kode_barang']));
    $nama_barang=ucwords(addslashes(trim($_POST['nama_barang'])));
    $kategori=addslashes(trim($_POST['kategori']));
    $jenis_kelamin=addslashes(trim($_POST['jenis_kelamin']));
    $no_hp=addslashes(trim($_POST['no_hp']));
    $nomor_kelas_pertandingan=addslashes(trim($_POST['nomor_kelas_pertandingan']));
    $asal_daerah=addslashes(trim($_POST['asal_daerah']));
    $tinggi_badan=addslashes(trim($_POST['tinggi_badan']));
    $berat_badan=addslashes(trim($_POST['berat_badan']));
    $gol_darah=addslashes(trim($_POST['gol_darah']));
    $pekerjaan=addslashes(trim($_POST['pekerjaan']));
    $pendidikan=addslashes(trim($_POST['pendidikan']));
    $email=addslashes(trim($_POST['email']));
    $tahun=addslashes(trim($_POST['tahun']));
   
        $sql="update barang set
        nama_barang='$nama_barang',
        kategori_barang='$kategori',
        jenis_kelamin='$jenis_kelamin',
        no_hp='$no_hp',
        nomor_kelas_pertandingan='$nomor_kelas_pertandingan',
        asal_daerah='$asal_daerah',
        tinggi_badan='$tinggi_badan',
        berat_badan='$berat_badan',
        gol_darah='$gol_darah',
        pekerjaan='$pekerjaan',
        pendidikan='$pendidikan',
        email='$email',
        tahun='$tahun'

        where id_barang='$id_barang'";
    
   
    mysqli_query($kon,$sql);

?>