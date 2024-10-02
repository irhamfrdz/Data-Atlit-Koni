<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Inventaris Barang KONI</title>

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
            <th>Id Barang</th>
            <th>Lokasi Barang</th>
            <th>Nama Barang</th>
            <th>Merk/Spesifikasi</th>
            <th>Banyaknya</th>
            <th>Pengadaan</th>
            <th>Keterangan</th>
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from inventaris_barang order by id desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['merk_spesifikasi']; ?></td>
            <td><?php echo $data['banyaknya']; ?></td>
            <td><?php echo $data['pengadaan']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>