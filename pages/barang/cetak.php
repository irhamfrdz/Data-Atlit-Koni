<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Atlit</title>

	<style type="text/css">
		@media print {
		  @page { margin: 0; }
		  body { margin: 1.6cm; }
		}
	</style>
</head>
<body onload="window.print()">

	<table align="center" width="80%" border="0">
		<tr>
			<td align="center"><img src="../../dist/img/logo.png" width="100px"></td>
			<td align="center"><h1>Koni kota serang</h1></td>
		</tr>
	</table>
	<hr>


	<table style="border-collapse: collapse;margin-top: 30px;" border="1" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Atlit</th>
            <th>Cabang Olahraga</th>
            <th>Jenis Kelamin</th>
            <th>No Handphone</th>
            <th>Nomor/Kelas Pertandingan</th>
            <th>Asal Daerah Binaan</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Gol Darah</th>
            <!-- <th>Pekerjaan</th> -->
            <!-- <th>Pendidikan Terakhir</th>
            <th>Alamat email</th>
            <th>Tahun Kejuaraan</th> -->
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from barang b left join kategori k on k.id_kategori=b.kategori_barang order by b.id_barang desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode_barang']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['nama_kategori']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['nomor_kelas_pertandingan']; ?></td>
            <td><?php echo $data['asal_daerah']; ?></td>
            <td><?php echo $data['tinggi_badan']; ?></td>
            <td><?php echo $data['berat_badan']; ?></td>
            <td><?php echo $data['gol_darah']; ?></td>
            <!-- <td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['pendidikan']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['tahun']; ?></td> -->
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>