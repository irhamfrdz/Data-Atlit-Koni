<?php 
    include '../../../config/database.php';

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
 

        //Catatan: kode barang harus diawali dengan huruf, Jika tidak akan error pada saat ditambahkan di keranjang 
        $sql="insert into barang (kode_barang,nama_barang,kategori_barang,jenis_kelamin,no_hp,nomor_kelas_pertandingan,asal_daerah,tinggi_badan,berat_badan,gol_darah,pekerjaan,pendidikan,email,tahun) values
        ('B$kode_barang','$nama_barang','$kategori','$jenis_kelamin','$no_hp','$nomor_kelas_pertandingan','$asal_daerah','$tinggi_badan','$berat_badan','$gol_darah','$pekerjaan','$pendidikan','$email','$tahun')";
    
    mysqli_query($kon,$sql);
  
?>