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
            <td align="center"><h2>Data Anggota Atlit</h2></td>

		</tr>
	</table>
	<hr>


	<table style="border-collapse: collapse;margin-top: 30px;" border="1" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>iD Atlit</th>
            <th>Nama Atlit</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Cabang Olahraga</th>
            <th>Tempat Tanggal Lahir</th>
            <th>NIK</th>
            <th>Kartu Keluarga</th>
            <th>Alamat</th>
            <th>Prestasi</th>
          
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from atlit  order by id_atlit desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id_atlit']; ?></td>
            <td><?php echo $data['nama_atlit']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['cabang_olahraga']; ?></td>
            <td><?php echo $data['ttl']; ?></td>
            <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['kartu_keluarga']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['prestasi']; ?></td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>